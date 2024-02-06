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
            $stmt->bindParam(":id", $game->getId());
            $stmt->bindParam(":user_id", $game->getUserId());
            $stmt->bindParam(":start_date", $game->getStartDate());
            $stmt->execute();
        }

        public function getGameById($id)
        {
            $query = "SELECT * FROM game WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

    }
?>