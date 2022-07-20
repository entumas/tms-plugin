<?php
/**
 * TMS plugin | Admin -> Menu
 * @author Tumàs Muntané
 *
 */


add_filter( 'custom_menu_order', 'tms_custom_menu_order' ); // Activate custom_menu_order

add_filter( 'menu_order', 'tms_custom_menu_order' );

if ( ! function_exists( 'tms_custom_menu_order' ) ) :

	function tms_custom_menu_order( $menu_order ) {

		if ( ! $menu_order ) return true;

		return array(
			'index.php', 							// Dashboard
			'googlesitekit-dashboard', 				// Site kit
			'tutorials', 							// Tutorials

			'separator1', 							// Separator

			'edit.php', 							// Posts
			'edit.php?post_type=page', 				// Pages
			'upload.php', 							// Media
			'edit-comments.php', 					// Comments

			'separator2', 							// Separator

			'tms-options',							// TMS options
			'options-general.php', 					// Settings
			'edit.php?post_type=acf-field-group',	// ACF
			'nav-menus.php',						// Menus
			'themes.php', 							// Appearance
			'plugins.php', 							// Plugins
			'tools.php', 							// Tools
			'users.php', 							// Users

			'separator-last', 						// Separator

			'loco', 								// Loco Translate
			'tm/menu/main.php',						// WPML
			'wpforms-overview', 					// WPForms
			'moove-gdpr',							// GDPR
			'wpseo_dashboard', 						// Yoast SEO

		);

	}

endif;
