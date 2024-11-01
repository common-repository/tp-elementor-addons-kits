<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://thatpeoples.com/
 * @since      1.0.0
 *
 * @package    Elementor_Addons_Kits
 * @subpackage Elementor_Addons_Kits/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Elementor_Addons_Kits
 * @subpackage Elementor_Addons_Kits/admin
 * @author     Rahul Harkhani <rahul.harkhani11@gmail.com>
 */
class Elementor_Addons_Kits_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Elementor_Addons_Kits_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elementor_Addons_Kits_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/elementor-addons-kits-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Elementor_Addons_Kits_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Elementor_Addons_Kits_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/elementor-addons-kits-admin.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public static function tp_elementor_menu() {

		add_menu_page( __( 'TP Elementor', 'tp-elementor-addons-kits' ), __( 'TP Elementor', 'tp-elementor-addons-kits' ), 'manage_options', 'tp-plugin-base', array( $this, 'tp_plugin_base' ), ELEMENTOR_ADDONS_KITS_URL . 'admin/images/tp-icon.png', 10 );

	}

	/**
	 * The content of the base page.
	 *
	 * @since    1.0.0
	 */
	public function tp_plugin_base() {

		include_once( ELEMENTOR_ADDONS_KITS_PATH . 'admin/setting-page.php' );
	
	}

}
