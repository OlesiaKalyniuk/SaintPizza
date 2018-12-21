<?php

/**
 * Контролер AdminOrderController
 * Управління заказами в адмінпанелі
 */
class AdminOrderController extends AdminBase
{

    /**
     * Action для сторінки "Управління заказами"
     */
    public function actionIndex()
    {
        self::checkAdmin();

        $ordersList = Order::getOrdersList();

        require_once(ROOT . '/views/admin_order/index.php');
        return true;
    }

    /**
     * Action для сторінки "Редагування заказа"
     */
    public function actionUpdate($id)
    {
        self::checkAdmin();

        // Отримуєм дані по конкретному заказі
        $order = Order::getOrderById($id);


        if (isset($_POST['submit'])) {

            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];
            $date = $_POST['date'];
            $status = $_POST['status'];

            Order::updateOrderById($id, $userName, $userPhone, $userComment, $date, $status);


            header("Location: /admin/order/view/$id");
        }

        require_once(ROOT . '/views/admin_order/update.php');
        return true;
    }

    /**
     * Action для сторінки "Перегляд заказа"
     */
    public function actionView($id)
    {
        self::checkAdmin();

        $order = Order::getOrderById($id);

        $productsQuantity = json_decode($order['products'], true);

        $productsIds = array_keys($productsQuantity);

        $products = Product::getProdustsByIds($productsIds);

        require_once(ROOT . '/views/admin_order/view.php');
        return true;
    }

    /**
     * Action для сторінки  "Видалити  заказ"
     */
    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
        
            Order::deleteOrderById($id);

            header("Location: /admin/order");
        }
        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }

}
