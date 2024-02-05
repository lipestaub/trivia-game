<?php 
    class Game
    {
        private int $id;
        private int $user_id;
        private DateTime $start_date;

        public function __construct($id, $user_id, $start_date)
        {
            $this->id         = $id;
            $this->user_id    = $user_id;
            $this->start_date = $start_date;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getUserId()
        {
            return $this->user_id;
        }

        public function getStartDate()
        {
            return $this->start_date;
        }
    }
?>