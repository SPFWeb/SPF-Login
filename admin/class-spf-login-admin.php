<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       spfwebsites.co.nz/about-us
 * @since      1.0.0
 *
 * @package    Spf_Login
 * @subpackage Spf_Login/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Spf_Login
 * @subpackage Spf_Login/admin
 * @author     Jordan Diamond <jordan@spfwebsites.co.nz>
 */
class Spf_Login_Admin {

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
		 * defined in Spf_Login_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Spf_Login_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/spf-login-admin.css', array(), $this->version, 'all' );

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
		 * defined in Spf_Login_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Spf_Login_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/spf-login-admin.js', array( 'jquery' ), $this->version, false );

	}


	public function Spf_Login() {
		echo '<link rel="stylesheet" type="text/css" href="' . plugin_dir_url( __FILE__ ) . 'css/spf-login-admin.css" />';
	}
	
	public function my_login_logo_url() {
		return get_bloginfo( '/' );
	}
	

	public function my_login_logo_url_title() {
		return 'SPF Websites';
	}
	
	
	public function spf_copyright_footer() {
     		echo '<div id="spf-footer">&copy; <a href="http://spf.nz" target="_blank">SPF Websites</a> Powered by <a href="https://wordpress.org"target="_blank">Wordpress</a> </div>';
	}



}
