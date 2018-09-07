<?php

// Enqueue or retrieve the yeti.css stylesheet and yet.js scripts.
function yeti_script_enqueue() {

	wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/yeti.css', array(), '1.0.0', 'all' );
	wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/yeti.js', array(), '1.0.0', true );

}

add_action( 'wp_enqueue_scripts', 'yeti_script_enqueue' );


//Activate specific theme features - Menu, ...
function yeti_theme_setup() {
	add_theme_support( 'menus' );

	register_nav_menu( 'primary', 'Primary Header Navigation' );
	register_nav_menu( 'secondary', 'Footer Navigation' );
}

add_action( 'init', 'yeti_theme_setup' );
