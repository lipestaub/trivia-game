<?php
    require_once __DIR__ . '/../models/User.php';
    class UserController
    {
        public function signInPage()
        {
            require_once __DIR__ . '/../views/signIn.php';
        }

        public function signUpPage()
        {
            require_once __DIR__ . '/../views/signUp.php';
        }

        public function validateUsernameAndPassword()
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new User();
            $user = $userModel->getUserByUsernameAndPassword($username, $password);

            if (count($user) >= 1) {
                header('Location: /game');
            }
            else {
                header('Location: /sign-in');
            }

            exit();
        }

        public function createUser()
        {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $userModel = new User();

            if (count($userModel->getUserByUsername($username)) <= 0) {
                $userModel->createUser(new User(null, $username, $password));

                header('Location: /sign-in');
            }
            else {
                header('Location: /sign-up');
            }

            exit();
        }
    }
?>