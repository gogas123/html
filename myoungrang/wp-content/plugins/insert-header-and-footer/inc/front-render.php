<?php

/**
 * [ihaf_wp_head_contents description]
 * @return [type] [description]
 */
function ihaf_wp_head_contents() {
	echo stripslashes( get_option( 'ihaf-header', '' ) );
}
add_action( 'wp_head', 'ihaf_wp_head_contents', 10, 1 );

/**
 * [ihaf_wp_footer_contents description]
 * @return [type] [description]
 */
function ihaf_wp_footer_contents() {
	echo stripslashes( get_option( 'ihaf-footer', '' ) );
}
add_action( 'wp_footer', 'ihaf_wp_footer_contents', 10, 1 );
