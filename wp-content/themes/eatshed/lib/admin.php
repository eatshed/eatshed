<?php 

/**
 * Remove pages from admin
 */

function origin_admin_remove_pages(){
	// remove_menu_page( 'index.php' );					// Dashboard
	// remove_menu_page( 'edit.php' );					// Posts
	// remove_menu_page( 'upload.php' );				// Media
	// remove_menu_page( 'edit.php?post_type=page' );	// Pages
	remove_menu_page( 'edit-comments.php' );         	// Comments
	// remove_menu_page( 'themes.php' );                // Appearance
	// remove_menu_page( 'plugins.php' );               // Plugins
	// remove_menu_page( 'users.php' );                 // Users
	// remove_menu_page( 'tools.php' );                 // Tools
	// remove_menu_page( 'options-general.php' );       // Settings
}
add_action( 'admin_menu', 'origin_admin_remove_pages' );



/**
 * Hide admin bar
 */

//add_filter('show_admin_bar', '__return_false');



/**
 * Customise admin bar
 */

function origin_customise_admin_bar()
{
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('customize');
	$wp_admin_bar->remove_menu('about');				// Remove the about WordPress link
	$wp_admin_bar->remove_menu('wp-logo');				// Remove the WordPress logo
	$wp_admin_bar->remove_menu('about');				// Remove the about WordPress link
	$wp_admin_bar->remove_menu('wporg');				// Remove the WordPress.org link
	$wp_admin_bar->remove_menu('documentation');		// Remove the WordPress documentation link
	$wp_admin_bar->remove_menu('support-forums');		// Remove the support forums link
	$wp_admin_bar->remove_menu('feedback');				// Remove the feedback link
	$wp_admin_bar->remove_menu('site-name');        	// Remove the site name menu
	$wp_admin_bar->remove_menu('view-site');        	// Remove the view site link
	$wp_admin_bar->remove_menu('updates');          	// Remove the updates link
	$wp_admin_bar->remove_menu('comments');         	// Remove the comments link
	$wp_admin_bar->remove_menu('new-content');      	// Remove the content link
	$wp_admin_bar->remove_menu('wpseo-menu');           // If you use w3 total cache remove the performance link
	$wp_admin_bar->remove_menu('my-account');       	// Remove the user details tab
	$wp_admin_bar->remove_menu('search');       		// Remove search field
}

// add_action( 'wp_before_admin_bar_render', 'origin_customise_admin_bar' ); 