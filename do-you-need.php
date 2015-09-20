<?php
/**
 * Plugin Name: Do you need help with...
 * Plugin Description: An experiment to contact your customers after they read your posts.
 * Author: Nikhil Vimal
 * Author URI: http://nik.techvoltz.com
 * Version: 1.0
 * Plugin URI:
 * License: GNU GPLv2+
 */

/**
 * @param $content The Post Content
 */
function dynh_insert_assitance_box( $content ) {
	global $post;

	$page = get_page_by_title( 'Contact' );
	$page_ID = $page->ID;


	if ( is_single() ) {
		return $content . '<hr style="border-top: 1px solid black">' . '<div style="text-align: center;border: 1px dashed #e74c3c;background:#ecf0f1 ;padding-top: 10px;padding-bottom: 10px;"> Do you need help with "' . $post->post_title . '"</p><a href="' . esc_url( get_permalink( $page_ID) ) . '">Contact me!</a></div>';

	}


}
add_filter( 'the_content', 'dynh_insert_assitance_box' );
