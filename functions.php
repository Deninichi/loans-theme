<?php 


function loans_enqueue_scripts() {
    //wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '4.7.0', 'all' );

	wp_enqueue_style('loans-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.1.3' );
   	wp_enqueue_style('loans-style', get_stylesheet_uri(), array(), '_bld_1537822010915' );
   	wp_enqueue_style('loans-style-build', get_template_directory_uri() . '/assets/dist/css/style.css', array(), '_bld_1537822010915' );

    wp_enqueue_script('loans-script', get_template_directory_uri() . '/assets/dist/js/build.js', array('jquery'), '_bld_1537822010915', true );
 
   wp_localize_script( 'loans-script', 'loans', array(

   ) );
}
add_action( 'wp_enqueue_scripts', 'loans_enqueue_scripts' );


function loans_nav_menus(){
	register_nav_menus( array(
		'primary_menu' => 'Primary Menu',
		'footer_menu' => 'Footer Menu'
	) );
};
add_action('after_setup_theme', 'loans_nav_menus' );