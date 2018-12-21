<?php

/**
 * Контролер UserController
 */
class UserController
{
    /**
     * Action для сторінки  "Реєстрація"
     */
    public function actionRegister()
    {
        $name = '';
        $email = '';
        $password = '';
        // $address = false;
        $result = false;


        if (isset($_POST['submit'])) {
       
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            // $address = $_POST['address'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Імя не повинно бути коротше 2-х символів';
            }
            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильний email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не повинен бути коротше 6-ти символів';
            }
           
            if ($errors == false) {
            
                // Реєструєм користувача
                $result = User::register($name, $email, $password);
            }
        }

        require_once(ROOT . '/views/user/register.php');
        return true;
    }
    
    /**
     * Action для сторінки  "Вхід на сайт"
     */
    public function actionLogin()
    {

        $email = false;
        $password = false;
        // $address = false;
        if (isset($_POST['submit'])) {

            $email = $_POST['email'];
            $password = $_POST['password'];
            // $address = $_POST['address'];
            $errors = false;


            if (!User::checkEmail($email)) {
                $errors[] = 'Неправильний email';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не повинен бути коротше 6-ти символів';
            }

            // Провіряєм  чи існує користувачсуществует ли пользователь
            $userId = User::checkUserData($email, $password);

            if ($userId == false) {
                
                $errors[] = 'Неправильні дані для входу на сайт';
            } else {
                // якщо дані правильні, запамятовуєм користувача в сесію
                User::auth($userId);
 
                header("Location: /cabinet");
            }
        }

        require_once(ROOT . '/views/user/login.php');
        return true;
    }

    /**
     * Видаляєм  дані про користувача із сесії 
     */
    public function actionLogout()
    {
        
        session_start();
        
        unset($_SESSION["user"]);
        
        header("Location: /");
    }

}
