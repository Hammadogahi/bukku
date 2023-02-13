<?php 
/*
* Bukku Functions File
*/

/* Bukku Theme Setup */

function bukku_theme_setup() {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size ('home-featured', 680, 400, array('center', 'center'));
    add_image_size ('single-post', 580, 272, array('center', 'center'));
    add_image_size ('portfolio-thumb', 374, 260, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'bukku' )
    ) );
    
};
add_action('after_setup_theme', 'bukku_theme_setup');

/* Bukku JS & CSS Files */

function bukku_scripts() {
    
    /* CSS Files */
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bukku_normalize', get_template_directory_uri() . '/css/normalize.css');
    wp_enqueue_style('bukku_bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
    wp_enqueue_style('bukku_owl', get_template_directory_uri() . '/css/owl.css');
    wp_enqueue_style('bukku_animate', get_template_directory_uri() . '/css/animate.css');
    wp_enqueue_style('bukku_font-awesome', get_template_directory_uri() . '/font-awesome-4.1.0/css/font-awesome.min.css');
    wp_enqueue_style('bukku_et-icons', get_template_directory_uri() . '/css/et-icons.css');
    wp_enqueue_style('bukku_tooltip', get_template_directory_uri() . '/css/tooltip.css');
    wp_enqueue_style('bukku_lightbox', get_template_directory_uri() . '/css/lightbox.css');
    wp_enqueue_style('bukku_publisher', get_template_directory_uri() . '/css/publisher.css');
   
    /* JS Files */
    wp_enqueue_script( 'bukku_jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js');
    wp_enqueue_script( 'bukku_owl-carousel', get_template_directory_uri() . '/js/owl.carousel.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_lightbox', get_template_directory_uri() . '/js/lightbox.min.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_onepagenav', get_template_directory_uri() . '/js/jquery.onepagenav.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_core', get_template_directory_uri() . '/js/core.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_tooltip', get_template_directory_uri() . '/js/tooltip.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_form-validator', get_template_directory_uri() . '/js/jquery.form-validator.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_preloader', get_template_directory_uri() . '/js/preloader.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'bukku_bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), 1.1, true);

}

add_action('wp_enqueue_scripts', 'bukku_scripts');


/* Add Class to a Tag in Menu */
function add_link_atts($atts) {
  $atts['class'] = "scrollto";
  $atts['href'] === '#' && $atts['class'] = 'btn btn-green';
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_link_atts');