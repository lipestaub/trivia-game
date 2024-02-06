<?php 
    class Question
    {
        private int $id;
        private string $type;
        private string $difficulty;
        private string $category;
        private string $text;
        private string $correct_answers;
        private string $incorrect_answers;

        public function __construct(?int $id = null, string $type, string $difficulty, string $category, string $text, string $correct_answers, string $incorrect_answers)
        {
            $this->id                = $id;
            $this->type              = $type;
            $this->difficulty        = $difficulty;
            $this->category          = $category;
            $this->text              = $text;
            $this->correct_answers   = $correct_answers;
            $this->incorrect_answers = $incorrect_answers;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getType()
        {
            return $this->type;
        }

        public function getDifficulty()
        {
            return $this->difficulty;
        }

        public function getCategory()
        {
            return $this->category;
        }

        public function getText()
        {
            return $this->text;
        }

        public function getCorrectAnswers()
        {
            return $this->correct_answers;
        }

        public function getIncorrectAnswers()
        {
            return $this->incorrect_answers;
        }
    }
?>