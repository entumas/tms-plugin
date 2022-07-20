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
			'comValCommentRequired'            => __( 'Enter a comment', 'tms' ),
			'comValCommentMinlength'           => __( 'Comment is too short', 'tms' ),
			'comValAuthor'                     => __( 'Enter your name', 'tms' ),
			'comValEmailRequired'              => __( 'Enter your email', 'tms' ),
			'comValEmailEmail'                 => __( 'Enter a valid email address', 'tms' ),
			'comValUrl'                        => __( 'This isn\'t a URL', 'tms' ),
			'comValWp_comment_privacy_consent' => __( 'Accept the privacy policy', 'tms' )

		);

	}

endif;
