<?php
/**
 * TMS plugin | Functionalities -> Is blog
 * @author Tumàs Muntané
 *
 */



if ( ! function_exists( 'tms_is_blog' ) ) :

	function tms_is_blog() {

		return ( is_archive() || is_author() || is_category() || is_home() || is_tag() ) && 'page' != get_post_type();

	}

endif;
