<?php
/**
 * Plugin Name: GNU Terry Pratchett
 * Version: 0.1.2
 * Plugin URI: https://github.com/nickcernis/gnu-terry-pratchett
 * Description: Adds an X-Clacks-Overhead HTTP header set to 'GNU Terry Pratchett' on all non-admin pages.
 * Author: Nick Cernis
 * Author URI: http://twitter.com/nickcernis/
 * License: GPLv2+
 */

/**
 * Add X-Clacks-Overhead HTTP header
 *
 * @param $headers
 *
 * @return array The modified list of headers.
 */
function gnu_terry_pratchett_header( $headers ) {

	if ( ! is_admin() ) {
		$headers['X-Clacks-Overhead'] = 'GNU Terry Pratchett';
	}

	return $headers;

}

add_filter( 'wp_headers', 'gnu_terry_pratchett_header' );