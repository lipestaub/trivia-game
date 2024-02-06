<?php
    class UserController
    {
        public function signInPage()
        {
            header('Location: ../views/signIn.php');
            exit();
        }

        public function validateUsernameAndPassword()
        {
            var_dump($_POST);
        }

        public function signUpPage()
        {
            header('Location: ../views/signUp.php');
            exit();
        }

        public function createUser()
        {

        }
    }
?>