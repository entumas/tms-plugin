<?php
/**
 * TMS plugin | Admin -> TMS options
 * @author Tumàs Muntané
 *
 */


if ( function_exists( 'acf_add_options_page' ) ) :

	acf_add_options_page( array(
		'page_title' => __( 'TMS options', 'tms' ),
		'menu_title' => __( 'TMS options', 'tms' ),
		'menu_slug'  => 'tms-options',
		'capability' => 'edit_posts',
		'redirect'	 => false
	) );

endif;
