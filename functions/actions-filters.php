<?php

add_action( 'wp_enqueue_scripts', 'Ablos_Enqueuer' );
add_filter( 'body_class', array( 'Ablos_Utilities', 'add_slug_to_body_class' ) );