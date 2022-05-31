<?php 

// THEME SUPPORTS
function theme_setup(){
 
    /*** LOAD THEME TEXT DOMAIN ***/
    load_theme_textdomain('constra', get_template_directory() . '/languages');

    /** TITLE-TAG **/
    add_theme_support( 'title-tag' );

    /*** CUSTOM POST THUMBNAIL SUPPORT ***/
    add_theme_support('post-thumbnails', array(
        'post', 'sliders',
    ));
 
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
    wp_enqueue_script( 'google-map', get_template_directory_uri() . '/plugins/google-map/map.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'constra_theme_scripts' );


// REGISTER CUSTOM POSTS
function constra_custom_posts(){
    // REGISTER SLIDERS
    register_post_type('sliders', array(
        'labels' => array(
            'name' => __('Sliders', 'constra'),
            'singular_name' => __('Slider', 'constra'),
            'menu_name' => __('Sliders', 'constra'),
            'name_admin_bar' => __('Slider', 'constra'),
            'add_new' => __('Add Slider', 'constra'),
            'add_new_item' => __('Add New Slider', 'constra'),
            'new_item' => __('New Slider', 'constra'),
            'edit_item' => __('Edit Slider', 'constra'),
            'view_item' => __('View Slider', 'constra'),
            'all_items' => __('All Sliders', 'constra'),
            'search_items' => __('Search Sliders', 'constra'),
            'not_found' => __('No Sliders Found', 'constra'),
            'not_found_in_trash' => __('No Sliders in Trash', 'constra'),
            'featured_image' => __( 'Slider Image', 'constra'),
            'set_featured_image'    => __( 'Set Slider Image', 'constra'),
            'remove_featured_image' => __( 'Remove Slider Image', 'constra'),
            'use_featured_image'    => __( 'Use Slider image', 'constra'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-slides',
        'show_ui' => true,
        'supports' => array(
            'title', 'custom-fields',
        ),
        'show_in_rest' => true,
    ));
}
add_action('init', 'constra_custom_posts');
