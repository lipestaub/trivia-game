<?php
    require_once __DIR__ . '/../services/RequestOpenTriviaDatabaseAPI.php';
    require_once __DIR__ . '/../models/Question.php';
    require_once __DIR__ . '/../models/Game.php';
    require_once __DIR__ . '/../models/GameQuestions.php';

    class GameController
    {
        public function gamePage()
        {
            session_start();

            if (!isset($_SESSION['user_id'])) {
                header('Location: /sign-in');
                exit();
            }

            $userId = $_SESSION['user_id'];

            if (!isset($_SESSION['game_id'])) {
                $gameModel = new Game();

                $gameModel->createGame(new Game(null, $userId, null));
                $game = $gameModel->getLastGameByUserId($userId);

                $_SESSION['game_id'] = $game->getId();
            }

            $requestOpenTriviaDatabaseAPI = new RequestOpenTriviaDatabaseAPI();
            $openTriviaQuestion = $requestOpenTriviaDatabaseAPI->getResponse();

            $questionModel = new Question();

            if ($openTriviaQuestion !== null) {
                $question = new Question(
                    null,
                    $openTriviaQuestion['type'],
                    $openTriviaQuestion['difficulty'],
                    $openTriviaQuestion['category'],
                    $openTriviaQuestion['question'],
                    $openTriviaQuestion['correct_answer'],
                    json_encode($openTriviaQuestion['incorrect_answers'])
                );

                $questionModel->createQuestion($question);
                $question = $questionModel->getLastQuestion();
            }
            else {
                $question = $questionModel->getQuestion();
            }

            $counter = isset($_SESSION['counter']) ? $_SESSION['counter'] : 1;
            $questionId = $question->getId();
            $username = $_SESSION['username'];
            $gameId = $_SESSION['game_id'];

            $answers = array_merge(explode(',', str_replace(['[', ']', '"'], '', $question->getIncorrectAnswers())), [$question->getCorrectAnswer()]);
            shuffle($answers);
            
            require_once __DIR__ . '/../views/game.php';
        }

        public function resultsPage()
        {  
            session_start();

            $gameQuestionModel = new GameQuestions();
            $correctAnswersCount = $gameQuestionModel->getCorrectAnswersCountByGameId($_SESSION['game_id']);
            
            unset($_SESSION['game_id']);
            unset($_SESSION['counter']);

            require_once __DIR__ . '/../views/results.php';
        }

        public function saveAnswer()
        {
            session_start();
            
            if (!isset($_SESSION['user_id'])) {
                header('Location: /sign-in');
                exit();
            }

            $userAnswer = $_POST['answer'];
            $questionId = $_POST['question_id'];
            $gameId = $_POST['game_id'];

            $questionModel = new Question();
            $question = $questionModel->getQuestionById($questionId);

            $isCorrect = $userAnswer === $question->getCorrectAnswer();

            $gameQuestionModel = new GameQuestions();
            $gameQuestionModel->createGameQuestions(new GameQuestions(null, $gameId, $questionId, $userAnswer, $isCorrect));

            if (!isset($_SESSION['counter'])) {
                $_SESSION['counter'] = 1;
            }

            if ($_SESSION['counter'] < 5) {
                $_SESSION['counter']++;

                header('Location: /game');
                exit();
            }
            else {
                header('Location: /results');
                exit();
            }

        }
    }
?>