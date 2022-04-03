<!doctype html>
<html <?php language_attributes(); ?> class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>M.A Electric Centre</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/all.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/nice-select.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- preloader end  -->
    <!-- header-area start -->
    <header class="header-area">
        <div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12 text-center d-none d-md-block">
                        <ul class="cta_list pt-20 pb-20">
                            <li><i class="fal fa-map-marker-alt"></i> <?php echo ot_get_option('address'); ?></li>
                            
                            <li><i class="fal fa-phone"></i><?php echo ot_get_option('telephone'); ?> &nbsp;|&nbsp; <?php echo ot_get_option('mobile'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-header-area  pt-10 pb-10">
            <div class="container">
                <div class="main-head-bg pl-100 pr-50">
                    <div class="row white-bg align-items-center justify-content-between">
                        <div class="col-xxl-2 col-xl-2 col-lg-6 col-md-4 col-6">
                            <div class="logo position-relative">
                                <div class="logo_bg logo_before">
                                    <a class="logo-img" href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/logo-new-01.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 d-none d-xl-block text-lg-center text-xl-right">
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul>
                                        <li><a href="#home">Home</a></li>
                                        <li><a href="#services">Services</a></li>
                                        <li><a href="#about">About Us</a></li>
                                        <li><a href="#Clients1">Clients</a></li>
                                        <li><a href="#gallery">Gallery</a></li>
                                       
                                        
                                            
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-8 col-6 text-end">
                            <ul class="right-nav d-inline-flex align-items-center">
                                
                                <li>
                                    <div class="hamburger-menu d-lg-block d-xl-none mr-25">
                                        <a href="javascript:void(0);">
                                            <i class="far fa-bars"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="d-lg-inline-block d-xl-none d-xxl-inline-block">
                                    <a href="#contact" class="theme_btn quote_btn"><span>Contact Us</span> 
                                        <div class="icon_box">
                                            <span><i class="far fa-arrow-right"></i></span>
                                            <span><i class="far fa-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-area end -->

    <!-- slide-bar start -->
    <aside class="slide-bar">
        <div class="close-mobile-menu">
            <a href="javascript:void(0);"><i class="fas fa-times"></i></a>
        </div>

        <!-- offset-sidebar start -->
        <div class="offset-sidebar">
            <div class="offset-widget offset-logo mb-30">
                <a href="index.html">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo/header_logo_one.png" alt="logo">
                </a>
            </div>
            <div class="offset-widget mb-40">
                <div class="info-widget">
                    <h4 class="offset-title mb-20">About Us</h4>
                    <p class="mb-30">
                        But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                        was born and will give you a complete account of the system and expound the actual teachings of
                        the great explore
                    </p>
                    <a class="theme_btn theme_btn_bg" href="contact.html">Contact Us</a>
                </div>
            </div>
            <div class="offset-widget mb-30 pr-10">
                <div class="info-widget info-widget2">
                    <h4 class="offset-title mb-20">Contact Info</h4>
                    <p> <i class="fal fa-address-book"></i> 23/A, Miranda City Likaoli Prikano, Dope</p>
                    <p> <i class="fal fa-phone"></i> +0989 7876 9865 9 </p>
                    <p> <i class="fal fa-envelope-open"></i> info@example.com </p>
                </div>
            </div>
        </div>
        <!-- offset-sidebar end -->

        <!-- side-mobile-menu start -->
        <nav class="side-mobile-menu">
            <ul id="mobile-menu-active">
                
                    <li><a href="#home">Home</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#gallery">Galleries</a></li>
                    <li><a href="#Clients1">Clients</a></li>
                    <li><a href="#contact">Contact</a></li>
                
            </ul>
        </nav>
        <!-- side-mobile-menu end -->
    </aside>
    <div class="body-overlay"></div>
    <!-- slide-bar end -->