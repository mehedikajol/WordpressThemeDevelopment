<?php 

function belfast_setup(){
    load_theme_textdomain( 'belsaft', get_template_directory_uri() . '/languages' );

    add_theme_support( 'title-tag' );

    register_nav_menus( array(
        'primary_menu' => __('Primary Menu', 'belfast'),
        'footer_menu' => __('Footer Menu', 'belfast'),
    ));
}
add_action('after_setup_theme', 'belfast_setup');

function belfast_theme_styles_scripts() {
    // STYLES
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all' );
    wp_enqueue_style( 'style', get_stylesheet_uri() );

    // SCRIPTS
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'belfast_theme_styles_scripts' );
