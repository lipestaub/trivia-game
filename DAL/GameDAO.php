<?php
    class GameDAO
    {
        private $db;

        public function __construct()
        {
            $this->db = Connection::getConnection();
        }

        public function createGame(Game $game)
        {
            $query = "INSERT INTO game VALUES (:id, :user_id, :start_date);";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":id", $game->getId());
            $stmt->bindValue(":user_id", $game->getUserId());
            $stmt->bindValue(":start_date", $game->getStartDate());
            $stmt->execute();
        }

        public function getGameById(int $id)
        {
            $query = "SELECT * FROM game WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }

        public function getGames()
        {
            $query = "SELECT * FROM game;";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }

        public function getGamesById(int $id)
        {
            $query = "SELECT * FROM game WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll();
        }
    }
?>