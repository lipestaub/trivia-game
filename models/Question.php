<?php 
    require_once __DIR__ . "/../DAL/QuestionDAO.php";

    class Question
    {
        private ?int $id;
        private ?string $type;
        private ?string $difficulty;
        private ?string $category;
        private ?string $text;
        private ?string $correct_answer;
        private ?string $incorrect_answers;

        public function __construct(
            ?int $id = null,
            ?string $type = null,
            ?string $difficulty = null,
            ?string $category = null,
            ?string $text = null,
            ?string $correct_answer = null,
            ?string $incorrect_answers = null
        )
        {
            $this->id                = $id;
            $this->type              = $type;
            $this->difficulty        = $difficulty;
            $this->category          = $category;
            $this->text              = $text;
            $this->correct_answer   = $correct_answer;
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

        public function getCorrectAnswer()
        {
            return $this->correct_answer;
        }

        public function getIncorrectAnswers()
        {
            return $this->incorrect_answers;
        }

        public function createQuestion(self $question)
        {
            $questionDAO = new QuestionDAO();
            $questionDAO->createQuestion($question);
        }

        public function getQuestionById(int $id)
        {
            $questionDAO = new QuestionDAO();
            $question = $questionDAO->getQuestionById($id);

            return new self(
                $question['id'],
                $question['type'],
                $question['difficulty'],
                $question['category'],
                $question['text'],
                $question['correct_answer'],
                $question['incorrect_answers']
            );
        }

        public function getQuestion()
        {
            $questionDAO = new QuestionDAO();
            $question = $questionDAO->getQuestion();
            
            return new self(
                $question['id'],
                $question['type'],
                $question['difficulty'],
                $question['category'],
                $question['text'],
                $question['correct_answer'],
                $question['incorrect_answers']
            );
        }

        public function getLastQuestion()
        {
            $questionDAO = new QuestionDAO();
            $question = $questionDAO->getLastQuestion();

            return new self(
                $question['id'],
                $question['type'],
                $question['difficulty'],
                $question['category'],
                $question['text'],
                $question['correct_answer'],
                $question['incorrect_answers']
            );
        }
    }
?>