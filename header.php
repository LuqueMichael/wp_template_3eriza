<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!-- @start Meta Twitter -->
    <meta name="twitter:site" content="" />
    <meta name="twitter:title" content='<?= get_the_title(); ?>' />
    <meta name="twitter:description" content='<?= get_the_excerpt(); ?>' />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:image" content="<?= get_the_post_thumbnail_url(NULL, 'thumbnail_post_cover'); ?>" />
    <!-- @end Meta Twitter -->

    <!-- @start Open Graph -->
    <meta property="og:description" content="<?= get_the_excerpt(); ?>" />
    <meta property="og:url" content="<?= get_permalink(); ?>" />
    <meta property="og:type" content="article" />
    <meta property="og:image" content="<?= get_the_post_thumbnail_url(NULL, 'thumbnail_post_cover'); ?>" />
    <meta property="og:title" content="<?= get_the_title(); ?>" />
    <meta property="og:site_name" content="<?= get_bloginfo('name') ?>" />
    <!-- @end Open Graph -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Lora&display=swap" rel="stylesheet">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/fonts/icomoon/style.css">

    <?php wp_head(); ?>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>
    <div class="pre-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-8 col-7">
                    <ul class="info">
                        <li><a href="mailto:contacto@3eriza.pe"><i class="fa fa-envelope"></i>contacto@3eriza.pe</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>(+511) 5003577</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-sm-4 col-5">
                    <ul class="social-media">
                        <li><a href="https://www.facebook.com/3ERIZATrabajaConNosotros"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/3eriza/"><i class="fa fa-linkedin"></i></a></li>
                        <li class="d-none d-md-inline d-lg-inline d-xl-inline d-d-xxl-inline"><a href="mailto:contacto@3eriza.pe"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCuc_BpZPpH8MDupW6dldG9A"><i class="fa fa-youtube-play"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="site-logo">
                    <a href="<?= home_url() ?>"><img class="img-fluid" src="<?= get_template_directory_uri() ?>/assets/images/logo.png" alt="" srcset=""></a>
                </div>
                <div class="col-12">
                    <nav class="site-navigation text-end ml-auto " role="navigation">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-superior',
                            'container' => false,
                            'menu_class' => '',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block %2$s">%3$s</ul>',
                            'depth' => 3,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
                    </nav>
                </div>
                <div class="toggle-button d-inline-block d-lg-none text-end"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>
            </div>
        </div>

    </header>


    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->