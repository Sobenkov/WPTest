<?php

add_action('wp_enqueue_scripts', 'style_theme');
add_action('wp_footer', 'scripts_theme');
add_action( 'wp_enqueue_scripts', 'my_scripts_method' );

function style_theme(){
   wp_enqueue_style('style', get_stylesheet_uri());
   wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css');
   wp_enqueue_style( 'layout', get_template_directory_uri() . '/assets/css/layout.css');
   wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/assets/css/media-queries.css');
};

function scripts_theme(){
   wp_enqueue_style('init', get_template_directory_uri() . '/js/init.js' );
   wp_enqueue_style('doubletaptogo', get_template_directory_uri() . '/js/doubletaptogo.js' );
   wp_enqueue_style('flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js' );
};

function my_scripts_method() {
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );
};