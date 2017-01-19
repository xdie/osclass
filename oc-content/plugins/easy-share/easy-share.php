<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by osclass to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://pixadrop.com
 * @since             1.0.0
 * @package           easy_share
 *
 */

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-easy-share-activator.php
 */
function activate_easy_share() {
	require_once osc_plugin_path('easy-share/includes/class-easy-share-activator.php');
	easy_share_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-easy-share-deactivator.php
 */
function deactivate_easy_share() {
	require_once osc_plugin_path('easy-share/includes/class-easy-share-deactivator.php');
	easy_share_Deactivator::deactivate();
}
/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require_once(osc_plugins_path() . 'easy-share/includes/class-easy-share.php');

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_easy_share() {
    
	easy_share::newInstance();

}
osc_add_hook('init', 'run_easy_share');
osc_add_hook('init_admin', 'run_easy_share');

function easy_share_js() { ?>
    <script type="text/javascript">
			//responsive grid
		    var easy_share_widht = $(window).width();

			if (easy_share_widht >= 750) {
			   
			   $( window ).load(function() {
			   	  //slide out tag on hver
			      $(".es-social-media-tag").hover(function(){
					 $(this).addClass('transform-tag');
				  },function(){
				  	 $(this).removeClass('transform-tag');
				  });

				  $('.es-social-media-tag.es-wt').remove();
				  $('.es-sm-screen-size').remove();
				  $('.es-lg-screen-size').show();

			   });

			   //add margin offset
			   $(window).scroll(function() {
					if ($(this).scrollTop() > $(document).height() - <?php echo easy_share_desc_value('easy-share-scroll-to-show'); ?>) {
						$('.es-social-media-wrapper-fluid.left').removeClass('left-offset');
						$('.es-social-media-wrapper-fluid.right').removeClass('right-offset');
						$('.es-social-media-wrapper-fluid.bottom').removeClass('bottom-offset');
					} else {
						$('.es-social-media-wrapper-fluid.left').addClass('left-offset');
						$('.es-social-media-wrapper-fluid.right').addClass('right-offset');
						$('.es-social-media-wrapper-fluid.bottom').addClass('bottom-offset');
					}

				});

			} else if(easy_share_widht <= 749) {
			   //add margin offset
			   $(window).scroll(function() {
					if ($(this).scrollTop() > $(document).height() - <?php echo easy_share_desc_value('easy-share-scroll-to-show'); ?>) {
						$('.es-social-media-wrapper-fluid.left').removeClass('left-offset');
						$('.es-social-media-wrapper-fluid.right').removeClass('right-offset');
						$('.es-social-media-wrapper-fluid.bottom').removeClass('bottom-offset');
					} else {
						$('.es-social-media-wrapper-fluid.left').addClass('left-offset');
						$('.es-social-media-wrapper-fluid.right').addClass('right-offset');
						$('.es-social-media-wrapper-fluid.bottom').addClass('bottom-offset');
					}

					$('.es-lg-screen-size').remove();
					$('.es-sm-screen-size').show();

				});
			};

			$( window ).load(function(){
			    	$('.es-social-media-wrapper .es-social-media-tag.es-social-click').click(function(e){
			    		
			    	e.preventDefault();
			        //getting the url
			        $(location).attr('href');

			        //descritption 
			        var text = $.trim($("meta[name=description]").attr("content") || $("title").text());
			        //store url in a variable
			        var url = window.location.href;
			        //var url = 'http://www.joshuawinn.com/facebooks-sharer-php-longer-deprecated-2014/';
			        var clickedbtn = $(this);

			        if(clickedbtn.is($('.es-social-media-tag.es-fb'))){
			            window.open('https://www.facebook.com/sharer/sharer.php?u='+url);
			        }else if(clickedbtn.is($('.es-social-media-tag.es-tw '))){
			             window.open("https://twitter.com/share?url="+url);
			        }else if(clickedbtn.is($('.es-social-media-tag.es-gl'))){
			             window.open("https://plus.google.com/share?url="+url);
			        }else if(clickedbtn.is($('.es-social-media-tag.es-lk'))){
			             window.open("https://www.linkedin.com/shareArticle?mini=true&url="+url);
			        }else if(clickedbtn.is($('.es-social-media-tag.es-pt'))){
			             window.open("https://pinterest.com/pin/create/button/?url="+url+"&media="+ $(".main-photo img, img").attr('src')+"&description="+$("#description").text());
			        }else if(clickedbtn.is($('.es-social-media-tag.es-tm'))){
			             window.open("https://www.tumblr.com/share/photo?source="+ $(".main-photo img, img").attr('src'));
			        }else if(clickedbtn.is($('.es-social-media-tag.es-sp'))){
			             window.open("http://www.stumbleupon.com/submit?url="+url);
			        }else if(clickedbtn.is($('.es-social-media-tag.es-em'))){
			             window.location = "mailto:?subject=<?php echo easy_share_desc_value('easy-share-email-subject')?> time&body=<?php echo easy_share_desc_value('easy-share-email-message')?> ================================================== "+url;
			        }
			    });
		    });
	 </script>

<?php }
osc_add_hook('footer', 'easy_share_js');

/**
 * The code that show configuration link at the panel.
 */
function configure_easy_share() {
	/**
	* The class responsible for defining all actions that occur in the admin area.
	*/
	require_once osc_plugins_path() . 'easy-share/admin/class-easy-share-admin.php';
	/**
	* run instances of the admin class
	*/
	easy_share_Admin::newInstance()->admin_view_easy_share();
}

/*  input values
/* ------------------------------------ */
if( !function_exists('easy_share_desc_value')) {
    function easy_share_desc_value($field) {
    	if($field == 'easy-share-color'){
	        if(osc_get_preference('easy-share-color', 'easy-share') != ""){
	           return osc_get_preference('easy-share-color', 'easy-share');
	        }else{
               return '#01a185';
	        }
        }elseif($field == 'easy-share-scroll-to-show'){
	        if(osc_get_preference('easy-share-scroll-to-show', 'easy-share') != ""){
	           return osc_get_preference('easy-share-scroll-to-show', 'easy-share');
	        }else{
               return 1500;
	        }
        }elseif($field == 'easy-share-email-subject'){
	        if(osc_get_preference('easy-share-email-subject', 'easy-share') != ""){
	           return osc_get_preference('easy-share-email-subject', 'easy-share');
	        }else{
               return null;
	        }
        }elseif($field == 'easy-share-email-message'){
	        if(osc_get_preference('easy-share-email-message', 'easy-share') != ""){
	           return osc_get_preference('easy-share-email-message', 'easy-share');
	        }else{
               return null;
	        }
        }else{
        	return null;
        }

    }
  }

/*  checkbox values
/* ------------------------------------ */
if( !function_exists('easy_share_checkbox_value')) {
    function easy_share_checkbox_value($field) {
    	if($field == 'easy-share-default-color'){
	        if(osc_get_preference('easy-share-default-color', 'easy-share') == 'activated'){
	           return osc_get_preference('easy-share-default-color', 'easy-share');
	        }else{
               return 'not-checked';
	        }
        }else{
        	return null;
        }

    }
  }