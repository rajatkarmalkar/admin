<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/rajatkarmalkar
 * @since      1.0.0
 *
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/includes
 * @author     Rajat Karmalkar <rajat.karmalkar@gmail.com>
 */
class Bitwise_Admin_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'bitwise-admin',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
