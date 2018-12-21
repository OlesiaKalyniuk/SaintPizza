<?php include ROOT . '/views/layouts/header_admin.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <br/>

            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/admin">Адмінпанель</a></li>
                    <li><a href="/admin/order">Управління заказами</a></li>
                    <li class="active">Видалити заказ</li>
                </ol>
            </div>


            <h4>Видалити заказ #<?php echo $id; ?></h4>


            <p>Ви дійсно хочете видалити цей  заказ?</p>

            <form method="post">
                <input type="submit" name="submit" value="Видалити" />
            </form>

        </div>
    </div>
</section>

 