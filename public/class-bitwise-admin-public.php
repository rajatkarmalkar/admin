<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://github.com/rajatkarmalkar
 * @since      1.0.0
 *
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Bitwise_Admin
 * @subpackage Bitwise_Admin/public
 * @author     Rajat Karmalkar <rajat.karmalkar@gmail.com>
 */
class Bitwise_Admin_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bitwise_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bitwise_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/bitwise-admin-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Bitwise_Admin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Bitwise_Admin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/bitwise-admin-public.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( 'flipbookjs', plugin_dir_url( __FILE__ ) . 'js/flipbook.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'prefixfree', plugin_dir_url( __FILE__ ) . 'js/prefixfree.min.js', array( 'jquery' ), $this->version, false );
		

	}

	public function custom_page_template() {
		global $post;
		$page_template = BITWISE_ADMIN_PATH . '/public/partials/bitwise-admin-public-display.php';
		//return $page_template;
	}


	

	public function bitwise_shortcode_callback(){
		ob_start();
		include_once( BITWISE_ADMIN_PATH . '/public/partials/bitwise-admin-public-display.php' );
		$template = ob_get_contents();
		ob_end_clean();
		echo $template;
	}

}
