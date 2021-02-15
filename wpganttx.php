<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/rajiff
 * @since             1.0.0
 * @package           Wpganttx
 *
 * @wordpress-plugin
 * Plugin Name:       WP Ganttx
 * Plugin URI:        ganttx.github.io
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Basavaraj K N
 * Author URI:        https://github.com/rajiff
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpganttx
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'WPGANTTX_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wpganttx-activator.php
 */
function activate_wpganttx() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpganttx-activator.php';
	Wpganttx_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wpganttx-deactivator.php
 */
function deactivate_wpganttx() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpganttx-deactivator.php';
	Wpganttx_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wpganttx' );
register_deactivation_hook( __FILE__, 'deactivate_wpganttx' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wpganttx.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wpganttx() {

	$plugin = new Wpganttx();
	$plugin->run();

}
run_wpganttx();
