<?php
/**
 * TMS plugin | Functionalities -> Extend search
 * Extend WordPress search for including custom fields
 * @author Tumàs Muntané
 *
 */



// Join posts and postmeta tables ========================================

add_filter('posts_join', 'tms_search_join' );

if ( ! function_exists( 'tms_search_join' ) ) :

	function tms_search_join( $join ) {

		global $wpdb;

		if ( is_search() ) :

			$join .=' LEFT JOIN '.$wpdb->postmeta. ' ON '. $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';

		endif;

		return $join;
	}

endif;



// Modify the search query with posts_where ========================================

add_filter( 'posts_where', 'tms_search_where' );

if ( ! function_exists( 'tms_search_where' ) ) :

	function tms_search_where( $where ) {

		global $pagenow, $wpdb;

		if ( is_search() ) :

			$where = preg_replace( "/\(\s*".$wpdb->posts.".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
				"(".$wpdb->posts.".post_title LIKE $1) OR (".$wpdb->postmeta.".meta_value LIKE $1)", $where );

		endif;

		return $where;
	}

endif;



// Prevent duplicates ========================================

add_filter( 'posts_distinct', 'tms_search_distinct' );

if ( ! function_exists( 'tms_search_distinct' ) ) :

	function tms_search_distinct( $where ) {

		global $wpdb;

		if ( is_search() ) :

			return "DISTINCT";

		endif;

		return $where;
	}

endif;
