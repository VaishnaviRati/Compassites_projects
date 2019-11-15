<?php

function load_stylesheets()
{

	wp_register_style('bootcss',get_template_directory_uri() . '/css/bootstrap.min.css', array(), 1, 'all');
	wp_enqueue_style('bootcss');

	wp_register_style('font',get_template_directory_uri() . '/css/main.css', array(), 1,'all');
	wp_enqueue_style('font');

	wp_register_style('custom',get_template_directory_uri() . '/style.css', array(), 1, 'all');
	wp_enqueue_style('custom');

}

 add_action('wp_enqueue_scripts' , 'load_stylesheets');


function edufront_theme_scripts()
{

	wp_register_style('jqueryscript',get_template_directory_uri() . '/js/jquery.min.js', array(),'', 1, 1, 1);
	wp_enqueue_script( 'jqueryscript');  


	wp_register_style('bootstrap',get_template_directory_uri() . '/js/bootstrap.min.js', array(),'', 1, 1, 1);
	wp_enqueue_script( 'bootstrap');

	wp_register_style('highlight',get_template_directory_uri() . '/js/highlight.min.js', array(),'', 1, 1, 1);
	wp_enqueue_script( 'highlight');

	wp_register_style('wallscript',get_template_directory_uri() . '/js/wall.js', array(),'', 1, 1, 1);
	wp_enqueue_script( 'wallscript');

	wp_register_style('script',get_template_directory_uri() . '/js/main.js', array(),'', 1, 1, 1);
	wp_enqueue_script( 'script');
	
}

add_action( 'wp_enqueue_scripts', 'edufront_theme_scripts' );

// Menu support
add_theme_support('menus');


	// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary'   => __( 'Top primary menu', 'edufront_theme' ),
				'secondary' => __( 'Secondary menu in left sidebar', 'edufront_theme' ),
			)
		);

/*function load_stylesheets()
{
 wp_enqueue_style( 'font', get_template_directory_uri() . '/css/main.css', array(), '1' );

 wp_enqueue_style( 'custom', get_template_directory_uri() . 'style.css', array(), '1' );

}
wp_enqueue_script( 'wall_script', get_template_directory_uri() . '/js/wall.js', array ( 'jquery' ), 1.1, true);

add_action( 'wp_enqueue_scripts', 'load_stylesheets' );*/

?>