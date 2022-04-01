<?php
function wp_scripts_css_template()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    //CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/fontawesome.css');
    wp_enqueue_style('styles', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style('animated', get_template_directory_uri() . '/assets/css/animated.css');
    wp_enqueue_style('owl', get_template_directory_uri() . '/assets/css/owl.css');
    //JS                
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery'), '1.0', true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/assets/js/owl-carousel.js', array('bootstrap'), '1.0', true);
    wp_enqueue_script('animate', get_template_directory_uri() . '/assets/js/animation.js', array('owl'), '1.0', true);
    wp_enqueue_script('lazyload', get_template_directory_uri() . '/assets/js/imagesloaded.js', array('animate'), '1.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/custom.js', array('lazyload'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wp_scripts_css_template');

//Support Images Thumbnails
function adt_thumbs()
{
    if (function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }
    //add title support
    add_theme_support("title-tag");
}
add_action("after_setup_theme", "adt_thumbs");

// Register Navbar
function register_navbar()
{
    require_once get_template_directory() . '/template-parts/navbar.php';
}
add_action('after_setup_theme', 'register_navbar');

//Register MENU PRINCIPAL
register_nav_menu('menu-superior', 'Menu Superior');

