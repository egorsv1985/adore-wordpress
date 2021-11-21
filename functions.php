<?php

define('THEME_ROOT', get_template_directory_uri());
	define('CSS_DIR', THEME_ROOT . '/assets/css');
	define('IMG_DIR', THEME_ROOT . '/assets/images');


add_action( 'wp_enqueue_scripts', 'adore_style' );
add_action( 'wp_enqueue_scripts', 'adore_scripts' );

function adore_style() {
	
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );

	

	
	// wp_enqueue_script( 'script-name', get_template_directory_uri() .'/js/example.js', array(), '1.0', true );
}