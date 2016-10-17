<?php
/*
Plugin Name: Subposts
Plugin URI: https://github.com/dougwollison/subposts
Description: Adds ability to create "subpost" objects attached to pages and other post types.
Version: 1.0.0
Author: Doug Wollison
Author URI: http://dougw.me
Tags: posts subposts section ui management
License: GPL2
Text Domain: subposts
Domain Path: /languages
*/

// =========================
// ! Constants
// =========================

/**
 * Reference to the plugin file.
 *
 * @since 1.0.0
 *
 * @var string
 */
define( 'SUBPOSTS_PLUGIN_FILE', __FILE__ );

/**
 * Reference to the plugin directory.
 *
 * @since 1.0.0
 *
 * @var string
 */
define( 'SUBPOSTS_PLUGIN_DIR', dirname( SUBPOSTS_PLUGIN_FILE ) );

// =========================
// ! Includes
// =========================

require( SUBPOSTS_PLUGIN_DIR . '/includes/autoloader.php' );
require( SUBPOSTS_PLUGIN_DIR . '/includes/functions-subposts.php' );
require( SUBPOSTS_PLUGIN_DIR . '/includes/functions-template.php' );

// =========================
// ! Setup
// =========================

Subposts\System::setup();
