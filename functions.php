<?php 

function loans_enqueue_scripts() {
  
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/fontawesome/css/all.min.css', array(), '5.4.1', 'all' );

	wp_enqueue_style('loans-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3' );
 	wp_enqueue_style('loans-style', get_stylesheet_uri(), array(), '_bld_1555583246653' );
 	wp_enqueue_style('loans-style-build', get_template_directory_uri() . '/assets/dist/css/style.css', array(), '_bld_1555583246653' );

	wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), false, NULL, true );
    wp_enqueue_script( 'jquery' );
	
  	//wp_enqueue_script('loans-script-build', get_template_directory_uri() . '/assets/dist/js/build.js', array('jquery'), '_bld_1555583246653', true );
  	wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '_bld_1555583246653', true );
  	wp_enqueue_script('loans-script', get_template_directory_uri() . '/assets/js/custom-scripts.js', array('jquery'), '_bld_1555583246653', true );

  	wp_localize_script( 'loans-script', 'loans', 
      	array(
        	'ajax' => admin_url('admin-ajax.php')
      	)
  	); 
 
}
add_action( 'wp_enqueue_scripts', 'loans_enqueue_scripts', 90 );


/**
 * Theme Setup
 */
function loans_theme_setup(){
	
  register_nav_menus( array(
		'primary_menu' => 'Primary Menu',
		'footer_menu' => 'Footer Menu'
	) );

  load_theme_textdomain( 'loans', get_template_directory() . '/languages' );
};
add_action('after_setup_theme', 'loans_theme_setup' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function loans_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Primary sidebar', 'loans' ),
    'id'            => 'primary-sidebar',
    'description'   => __( 'Add widgets here.', 'loans' ),
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '<div class="title-wrapper"><h3 class="widget-title">',
    'after_title'   => '</h3></div>',
  ) );
}
add_action( 'widgets_init', 'loans_widgets_init' );
