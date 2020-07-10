<?php
/**
 * Security Matters functions and definitions
 *
 * @link 
 *
 * @package Security Matters
 * @subpackage Security_Matters
 * @since Security Matters 1.0
*/

/**
* Include custom navwalker
*/ 
require_once('bs4navwalker.php');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
if(!function_exists('securitymatters_theme_support')) {
    function securitymatters_theme_support() {
    
        /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
        add_theme_support( 'title-tag' );

        // make theme available for translation
        load_theme_textdomain( 'securitymatters' );

        // enable supprt for post thumbnails in post and pages
        add_theme_support( 'post-thumbnails' );

        // Set post thumbnail size.
        // set_post_thumbnail_size( 50, 50 );
    

    }
}
add_action('after_setup_theme', 'securitymatters_theme_support');

/**
 * Register navigation menus uses wp_nav_menu in five places.
 */
function securitymatters_menus() {

	$locations = array(
		'primary'  => __( 'Primary Menu', 'securitymatters' ),
		'footer' => __( 'Footer Menu', 'securitymatters' ),
	);

	register_nav_menus( $locations );
}
add_action( 'init', 'securitymatters_menus' );


/**
 * Register and Enqueue styles
*/
function securitymatters_register_styles() {

    $theme_version = wp_get_theme()->get( 'Version' );

    // Enqueue the defualt stylesheet
    wp_enqueue_style( 'securitymatters_style', get_stylesheet_uri(), array(), $theme_version );

    // Enqueue the bootstrap style
    wp_enqueue_style( 'securitymatters_bootstrap_style', get_template_directory_uri() . '/assets/css/bootstrap-4.5.min.css', array(), $theme_version );

    // Enqueue fontawesome
    wp_enqueue_style( 'securitymatters_fontawesome_style', get_template_directory_uri() . '/assets/fonts/fontawesome-free-5.9.0-web/css/all.min.css', array(), $theme_version );

}
add_action( 'wp_enqueue_scripts', 'securitymatters_register_styles');

/**
 * Register and Enqueue scripts
*/
function securitymatters_register_scripts() {

    $theme_version = wp_get_theme()->get( 'Version' );

    // Enqueue jquery library
    wp_enqueue_script('securitymatters_jquery', get_template_directory_uri() . '/assets/js/jquery-3.5.1.slim.min.js', array(), $theme_version, true);

    // Enqueue bootstrap js library
    wp_enqueue_script('securitymatters_bootstrap', get_template_directory_uri() . '/assets/js/bootstrap-4.5.bundle.min.js', array(), $theme_version, true);
}
add_action('wp_enqueue_scripts', 'securitymatters_register_scripts');

/* ----- Register Widget Areas -----*/
function securitymatters_widget_init() {
    register_sidebar(array (
        'name' => __('Main Sidebar', 'securitymatters'),
        'id' => 'main-sidebar',
        'description' => __('Widgets added here will appear in all pages using the two column template', 'glasseye'),
        'before_widget' => '<section id="%1$s" class="%2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
    ));
}
add_action('widgets_init', 'securitymatters_widget_init');

