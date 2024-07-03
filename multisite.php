<?php

/**
 * Plugin Name:     Multisite
 * Plugin URI:      PLUGIN SITE HERE
 * Description:     PLUGIN DESCRIPTION HERE
 * Author:          YOUR NAME HERE
 * Author URI:      YOUR SITE HERE
 * Text Domain:     multisite
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         Multisite
 */

use Inc\Loader;
use Inc\Subsite;

if ( ! defined( 'ABSPATH' ) ) {
	die;
}

define( 'MT_DIR', trailingslashit( plugin_dir_path( __FILE__ ) ) );
define( 'MT_DIR_URI', trailingslashit( plugin_dir_url( __FILE__ ) ) );
define( 'MT_VERSION', '1.0.0' );


if ( file_exists( MT_DIR . 'vendor/autoload.php' ) ) {
	require_once MT_DIR . 'vendor/autoload.php';
}


// Init plugin.
Loader::getInstance()->load();



add_action(
	'init',
	function () {
		var_dump(Subsite::getInstance()->domain);
	}
);
