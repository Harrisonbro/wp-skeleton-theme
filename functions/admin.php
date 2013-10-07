<?php

/* Add styles to admin editor to feel similar to front-end */
add_editor_style( THEME_CSS.'/wp-admin-editor.css' );

/* Metaboxes */
// include_once 'metaboxes/setup.php';
// include_once 'metaboxes/...-spec.php';

/**
 * Hide WordPress Update Notice To All But Admins
 */
function hide_update_notice_to_all_but_admin_users() {
	if (!current_user_can('update_core')) {
		remove_action( 'admin_notices', 'update_nag', 3 );
	}
}
add_action( 'admin_notices', 'hide_update_notice_to_all_but_admin_users', 1 );