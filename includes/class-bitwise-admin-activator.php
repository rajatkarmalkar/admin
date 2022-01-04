<?php

/**
 * Fired during plugin activation
 *
 * @link       https://github.com/rajatkarmalkar
 * @since      1.0.0
 *
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/includes
 * @author     Rajat Karmalkar <rajat.karmalkar@gmail.com>
 */
class Bitwise_Admin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
		 $table_query = "CREATE TABLE `" . $wpdb->prefix . "pdf_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
		 require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		 dbDelta($table_query);
	}

}
