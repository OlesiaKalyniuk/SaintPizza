<?php

/**
 * Контролер CartController
 * Корзина
 */
class CartController
{

    /**
     * Action для добавлення товара в корзину синхронним запитом<br/>
     */
    public function actionAdd($id)
    {
        // Добавляєм товар в корзину
        Cart::addProduct($id);

        // Вертаєм користувача на сторінку з якої він прийшов 
        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    /**
     * Action для добавлення товара в корзину за допомогою асинхронного запита (ajax)
     */
    public function actionAddAjax($id)
    {
        // Добавляєм товар в корзину і виводим  результат: кількість товарів в корзині
        echo Cart::addProduct($id);
        return true;
    }
    
    public function actionDelete($id)
    {
        Cart::deleteProduct($id);
        header("Location: /cart");
    }

    /**
     * Action для сторінки "Корзина"
     */
    public function actionIndex()
    {
        // Список категорій для лівого меню
        $categories = Category::getCategoriesList();

        $productsInCart = Cart::getProducts();

        if ($productsInCart) {
          
            $productsIds = array_keys($productsInCart);

            $products = Product::getProdustsByIds($productsIds);

            $totalPrice = Cart::getTotalPrice($products);
        }

        require_once(ROOT . '/views/cart/index.php');
        return true;
    }

    /**
     * Action для сторінки  "Оформлення покупки"
     */
    public function actionCheckout()
    {      
        $productsInCart = Cart::getProducts();

        // Якщо  товарів нема, відправляєм користувачів шукати товари на головну авную
        if ($productsInCart == false) {
            header("Location: /");
        }

        $categories = Category::getCategoriesList();

        // Находим загальну вартість 
        $productsIds = array_keys($productsInCart);
        $products = Product::getProdustsByIds($productsIds);
        $totalPrice = Cart::getTotalPrice($products);

        $totalQuantity = Cart::countItems();

        $userName = false;
        $userPhone = false;
        $userComment = false;


        $result = false;

        // Провеіряєм чи є користувач гостем
        if (!User::isGuest()) {
            // якщо користувач не гість
            // Отримуєм  інформацію про користувача із БД
            $userId = User::checkLogged();
            $user = User::getUserById($userId);
            $userName = $user['name'];
        } else {
            
            $userId = false;
        }

        if (isset($_POST['submit'])) {
      
            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];


            $errors = false;

            if (!User::checkName($userName)) {
                $errors[] = 'Неправильне імя';
            }
            if (!User::checkPhone($userPhone)) {
                $errors[] = 'Неправильний телефон';
            }


            if ($errors == false) {
                // якщо помилок нема 
                // Зберігаєм  заказ в бд
                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);

                if ($result) {
                    // якщо  заказ успішно збережений 
                    // Сповіщаєм адміністратора про новий  заказ по пошті                
                    $adminEmail = 'php.start@mail.ru';
                    $message = '<a href="http://digital-mafia.net/admin/orders">Список заказов</a>';
                    $subject = 'Новий заказ!';
                    mail($adminEmail, $subject, $message);

                    // Очищаєм корзину
                    Cart::clear();
                }
            }
        }

        require_once(ROOT . '/views/cart/checkout.php');
        return true;
    }

}
