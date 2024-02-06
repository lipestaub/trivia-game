<?php
    class UserDAO
    {
        private $db;

        public function __construct()
        {
            $this->db = Connection::getConnection();
        }

        public function createUser($username, $password)
        {
            $query = "INSERT INTO user (:username, password) VALUES (:username, :password)";
            $stmt = $this->db->prepare($query);
            $stmt->bindParam(":username", $username);
            $stmt->bindParam(":password", $password);
            $stmt->execute([$username, $password]);
        }

        public function getUserById($userId)
        {
            $query = "SELECT *  FROM user WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->execute([$userId]);
        }

        public function updateUser($userId, $newUsername, $newPassword)
        {

        }

        public function deleteUser()
        {

        }
    }

?>

