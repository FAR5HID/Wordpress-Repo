<?php

function abc_asset() {
	wp_enqueue_style( 'abc_style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'abc_asset' );

?>