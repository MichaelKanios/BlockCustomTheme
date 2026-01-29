<?php
//disable default block patterns
add_action( 'after_setup_theme', function() {
	remove_theme_support( 'core-block-patterns' );
} );

//Enqueue styles
function myblocktheme_enqueue_styles() {
	wp_enqueue_style( 'myblocktheme-style', get_stylesheet_uri(),array(),wp_get_theme()->get( 'Version' ) );
}	
add_action( 'wp_enqueue_scripts', 'myblocktheme_enqueue_styles' );
?>