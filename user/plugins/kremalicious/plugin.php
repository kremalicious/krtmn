<?php
/*
Plugin Name: Kremalicious
Plugin URI: http://matthiaskretschmann.com
Description: Customize all the things.
Version: 0.1
Author: kremalicious
Author URI: http://matthiaskretschmann.com
*/

if( !defined( 'YOURLS_ABSPATH' ) ) die();

// modify the <title> of pages in the admin area
yourls_add_filter( 'html_title', 'krtmn_change_title' );

function krtmn_change_title( $value, $title ) {
	$value = $title.' | krt.mn';
	return $value;
}


// modify admin logo
//yourls_add_action( 'html_logo', 'krtmn_logo' );
//
//function krtmn_logo() {
//	echo '<li><a href="http://ozh.org/">hello</a></li>';
//}


// custom css
yourls_add_action( 'html_head', 'krtmn_assets' );

function krtmn_assets() {
	echo '<link rel="stylesheet" href="'. YOURLS_SITE .'/user/css/krtmn.css" />';
}

// favicon & touch icons
yourls_add_action( 'html_head', 'krtmn_touch_icons' );

function krtmn_touch_icons() {
	echo '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/apple-touch-icon-114x114-precomposed.png">
		  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/apple-touch-icon-72x72-precomposed.png">
		  <link rel="shortcut icon" href="/apple-touch-icon-precomposed.png">
		  <link rel="shortcut icon" href="/favicon.ico">';
}


// custom viewport
yourls_add_action( 'html_head', 'krtmn_viewport' );

function krtmn_viewport() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
}

?>
