<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    List_Users
 * @subpackage List_Users/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    List_Users
 * @subpackage List_Users/public
 * @author     Your Name <email@example.com>
 */
class List_Users_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $list_users    The ID of this plugin.
	 */
	private $list_users;

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
	 * @param      string    $list_users       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $list_users, $version ) {

		$this->list_users = $list_users;
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
		 * defined in List_Users_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The List_Users_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->list_users, plugin_dir_url( __FILE__ ) . 'css/list-users-public.css', array(), $this->version, 'all' );

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
		 * defined in List_Users_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The List_Users_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->list_users, plugin_dir_url( __FILE__ ) . 'js/list-users-public.js', array( 'jquery' ), $this->version, false );

	}

}
