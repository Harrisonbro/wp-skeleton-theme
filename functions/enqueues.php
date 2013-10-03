<?php

function AblosMedia_enqueuer() {

	/**
	 * Theme JavaScript
	 * wp_register_script( $handle, $src, $deps, $ver, $in_footer )
	 */
	wp_register_script( 'site', THEME_JS.'/site.js', array( 'jquery' ) );
	wp_enqueue_site( 'script' );

	/**
	 * Theme CSS
	 * wp_register_style( $handle, $src, $deps, $ver, $media )
	 */

	global $wp_styles; 

	wp_register_style( 'all', THEME_CSS.'/all.css', '', '', 'screen' );
  wp_enqueue_style( 'all' );

  wp_register_style( 'all-lte-ie8', THEME_CSS.'/all-lte-ie8.css', '', '', 'screen' );
  wp_enqueue_style( 'all-lte-ie8' );
  $wp_styles->add_data( 'all-lte-ie8', 'conditional', 'lte IE 8'); 

}	