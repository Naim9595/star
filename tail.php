<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<style>

</style>

<footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row wow-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="footer_widget">
                            <div class="address_details text-center">
                                <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">와이즈빌</h3>
                                <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".5s">The event regularly attracts a diverse range of attendees from around the world.</p>
                                <a href="#" class="boxed-btn3 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">견적문의</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center wow fadeInDown" data-wow-duration="1s" data-wow-delay=".5s">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
</footer>

        <script src="<?php echo G5_THEME_URL?>/assets/js/jquery.js"></script>
        <script src="<?php echo G5_THEME_URL?>/assets/js/bootstrap.min.js"></script>
        <script src="<?php echo G5_THEME_URL?>/assets/js/plugins.js"></script>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
        <script src="<?php echo G5_THEME_URL?>/assets/js/init.js"></script>
        <script src="<?php echo G5_THEME_URL ?>/assets/js/typed.js"></script>

<script>
    $(function () {
        $(window).resize(function () {
            if ($(document).width() < 768) {
                // 로고 이미지
                $('.navbar-header > a.logo').html('<img src="<?php echo G5_THEME_URL?>/assets/img/logo/logo-w-01.png" alt="logo">'); 
            } else {
                // 로고 이미지
                $('.navbar-header > a.logo').html('<img src="<?php echo G5_THEME_URL?>/assets/img/logo/logo-01.png" alt="logo">');
            }
        });
        
        $('.navbar-toggle').on('click', function () {
            if ( $('.dropdown-visible').is(':hidden') ){
            console.log("fdfdfdsf");
                $('.navbar-default').css('background-color', 'rgba(0,0,0,0.85)');
            }
            else{
                console.log("cccc");
                $('.navbar-default').css('background-color', '#111');
            }

        });
    });
</script> 하이루하이루하이루하이루
