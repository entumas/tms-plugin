<?php

// Functionalities
// ========================================


// Security
if ( file_exists( dirname( __FILE__ ) . '/security.php' ) )
	require_once dirname( __FILE__ ) . '/security.php';


// Disable gutenberg
if ( file_exists( dirname( __FILE__ ) . '/disable-gutenberg.php' ) )
	require_once dirname( __FILE__ ) . '/disable-gutenberg.php';


// clean-head
if ( file_exists( dirname( __FILE__ ) . '/clean-head.php' ) )
	require_once dirname( __FILE__ ) . '/clean-head.php';


// Deregister script
if ( file_exists( dirname( __FILE__ ) . '/deregister-script.php' ) )
	require_once dirname( __FILE__ ) . '/deregister-script.php';


// Main query
// if ( file_exists( dirname( __FILE__ ) . '/main-query.php' ) )
// 	require_once dirname( __FILE__ ) . '/main-query.php';


// is-blog
if ( file_exists( dirname( __FILE__ ) . '/is-blog.php' ) )
	require_once dirname( __FILE__ ) . '/is-blog.php';


// Extend search
if ( file_exists( dirname( __FILE__ ) . '/extend-search.php' ) )
	require_once dirname( __FILE__ ) . '/extend-search.php';


// SVG icon
if ( file_exists( dirname( __FILE__ ) . '/svg-icon.php' ) )
	require_once dirname( __FILE__ ) . '/svg-icon.php';


// Video
if ( file_exists( dirname( __FILE__ ) . '/video.php' ) )
	require_once dirname( __FILE__ ) . '/video.php';


// JS translates
if ( file_exists( dirname( __FILE__ ) . '/js-translates.php' ) )
	require_once dirname( __FILE__ ) . '/js-translates.php';
