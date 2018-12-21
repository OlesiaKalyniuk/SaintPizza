<?php include ROOT . '/views/layouts/header.php'; ?>


   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-100" src="/template/media/slider.jpg" alt="First slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="/template/media/slider_2.jpg" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                      </div>
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="/template/media/slider_3.jpg" alt="Third slide">
                       <div class="carousel-caption d-none d-md-block">
                        <h5>...</h5>
                        <p>...</p>
                      </div>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>

                <br>
                <br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem): ?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/category/<?php echo $categoryItem['id']; ?>">
                                            <?php echo $categoryItem['name']; ?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                   
                    <?php foreach ($latestProducts as $product): ?>
                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="<?php echo Product::getImage($product['id']); ?>" alt="" />
                                        <h2 class="product_price"><?php echo $product['price']; ?> грн</h2>
                                        <a class="product_name" href="/product/<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                        <br>
                                        <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $product['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                    </div>
                                    <?php if ($product['is_new']): ?>
                                        <img src="/template/images/home/new.png" class="new" alt="" />
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>


                </div><!--features_items-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">Рекомендовані товари</h2>
                    
                    <div class="cycle-slideshow" 
                         data-cycle-fx=carousel
                         data-cycle-timeout=5000
                         data-cycle-carousel-visible=3
                         data-cycle-carousel-fluid=true
                         data-cycle-slides="div.item"
                         data-cycle-prev="#prev"
                         data-cycle-next="#next"
                         >                        
                             <?php foreach ($sliderProducts as $sliderItem): ?>
                            <div class="item">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="<?php echo Product::getImage($sliderItem['id']); ?>" alt="" />
                                            <h2 class="product_price"><?php echo $sliderItem['price']; ?> грн</h2>
                                            <a class="product_name" href="/product/<?php echo $sliderItem['id']; ?>">
                                                <?php echo $sliderItem['name']; ?>
                                            </a>
                                            <br>
                                            <a href="#" class="btn btn-default add-to-cart" data-id="<?php echo $sliderItem['id']; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a>
                                        </div>
                                        <?php if ($sliderItem['is_new']): ?>
                                            <img src="/template/images/home/new.png" class="new" alt="" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <a class="left recommended-item-control" id="prev" href="#recommended-item-carousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="right recommended-item-control" id="next"  href="#recommended-item-carousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>
            </div><!--/recommended_items-->

        </div>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>