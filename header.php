<?php include_once "config/links.php" ?>
<?php include_once "language.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?=$page_title;?></title>

    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="assets/images/favicons/site.webmanifest" />
    <meta name="description" content="Trepavo Creative Agency" />

    <?php include_once "config/css.php" ?>
</head>

<body data-language="<?php echo $_SESSION['lang']; ?>">
    <div class="preloader">
        <img class="preloader__image" width="60" src="assets/images/loader.png" alt="page loader" />
    </div>
    <header class="main-header clearfix">
        <nav class="main-menu clearfix">
            <div class="main-menu-wrapper">
                <div class="main-menu-wrapper__logo">
                    <a href="<?=$index_link;?>"><img src="assets/images/resources/logo-1.png" alt="Logo Trepavo Creative Agency"></a>
                </div>
                <div class="main-menu-wrapper__main-menu">
                    <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                    <ul class="main-menu__list">
                        <li>
                            <a href="<?=$index_link;?>" type="Home"><?php echo $lang['home'] ?></a>
                        </li>
                        <li>
                            <a href="<?=$about_link;?>" type="About"><?php echo $lang['about'] ?></a>
                        </li>
                        <li>
                            <a href="<?=$services_link;?>" type="Services"><?php echo $lang['services'] ?></a>
                        </li>
                        <li>
                            <a href="<?=$projects_link;?>" type="Projects"><?php echo $lang['projects'] ?></a>
                        </li>
                        <li>
                            <a href="<?=$contact_link;?>" type="Contact"><?php echo $lang['contact'] ?></a>
                        </li>
                    </ul>
                </div>
                <div class="main-menu-wrapper__right">
                <ul class="languages__list">
                        <li>
                            <a href="index?lang=en" data-lang="en"><?php echo $lang['lang_en'] ?></a>
                        </li>
                        <li>
                            <a href="index?lang=da" data-lang="da"><?php echo $lang['lang_da'] ?></a>
                        </li>
                    </ul>
                    <div class="main-menu-wrapper__call">
                        <div class="main-menu-wrapper__call-icon">
                            <a href="tel:004560534077">
                                <img src="assets/images/icon/phone-icon.png" alt="">
                            </a>
                        </div>
                        <div class="main-menu-wrapper__call-number">
                            <p><?php echo $lang['letsTalk'] ?></p>
                            <h5><a href="mailto:contact@trepavo.com">contact@trepavo.com</a></h5>
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
