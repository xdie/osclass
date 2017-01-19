<?php
/*
Plugin Name: Easy Share
Plugin URI: http://www.pixadrop.com/
Description: This plugin adds very nice social media sharing buttons in your pages.
Version: 2.0.2
Author: Pixadrop
Author URI: http://www.pixadrop.com/
License:           GPL-2.0+
License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
Text Domain:       easy-share
Domain Path:       /languages
Plugin update URI: easy-share
*/
require_once(osc_plugins_path() . 'easy-share/easy-share.php');
// This is needed in order to be able to activate the plugin
osc_register_plugin(osc_plugin_path(__FILE__), 'activate_easy_share');
// This is a hack to show a Uninstall link at plugins table (you could also use some other hook to show a custom option panel)
osc_add_hook(osc_plugin_path(__FILE__)."_uninstall", 'deactivate_easy_share');
// This is a hack to show a Configure link at plugins table (you can also use some other hook to show a custom option panel);
osc_add_hook(osc_plugin_path(__FILE__) . "_configure", 'configure_easy_share');

//show share tags in the fron panel
function display_share_tags(){
	  require_once osc_plugins_path() . 'easy-share/public/class-easy-share-public.php';
	  return easy_share_Public::newInstance()->public_view_easy_share();
}	
osc_add_hook('footer', 'display_share_tags');

//apply custom styling
function display_custom_style(){

	 require_once osc_plugins_path() . 'easy-share/public/class-easy-share-public.php';
	 return easy_share_Public::newInstance()->easy_share_custom_style();
	 
}
osc_add_hook('header', 'display_custom_style');
?>