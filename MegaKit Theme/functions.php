<?php

/** Theme Support **/
function megakit_support()
{
    /** tag-title **/
    add_theme_support('title-tag');

    /** post formats */
    $post_formats = array('aside', 'image', 'gallery', 'video', 'audio', 'link', 'quote', 'status');
    add_theme_support('post-formats', $post_formats);

    /** post thumbnail **/
    add_theme_support('post-thumbnails', ['post', 'portfolios']);

    /** HTML5 support **/
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

    /** custom log **/
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ]);

    /*
    * Theme Name: MegaKit
    * Author: Theme Author
    * Text Domain: megakit
    * Domain Path: /languages
    */
    load_theme_textdomain('megakit', get_template_directory() . '/languages');

    // Register Nav bar
    register_nav_menus([
        'primary_menu' => __('Primary Menu', 'megakit'),
        // 'footer_menu'  => __( 'Footer Menu', 'megakit' ),
    ]);
}
add_action('after_setup_theme', 'megakit_support');

/**
 *  enqueue scripts and styles.
 */
function megakit_scripts()
{
    wp_enqueue_style('style.css', get_stylesheet_uri() . './style.css');

    // Style
    wp_enqueue_style('bootstrap', get_template_directory_uri() . './plugins/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('themify-icons', get_template_directory_uri() . './plugins/themify/css/themify-icons.css', array(), '1.0.0', 'all');
    wp_enqueue_style('all', get_template_directory_uri() . './plugins/fontawesome/css/all.css', array(), '1.0.0', 'all');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . './plugins/magnific-popup/dist/magnific-popup.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick', get_template_directory_uri() . './plugins/slick-carousel/slick/slick.css', array(), '1.0.0', 'all');
    wp_enqueue_style('slick-theme', get_template_directory_uri() . './plugins/slick-carousel/slick/slick-theme.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . './css/style.css', array(), '1.0.0', 'all');

    // Scripts
    wp_enqueue_script('contact', get_template_directory_uri() . './js/contact.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('popper', get_template_directory_uri() . './plugins/bootstrap/js/popper.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . './plugins/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . './plugins/magnific-popup/dist/jquery.magnific-popup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('slick', get_template_directory_uri() . './plugins/slick-carousel/slick/slick.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('waypoints', get_template_directory_uri() . './plugins/counterup/jquery.waypoints.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('counterup', get_template_directory_uri() . './plugins/counterup/jquery.counterup.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri() . './js/script.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('map', get_template_directory_uri() . './plugins/google-map/map.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'megakit_scripts');


/** ACF Option Page **/
if (function_exists('acf_add_options_page')) {

    acf_add_options_page([
        'page_title'     => __('Theme General Settings', 'megakit'),
        'menu_title'     => __('Theme Settings', 'megakit'),
        'menu_slug'      => 'theme-general-settings',
        'capability'     => 'edit_posts',
        'redirect'       => false
    ]);

    acf_add_options_sub_page([
        'page_title'     => __('Theme Header Settings', 'megakit'),
        'menu_title'     =>  __('Header', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);

    acf_add_options_sub_page([
        'page_title'     => __('Theme Footer Settings', 'megakit'),
        'menu_title'     => __('Footer', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title'     => __('Theme About Settings', 'megakit'),
        'menu_title'     => __('About', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title'     => __('Theme Contact Settings', 'megakit'),
        'menu_title'     => __('Contact', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title'     => __('Theme Socials Settings', 'megakit'),
        'menu_title'     => __('Socials', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title'     => __('Theme Hero Settings', 'megakit'),
        'menu_title'     => __('Hero Section', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title'     => __('Theme Static Settings', 'megakit'),
        'menu_title'     => __('Static Section', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title'     => __('Theme Counter Settings', 'megakit'),
        'menu_title'     => __('Counter', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title'     => __('Theme cta Settings', 'megakit'),
        'menu_title'     => __('CTA', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    acf_add_options_sub_page([
        'page_title'     => __('Theme Entrust Settings', 'megakit'),
        'menu_title'     => __('Entrust ', 'megakit'),
        'parent_slug'    => 'theme-general-settings',
    ]);
    
}

function megakit_cpt()
{
    // Services Care
    $labels = array(
        'name'                  => _x('Services', 'megakit'),
        'singular_name'         => _x('Service', 'megakit'),
        'menu_name'             => _x('Services', 'megakit'),
        'name_admin_bar'        => _x('Service', 'megakit'),
        'add_new'               => __('Add New', 'megakit'),
        'add_new_item'          => __('Add New Service', 'megakit'),
        'new_item'              => __('New Service', 'megakit'),
        'edit_item'             => __('Edit Service', 'megakit'),
        'view_item'             => __('View Service', 'megakit'),
        'all_items'             => __('All Service', 'megakit'),
        'search_items'          => __('Search Service', 'megakit'),
        'parent_item_colon'     => __('Parent Service:', 'megakit'),
        'not_found'             => __('No Services found.', 'megakit'),
        'not_found_in_trash'    => __('No Services found in Trash.', 'megakit'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 's-service'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'editor'),
        // 'show_in_rest'       => true
    );

    register_post_type('Services', $args);

    // Testimonial Post
    $labels = array(
        'name'                  => _x('Testimonials', 'megakit'),
        'singular_name'         => _x('Testimonial', 'megakit'),
        'menu_name'             => _x('Testimonials', 'megakit'),
        'name_admin_bar'        => _x('Testimonial', 'megakit'),
        'add_new'               => __('Add New', 'megakit'),
        'add_new_item'          => __('Add New Testimonial', 'megakit'),
        'new_item'              => __('New Testimonial', 'megakit'),
        'edit_item'             => __('Edit Testimonial', 'megakit'),
        'view_item'             => __('View Testimonial', 'megakit'),
        'all_items'             => __('All Testimonial', 'megakit'),
        'search_items'          => __('Search Testimonial', 'megakit'),
        'parent_item_colon'     => __('Parent Testimonial:', 'megakit'),
        'not_found'             => __('No Testimonials found.', 'megakit'),
        'not_found_in_trash'    => __('No Testimonials found in Trash.', 'megakit'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 't-testimonial'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title'),
        // 'show_in_rest'       => true
    );

    register_post_type('Testimonials', $args);

    // Portfolio Post
    $labels = array(
        'name'                  => _x('Portfolios', 'megakit'),
        'singular_name'         => _x('Portfolio', 'megakit'),
        'menu_name'             => _x('Portfolios', 'megakit'),
        'name_admin_bar'        => _x('Portfolio', 'megakit'),
        'add_new'               => __('Add New', 'megakit'),
        'add_new_item'          => __('Add New Portfolio', 'megakit'),
        'new_item'              => __('New Portfolio', 'megakit'),
        'edit_item'             => __('Edit Portfolio', 'megakit'),
        'view_item'             => __('View Portfolio', 'megakit'),
        'all_items'             => __('All Portfolio', 'megakit'),
        'search_items'          => __('Search Portfolio', 'megakit'),
        'parent_item_colon'     => __('Parent Portfolio:', 'megakit'),
        'not_found'             => __('No Portfolios found.', 'megakit'),
        'not_found_in_trash'    => __('No Portfolios found in Trash.', 'megakit'),
    );
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 't-Portfolio'),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array('title', 'thumbnail'),
        // 'show_in_rest'       => true
    );

    register_post_type('Portfolios', $args);
}
add_action('init', 'megakit_cpt');


/**
 * Add Sidebar
 * */

function theme_sidebar_post()
{
    // Blog Sidebar
    register_sidebar([
        'name'          => __('Main Sidebar', 'megakit'),
        'id'            => 'main_sidebar_post',
        'description'   => __('Widgets in this area will be shown on all posts and blog page.', 'megakit'),
        'before_widget' => '<div id="%1$s" class="media border-bottom py-3">',
        'after_widget'  => '</div >',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ]);
    register_sidebar([
        'name'          => __('Main Sidebar Tags', 'megakit'),
        'id'            => 'main_sidebar_tags',
        'description'   => __('Widgets in this area will be shown on all posts and blog page.', 'megakit'),
        'before_widget' => '<a>',
        'after_widget'  => '</a >',
        'before_title'  => '<h5>',
        'after_title'   => '</h5>',
    ]);

    // For Footer 
    register_sidebar([
        'name'          => __('Footer one', 'megakit'),
        'id'            => 'footer_one',
        'description'   => __('Widgets in this area will be shown on all posts and blog page.', 'megakit'),
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget'  => '</div >',
        'before_title'  => '<h4 class="text-capitalize mb-4">',
        'after_title'   => '</h4>',
    ]);
    register_sidebar([
        'name'          => __('Footer Two', 'megakit'),
        'id'            => 'footer_two',
        'description'   => __('Widgets in this area will be shown on all posts and blog page.', 'megakit'),
        'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget'  => '</div >',
        'before_title'  => '<h4 class="text-capitalize mb-4">',
        'after_title'   => '</h4>',
    ]);
}

add_action('widgets_init', 'theme_sidebar_post');