<?php
require_once plugin_dir_path( __FILE__ ) . 'includes/class-aws-s3-video-library-menu-video-library.php';

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    Plugin_Name
 * @subpackage Plugin_Name/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    AWS-S3-Video-Library
 * @subpackage AWS-S3-Video-Library/admin
 * @author     Doug Logan
 */
class AwsS3VideoLibrary_Admin {

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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/aws-s3-video-library-admin.css', array(), $this->version, 'all' );

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
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/aws-s3-video-library-admin.js', array( 'jquery' ), $this->version, false );

	}

	public static function admin_menu(){
		add_menu_page( 'AWS S3 Video Library', 'AWS S3 Video Library', 'manage_options', 'aws-s3-video-library-player-configs', 'AwsS3VideoLibrary_Admin::my_plugin_options' );
		add_submenu_page( 'aws-s3-video-library-player-configs', 'AWS S3 Video Library - Video Configs', 'Video Configs', 'manage_options', 'aws-s3-video-library-player-configs', 'AwsS3VideoLibrary_Admin::my_plugin_options' );
		add_submenu_page( 'aws-s3-video-library-player-configs', 'AWS S3 Video Library - Video Library', 'Video Library', 'manage_options', 'aws-s3-video-library', 'AWSS3VideoLibrary_menu_videoLibrary::getPage' );
		add_submenu_page( 'aws-s3-video-library-player-configs', 'AWS S3 Video Library - Players', 'Players', 'manage_options', 'aws-s3-video-library-players', 'AwsS3VideoLibrary_Admin::my_plugin_options' );
		add_submenu_page( 'aws-s3-video-library-player-configs', 'AWS S3 Video Library - Options', 'Options', 'manage_options', 'aws-s3-video-library-options', 'AwsS3VideoLibrary_Admin::my_plugin_options' );

	}

	public static function my_plugin_options() {
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		echo '<div class="wrap">';
		echo '<p>Here is where the form would go if I actually had options.</p>';
		echo '</div>';
	}

	public static function my_plugin_options2() {
		if ( !current_user_can( 'manage_options' ) )  {
			wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
		}
		echo '<div class="wrap">';
		echo '<p>Here is where the form would go if I actually had options.</p>';
		echo '</div>';
	}
}
