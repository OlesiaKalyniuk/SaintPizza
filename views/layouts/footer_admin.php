    <div class="page-buffer"></div>
</div>

<footer id="footer">
    <!--BEGIN LEFT SIDE MENU-->
    <section class="left-footer-info">
        <ul>
            <li>
                <img src="/template/media/logo.png" title="Saint Pizza" alt="logo-img">
            </li>
            <li>
                © 2018  Saints Pizza Україна
            </li>
            <li>
                <a href="#" title="Twitter" class="media-icons">
                    <i class="fab fa-twitter fa-2x" alt="Twitter-img"></i>
                </a>
                <a href="#" title="Facebook" class="media-icons">
                    <i class="fab fa-facebook-square fa-2x" alt="Facebook-img"></i>
                </a>
                <a href="#" title="Instagram" class="media-icons">
                    <i class="fab fa-instagram fa-2x" alt="Instagram-img"></i>
                </a>
            </li>
        </ul>
    </section>
    <!--END LEFT SIDE MENU-->
    <!--BEGIN RIGHT SIDE MENU-->
    <section class="right-footer-info">
        <!--BEGIN FOOTER NAVBAR MENU-->
        <nav class="bottom-menu">
            <h3 class="footer-menu-title">
                Saint Pizza
            </h3>
            <ul>
                <li>
                    <a href="#">
                        Головна
                    </a>
                </li>
                <li>
                    <a href="#">
                        Меню
                    </a>
                </li>
                <li>
                    <a href="#">
                        Про нас
                    </a>
                </li>
            </ul>
        </nav>
        <!--END FOOTER NAVBAR MENU-->
        <!--BEGIN FOOTER CONTACT MENU-->
        <address class="contacts-menu">
            <h3 class="footer-menu-title">
                Контакти
            </h3>
            <ul>
                <li>
                    saintpizza@gmail.com
                </li>
                <li>
                    +38(096) 580 76 15
                </li>
            </ul>
        </address>
        <!--END FOOTER CONTACT MENU-->
    </section>
    <!--E RIGHT SIDE MENU-->
</footer>



<script src="/template/js/jquery.js"></script>
<script src="/template/js/jquery.cycle2.min.js"></script>
<script src="/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/template/js/bootstrap.min.js"></script>
<script src="/template/js/jquery.scrollUp.min.js"></script>
<script src="/template/js/price-range.js"></script>
<script src="/template/js/jquery.prettyPhoto.js"></script>
<script src="/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>

