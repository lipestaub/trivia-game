<?php 
    require_once __DIR__ . "/../DAL/GameQuestionsDAO.php";

    class GameQuestions
    {
        private ?int $id;
        private int $game_id;
        private int $question_id;
        private string $user_answer;
        private bool $is_correct;

        public function __construct(?int $id = null, int $game_id, int $question_id, string $user_answer, bool $is_correct)
        {
            $this->id          = $id;
            $this->game_id     = $game_id;
            $this->question_id = $question_id;
            $this->user_answer = $user_answer;
            $this->is_correct  = $is_correct;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getGameId()
        {
            return $this->game_id;
        }

        public function getQuestionId()
        {
            return $this->question_id;
        }

        public function getUserAnswer()
        {
            return $this->user_answer;
        }

        public function getIsCorrect()
        {
            return $this->is_correct;
        }

        public function createGameQuestions(self $gameQuestions)
        {
            $gameQuestionsDao = new GameQuestionsDAO();
            $gameQuestionsDao->createGameQuestions($gameQuestions);
        }

        public function getGameQuestionsByGameId(int $gameId)
        {
            $gameQuestionsDao = new GameQuestionsDAO();
            $gameQuestionsDao->getGameQuestionsByGameId($gameId);
        }
    }
?>