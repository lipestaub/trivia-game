<?php 
    class User
    {
        private int $id;
        private string $username;
        private string $password;

        public function __construct(?int $id = null, string $username, string $password)
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
    }
?>