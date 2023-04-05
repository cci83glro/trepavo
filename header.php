<?php include_once "config/links.php" ?>
<?php include_once "language.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $title ?></title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Trepavo Creative Agency" />

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Federo&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="assets/vendors/animate/custom-animate.css" />
    <link rel="stylesheet" href="assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="assets/vendors/mibooz-icons/style.css">
    <link rel="stylesheet" href="assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="assets/vendors/the-sayinistic-font/stylesheet.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.theme.default.min.css" />
    <link rel="stylesheet" href="assets/vendors/bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/vendors/jquery-ui/jquery-ui.css" />

    <!-- template styles -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/main-responsive.css" />
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="" />
    </div>
    <header class="main-header clearfix">
        <nav class="main-menu clearfix">
            <div class="main-menu-wrapper">
                <div class="main-menu-wrapper__logo">
                    <a href="/"><img src="assets/images/resources/logo-1.png" alt=""></a>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="index" type="Home"><?php echo $lang['home'] ?></a>
                        </li>
                        <li class="dropdown">
                            <a href="about" type="About"><?php echo $lang['about'] ?></a>
                        </li>
                        <!--li class="dropdown">
                            <a href="services" type="Services">Services</a>
                            <ul>
                                <li><a href="services">Services</a></li>
                                <li><a href="mobile-application">Mobile Application</a></li>
                                <li><a href="digital-marketing">Digital Marketing</a></li>
                                <li><a href="graphic-designing">Graphic Designing</a></li>
                                <li><a href="website-development">Website Development</a></li>
                                <li><a href="social-marketing">Social Marketing</a></li>
                                <li><a href="content-writing">Content Writting</a></li>
                            </ul>
                        </li-->
                        <li class="dropdown">
                            <a href="projects" type="Projects"><?php echo $lang['projects'] ?></a>
                        </li>
                        <!--li class="dropdown">
                            <a href="#">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog Posts</a></li>
                                <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li-->
                        <li><a href="contact" type="Contact"><?php echo $lang['contact'] ?></a></li>
                    </ul>
                </div>
                <div class="main-menu-wrapper__right">
                <ul class="languages__list">
                        <li>
                            <a href="index?lang=en" type="en"><?php echo $lang['lang_en'] ?></a>
                        </li>
                        <li>
                            <a href="index?lang=da" type="da"><?php echo $lang['lang_da'] ?></a>
                        </li>
                    </ul>
                    <div class="main-menu-wrapper__call">
                        <div class="main-menu-wrapper__call-icon">
                            <img src="assets/images/icon/phone-icon.png" alt="">
                        </div>
                        <div class="main-menu-wrapper__call-number">
                            <p>Let`s talk!</p>
                            <h5><a href="info@trepavo.com">info@trepavo.com</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <!-- /.preloader -->
    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->
    <div class="page-wrapper">
