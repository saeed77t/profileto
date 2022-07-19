<?php
/**
 * Template Name: profile
 * Template Post Type: page
 *
 * @package profileto
 */


if (isset($_GET['userid'])):
    $CuserID = $_GET['userid'];
    if (isset($CuserID) && !empty($CuserID)) {

        $CuserID = intval($CuserID);
        //get user meta data
        $cuserFirstname = get_user_meta($CuserID, 'userFirstname');
        $cuserLastname = get_user_meta($CuserID, 'userLastname');
        $cuserEmail = get_user_meta($CuserID, 'userEmail');
        $cuserPhoneNumber = get_user_meta($CuserID, 'userPhoneNumber');
        $cuserOccupation = get_user_meta($CuserID, 'userOccupation');
        $cuserAge = get_user_meta($CuserID, 'userAge');
        $cuserAdress = get_user_meta($CuserID, 'userAdress');
        $cuserAbout = get_user_meta($CuserID, 'userAbout');
        $cuserImage = get_user_meta($CuserID, 'userImage');
        $cuserSocialLink1 = get_user_meta($CuserID, 'userSocialLink1');
        $cuserSocialLink2 = get_user_meta($CuserID, 'userSocialLink2');
        $cuserSocialLink3 = get_user_meta($CuserID, 'userSocialLink3');
        $cuserSocialLink4 = get_user_meta($CuserID, 'userSocialLink4');
        $cuserSocialLink5 = get_user_meta($CuserID, 'userSocialLink5');
        $cuserSocialLink6 = get_user_meta($CuserID, 'userSocialLink6');
        $cuserSocialImage1 = get_user_meta($CuserID, 'userSocialImage1');
        $cuserSocialImage2 = get_user_meta($CuserID, 'userSocialImage2');
        $cuserSocialImage3 = get_user_meta($CuserID, 'userSocialImage3');
        $cuserSocialImage4 = get_user_meta($CuserID, 'userSocialImage4');
        $cuserSocialImage5 = get_user_meta($CuserID, 'userSocialImage5');
        $cuserSocialImage6 = get_user_meta($CuserID, 'userSocialImage6');
        $cuserResume = get_user_meta($CuserID, 'userResume');


    }

    ?>

    <head>
        <base href="" target="_blank">
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <meta name="description" content="BreezyCV - Resume / CV / vCard Template"/>
        <meta name="keywords"
              content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio"/>
        <meta name="author" content="lmpixels"/>
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/css/reset.css" type="text/css">
        <link rel="stylesheet" href="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/css/bootstrap-grid.min.css"
              type="text/css">
        <link rel="stylesheet" href="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/css/animations.css"
              type="text/css">
        <link rel="stylesheet" href="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/css/perfect-scrollbar.css"
              type="text/css">
        <link rel="stylesheet" href="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/css/owl.carousel.css"
              type="text/css">
        <link rel="stylesheet" href="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/css/magnific-popup.css"
              type="text/css">
        <link rel="stylesheet" href="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/css/main.css" type="text/css">
        <style>
            ul li a {
                color: white;
            }

            ul li a:hover {
                color: #09aeea;
            }

            a {

            }
        </style>
    </head>
    <body style="direction: rtl">
    <!-- Animated Background -->
    <div class="lm-animated-bg"
         style="background-image: url(<?php echo PROFILETO_THEME_URI; ?>/assets/img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
        <div class="preloader-animation">
            <div class="preloader-spinner">
            </div>
        </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
        <div class="page-content">

            <header id="site_header" class="header mobile-menu-hide">
                <div class="header-content">
                    <div class="header-photo">

                        <?php

                        if (isset($cuserImage) && strlen($cuserImage[0]) > 5) { ?>
                            <img src="<?php echo $cuserImage[0]; ?>" alt="user image ">
                        <?php } ?>
                    </div>
                    <div class="header-titles">
                        <?php if (isset($cuserFirstname) || isset($cuserLastname)) { ?>
                        <h2><?php echo $cuserFirstname[0], ' ', $cuserLastname[0];
                            } ?></h2>
                        <?php if (isset($cuserOccupation) && strlen($cuserOccupation[0]) > 1) { ?>
                        <h4><?php echo $cuserOccupation[0];
                            } ?></h4>
                    </div>
                </div>

                <ul class="main-menu">

                    <li>
                        <a href="#about-me" class="nav-anim active">
                            <span class="menu-icon lnr lnr-user"></span>
                            <span class="link-text">درباره من</span>
                        </a>
                    </li>

                </ul>

                <div class="social-links">

                </div>
                <?php if (isset($cuserResume) && strlen($cuserResume[0]) > 5) { ?>
                    <div class="header-buttons">
                        <a href="<?php echo $cuserResume[0]; ?>" target="_blank" class="btn btn-primary">دانلود رزومه
                            من </a>
                    </div>
                <?php } ?>

            </header>

            <!-- Mobile Navigation -->
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- End Mobile Navigation -->


            <div class="content-area">
                <div class="animated-sections">

                    <!-- About Me Subpage -->
                    <section data-id="about-me" class="animated-section start-page">
                        <div class="section-content">
                            <div class="page-title">
                                <h2>درباره ی <span>من</span></h2>
                            </div>

                            <!-- Personal Information -->
                            <div class="row">
                                <?php if (isset($cuserAbout) && strlen($cuserAbout[0]) > 2) { ?>
                                    <div class="col-xs-12 col-sm-7">
                                        <p>
                                            <?php echo $cuserAbout[0]; ?>
                                        </p>
                                    </div>
                                <?php } ?>

                                <div class="col-xs-12 col-sm-5">
                                    <div class="info-list">
                                        <ul>
                                            <?php if (isset($cuserAge) && strlen($cuserAge[0]) > 1) { ?>
                                                <li>
                                                    <span class="title">سن : </span>
                                                    <span class="value"><?php echo $cuserAge[0]; ?></span>
                                                </li>
                                            <?php } ?>
                                            <?php if (isset($cuserAdress) && strlen($cuserAdress[0]) > 2) { ?>
                                                <li>
                                                    <span class="title">آدرس : </span>
                                                    <span class="value"><?php echo $cuserAdress[0]; ?></span>
                                                </li>
                                            <?php } ?>
                                            <?php if (isset($cuserEmail) && strlen($cuserEmail[0]) > 2) { ?>
                                                <li>
                                                    <span class="title">ایمیل : </span>
                                                    <span class="value"><a
                                                                href="mailto:<?php echo $cuserEmail[0]; ?>"><?php echo $cuserEmail[0]; ?></a>  </span>
                                                </li>
                                            <?php } ?>
                                            <?php if (isset($cuserPhoneNumber) && strlen($cuserPhoneNumber[0]) > 2) { ?>
                                                <li>
                                                    <span class="title">تلفن : </span>
                                                    <span class="value">

                                                        <a href="tel:<?php echo $cuserPhoneNumber[0]; ?>"><?php echo $cuserPhoneNumber[0]; ?></a></span>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Personal Information -->

                            <div class="white-space-50"></div>

                            <!-- Services -->
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="block-title">
                                        <h3>شبکه های <span>اجتماعی </span></h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row socialrow">
                                <style>
                                    .fun-fact a img {
                                    }

                                    .socialrow {
                                        width: 80% !important;
                                        margin: 0 auto;
                                    }
                                </style>

                                <?php if (isset($cuserSocialImage1) && strlen($cuserSocialImage1[0]) > 5) { ?>
                                    <div class="col-xs-12 col-sm-4 boxesocial">
                                        <div class="fun-fact gray-default">
                                            <?php if (isset($cuserSocialLink1) && strlen($cuserSocialLink1[0]) > 2) {
                                                if (str_starts_with($cuserSocialLink1[0], 'http')) {
                                                    ?>
                                                    <a href="<?php echo $cuserSocialLink1[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage1[0]; ?>"
                                                                alt="social image 1"></a>
                                                <?php } else {
                                                    ?>
                                                    <a href="https://<?php echo $cuserSocialLink1[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage1[0]; ?>"
                                                                alt="social image 1"></a>
                                                    <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                <?php } ?>


                                <?php if (isset($cuserSocialImage2) && strlen($cuserSocialImage2[0]) > 5) { ?>
                                    <div class="col-xs-12 col-sm-4 boxesocial">
                                        <div class="fun-fact gray-default">
                                            <?php if (isset($cuserSocialLink2) && strlen($cuserSocialLink2[0]) > 2) {
                                                if (str_starts_with($cuserSocialLink1[0], 'http')) {
                                                    ?>
                                                    <a href="<?php echo $cuserSocialLink2[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage2[0]; ?>"
                                                                alt="social image 1"></a>
                                                <?php } else {
                                                    ?>
                                                    <a href="https://<?php echo $cuserSocialLink2[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage2[0]; ?>"
                                                                alt="social image 1"></a>
                                                    <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                <?php } ?>


                                <?php if (isset($cuserSocialImage3) && strlen($cuserSocialImage3[0]) > 5) { ?>
                                    <div class="col-xs-12 col-sm-4 boxesocial">
                                        <div class="fun-fact gray-default">
                                            <?php if (isset($cuserSocialLink3) && strlen($cuserSocialLink3[0]) > 2) {
                                                if (str_starts_with($cuserSocialLink3[0], 'http')) {
                                                    ?>
                                                    <a href="<?php echo $cuserSocialLink3[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage3[0]; ?>"
                                                                alt="social image 3"></a>
                                                <?php } else {
                                                    ?>
                                                    <a href="https://<?php echo $cuserSocialLink3[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage3[0]; ?>"
                                                                alt="social image 3"></a>
                                                    <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                <?php } ?>



                                <?php if (isset($cuserSocialImage4) && strlen($cuserSocialImage4[0]) > 5) { ?>
                                    <div class="col-xs-12 col-sm-4 boxesocial">
                                        <div class="fun-fact gray-default">
                                            <?php if (isset($cuserSocialLink4) && strlen($cuserSocialLink4[0]) > 2) {
                                                if (str_starts_with($cuserSocialLink1[0], 'http')) {
                                                    ?>
                                                    <a href="<?php echo $cuserSocialLink4[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage4[0]; ?>"
                                                                alt="social image 4"></a>
                                                <?php } else {
                                                    ?>
                                                    <a href="https://<?php echo $cuserSocialLink4[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage4[0]; ?>"
                                                                alt="social image 4"></a>
                                                    <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                <?php } ?>


                                <?php if (isset($cuserSocialImage5) && strlen($cuserSocialImage5[0]) > 5) { ?>
                                    <div class="col-xs-12 col-sm-4 boxesocial">
                                        <div class="fun-fact gray-default">
                                            <?php if (isset($cuserSocialLink5) && strlen($cuserSocialLink5[0]) > 2) {
                                                if (str_starts_with($cuserSocialLink5[0], 'http')) {
                                                    ?>
                                                    <a href="<?php echo $cuserSocialLink5[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage5[0]; ?>"
                                                                alt="social image 5"></a>
                                                <?php } else {
                                                    ?>
                                                    <a href="https://<?php echo $cuserSocialLink5[0]; ?>"><img
                                                                src="<?php echo $cuserSocialImage5[0]; ?>"
                                                                alt="social image 5"></a>
                                                    <?php
                                                }
                                            } ?>
                                        </div>
                                    </div>
                                <?php } ?>


                                <?php if (isset($cuserSocialImage6) && strlen($cuserSocialImage6[0]) > 5){   ?>
                                    <div class="col-xs-12 col-sm-4 boxesocial">
                                        <div class="fun-fact gray-default">
                                            <?php if (isset($cuserSocialLink6) && strlen($cuserSocialLink6[0]) > 2){
                                                if(str_starts_with($cuserSocialLink6[0] , 'http')){
                                                    ?>
                                                    <a href="<?php echo $cuserSocialLink6[0]; ?>"  ><img src="<?php echo  $cuserSocialImage6[0] ;?>" alt="social image 6"></a>
                                                <?php }else{
                                                    ?>
                                                    <a href="https://<?php echo $cuserSocialLink6[0]; ?>"  ><img src="<?php echo  $cuserSocialImage6[0] ;?>" alt="social image 6"></a>
                                                    <?php
                                                }
                                            }?>
                                        </div>
                                    </div>
                                <?php  }?>




                            </div>

                    </section>
                    <!-- End of About Me Subpage -->

                </div>
            </div>

        </div>
    </div>

    <script src="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/jquery.min.js"></script>
    <script src="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/modernizr.custom.js"></script>
    <script src="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/animating.js"></script>

    <script src="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/imagesloaded.pkgd.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script src='<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/perfect-scrollbar.min.js'></script>
    <script src='<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/jquery.shuffle.min.js'></script>
    <script src='<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/masonry.pkgd.min.js'></script>
    <script src='<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/owl.carousel.min.js'></script>
    <script src="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/jquery.magnific-popup.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrDf32aQTCVENBhFJbMBKOUTiUAABtC2o"></script>
    <script src="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/jquery.googlemap.js"></script>
    <script src="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/validator.js"></script>
    <script src="<?php echo PROFILETO_THEME_URI; ?>/assets/profilejs/js/main.js"></script>

    </body>

<?php
endif;

