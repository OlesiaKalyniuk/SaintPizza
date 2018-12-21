<?php include ROOT . '/views/layouts/header.php'; ?>
<br>
<br>
<section>
    <div class="container">
        <div class="row">

            <h3>Кабінет користувача</h3>
            <br>
            <br><br>
            <h4></h4>
            <ul>
                <li><h4>Вітаємо, <?php echo $user['name'];?>!</h4></li>
                <li><h3><a href="/cabinet/edit">Редагувати дані</a></h3></li>
                <!--<li><a href="/cabinet/history">Список покупок</a></li>-->
            </ul>
            
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>