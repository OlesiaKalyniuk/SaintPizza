<!DOCTYPE html>
<html lang="en">
    <head>
   
        <meta charset="utf-8">
        <link rel="shortcut icon" href="/template/images/ico/favicon.ico">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Головна</title>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       


        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link href="/template/css/main.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        <link href="/template/css/bootstrap.min.css" rel="stylesheet">
        <link href="/template/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link href="/template/css/prettyPhoto.css" rel="stylesheet">
        <link href="/template/css/price-range.css" rel="stylesheet">
        <link href="/template/css/animate.css" rel="stylesheet">
     
        <link href="/template/css/responsive.css" rel="stylesheet">
        <link href="/template/css/main.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/css/main.css">

    </head><!--/head-->

    <body>
        <div class="page-wrapper">
 
                <div class="header-bottom"><!--header-bottom-->
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="navbar-header">
                                <div class="mainmenu pull-left">
                                    <ul class="nav navbar-nav collapse navbar-collapse">
                                        <li class="logo"><img src="/template/media/logo.png"></li>
                                        <li><a href="/">Головна</a></li>
                                        <li class="dropdown"><a href="#">Меню<i class="fa fa-angle-down"></i></a>
                                            <ul role="menu" class="sub-menu">
                                                <li><a href="/catalog/">Каталог</a></li>
                                                <li><a href="/cart/">Корзина</a></li> 
                                            </ul>
                                        </li>
                                        <li><a href="/about/">Про нас</a></li>
                                        <li><a href="/contacts/">Контакти</a></li>
                        
                                        
                                        <?php if (User::isGuest()): ?>                                        
                                            <li class="login"><a href="/user/login/"><i class="fa fa-user"></i> Вхід</a></li>
                                            <li><a href="/user/register/"><i class="fa fa-lock"></i> Реєстрація</a></li>
                                        <?php else: ?>
                                            <li class="login"><a href="/cabinet/"><i class="fa fa-user"></i> Акаунт</a></li>
                                            <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Вихід</a></li>
                                        <?php endif; ?>
                                        <li><a style="float: right" href="/cart" class="cart">
                                                 <i class="fas fa-shopping-cart"></i> 
                                                (<span id="cart-count"><?php echo Cart::countItems(); ?></span>)
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/header-bottom-->

            </header><!--/header-->