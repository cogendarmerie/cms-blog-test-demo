<?php
$config = new configuration();
$configuration = $config->storeArray();
?>
<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>News  HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/ticker-style.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/slicknav.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="/assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <?php
            if(isset($configuration['alert_top_show'])&&$configuration['alert_top_show']['value']=="visible"):
                ?>
                <div class="header-top black-bg d-none d-sm-block">
                    <div class="container">
                        <div class="col-xl-12">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="header-info-left">
                                    <ul>
                                        <li class="title"><span class="<?php if(isset($configuration['alert_top_icon'])){echo $configuration['alert_top_icon']['value'];} ?>"></span> <?php if(isset($configuration['alert_top_title'])){echo $configuration['alert_top_title']['value'];} ?></li>
                                        <li><marquee behavior="scroll" direction="left"><?php if(isset($configuration['alert_top_message'])){echo $configuration['alert_top_message']['value'];} ?></marquee></li>
                                    </ul>
                                </div>
                                <div class="header-info-right">
                                    <ul class="header-date">
                                        <li><span class="flaticon-calendar"></span> <?php if(isset($configuration['alert_top_contact'])){echo $configuration['alert_top_contact']['value'];} ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            endif;
            ?>
            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                            <div class="logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/gallery/header_card.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="about.html">about</a></li>
                                        <li><a href="categori.html">Category</a></li>
                                        <li><a href="latest_news.html">Latest News</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="header-right f-right d-none d-lg-block">
                                <!-- Heder social -->
                                <ul class="header-social">
                                    <li><a href="https://www.fb.com/sai4ull"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                                <!-- Search Nav -->
                                <div class="nav-search search-switch">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>