<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://pixadrop.com
 * @since      1.0.0
 *
 * @package    easy_share
 * @subpackage easy_share/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    easy_share
 * @subpackage easy_share/admin
 * @author     Your Name <email@example.com>
 */
class easy_share_Admin {


    private static $instance;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $easy_share       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct() {

		$this->enqueue_styles();
		$this->enqueue_scripts();
		$this->easy_share_admin_menu();
		$this->easy_share_admin_settings();
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
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in easy_share_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The easy_share_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		osc_enqueue_style( 'bootsrap-css', osc_plugin_url(dirname(__FILE__)).'admin/css/bootstrap.min.css');
		osc_enqueue_style( 'spectrum-css', osc_plugin_url(dirname(__FILE__)).'admin/css/spectrum.css');
		osc_enqueue_style( 'bootsrap-switch-css', osc_plugin_url(dirname(__FILE__)).'admin/css/bootstrap-switch.min.css');
		osc_enqueue_style( 'easy-share-admin-css', osc_plugin_url(dirname(__FILE__)).'admin/css/easy-share-admin.css');
        osc_enqueue_style( 'easy-share-icons-css', osc_plugin_url(dirname(__FILE__)).'admin/css/easy-share-fonts.css');
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
		 * defined in easy_share_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The easy_share_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		osc_register_script( 'easy-share-admin-js', osc_plugin_url(dirname(__FILE__)).'admin/js/easy-share-admin.js', array('jquery', 'jquery-ui', 'spectrum-js', 'Bootsrap-Switch-js') );
		osc_enqueue_script('easy-share-admin-js');

		osc_register_script( 'spectrum-js', osc_plugin_url(dirname(__FILE__)).'admin/js/spectrum.js', array('jquery') );
		osc_enqueue_script('spectrum-js');

		osc_register_script( 'Bootsrap-Switch-js', osc_plugin_url(dirname(__FILE__)).'admin/js/bootstrap-switch.min.js', array('jquery') );
		osc_enqueue_script('Bootsrap-Switch-js');

	}

	/**
	* The file responsible for dispalying admin view
	* side of the site.
	*/
	public function admin_view_easy_share() {
		osc_redirect_to(osc_admin_render_plugin_url($file = 'easy-share/admin/partials/easy-share-admin-display.php#tabs-1'));
	}
	/**
	* The is responsibel for displyin links in the nav mneu
	* side of the site.
	*/
	public function easy_share_admin_menu() {
		 osc_add_hook('admin_menu_init', 
		 	 osc_add_admin_menu_page('Share', 
		 	    osc_admin_render_plugin_url('easy-share/admin/partials/easy-share-admin-display.php'), 
		 	    'easy-share-menu', 
		 	    'administrator'
		 	 )
		);
	}

	/**
	* The is responsibel saving admin settings in the db
	* side of the site.
	*/
    public function easy_share_admin_settings(){

        switch( Params::getParam('easy_share_action') ) {
            case('general_action'):

                osc_set_preference('easy-share-fb-tag-lg', Params::getParam('easy-share-fb-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-tw-tag-lg', Params::getParam('easy-share-tw-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-lk-tag-lg', Params::getParam('easy-share-lk-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-gl-tag-lg', Params::getParam('easy-share-gl-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-pt-tag-lg', Params::getParam('easy-share-pt-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-sp-tag-lg', Params::getParam('easy-share-sp-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-tm-tag-lg', Params::getParam('easy-share-tm-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-em-tag-lg', Params::getParam('easy-share-em-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-wt-tag-lg', Params::getParam('easy-share-wt-tag-lg'), 'easy-share');
                osc_set_preference('easy-share-fb-tag-sm', Params::getParam('easy-share-fb-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-tw-tag-sm', Params::getParam('easy-share-tw-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-lk-tag-sm', Params::getParam('easy-share-lk-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-gl-tag-sm', Params::getParam('easy-share-gl-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-pt-tag-sm', Params::getParam('easy-share-pt-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-sp-tag-sm', Params::getParam('easy-share-sp-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-tm-tag-sm', Params::getParam('easy-share-tm-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-em-tag-sm', Params::getParam('easy-share-em-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-wt-tag-sm', Params::getParam('easy-share-wt-tag-sm'), 'easy-share');
                osc_set_preference('easy-share-scroll-to-show', Params::getParam('easy-share-scroll-to-show'), 'easy-share');
                osc_set_preference('easy-share-email-subject', Params::getParam('easy-share-email-subject'), 'easy-share');
                osc_set_preference('easy-share-email-message', Params::getParam('easy-share-email-message'), 'easy-share');


                osc_add_flash_ok_message(__('Action was successful', 'easy-share'), 'admin');
                osc_redirect_to(osc_admin_render_plugin_url($file = 'easy-share/admin/partials/easy-share-admin-display.php'));
            break;
            case('layout_action'):
                osc_set_preference('es_lg_layout_options', Params::getParam('es_lg_layout_options'), 'easy-share');
                osc_set_preference('es_sm_layout_options', Params::getParam('es_sm_layout_options'), 'easy-share');
                osc_set_preference('easy-share-default-color', Params::getParam('easy-share-default-color'), 'easy-share');
                osc_set_preference('easy-share-color', Params::getParam('easy-share-color'), 'easy-share');

                
                osc_add_flash_ok_message(__('Action was successful', 'easy-share'), 'admin');
                osc_redirect_to(osc_admin_render_plugin_url($file = 'easy-share/admin/partials/easy-share-admin-display.php#tabs-2'));
            break;
        }
    }

}
