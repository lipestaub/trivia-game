<?php
    require_once __DIR__ . "/../DAL/GameDAO.php";

    class Game
    {
        private int $id;
        private int $user_id;
        private DateTime $start_date;

        public function __construct(?int $id = null, int $user_id, DateTime $start_date)
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

        public function createGame(self $game)
        {
            $gameDAO = new GameDAO();
            $gameDAO->createGame($game);
        }

        public function getGameById(int $id)
        {
            $gameDAO = new GameDAO();
            $gameDAO->getGameById($id);
        }

        public function getGames()
        {
            $gameDAO = new GameDAO();
            $gameDAO->getGames();
        }

        public function getGamesByUserId(int $userId)
        {
            $gameDAO = new GameDAO();
            $gameDAO->getGamesByUserId($userId);
        }
    }
?>