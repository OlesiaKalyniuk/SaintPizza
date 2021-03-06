<?php

/**
 * Контролер CartController
 */
class SiteController
{

    /**
     * Action для головної  сторінки
     */
    public function actionIndex()
    {

        $categories = Category::getCategoriesList();


        $latestProducts = Product::getLatestProducts(6);

        $sliderProducts = Product::getRecommendedProducts();

        require_once(ROOT . '/views/site/index.php');
        return true;
    }

    /**
     * Action для сторінки  "Контакти"
     */
    public function actionContact()
    {

        $userEmail = false;
        $userText = false;
        $result = false;


        if (isset($_POST['submit'])) {
       
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];

            $errors = false;

            if (!User::checkEmail($userEmail)) {
                $errors[] = 'Неправильний email';
            }

            if ($errors == false) {
           
                $adminEmail = 'php.start@mail.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'Тема листа';
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }
        }
        require_once(ROOT . '/views/site/contact.php');
        return true;
    }
    
    /**
     * Action для сторінки  "Про нас "
     */
    public function actionAbout()
    {
        require_once(ROOT . '/views/site/about.php');
        return true;
    }

}
