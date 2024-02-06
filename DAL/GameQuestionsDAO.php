<?php
    class GameQuestionsDAO
    {

        private $db;

        public function __construct()
        {
            $this->db = Connection::getConnection();
        }

        public function createGameQuestions(GameQuestions $gameQuestions)
        {
            $query = "INSERT INTO game_questions VALUES (:id, :game_id, :question_id, :user_answer, :is_correct);";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $gameQuestions->getId());
            $stmt->bindParam(":game_id", $gameQuestions->getGameId());
            $stmt->bindParam(":question_id", $gameQuestions->getQuestionId());
            $stmt->bindParam(":user_answer", $gameQuestions->getUserAnswer());
            $stmt->bindParam(":is_correct", $gameQuestions->getIsCorrect());
            $stmt->execute();
        }

        public function getGameQuestionsById($id)
        {
            $query = "SELECT * FROM game_questions WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

    }
?>