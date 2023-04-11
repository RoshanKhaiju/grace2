<?php

/**
 * theme functions and description
 *
 * @package grace
 */


/*
    ========================================
    theme support
    ========================================
*/
function grace_theme_support()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_image_size('newsAndNoticeImg', 410, 385);
}
add_action('init', 'grace_theme_support');


/*
    ========================================
    Include styles
    ========================================
*/
function grace_theme_scripts()
{
    $version = wp_get_theme()->get('Version');
    // enqueue styles
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_style('grace-css', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('dark-css', get_template_directory_uri() . '/assets/css/dark.css');

    wp_enqueue_style('font-icons', get_template_directory_uri() . '/assets/css/font-icons.css');

    wp_enqueue_style('animate-css', get_template_directory_uri() . '/assets/css/animate.css');

    wp_enqueue_style('mangnific-css', get_template_directory_uri() . '/assets/css/magnific-popup.css');


    /*
    ========================================
    sliders revolution 5.x css settings
    ========================================
    */
    wp_enqueue_style('setting-css', get_template_directory_uri() . '/assets/rs-plugin/css/settings.css');

    wp_enqueue_style('layers-css', get_template_directory_uri() . '/assets/rs-plugin/css/layers.css');

    wp_enqueue_style('navigation-css', get_template_directory_uri() . '/assets/rs-plugin/css/navigation.css');

    /*
    ========================================
    recipes demo specific stylesheet
    ========================================
    */
    wp_enqueue_style('fonts-css', get_template_directory_uri() . '/assets/demos/recipes/css/fonts.css');

    /*
    ========================================
    Theme Font
    ========================================
    */
    wp_enqueue_style('recipes-css', get_template_directory_uri() . '/assets/demos/recipes/recipes.css');

    /*
    ========================================
    custom stylesheet
    ========================================
    */
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');

    wp_enqueue_style('style-css', get_stylesheet_uri());



    // enqueue scripts
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(), $version, true);
    wp_enqueue_script('plugin', get_template_directory_uri() . '/assets/js/plugins.min.js', array(), $version, true);

    /*
    ========================================
    slider revolution 5.x scripts
    ========================================
    */
    wp_enqueue_script('tools-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.tools.min.js', array(), $version, true);
    wp_enqueue_script('revolution-js', get_template_directory_uri() . '/assets/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), $version, true);

    /*
    ========================================
    add-ons js
    ========================================
    */
    wp_enqueue_script('pixi-js', get_template_directory_uri() . '/assets/rs-plugin/js/pixi.min.js', array(), $version, true);

    /*
    ========================================
    slider revolution extensions
    ========================================
    */
    wp_enqueue_script('action-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.actions.min.js', array(), $version, true);
    wp_enqueue_script('carousel-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.carousel.min.js', array(), $version, true);
    wp_enqueue_script('kenburn-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array(), $version, true);
    wp_enqueue_script('layeranimation-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array(), $version, true);
    wp_enqueue_script('migration-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.migration.min.js', array(), $version, true);
    wp_enqueue_script('navigation-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array(), $version, true);
    wp_enqueue_script('parallax-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array(), $version, true);
    wp_enqueue_script('slideanims-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array(), $version, true);
    wp_enqueue_script('video-js', get_template_directory_uri() . '/assets/rs-plugin/js/extensions/revolution.extension.video.min.js', array(), $version, true);

    /*
    ========================================
    footer scripts
    ========================================
    */
    if (is_front_page()) {
        wp_enqueue_script('rev-js', get_template_directory_uri() . '/assets/js/rev.js', array(), $version, true);
    }

    wp_enqueue_script('functions-js', get_template_directory_uri() . '/assets/js/functions.js', array(), $version, true);
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/custom.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'grace_theme_scripts');

/*
    ========================================
    Register Menus
    ========================================
*/
function register_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
}
add_action('init', 'register_menus');