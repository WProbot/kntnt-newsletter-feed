<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt Newsletter Feed
 * Plugin URI:        https://github.com/kntnt/kntnt-newsletter-feed
 * GitHub Plugin URI: https://github.com/kntnt/kntnt-newsletter-feed
 * Description:       Provides a RSS feed for automatic newsletter generation.
 * Version:           1.2.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       kntnt-newsletter-feed
 * Domain Path:       /languages
 */

namespace Kntnt\Newsletter_Feed;

defined( 'WPINC' ) || die;

// To debug this plugin, set both WP_DEBUG and following constant to true.
// define( 'KNTNT_NEWSLETTER_FEED_DEBUG', true );

spl_autoload_register( function ( $class ) {
	$ns_len = strlen( __NAMESPACE__ );
	if ( 0 == substr_compare( $class, __NAMESPACE__, 0, $ns_len ) ) {
		require_once __DIR__ . '/classes/' . strtr( strtolower( substr( $class, $ns_len + 1 ) ), '_', '-' ) . '.php';
	}
} );

new Plugin();
