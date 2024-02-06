<?php
    class UserController
    {
        public function signInPage()
        {
            require_once __DIR__ . '/../views/signIn.php';
        }

        public function validateUsernameAndPassword()
        {
            var_dump($_POST);
        }

        public function signUpPage()
        {
            require_once __DIR__ . '/../views/signUp.php';
        }

        public function createUser()
        {

        }
    }
?>