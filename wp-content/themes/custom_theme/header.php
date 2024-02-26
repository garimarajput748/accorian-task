<?php
$upload_dir_baseurl = wp_upload_dir();
$upload_dir_image_path = $upload_dir_baseurl['url'] . "/";
$site_assets_path = get_stylesheet_directory_uri() . "/"; // . "/assets/css/";
$site_js_path = get_stylesheet_directory_uri() . "/"; /// . "/assets/js/";
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta charset="<?php bloginfo('charset'); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/line-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/swiper-min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/magnific-popup.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/fancybox.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/aos.min.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $site_assets_path; ?>assets/css/responsive.css">
    <title>
        <?php bloginfo('name'); ?>
        <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    <meta name="description" content="<?php bloginfo("description") ?>">
    <meta name="keywords" content="Website Development in Canberra">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="icon" type="image/png" href="<?php echo $site_assets_path; ?>assets/img/favicon.png">
</head>

<body>
    <div class="page-wrapper">
        <header class="header-wrap style3 mb-5">
            <div class="header-top bg-vulcan">
                <div class="close-header-top xl-none">
                    <button type="button">
                        <i class="las la-times"></i>
                    </button>
                </div>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-12">
                            <div class="header-top-left">
                                <div class="contact-item">
                                    <i class="flaticon-call-1"></i>
                                    <a href="tel:+1-732-443-3468">+1-732-443-3468</a>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-email"></i>
                                    <a href="mailto:Info@accorian.com">
                                        <p>Info@accorian.com</p>
                                    </a>
                                </div>
                                <div class="contact-item">
                                    <i class="flaticon-maps-and-flags"></i>
                                    <p>6, Alvin Ct, East Brunswick, NJ 08816 USA</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="header-top-right">
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="flaticon-facebook-app-symbol"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="flaticon-instagram-2"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="flaticon-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                                <a href="#" class="btn style1 xl-none">Discover More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-bottom-wrap">
                        <div class="row align-items-center">
                            <div class="col-xl-4 col-lg-6 col-md-6 col-5">
                                <a href="<?php echo home_url(); ?>" class="logo">
                                    <img src="<?php echo $site_assets_path; ?>assets/img/logo.png" alt="Image">
                                </a>
                            </div>
                            <div class="col-xl-7 col-lg-6 col-md-6 col-7">
                                <div class="main-menu-wrap">
                                    <div class="menu-close xl-none">
                                        <a href="javascript:void(0)">
                                            <i class="las la-times"></i>
                                        </a>
                                    </div>
                                    <div id="menu">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'menu'              => 'primary',
                                                'theme_location'    => 'primary',
                                                'depth'             => 2,
                                                'menu_class'        => 'main-menu list-style',
                                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                                'walker'            => new wp_bootstrap_navwalker()
                                            )
                                        );
                                        ?>
                                    </div>
                                </div>
                                <div class="mobile-bar-wrap">
                                    <div class="mobile-top-bar xl-none">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                    <div class="mobile-menu xl-none">
                                        <a href="javascript:void(0)">
                                            <i class="las la-bars"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>