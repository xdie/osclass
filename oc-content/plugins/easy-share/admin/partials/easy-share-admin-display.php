<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://pixadrop.com
 * @since      1.0.0
 *
 * @package    easy_share
 * @subpackage easy_share/admin/partials
 */
?>
<?php
//large devices
 $es_fb_share_tag_lg = osc_get_preference('easy-share-fb-tag-lg', 'easy-share');
 $es_tw_share_tag_lg = osc_get_preference('easy-share-tw-tag-lg', 'easy-share');
 $es_gl_share_tag_lg = osc_get_preference('easy-share-gl-tag-lg', 'easy-share');
 $es_lk_share_tag_lg = osc_get_preference('easy-share-lk-tag-lg', 'easy-share');
 $es_sp_share_tag_lg = osc_get_preference('easy-share-sp-tag-lg', 'easy-share');
 $es_pt_share_tag_lg = osc_get_preference('easy-share-pt-tag-lg', 'easy-share');
 $es_tm_share_tag_lg = osc_get_preference('easy-share-tm-tag-lg', 'easy-share');
 $es_em_share_tag_lg = osc_get_preference('easy-share-em-tag-lg', 'easy-share');
 $es_wt_share_tag_lg = osc_get_preference('easy-share-wt-tag-lg', 'easy-share');
 //small devices
 $es_fb_share_tag_sm = osc_get_preference('easy-share-fb-tag-sm', 'easy-share');
 $es_tw_share_tag_sm = osc_get_preference('easy-share-tw-tag-sm', 'easy-share');
 $es_gl_share_tag_sm = osc_get_preference('easy-share-gl-tag-sm', 'easy-share');
 $es_lk_share_tag_sm = osc_get_preference('easy-share-lk-tag-sm', 'easy-share');
 $es_sp_share_tag_sm = osc_get_preference('easy-share-sp-tag-sm', 'easy-share');
 $es_pt_share_tag_sm = osc_get_preference('easy-share-pt-tag-sm', 'easy-share');
 $es_tm_share_tag_sm = osc_get_preference('easy-share-tm-tag-sm', 'easy-share');
 $es_em_share_tag_sm = osc_get_preference('easy-share-em-tag-sm', 'easy-share');
 $es_wt_share_tag_sm = osc_get_preference('easy-share-wt-tag-sm', 'easy-share');
 //layout
 $es_lg_layout_options = osc_get_preference('es_lg_layout_options', 'easy-share');
 $es_sm_layout_options = osc_get_preference('es_sm_layout_options', 'easy-share');

?>
<?php
    $page_url = osc_admin_render_plugin_url($file = 'easy-share/admin/partials/easy-share-admin-display.php');
