<?php
    require_once __DIR__ . '/../config/Connect.php';
    
    class QuestionDAO
    {
        private $db;

        public function __construct()
        {
            $this->db = Connection::getConnection();
        }

        public function createQuestion(Question $question)
        {
            $query = "INSERT INTO question (type, difficulty, category, text, correct_answer, incorrect_answers) VALUES (:type, :difficulty, :category, :text, :correct_answer, :incorrect_answers);";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":type", $question->getType());
            $stmt->bindValue(":difficulty", $question->getDifficulty());
            $stmt->bindValue(":category", $question->getCategory());
            $stmt->bindValue(":text", $question->getText());
            $stmt->bindValue(":correct_answer", $question->getCorrectAnswers());
            $stmt->bindValue(":incorrect_answers", $question->getIncorrectAnswers());
            $stmt->execute();
        }

        public function getQuestionById($id)
        {
            $query = "SELECT *  FROM question WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }

        public function getQuestion()
        {
            $query = "SELECT * FROM question ORDER BY RANDOM() LIMIT 1;";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll()[0];
        }

        public function getLastQuestion()
        {
            $query = "SELECT * FROM question ORDER BY id DESC LIMIT 1;";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll()[0];
        }
    }
?>