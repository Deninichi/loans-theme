<?php 

// Requires
require_once get_template_directory() . '/inc/template-functions.php';
require_once get_template_directory() . '/inc/links-widget.php';


function loans_enqueue_scripts() {
    //wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.7.0', 'all' );

	wp_enqueue_style('loans-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3' );
   	wp_enqueue_style('loans-style', get_stylesheet_uri(), array(), '_bld_1538425084752' );
   	wp_enqueue_style('loans-style-build', get_template_directory_uri() . '/assets/dist/css/style.css', array(), '_bld_1538425084752' );

    wp_enqueue_script('loans-script-build', get_template_directory_uri() . '/assets/dist/js/build.js', array('jquery'), '_bld_1538425084752', true );
    wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '_bld_1538425084752', true );
    wp_enqueue_script('loans-script', get_template_directory_uri() . '/assets/js/custom-scripts.js', array('jquery'), '_bld_1538425084752', true );
 
   wp_localize_script( 'loans-script', 'loans', array(

   ) );
}
add_action( 'wp_enqueue_scripts', 'loans_enqueue_scripts' );


/**
 * Register Menu
 */
function loans_nav_menus(){
	register_nav_menus( array(
		'primary_menu' => 'Primary Menu',
		'footer_menu' => 'Footer Menu'
	) );
};
add_action('after_setup_theme', 'loans_nav_menus' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function loans_widgets_init() {
  register_sidebar( array(
    'name'          => esc_html__( 'Primary sidebar', 'loans' ),
    'id'            => 'primary-sidebar',
    'description'   => esc_html__( 'Add widgets here.', 'loans' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );
}
add_action( 'widgets_init', 'loans_widgets_init' );