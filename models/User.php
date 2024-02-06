<?php 
    require_once __DIR__ . "/../DAL/UserDAO.php";

    class User
    {
        private ?int $id;
        private ?string $username;
        private ?string $password;

        public function __construct(?int $id = null, ?string $username = null, ?string $password = null)
        {
            $this->id       = $id;
            $this->username = $username;
            $this->password = $password;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getUsername()
        {
            return $this->username;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function createUser(self $user)
        {
            $userDAO = new UserDAO();
            $userDAO->createUser($user);
        }

        public function getUserById(int $id)
        {
            $userDAO = new UserDAO();
            $userDAO->getUserById($id);
        }

        public function getUserByUsernameAndPassword(string $username, string $password)
        {
            $userDAO = new UserDAO();
            $userDAO->getUserByUsernameAndPassword($username, $password);
        }

        public function getUserByUsername(string $username)
        {
            $userDAO = new UserDAO();
            $userDAO->getUserByUsername($username);
        }
    }
?>