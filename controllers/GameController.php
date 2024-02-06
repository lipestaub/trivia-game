<?php
    require_once __DIR__ . '/../services/RequestOpenTriviaDatabaseAPI.php';
    require_once __DIR__ . '/../models/Question.php';

    class GameController
    {
        public function gamePage()
        {
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

            $answers = array_merge(explode(',', str_replace(['[', ']', '"'], '', $question->getIncorrectAnswers())), [$question->getCorrectAnswers()]);
            shuffle($answers);
            
            require_once __DIR__ . '/../views/game.php';
        }

        public function resultsPage()
        {
            require_once __DIR__ . '/../views/results.php';
        }

        public function saveAnswer()
        {
            session_start();

            
        }
    }
?>