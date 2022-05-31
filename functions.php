<?php 

// THEME SUPPORTS
function theme_setup(){
 
    /** tag-title **/
    add_theme_support( 'title-tag' );
 
}
add_action('after_setup_theme','theme_setup');


// ENQUEUE STYLES AND SCRIPTS
function constra_theme_scripts() {
    // ENQUEUE STYLES
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.css', array(), '4.5.3', 'all' );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/plugins/fontawesome/css/all.min.css', array(), '5.13.1', 'all' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/plugins/animate-css/animate.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/plugins/slick/slick.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/plugins/slick/slick-theme.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'colorbox', get_template_directory_uri() . '/plugins/colorbox/colorbox.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // ENQUEUE SCRIPTS
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/plugins/bootstrap/bootstrap.min.js', array('jquery'), '4.5.3', true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/plugins/slick/slick.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'slick-animation', get_template_directory_uri() . '/plugins/slick/slick-animation.min.js', array('jquery'), '0.3.3', true );
    wp_enqueue_script( 'colorbox', get_template_directory_uri() . '/plugins/colorbox/jquery.colorbox.js', array('jquery'), '1.6.3', true );
    wp_enqueue_script( 'shuffle', get_template_directory_uri() . '/plugins/shuffle/shuffle.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'constra_theme_scripts' );
