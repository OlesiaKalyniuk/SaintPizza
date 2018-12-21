<?php

/**
 * Контролер ProductController
 * Товар
 */
class ProductController
{

    /**
     * Action для сторінки перегляду  товара
     * @param integer $productId <p>id товара</p>
     */
    public function actionView($productId)
    {

        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);
        
        require_once(ROOT . '/views/product/view.php');
        return true;
    }

}
