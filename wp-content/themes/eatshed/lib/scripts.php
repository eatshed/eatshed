<?php

/**
 * Load in scripts
 */

function origin_scripts() {
	// Load custom version of jQuery
	wp_deregister_script('jquery');
	wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', array(), null, true);
	wp_enqueue_script('jquery');

	// Load scripts.min.js
	wp_register_script( 'scripts', get_template_directory_uri().'/js/scripts.min.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'scripts' );
}

if( !is_admin() ) { add_action( 'wp_enqueue_scripts', 'origin_scripts', 11 ); }