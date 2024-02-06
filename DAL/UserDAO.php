<?php
    require_once __DIR__ . '/../config/Connect.php';
    
    class UserDAO
    {
        private $db;

        public function __construct()
        {
            $this->db = Connection::getConnection();
        }

        public function createUser(User $user)
        {
            $query = 'INSERT INTO "user" (username, password) VALUES (:username, :password);';
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(":username", $user->getUsername());
            $stmt->bindValue(":password", $user->getPassword());
            $stmt->execute();
        }

        public function getUserById(int $id)
        {
            $query = 'SELECT * FROM "user" WHERE id = :id;';
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll()[0];
        }

        public function getUserByUsernameAndPassword(string $username, string $password)
        {
            $query = 'SELECT * FROM "user" WHERE username = :username AND password = :password;';
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll()[0];
        }

        public function getUserByUsername(string $username)
        {
            $query = 'SELECT * FROM "user" WHERE username = :username;';
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            return $stmt->fetchAll()[0];
        }
    }
?>