<?php
    require_once __DIR__ . "/../DAL/GameDAO.php";

    class Game
    {
        private ?int $id;
        private ?int $user_id;
        private ?DateTime $start_date;

        public function __construct(?int $id = null, ?int $user_id = null, ?DateTime $start_date = null)
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
            $game = $gameDAO->getGameById($id);

            return new self(
                $game['id'],
                $game['user_id'],
                $game['start_date'],
            );
        }

        public function getGames()
        {
            $gameDAO = new GameDAO();
            return $gameDAO->getGames();
        }

        public function getGamesByUserId(int $userId)
        {
            $gameDAO = new GameDAO();
            return $gameDAO->getGamesByUserId($userId);
        }

        public function getLastGameByUserId(int $userId)
        {
            $gameDAO = new GameDAO();
            $game = $gameDAO->getLastGameByUserId($userId);

            return new self(
                $game['id'],
                $game['user_id'],
                $game['start_date'],
            );


        }
    }
?>