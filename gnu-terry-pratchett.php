<?php
/**
* Plugin Name: GNU Terry Pratchett
* Version: 0.3.1
* Plugin URI: https://github.com/nickcernis/gnu-terry-pratchett
* Description: Adds an X-Clacks-Overhead HTTP header set to 'GNU Terry Pratchett' on all non-admin pages.
* Author: Nick Cernis
* Author URI: http://twitter.com/nickcernis/
* License: GPLv2+
* Text Domain: gnu-terry-pratchett
*
* @package gnu-terry-pratchett
*/

add_filter( 'wp_headers', 'gnu_terry_pratchett_header' );
/**
 * Add X-Clacks-Overhead HTTP header.
 *
 * @param string $headers Default headers.
 * @return array The modified list of headers.
 */
function gnu_terry_pratchett_header( $headers ) {
	$headers['X-Clacks-Overhead'] = 'GNU Terry Pratchett';

	return $headers;
}

add_action( 'wp_head', 'gnu_terry_pratchett_meta' );
/**
 * Add meta tag for good measure.
 *
 * This isn't equivalent to setting an HTTP header, but at least the plugin will have
 * some effect if the site uses a caching plugin. The wp_headers filter never kicks
 * in if page caching is active, you see.
 */
function gnu_terry_pratchett_meta() {
	echo '<meta http-equiv="X-Clacks-Overhead" content="GNU Terry Pratchett" />';
}
