<?php
    require_once __DIR__ . '/../services/RequestOpenTriviaDatabaseAPI.php';
    require_once __DIR__ . '/../models/Question.php';

    class GameController
    {
        public function gamePage()
        {
            $requestOpenTriviaDatabaseAPI = new RequestOpenTriviaDatabaseAPI();
            $question = $requestOpenTriviaDatabaseAPI->getResponse();

            if ($question !== null) {
                $question = new Question(
                    null,
                    $question['type'],
                    $question['difficulty'],
                    $question['category'],
                    $question['question'],
                    $question['correct_answer'],
                    json_encode($question['incorrect_answers'])
                );
            }
            else {
                $questionModel = new Question();
                $question = $questionModel->getQuestion();
            }
            
            require_once __DIR__ . '/../views/game.php';
        }

        public function resultsPage()
        {
            require_once __DIR__ . '/../views/results.php';
        }

        public function saveAnswer()
        {
            
        }
    }
?>