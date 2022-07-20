<?php
/**
 * TMS plugin | Functionalities -> Main query
 * @author Tumàs Muntané
 *
 */



// add_filter( 'pre_get_posts', 'tms_main_query' );

// if ( ! function_exists( 'tms_main_query' ) ) :

// 	function tms_main_query( $query ) {

// 		if ( $query->is_main_query() && ! is_admin() ) :

// 			if ( $query->is_home() || $query->is_category() || $query->is_tag() ) :

// 				$query->set( 'post_type', array( 'post', 'custom_post' ) );

// 				$query->set( 'post_status', array( 'publish' ) );

// 			endif;

// 		endif;


// 		return $query;

// 	}

// endif;
