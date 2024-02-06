<?php
    class QuestionDAO
    {

        private $db;

        public function __construct()
        {
            $this->db = Connection::getConnection();
        }

        public function createQuestion(Question $question)
        {
            $query = "INSERT INTO question VALUES (:id, :type, :difficulty, :category, :text, :correct_answer, :incorrect_answer);";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $question->getId());
            $stmt->bindParam(":type", $question->getType());
            $stmt->bindParam(":difficulty", $question->getDifficulty());
            $stmt->bindParam(":category", $question->getCategory());
            $stmt->bindParam(":text", $question->getText());
            $stmt->bindParam(":correct_answer", $question->getCorrectAnswers());
            $stmt->bindParam(":icorrect_answer", $question->getIncorrectAnswers());
            $stmt->execute();
        }

        public function getQuestionById($id)
        {
            $query = "SELECT *  FROM question WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function getQuestion()
        {
            $query = "SELECT * FROM question ORDER BY RANDOM() LIMIT 1;";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
        }
    }
?>