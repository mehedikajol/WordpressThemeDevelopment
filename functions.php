<?php 

// THEME SUPPORTS
function theme_setup(){
 
    /*** LOAD THEME TEXT DOMAIN ***/
    load_theme_textdomain('constra', get_template_directory() . '/languages');

    /** TITLE-TAG **/
    add_theme_support( 'title-tag' );

    /*** CUSTOM POST THUMBNAIL SUPPORT ***/
    add_theme_support('post-thumbnails', array(
        'post', 'sliders', 'services', 'portfolios', 'clients',
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
            'title', 'custom-fields', 'page-attributes',
        ),
        'show_in_rest' => true,
    ));

    // REGISTER SERVICES
    register_post_type('services', array(
        'labels' => array(
            'name' => __('Services', 'constra'),
            'singular_name' => __('Service', 'constra'),
            'menu_name' => __('Services', 'constra'),
            'name_admin_bar' => __('Service', 'constra'),
            'add_new' => __('Add Service', 'constra'),
            'add_new_item' => __('Add New Service', 'constra'),
            'new_item' => __('New Service', 'constra'),
            'edit_item' => __('Edit Service', 'constra'),
            'view_item' => __('View Service', 'constra'),
            'all_items' => __('All Services', 'constra'),
            'search_items' => __('Search Services', 'constra'),
            'not_found' => __('No Services Found', 'constra'),
            'not_found_in_trash' => __('No Services in Trash', 'constra'),
            'featured_image' => __( 'Service Image', 'constra'),
            'set_featured_image'    => __( 'Set Service Image', 'constra'),
            'remove_featured_image' => __( 'Remove Service Image', 'constra'),
            'use_featured_image'    => __( 'Use Service image', 'constra'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-lightbulb',
        'show_ui' => true,
        'supports' => array(
            'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes',
        ),
        'show_in_rest' => true,
    ));

    // REGISTER PORTFOLIOS
    register_post_type('portfolios', array(
        'labels' => array(
            'name' => __('Portfolios', 'constra'),
            'singular_name' => __('Portfolio', 'constra'),
            'menu_name' => __('Portfolios', 'constra'),
            'name_admin_bar' => __('Portfolio', 'constra'),
            'add_new' => __('Add Portfolio', 'constra'),
            'add_new_item' => __('Add New Portfolio', 'constra'),
            'new_item' => __('New Portfolio', 'constra'),
            'edit_item' => __('Edit Portfolio', 'constra'),
            'view_item' => __('View Portfolios', 'constra'),
            'all_items' => __('All Portfolios', 'constra'),
            'search_items' => __('Search Portfolios', 'constra'),
            'not_found' => __('No Portfolios Found', 'constra'),
            'not_found_in_trash' => __('No Portfolios in Trash', 'constra'),
            'featured_image' => __( 'Portfolio Image', 'constra'),
            'set_featured_image'    => __( 'Set Portfolio Image', 'constra'),
            'remove_featured_image' => __( 'Remove Portfolio Image', 'constra'),
            'use_featured_image'    => __( 'Use Portfolio image', 'constra'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        'show_ui' => true,
        'supports' => array(
            'title', 'editor', 'thumbnail', 'custom-fields', 'page-attributes',
        ),
        'show_in_rest' => true,
        'taxonomies' => array( 'category', 'tags'),
    ));

    // REGISTER TESTIMONIALS
    register_post_type('testimonials', array(
        'labels' => array(
            'name' => __('Testimonials', 'constra'),
            'singular_name' => __('Testimonial', 'constra'),
            'menu_name' => __('Testimonials', 'constra'),
            'name_admin_bar' => __('Testimonial', 'constra'),
            'add_new' => __('Add Testimonial', 'constra'),
            'add_new_item' => __('Add New Testimonial', 'constra'),
            'new_item' => __('New Testimonial', 'constra'),
            'edit_item' => __('Edit Testimonial', 'constra'),
            'view_item' => __('View Testimonials', 'constra'),
            'all_items' => __('All Testimonials', 'constra'),
            'search_items' => __('Search Testimonials', 'constra'),
            'not_found' => __('No Testimonials Found', 'constra'),
            'not_found_in_trash' => __('No Testimonials in Trash', 'constra'),
            'featured_image' => __( 'Testimonial Image', 'constra'),
            'set_featured_image'    => __( 'Set Testimonial Image', 'constra'),
            'remove_featured_image' => __( 'Remove Testimonial Image', 'constra'),
            'use_featured_image'    => __( 'Use Testimonial image', 'constra'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-testimonial',
        'show_ui' => true,
        'supports' => array(
            'title', 'editor', 'custom-fields', 'page-attributes',
        ),
        'show_in_rest' => true,
    ));

    // REGISTER CLIENTS
    register_post_type('clients', array(
        'labels' => array(
            'name' => __('Clients', 'constra'),
            'singular_name' => __('Client', 'constra'),
            'menu_name' => __('Clients', 'constra'),
            'name_admin_bar' => __('Client', 'constra'),
            'add_new' => __('Add Client', 'constra'),
            'add_new_item' => __('Add New Client', 'constra'),
            'new_item' => __('New Client', 'constra'),
            'edit_item' => __('Edit Client', 'constra'),
            'view_item' => __('View Clients', 'constra'),
            'all_items' => __('All Clients', 'constra'),
            'search_items' => __('Search Clients', 'constra'),
            'not_found' => __('No Clients Found', 'constra'),
            'not_found_in_trash' => __('No Clients in Trash', 'constra'),
            'featured_image' => __( 'Client Image', 'constra'),
            'set_featured_image'    => __( 'Set Client Image', 'constra'),
            'remove_featured_image' => __( 'Remove Client Image', 'constra'),
            'use_featured_image'    => __( 'Use Client image', 'constra'),
        ),
        'public' => true,
        'menu_icon' => 'dashicons-groups',
        'show_ui' => true,
        'supports' => array(
            'title', 'thumbnail', 'custom-fields',
        ),
        'show_in_rest' => true,
    ));
}
add_action('init', 'constra_custom_posts');


// SAVE ACF DATA INTO LOCAL STORAGE
function save_acf_data_json( $path ) {
    $path = get_stylesheet_directory() . '/acf-json';
    return $path;
}
add_filter('acf/settings/save_json', 'save_acf_data_json');

// LOAD ACF DATA FROM LOCAL STORAGE
function load_acf_data_json( $paths ) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-json';
    return $paths;  
}
add_filter('acf/settings/load_json', 'load_acf_data_json');