<?php
    class UserDAO
    {
        private $db;

        public function __construct()
        {
            $this->db = Connection::getConnection();
        }

        public function createUser(User $user)
        {
            $query = "INSERT INTO user VALUES (:username, :password);";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":username", $user->getUsername());
            $stmt->bindParam(":password", $user->getPassword());
            $stmt->execute();
        }

        public function getUserById(int $id)
        {
            $query = "SELECT * FROM user WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();
        }

        public function getUserByUsernameAndPassword(string $username, string $password)
        {
            $query = "SELECT * FROM user WHERE username = :username AND password = :password;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute();
        }

        public function getUserByUsername(string $username)
        {
            $query = "SELECT * FROM user WHERE username = :username;";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->execute();
        }
    }

?>

