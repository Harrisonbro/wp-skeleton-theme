<?php

function AblosMedia_enqueuer() {

	/* wp_register_script( $handle, $src, $deps, $ver, $in_footer ) */
	// wp_register_script( 'script', THEME_JS.'/script.js', array( 'jquery' ) );
	// wp_enqueue_script( 'script' );

	global $wp_styles; 

	/* wp_register_style( $handle, $src, $deps, $ver, $media ) */
	wp_register_style( 'all', THEME_CSS.'/all.css', '', '', 'screen' );
  wp_enqueue_style( 'all' );

  wp_register_style( 'all-lte-ie8', THEME_CSS.'/all-lte-ie8.css', '', '', 'screen' );
  wp_enqueue_style( 'all-lte-ie8' );
  $wp_styles->add_data( 'all-lte-ie8', 'conditional', 'lte IE 8'); 

}	