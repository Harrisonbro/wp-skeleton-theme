<?php

add_action( 'wp_enqueue_scripts', 'AblosMedia_enqueuer' );
add_filter( 'body_class', array( 'AblosMedia_Utilities', 'add_slug_to_body_class' ) );