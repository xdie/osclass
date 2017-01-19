<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       http://pixadrop.com
 * @since      1.0.0
 *
 * @package    easy_share
 * @subpackage easy_share/includes
 */

/**
 * The core plugin class. 
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    easy_share
 * @subpackage easy_share/includes
 * @author     Your Name <email@example.com>
 */
class easy_share {

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $easy_share    The string used to uniquely identify this plugin.
	 */
	protected $easy_share;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * The instance that's responsible for creating an instance of self
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var       $instance    store all instance.
	 */
	private static $instance;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->easy_share = 'easy-share';
		$this->version = '2.0.2';

		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

    /**
     * Singleton constructor.
     * @return an theme_images object.
     */
    public static function newInstance() {
            if(!self::$instance instanceof self) {
                    self::$instance = new self;
            }
            return self::$instance;
    }

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the easy_share_i18n class in order to set the domain and to register the hook
	 * with Osclass.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function set_locale() {

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once osc_plugins_path() . 'easy-share/includes/class-easy-share-i18n.php';

		easy_share_i18n::newInstance();


	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function define_admin_hooks() {
        /**
		* The class responsible for defining all actions that occur in the admin area.
		*/
		require_once osc_plugins_path() . 'easy-share/admin/class-easy-share-admin.php';
		/**
		* run instances of the admin class
		*/
		 easy_share_Admin::newInstance();


	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	public function define_public_hooks() {
        /**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once osc_plugins_path() . 'easy-share/public/class-easy-share-public.php';
		/**
		* run instances of the admin class
		*/
		easy_share_Public::newInstance();

	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * Osclass and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_easy_share() {
		return $this->easy_share;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
