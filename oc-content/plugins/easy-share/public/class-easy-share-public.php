<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://pixadrop.com
 * @since      1.0.0
 *
 * @package    easy_share
 * @subpackage easy_share/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    easy_share
 * @subpackage easy_share/public
 * @author     Your Name <email@example.com>
 */
class easy_share_Public {
     

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
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $easy_share       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct() {

		$this->enqueue_styles();
		$this->enqueue_scripts();

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
	 * Register the stylesheets for the public-facing side of the site.
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

		osc_enqueue_style( 'easy-share-public-css', osc_plugin_url(dirname(__FILE__)) . 'public/css/easy-share.css' );
		osc_enqueue_style( 'font-awesome-css', osc_plugin_url(dirname(__FILE__)) . 'public/css/font-awesome.min.css' );

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
		 * defined in easy_share_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The easy_share_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		osc_register_script( 'easy-share-public-js', osc_plugin_url(dirname(__FILE__)) . 'public/js/easy-share.js',  array('jquery', 'jquery-ui'));
		osc_enqueue_script('easy-share-public-js');

	}

	/**
	* The file responsible for dispalying public view
	* side of the site.
	*/
	public function public_view_easy_share() {
		include(osc_plugins_path() . 'easy-share/public/partials/easy-share-display.php');
	}
	/**
	* The is responsibel for custom style
	* side of the site.
	*/
    public function easy_share_custom_style(){

        if(easy_share_checkbox_value('easy-share-default-color') == "activated"){
        	echo '<style>
            .es-social-media-tag.es-fb{background-color: #3b5998 !important;}
.es-social-media-tag.es-tw{background-color: #55acee !important;}
.es-social-media-tag.es-gl{background-color: #dd4b39 !important;}
.es-social-media-tag.es-lk{background-color: #007bb5 !important;}
.es-social-media-tag.es-sp{background-color: #eb4823 !important;}
.es-social-media-tag.es-pt{background-color: #cb2027 !important;}
.es-social-media-tag.es-tm{background-color: #32506d !important;}
.es-social-media-tag.es-em{background-color: #b3b3b3 !important;}
.es-social-media-tag.es-wt{background-color: #4dc247 !important;}
    	</style>';
        }else{
    		echo '<style>
            .es-social-media-wrapper li.es-social-media-tag{background-color: '. easy_share_desc_value('easy-share-color').'; !important;}
    	</style>';
        }

    }

}
