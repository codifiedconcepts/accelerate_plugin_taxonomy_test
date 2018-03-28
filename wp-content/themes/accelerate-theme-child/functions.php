<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Theme support for post-thumbnails and menus
function accelerate_child_setup() {

	// Post thumbnails support
	add_theme_support('post-thumbnails');

}
add_action( 'after_setup_theme', 'accelerate_child_setup' );

// Enqueue scripts and styles
function accelerate_child_scripts() {
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
    wp_enqueue_style( 'accelerate-child-google-fonts', '//fonts.googleapis.com/css?family=Londrina+Solid:400,900' );
	wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

//Add body class
function accelerate_child_body_classes( $classes ) {
  if ( is_page( 'contact-us' ) ) {
    $classes[] = 'contact-page';
  }
    return $classes;
}
add_filter( 'body_class','accelerate_child_body_classes' );

//Add a dynamic sidebar
function accelerate_theme_child_widget_init() {
	register_sidebar( array(
	    'name' =>__( 'Homepage sidebar', 'accelerate-theme-child'),
	    'id' => 'sidebar-2',
	    'description' => __( 'Appears on the static front page template', 'accelerate-theme-child' ),
	    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	    'after_widget' => '</aside>',
	    'before_title' => '<h3 class="widget-title">',
	    'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'accelerate_theme_child_widget_init' );
