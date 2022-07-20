<?php
/**
 * TMS plugin | Functionalities -> JS translates
 * @author Tumàs Muntané
 *
 */



if ( ! function_exists( 'tms_js_translates' ) ) :

	function tms_js_translates() {

		return array(

			// comment-validation.js
			'comValCommentRequired'            => __( 'Enter a comment', 'tms-plugin' ),
			'comValCommentMinlength'           => __( 'Comment is too short', 'tms-plugin' ),
			'comValAuthor'                     => __( 'Enter your name', 'tms-plugin' ),
			'comValEmailRequired'              => __( 'Enter your email', 'tms-plugin' ),
			'comValEmailEmail'                 => __( 'Enter a valid email address', 'tms-plugin' ),
			'comValUrl'                        => __( 'This isn\'t a URL', 'tms-plugin' ),
			'comValWp_comment_privacy_consent' => __( 'Accept the privacy policy', 'tms-plugin' )

		);

	}

endif;