?>
<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="wrap easy-share-admin">
    <div class="easy-share-info">
        <span class="info-text"><?php _e('Thanks for installing! Easy Share 2.0 makes your users want to share on your site. We hope you enjoy using it. ', 'easy-share')?></span> 
        <div class="margin-x-thin"></div>
        <div class="easy-share-btn">
			<form  id="es_paypal_form" name="_xclick" action="https://www.paypal.com/in/cgi-bin/webscr" method="post" class="nocsrf">
			    <input type="hidden" name="cmd" value="_donations" />
			    <input type="hidden" name="business" value="droppixa@gmail.com">
			    <input type="hidden" name="item_name" value="Buy US Coffee">
		        <input type="hidden" name="item_number" value="Easy Share">
			    <input type="hidden" name="rm" value="2">
			    <input type="hidden" name="currency_code" value="USD">
			    <input type="hidden" name="lc" value="US" />
		        <select name="amount" class="select-box-medium">
		            <option value="50">50$</option>
		            <option value="25">25$</option>
		            <option value="10" selected>10$</option>
		            <option value="5">5$</option>
		            <option value=""><?php _e('Custom', 'easy-share'); ?></option>
		        </select>
			    <input type="submit" class="btn btn-submit" name="submit" value="<?php echo osc_esc_html(__('Buy Us Coffee :)', 'easy-share')); ?>" style="margin-left:10px; border-radius: 0px;"></p>
			</form>
		    <a href="http://pixadrop.com" class="btn btn-submit" target="blank"><?php _e('Discover Pixadrop', 'easy-share');?></a>
		</div>
    </div>
    <div class="margin-thin"></div>
    <div class="easy-share-content">
        <div class="easy-share-forms-grid">
            <div id="easy_share_settings_tabs">
                <ul>
                    <li><a href="#tabs-1"><span><?php _e('General Settings', 'easy-share');?></span></a></li>
                    <li><a href="#tabs-2"><span><?php _e('Layout Settings', 'easy-share');?></span></a></li>
                    <li><a href="#tabs-3"><span><?php _e('Documentation', 'easy-share');?></span></a></li>
                </ul>
                <div id="tabs-1">
                    <form action="<?php echo $page_url; ?>" method="post" enctype="multipart/form-data" class="nocsrf">
                        <input type="hidden" name="easy_share_action" value="general_action" />
                        <div class="tab-body">
                            <div class="margin-thin"></div>
                            <input type="hidden" name="test" value="easy" />
					        <fieldset>
						       	<h4><?php _e('Large Devices', 'easy-share')?><small class="pull-right"><?php _e('Choose tags to show on Large devices:', 'easy-share')?></small></h4>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Facebook', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-fb-tag-lg" value="enable" <?php if($es_fb_share_tag_lg !='' && $es_fb_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Twitter', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-tw-tag-lg" value="enable" <?php if($es_tw_share_tag_lg !='' && $es_tw_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Google Plus', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-gl-tag-lg" value="enable" <?php if($es_gl_share_tag_lg !='' && $es_gl_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('LinkedIn', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-lk-tag-lg" value="enable" <?php if($es_lk_share_tag_lg !='' && $es_lk_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Pintrest', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-pt-tag-lg" value="enable" <?php if($es_pt_share_tag_lg !='' && $es_pt_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Stumbleupon', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-sp-tag-lg" value="enable" <?php if($es_sp_share_tag_lg !='' && $es_sp_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Tumblr', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-tm-tag-lg" value="enable" <?php if($es_tm_share_tag_lg !='' && $es_tm_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Email', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-em-tag-lg" value="enable" <?php if($es_em_share_tag_lg !='' && $es_em_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Whatsapp', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-wt-tag-lg" value="enable" <?php if($es_wt_share_tag_lg !='' && $es_wt_share_tag_lg == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
					    
					       </fieldset>
					       <fieldset>
						       	<h4><?php _e('Small Devices', 'easy-share')?><small class="pull-right"><?php _e('Choose tags to show on small devices:', 'easy-share')?></small></h4>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Facebook', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-fb-tag-sm" value="enable" <?php if($es_fb_share_tag_sm !='' && $es_fb_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Twitter', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-tw-tag-sm" value="enable" <?php if($es_tw_share_tag_sm !='' && $es_tw_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Google Plus', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-gl-tag-sm" value="enable" <?php if($es_gl_share_tag_sm !='' && $es_gl_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('LinkedIn', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-lk-tag-sm" value="enable" <?php if($es_lk_share_tag_sm !='' && $es_lk_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Pintrest', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-pt-tag-sm" value="enable" <?php if($es_pt_share_tag_sm !='' && $es_pt_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Stumbleupon', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-sp-tag-sm" value="enable" <?php if($es_sp_share_tag_sm !='' && $es_sp_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Tumblr', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-tm-tag-sm" value="enable" <?php if($es_tm_share_tag_sm !='' && $es_tm_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Email', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-em-tag-sm" value="enable" <?php if($es_em_share_tag_sm !='' && $es_em_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
						        <div class="form-row">
						        	<span><?php _e('Whatsapp', 'easy-share')?></span>
						        	<span class="pull-right switch">
			                           <input type="checkbox" name="easy-share-wt-tag-sm" value="enable" <?php if($es_wt_share_tag_sm !='' && $es_wt_share_tag_sm == "enable"){echo "checked='checked'";}?> />
			                        </span>
						        </div>
						        <hr />
					       </fieldset>
					       <div class="tab-body">
	                            <div class="margin-thin"></div>
	                            <fieldset>
	                                <div class="row">
	                                    <div class="col-xs-4">
	                                        <div class="label">
	                                            <span><?php _e('Scroll To Show Offset:', 'easy-share');?></span>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <input type="number" value="<?php echo easy_share_desc_value('easy-share-scroll-to-show'); ?>" name="easy-share-scroll-to-show" ><br/>
                                        <small><?php _e('Define the distance from the bottom of the browser at which tags are revealed whe user scrolls to bottom, minimum is 700:', 'easy-share')?></small>
	                                    </div>
	                                </div>
	                                <div class="margin-thin"></div>
                                    <div class="row">
	                                    <div class="col-xs-4">
	                                        <div class="label">
	                                            <span><?php _e('Email Sublect:', 'easy-share');?></span>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <input type="text" value="<?php echo easy_share_desc_value('easy-share-email-subject')?>" name="easy-share-email-subject"><br/>
                                        <small><?php _e('This will act as the subject of emails sent when users share via email:', 'easy-share')?></small>
	                                    </div>
	                                </div>
	                                <div class="margin-thin"></div>
	                                <div class="row">
	                                    <div class="col-xs-4">
	                                        <div class="label">
	                                            <span><?php _e('Email Message:', 'easy-share');?></span>
	                                        </div>
	                                    </div>
	                                    <div class="col-xs-7">
	                                        <textarea name="easy-share-email-message" rows="6"><?php echo easy_share_desc_value('easy-share-email-message')?></textarea><br/>
                                        <small><?php _e('This message will be attached to the links that the user sends when sharing via email:', 'easy-share')?></small>
	                                    </div>
	                                </div>
	                            </fieldset>
	                        </div>
                            <div class="margin-thin"></div>
                        </div>
                        <div class="margin-thin"></div>
                        <div class="form-actions">
                            <input type="submit" class="btn btn-submit" value="Save Changes">
                        </div>
                    </form>
                </div>
                <div id="tabs-2">
                    <form action="<?php echo $page_url; ?>" method="post" enctype="multipart/form-data" class="nocsrf">
                        <input type="hidden" name="easy_share_action" value="layout_action" />
                        <div class="margin-thin"></div>
                        <fieldset>
					       	<h4><?php _e('Large Devices', 'easy-share')?><small class="pull-right"><?php _e('Choose layout to show on Large devices:', 'easy-share')?></small></h4>
					        <hr />
					        <table class="es-form-table">
					             <tbody>
					                <tr>
					                    <th scope="row" align="left" valign="top"><?php _e('Choose Layout:', 'easy-share')?></th>
					                    <td valign="bottom">
					                      <span id="lg-style-option" class="es-layout-icon-select">
							                <input type="radio" value="left" id="es_lg_layout_options_left" name="es_lg_layout_options" <?php if($es_lg_layout_options !='' && $es_lg_layout_options == "left"){echo "checked='checked'";}?>>
						                    <label class="es-layout-option-label" for="es_lg_layout_options_left"><i class="es-layout es-layout-lg-left"></i><br><?php _e('Left', 'easy-share')?></label>
						                    <input type="radio"  value="center" id="es_lg_layout_options_center" name="es_lg_layout_options" <?php if($es_lg_layout_options !='' && $es_lg_layout_options == "center"){echo "checked='checked'";}?>>
						                    <label class="es-layout-option-label"  for="es_lg_layout_options_center"><i class="es-layout es-layout-lg-center"></i><br><?php _e('Center', 'easy-share')?></label>
						                    <input type="radio" value="right" id="es_lg_layout_options_right" name="es_lg_layout_options" <?php if($es_lg_layout_options !='' && $es_lg_layout_options == "right"){echo "checked='checked'";}?>>
						                    <label class="es-layout-option-label" for="es_lg_layout_options_right"><i class="es-layout es-layout-lg-right"></i><br><?php _e('Right', 'easy-share')?></label>
						                 </span>
						                 <span><?php _e('Choose a layout (right,left or center).')?></span>
						                </td>
						            </tr>
						        </tbody>
						    </table>
				       </fieldset>
				       <fieldset>
					       	<h4><?php _e('Small Devices', 'easy-share')?><small class="pull-right"><?php _e('Choose layout to show on small devices:', 'easy-share')?></small></h4>
					        <hr />
					        <table class="es-form-table">
					             <tbody>
					                <tr>
					                    <th scope="row" align="left" valign="top"><?php _e('Choose Layout:', 'easy-share')?></th>
					                    <td valign="bottom">
					                      <span id="sm-style-option" class="es-layout-icon-select">
							                <input type="radio" value="left" id="es_sm_layout_options_left" name="es_sm_layout_options" <?php if($es_sm_layout_options !='' && $es_sm_layout_options == "left"){echo "checked='checked'";}?>>
						                    <label class="es-layout-option-label" for="es_sm_layout_options_left"><i class="es-layout es-layout-sm-left"></i><br><?php _e('Left', 'easy-share')?></label>
						                    <input type="radio"  value="center" id="es_sm_layout_options_center" name="es_sm_layout_options" <?php if($es_sm_layout_options !='' && $es_sm_layout_options == "center"){echo "checked='checked'";}?>>
						                    <label class="es-layout-option-label"  for="es_sm_layout_options_center"><i class="es-layout es-layout-sm-center"></i><br><?php _e('Center', 'easy-share')?></label>
						                    <input type="radio" value="right" id="es_sm_layout_options_right" name="es_sm_layout_options" <?php if($es_sm_layout_options !='' && $es_sm_layout_options == "right"){echo "checked='checked'";}?>>
						                    <label class="es-layout-option-label" for="es_sm_layout_options_right"><i class="es-layout es-layout-sm-right"></i><br><?php _e('Right', 'easy-share')?></label>
						                 </span>
						                 <span><?php _e('Choose a layout (right,left or center).')?></span>
						                </td>
						            </tr>
						        </tbody>
						    </table>
				       </fieldset>
				       <fieldset>
					       	<h4><?php _e('Custom Style', 'easy-share')?><small class="pull-right"><?php _e('Customize your own style:', 'easy-share')?></small></h4>
					        <hr />
				            <fieldset>
                               <div class="row">
                                 <div class="col-xs-4">
                                    <div class="label">
                                        <span><?php _e('Color:', 'easy-share');?></span>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <input type="checkbox" id="easy-share-color-default"  value="activated" name="easy-share-default-color" data-label-text="Use Default" data-on-text="enabled" data-off-text="disabled" <?php if(easy_share_checkbox_value('easy-share-default-color') == 'activated'){ echo 'checked=""'; }?>>
                                </div>
                            </div>
                            <div class="margin-medium"></div>
                            <div class="custom-color-wrap">
                              <div class="row">
                                <div class="col-xs-4">
                                    <div class="label">
                                        <span><?php _e('Choose Color:', 'easy-share');?></span>
                                    </div>
                                </div>
                                <div class="col-xs-7">
                                    <input type="text" id="easy_share_colorPicker" value="<?php echo easy_share_desc_value('easy-share-color'); ?>" name="easy-share-color">
                                </div>
                            </div>
                            </div>
                        </fieldset>
                        <div class="margin-medium"></div>
                        <div class="form-actions">
                            <input type="submit" class="btn btn-submit" value="Save Changes">
                        </div>
                     </form>
               </div>
               <div id="tabs-3">
                    <div class="margin-thin"></div>
                    <div class="tab-body">
                       <div class="es-col">
		      	  <h3><?php _e('1.0 Install:', 'easy-share')?></h3>
		      	  <div class="es-col-cnt">
			      	  	Thank you for downloading Easy Share!!! In this document, you will find step-by-step instructions for installing and using this plugin. These plugin is compatible with all versions of Osclass.
			      	    <br/><br/>The following osclass tutorial should help on how to install a plugin:
			      	    <a href="https://doc.osclass.org/Plugins#How_to_install_a_plugin"><?php _e('How_to_install_a_plugin', 'easy-share')?></a>
			      	  </div>
			      </div>
			      <div class="es-col">
			      	  <h3><?php _e('2.0 Display:', 'easy-share')?></h3>
			      </div>
			      <div class="es-col">
			      	  <h3><?php _e('2.1 Display on front View:', 'easy-share')?></h3>
			      	  <div class="es-col-cnt">
			      	  	To display social media tags on the front view, this plugin uses the built in Osclass hooks.
			      	  	It is important to check your theme and make sure the following hooks are running!
			      	  	<br/><br/><div class="alert alert-danger" style="widht:100%;">&lt;?php osc_run_hook('header'); ?&gt;</div>
			      	    <br/><div class="alert alert-danger" style="widht:100%;">&lt;?php osc_run_hook('footer'); ?&gt;</div><br/>
			      	    
			      	    <strong>NOTE:</strong> Most Osclass themes come with above mentioned hooks already running. If tags do not display on front view after install,  make sure your theme has above hooks in the right places.<br/>
			      	    Whatsapp sharing tags only appear in small devices.
			      	    <br/><br/>Find more about osclass hooks <a href="https://doc.osclass.org/Hooks"><?php _e('Osclass Hooks', 'easy-share')?></a>
			      	    <br/>
			      	  </div>
			      </div>
			      <div class="es-col">
			      	  <h3><?php _e('2.2 Friendly URLs:', 'easy-share')?></h3>
			      	  <div class="es-col-cnt">
			      	  	Sharing Works better with friendly Urls. make sure your site uses Friendly Urls or else the plugin will not work efficiently.
			      	  	<br/><br/> Learn how to make friendly Urls: <a href="https://doc.osclass.org/Settings#Permalinks">Permalinks</a>.
			      	  </div>
			      </div>
			      <div class="es-col">
			      	  <h3><?php _e('3.0 Custom Style:', 'easy-share')?></h3>
			      	  <div class="es-col-cnt">
			      	  	You can completely customize Easy share to your desired appearance. From choosing which tags to show, to the background color you would like your tags to have.<br/>
			      	  	Default layout color option will set the background color for each sharing tag as the theme color for the specific social media platform.<br/>
			      	  	Custom layout color option will allow you to set background color to blend in with your theme style.
			      	  	<br/><br/>
			      	  	Layout style options allows you to choose where you would like your tags to show both on large and small devices.
			      	  </div>
			      </div>
			      <div class="es-col">
			      	  <h3><?php _e('4.0 Help:', 'easy-share')?></h3>
			      	  <div class="es-col-cnt">
			      	  	If you have any questions and feedback regarding this plugin, please email us at <a href="mailto:support@pixadrop.com">support@pixadrop.com</a>
			      	  </div>
			      </div>     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
