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

        public function signOut()
        {
            session_start();
            unset($_SESSION);

            if (!isset($_SESSION['user_id'])) {
                header('Location: /sign-in');
                exit();
            }
        }

        public function validateUsernameAndPassword()
        {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $userModel = new User();
            $user = $userModel->getUserByUsernameAndPassword($username, $password);

            if ($user->getId() !== null) {
                session_start();

                $_SESSION['user_id'] = $user->getId();
                $_SESSION['username'] = $user->getUsername();

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
            $password = md5($_POST['password']);

            $userModel = new User();
            $user = $userModel->getUserByUsername($username);

            if ($user->getId() === null) {
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