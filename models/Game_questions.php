<?php 

class game_questions
{
    private int $id;
    private int $game_id;
    private int $question_id;
    private string $user_answer;
    private bool $is_correct;

    private function __construct($id, $game_id, $question_id, $user_answer, $is_correct)
    {
        $this->id          = $id;
        $this->game_id     = $game_id;
        $this->question_id = $question_id;
        $this->user_answer = $user_answer;
        $this->is_correct  = $is_correct;
    }

    private function getId()
    {
        return $this->id;
    }

    private function getGameId()
    {
        return $this->game_id;
    }

    private function getQuestionId()
    {
        return $this->question_id;
    }

    private function getUserAnswer()
    {
        return $this->user_answer;
    }

    private function getIsCorrect()
    {
        return $this->is_correct;
    }
}


?>
