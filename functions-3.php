<?php

function activello_child_enqueue_child_styles() {
$parent_style = 'parent-style'; 
	wp_enqueue_style($parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 
		'child-style', 
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		wp_get_theme()->get('Version') );
	}
add_action( 'wp_enqueue_scripts', 'activello_child_enqueue_child_styles' );

/*Write here your own functions */

// ma première action
function test_hook(){
	echo '<p class="hello"> bonjour tout le monde </p>';
}
add_action( 'test', 'test_hook');
