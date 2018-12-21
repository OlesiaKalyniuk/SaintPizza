<?php

/**
 * Контролер AdminCategoryController
 * Управління категоріями товарів в адмінпанелі
 */
class AdminCategoryController extends AdminBase
{

    /**
     * Action для сторінки "Управління категоріями"
     */
    public function actionIndex()
    {
        self::checkAdmin();

        $categoriesList = Category::getCategoriesListAdmin();
        require_once(ROOT . '/views/admin_category/index.php');
        return true;
    }

    /**
     * Action для сторінки "Добавити категорію"
     */
    public function actionCreate()
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            $errors = false;

            if (!isset($name) || empty($name)) {
                $errors[] = 'Заполните поля';
            }


            if ($errors == false) {
             
                // Добавляєм нову категорію
                Category::createCategory($name, $sortOrder, $status);

                // Перенаправляєм користувача на сторінку Управління категоріями
                header("Location: /admin/category");
            }
        }

        require_once(ROOT . '/views/admin_category/create.php');
        return true;
    }

    /**
     * Action для сторінки "Редагувати категорію"
     */
    public function actionUpdate($id)
    {
        self::checkAdmin();
        $category = Category::getCategoryById($id);

        if (isset($_POST['submit'])) {
    
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            Category::updateCategoryById($id, $name, $sortOrder, $status);

            header("Location: /admin/category");
        }

        require_once(ROOT . '/views/admin_category/update.php');
        return true;
    }

    /**
     * Action для страницы "Видалити  категорію"
     */
    public function actionDelete($id)
    {
        self::checkAdmin();

        if (isset($_POST['submit'])) {
          
            Category::deleteCategoryById($id);

            header("Location: /admin/category");
        }
        require_once(ROOT . '/views/admin_category/delete.php');
        return true;
    }

}
