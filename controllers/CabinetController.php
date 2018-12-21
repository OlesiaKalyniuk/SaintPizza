<?php

/**
 * Контролер CabinetController
 * Кабінет користувача
 */
class CabinetController
{

    /**
     * Action для сторінки "Кабінет користувача"
     */
    public function actionIndex()
    {
        // Отримуєм  ідентифікатор користувача  із сесії
        $userId = User::checkLogged();

        // Отримуєм  інформацію про користувача із БД
        $user = User::getUserById($userId);

        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }

    /**
     * Action для сторінки "Редагування даних  користувача"
     */
    public function actionEdit()
    {
        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkName($name)) {
                $errors[] = 'Імя не повинно бути коротше 2-х символів';
            }
            if (!User::checkPassword($password)) {
                $errors[] = 'Пароль не повинен бути  коротше  6-ти символів';
            }

            if ($errors == false) {

                $result = User::edit($userId, $name, $password);
            }
        }
        require_once(ROOT . '/views/cabinet/edit.php');
        return true;
    }

}
