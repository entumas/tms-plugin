<?php
/**
 * TMS plugin | Admin -> Capabilities editors
 * @author Tumàs Muntané
 *
 */



$role_object = get_role( 'editor' );

if ( ! $role_object -> has_cap( 'edit_theme_options' ) ) :
	$role_object -> add_cap( 'edit_theme_options' );
endif;

if ( ! $role_object -> has_cap( 'wpml_manage_taxonomy_translation' ) ) :
	$role_object -> add_cap( 'wpml_manage_taxonomy_translation' );
endif;



// Admin menu ========================================

add_action( 'admin_head', 'tms_hide_menu' );

if ( ! function_exists( 'tms_hide_menu' ) ) :

	function tms_hide_menu() {

		if ( current_user_can( 'editor' ) ) :

			remove_menu_page( 'edit.php?post_type=acf-field-group' );	// ACF
			remove_menu_page( 'themes.php' );							// appearance
			remove_menu_page( 'tools.php' );							// tools

			add_menu_page(
				__( 'Menus', 'tms' ),
				__( 'Menus', 'tms' ),
				'editor',
				'nav-menus.php',
				'',
				'dashicons-menu'
			);

		endif;

	}

endif;
