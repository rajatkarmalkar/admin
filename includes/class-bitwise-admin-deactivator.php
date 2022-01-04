<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://github.com/rajatkarmalkar
 * @since      1.0.0
 *
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/includes
 * @author     Rajat Karmalkar <rajat.karmalkar@gmail.com>
 */
class Bitwise_Admin_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {


	     global $wpdb;
		 $wpdb->query( 'DROP TABLE IF EXISTS ' . $wpdb->prefix . 'pdf_manager' );
		
	
	}

}
