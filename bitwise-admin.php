<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/rajatkarmalkar
 * @since             1.0.0
 * @package           Bitwise_Admin
 *
 * @wordpress-plugin
 * Plugin Name:       Bitwise Admin
 * Plugin URI:        https://bitwiseacademy.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Rajat Karmalkar
 * Author URI:        https://github.com/rajatkarmalkar
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       bitwise-admin
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
define( 'BITWISE_ADMIN_VERSION', '1.0.0' );
define( 'BITWISE_ADMIN_PATH', plugin_dir_path(__FILE__) );
/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-bitwise-admin-activator.php
 */
function activate_bitwise_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bitwise-admin-activator.php';
	Bitwise_Admin_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-bitwise-admin-deactivator.php
 */
function deactivate_bitwise_admin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-bitwise-admin-deactivator.php';
	Bitwise_Admin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_bitwise_admin' );
register_deactivation_hook( __FILE__, 'deactivate_bitwise_admin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-bitwise-admin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_bitwise_admin() {

	$plugin = new Bitwise_Admin();
	$plugin->run();

}
run_bitwise_admin();
