<?php

require_once("wp-bootstrap-navwalker.php");

function try_setup(){

	//set size to our require theme image which we need
	// for pages
	add_image_size('page-featured-image', 1580,450, array('center'));
	//for posts
	add_image_size('post-featured-image', 760,9999, false);

	//feature images for thumbnails images in post

	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(150,150,false);

	//register our main menu

	register_nav_menu('main-menu', __('Main Menu','try'));


}
add_action('after_setup_theme','try_setup');


function try_sidebars(){
	//register sidebar
	register_sidebar(array(
		'name'				=> 'Blog Sidebar',
		'id'				=> 'blog-sidebar',
		'before_widget'		=> '<div class="widget">',
		'after_widget'		=> '</div>',
		'before_title'		=> '<h2>',
		'after_title'		=> '</h2>',
		));

}
add_action('widgets_init','try_sidebars');

function try_scripts_and_styles(){

	// donwload bootstrap 4 styles
	wp_enqueue_style( 'bootstrap4', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css',array(),'4.0.0-alpha.6','all');
	wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',array(),'4.7.0','all');

	//donwload your own stylesheets
	wp_enqueue_style( 'try-styles', get_template_directory_uri() . '/styles/css/site.css',array('bootstrap4'),'2017032801','all');

	

	//download jquery 

	//ta bort inbuggda versionen fösrt

	wp_deregister_script('jquery');

	wp_enqueue_script( 'jquery','https://code.jquery.com/jquery-3.1.1.slim.min.js', array (), '3.1.1', true);
	
	//download jquery tether
	wp_enqueue_script( 'tether','https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array ('jquery'), '1.4.0', true);
	
	
	//download bootstrap4 jquery

	wp_enqueue_script( 'bootstrap4','https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array ('jquery','tether'), '4.0.0-alpha.6', true);

	wp_enqueue_script( 'font-awesome', get_template_directory_uri() . '/styles/js/main.js',array('jquery','bootstrap4'),'2017032801',true);

	



}
add_action('wp_enqueue_scripts','try_scripts_and_styles');

