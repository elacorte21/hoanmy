<!-- Footer -->
    <!--<div class="footer-cta">
        <div class="container-fluid">
            <div class="row">
                <div class="footer-box-cta text-light col-md-4">
                    <img src="assets/images/icons/notif.png" alt="">
                    <p><strong>(028) 3995 9860</strong>
                        <br>
                        (Vietnam Only)</p>
                    <p>Emergencies - Appointments - Ambulance</p>
                </div>
                <div class="footer-box-cta text-light col-md-4">
                    <img src="assets/images/icons/phone.png" alt="">
                    <p><strong>Call Hoan My</strong></p>
                    <p>(028) 3820 6001</p>
                </div>
                <div class="footer-box-cta text-light col-md-4">
                    <img src="assets/images/icons/envelope.png" alt="">
                    <p><strong>Subscribe to Our Newsletter</strong></p>
                    <p>Sign Up Now</p>
                </div>
            </div>
        </div>
    </div>-->

    <footer>
        <div class="container">
            <div class="row mb-4">
                <div class="col-lg-3 col-md-4">
                    <p><strong>HOAN MY MEDICAL CORPORATION</strong></p>
                    <p>
						Level 11, Friendship Tower
                        <br>
						31 Le Duan Street
                        <br>
						Ben Nghe Ward, District 1
                        <br>
						Ho Chi Minh City
                    </p>
                    <div class="footer-item-content-info">
                        <p><strong>T:</strong> (028) 3820 6001</p>
                        <p><strong>E:</strong> info@hoanmy.com</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-5">
                    <ul>
                        <li><a href="<?php echo $about_url ?>">ABOUT US</a></li>
                        <!--<li><a href="<?php echo $package_program_url ?>">PACKAGES & PROGRAMMES</a></li>-->
                        <li><a href="<?php echo $network_url ?>">NETWORK</a></li>
                        <li><a href="<?php echo $serving_community_url ?>">COMMUNITY</a></li>
                        <li><a href="<?php echo $news_url ?>">NEWS</a></li>
                        <li><a href="<?php echo $privacy_policy_url ?>">PRIVACY POLICY</a></li>
                        <li><a href="<?php echo $contact_url ?>">CONTACT US</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-3">
                    <ul>
<!--
                        <li><a href="<?php echo $news_url ?>">NEWS</a></li>
                        <li><a href="<?php echo $privacy_policy_url ?>">PRIVACY POLICY</a></li>
                        <li><a href="<?php echo $contact_url ?>">CONTACT US</a></li>
-->
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-6">
                    <div class="footer-item-content">
                        <div class="footer-item-content-socmed">
                            <p><strong>CONNECT WITH US</strong></p>
                            <ul>
                                <li><a href="https://www.facebook.com/TapDoanYKhoaHoanMy/"><img src="assets/images/icon-fb.svg" alt=""></a></li>
                                <li><a href="https://www.youtube.com/c/T%E1%BA%ADp%C4%91o%C3%A0nYKhoaHo%C3%A0nM%E1%BB%B9ykhoahoanmy"><img src="assets/images/icon-yt.svg" alt=""></a></li>
                            </ul>
                            <p><a href="#carewithheart">#carewithheart</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-right">
                    <a href="<?php echo $home_url ?>">
                        <img src="assets/images/logo-hoanmy-w.svg" alt="">
                    </a>
                    <p class="text-copyright">Copyright 2020 &copy; Hoan My Corporation</p>
                </div>
            </div>
        </div>
    </footer>

    <!--<script src="assets/plugins/jquery/jquery-3.2.1.slim.min.js"></script>-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="assets/plugins/cycle/jquery.cycle2.js"></script>
    <script src="assets/plugins/cycle/jquery.cycle2.shuffle.js"></script>
    <script src="assets/plugins/cycle/jquery.easing.1.3.js"></script>
    <script src="https://kit.fontawesome.com/55a00b5d03.js" crossorigin="anonymous"></script>
    <script src="assets/plugins/datepicker/bootstrap-datepicker.min.js"></script>
    <script src="assets/index.js?v5.2"></script>
    <script src="assets/plugins/scroll/scroll.js"></script>

    <?php if(strpos($_SERVER['PHP_SELF'],'about.php') !== false) { ?>
        <script src="assets/plugins/wow/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    <?php } ?>
    <?php if(strpos($_SERVER['PHP_SELF'],'achievements.php') !== false) { ?>
        <script src="assets/plugins/wow/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    <?php } ?>
    <?php if(strpos($_SERVER['PHP_SELF'],'serving-community.php') !== false) { ?>
        <script src="assets/plugins/wow/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
    <?php } ?>
    