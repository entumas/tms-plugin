;
jQuery( document ).ready( function( $ ) {
	var messages = {
		comment : {
			required  : tmsJsTranslates.comValCommentRequired,
			minlength : tmsJsTranslates.comValCommentMinlength,
		},
		author : tmsJsTranslates.comValAuthor,
		email  : {
			required : tmsJsTranslates.comValEmailRequired,
			email    : tmsJsTranslates.comValEmailEmail,
		},
		url : tmsJsTranslates.comValUrl,
		wp_comment_privacy_consent : tmsJsTranslates.comValWp_comment_privacy_consent,
	};
	$( '#commentform' ).validate( {
		rules: {
			comment : {
				required  : true,
				minlength : 20
			},
			author : {
				required  : true,
				minlength : 2
			},
			email : {
				required : true,
				email    : true
			},
			url : {
				required : false,
				url      : true
			}
		},
		messages : messages,
		errorElement : "span",
		errorClass: 'input-error',
		errorPlacement : function( error, element ) {
			element.parent().before( error );
		}
	} );
} );