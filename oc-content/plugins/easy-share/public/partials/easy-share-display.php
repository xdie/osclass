<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://pixadrop.com
 * @since      1.0.0
 *
 * @package    easy_share
 * @subpackage easy_share/public/partials
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
 $easy_share_style = osc_get_preference('easy-share-style', 'easy-share'); 
 $url =  'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<div class="es-lg-screen-size" style="display:none;">
<?php if( $es_lg_layout_options !='' &&  $es_lg_layout_options == 'left') {?>
<div class="es-social-media-wrapper-fluid left left-offset">
	<ul class="es-social-media-wrapper">
	   <?php if( $es_fb_share_tag_lg !='' &&  $es_fb_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-fb"><a><span><?php _e('Share on Facebook', 'easy-share')?></span><i class="ico es-ico-fb fa fa-facebook"></i></a></li>
	   <?php } ?>
	   <?php if( $es_tw_share_tag_lg !='' &&  $es_tw_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tw"><a><span><?php _e('Share on Twitter' , 'easy-share')?></span><i class="ico es-ico-tw fa fa-twitter"></i></a></li>
	   <?php } ?>
	   <?php if( $es_gl_share_tag_lg !='' &&  $es_gl_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-gl"><a><span><?php _e('Share on Google Plus' , 'easy-share')?></span><i class="ico es-ico-gl fa fa-google-plus"></i></a></li>
	   <?php } ?>
	   <?php if( $es_lk_share_tag_lg !='' &&  $es_lk_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-lk"><a><span><?php _e('Share on LinkedIn', 'easy-share')?></span><i class="ico es-ico-lk fa fa-linkedin"></i></a></li>
	   <?php } ?>
	   <?php if( $es_sp_share_tag_lg !='' &&  $es_sp_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-sp"><a><span><?php _e('Share on Stumbleupon', 'easy-share')?></span><i class="ico es-ico-sp fa fa-stumbleupon"></i></a></li>
	   <?php } ?>
	   <?php if( $es_pt_share_tag_lg !='' &&  $es_pt_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-pt"><a><span><?php _e('Share on Pinterest', 'easy-share')?></span><i class="ico es-ico-pt fa fa-pinterest"></i></a></li>
	   <?php } ?>
	   <?php if( $es_tm_share_tag_lg !='' &&  $es_tm_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tm"><a><span><?php _e('Share on Tumblr', 'easy-share')?></span><i class="ico es-ico-tm fa fa-tumblr"></i></a></li>
	   <?php } ?>
	   <?php if( $es_em_share_tag_lg !='' &&  $es_em_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-em"><a><span><?php _e('Share on Email', 'easy-share')?></span><i class="ico es-ico-sp fa fa-envelope-o"></i></a></li>
	   <?php } ?>
	   <?php if( $es_wt_share_tag_lg !='' &&  $es_wt_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-wt"><a href="whatsapp://send?text=<?php echo $url ?>" data-action="share/whatsapp/share"><span><?php _e('Share on Whatsapp', 'easy-share')?></span><i class="ico es-ico-wt fa fa-whatsapp"></i></a></li>
	   <?php } ?>	
	</ul>
</div>
<?php } ?>
<?php if( $es_lg_layout_options !='' &&  $es_lg_layout_options == 'right') {?>
<div class="es-social-media-wrapper-fluid right right-offset">
	<ul class="es-social-media-wrapper">
	   <?php if( $es_fb_share_tag_lg !='' &&  $es_fb_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-fb"><a><i class="ico es-ico-fb fa fa-facebook"></i><span><?php _e('Share on Facebook', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_tw_share_tag_lg !='' &&  $es_tw_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tw"><a><i class="ico es-ico-tw fa fa-twitter"></i><span><?php _e('Share on Twitter', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_gl_share_tag_lg !='' &&  $es_gl_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-gl"><a><i class="ico es-ico-gl fa fa-google-plus"></i><span><?php _e('Share on Google Plus', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_lk_share_tag_lg !='' &&  $es_lk_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-lk"><a><i class="ico es-ico-lk fa fa-linkedin"></i><span><?php _e('Share on LinkedIn', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_sp_share_tag_lg !='' &&  $es_sp_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-sp"><a><i class="ico es-ico-sp fa fa-stumbleupon"></i><span><?php _e('Share on Stumbleupon', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_pt_share_tag_lg !='' &&  $es_pt_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-pt"><a><i class="ico es-ico-pt fa fa-pinterest"></i><span><?php _e('Share on Pinterest', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_tm_share_tag_lg !='' &&  $es_tm_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tm"><a><i class="ico es-ico-tm fa fa-tumblr"></i><span><?php _e('Share on Tumblr', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_em_share_tag_lg !='' &&  $es_em_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-em"><a><i class="ico es-ico-em fa fa-envelope-o"></i><span><?php _e('Share on Email', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_wt_share_tag_lg !='' &&  $es_wt_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-wt"><a href="whatsapp://send?text=<?php echo $url ?>" data-action="share/whatsapp/share"><i class="ico es-ico-wt fa fa-whatsapp"></i><span><?php _e('Share on Whatsapp', 'easy-share')?></span></a></li>	
	   <?php } ?>  	
	</ul>
</div>
<?php } ?>
<?php if( $es_lg_layout_options !='' &&  $es_lg_layout_options == 'center') {?>
<div class="es-social-media-wrapper-fluid bottom bottom-offset">
	<ul class="es-social-media-wrapper">
	   <?php if( $es_fb_share_tag_lg !='' &&  $es_fb_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-fb"><a><i class="ico es-ico-fb fa fa-facebook"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_tw_share_tag_lg !='' &&  $es_tw_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tw"><a><i class="ico es-ico-tw fa fa-twitter"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_gl_share_tag_lg !='' &&  $es_gl_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-gl"><a><i class="ico es-ico-gl fa fa-google-plus"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_lk_share_tag_lg !='' &&  $es_lk_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-lk"><a><i class="ico es-ico-lk fa fa-linkedin"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_sp_share_tag_lg !='' &&  $es_sp_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-sp"><a><i class="ico es-ico-sp fa fa-stumbleupon"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_pt_share_tag_lg !='' &&  $es_pt_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-pt"><a><i class="ico es-ico-pt fa fa-pinterest"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_tm_share_tag_lg !='' &&  $es_tm_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tm"><a><i class="ico es-ico-tm fa fa-tumblr"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_em_share_tag_lg !='' &&  $es_em_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-em"><a><i class="ico es-ico-em fa fa-envelope-o"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_wt_share_tag_lg !='' &&  $es_wt_share_tag_lg == 'enable'){ ?>
           <li class="es-social-media-tag es-wt"><a href="whatsapp://send?text=<?php echo $url ?>" data-action="share/whatsapp/share"><i class="ico es-ico-wt fa fa-whatsapp"></i></a></li><!---->
	   <?php } ?>	
	</ul>
</div>
<?php } ?>
</div>
<div class="es-sm-screen-size" style="display:none;">
<?php if( $es_sm_layout_options !='' &&  $es_sm_layout_options == 'left') {?>
<div class="es-social-media-wrapper-fluid left left-offset">
	<ul class="es-social-media-wrapper">
	   <?php if( $es_fb_share_tag_sm !='' &&  $es_fb_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-fb"><a><span><?php _e('Share on Facebook', 'easy-share')?></span><i class="ico es-ico-fb fa fa-facebook"></i></a></li>
	   <?php } ?>
	   <?php if( $es_tw_share_tag_sm !='' &&  $es_tw_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tw"><a><span><?php _e('Share on Twitter' , 'easy-share')?></span><i class="ico es-ico-tw fa fa-twitter"></i></a></li>
	   <?php } ?>
	   <?php if( $es_gl_share_tag_sm !='' &&  $es_gl_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-gl"><a><span><?php _e('Share on Google Plus' , 'easy-share')?></span><i class="ico es-ico-gl fa fa-google-plus"></i></a></li>
	   <?php } ?>
	   <?php if( $es_lk_share_tag_sm !='' &&  $es_lk_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-lk"><a><span><?php _e('Share on LinkedIn', 'easy-share')?></span><i class="ico es-ico-lk fa fa-linkedin"></i></a></li>
	   <?php } ?>
	   <?php if( $es_sp_share_tag_sm !='' &&  $es_sp_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-sp"><a><span><?php _e('Share on Stumbleupon', 'easy-share')?></span><i class="ico es-ico-sp fa fa-stumbleupon"></i></a></li>
	   <?php } ?>
	   <?php if( $es_pt_share_tag_sm !='' &&  $es_pt_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-pt"><a><span><?php _e('Share on Pinterest', 'easy-share')?></span><i class="ico es-ico-pt fa fa-pinterest"></i></a></li>
	   <?php } ?>
	   <?php if( $es_tm_share_tag_sm !='' &&  $es_tm_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tm"><a><span><?php _e('Share on Tumblr', 'easy-share')?></span><i class="ico es-ico-tm fa fa-tumblr"></i></a></li>
	   <?php } ?>
	   <?php if( $es_em_share_tag_sm !='' &&  $es_em_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-em"><a><span><?php _e('Share on Email', 'easy-share')?></span><i class="ico es-ico-sp fa fa-envelope-o"></i></a></li>
	   <?php } ?>
	   <?php if( $es_wt_share_tag_sm !='' &&  $es_wt_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-wt"><a href="whatsapp://send?text=<?php echo $url ?>" data-action="share/whatsapp/share"><span><?php _e('Share on Whatsapp', 'easy-share')?></span><i class="ico es-ico-wt fa fa-whatsapp"></i></a></li>
	   <?php } ?>	
	</ul>
</div>
<?php } ?>
<?php if( $es_sm_layout_options !='' &&  $es_sm_layout_options == 'right') {?>
<div class="es-social-media-wrapper-fluid right right-offset">
	<ul class="es-social-media-wrapper">
	   <?php if( $es_fb_share_tag_sm !='' &&  $es_fb_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-fb"><a><i class="ico es-ico-fb fa fa-facebook"></i><span><?php _e('Share on Facebook', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_tw_share_tag_sm !='' &&  $es_tw_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tw"><a><i class="ico es-ico-tw fa fa-twitter"></i><span><?php _e('Share on Twitter', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_gl_share_tag_sm !='' &&  $es_gl_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-gl"><a><i class="ico es-ico-gl fa fa-google-plus"></i><span><?php _e('Share on Google Plus', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_lk_share_tag_sm !='' &&  $es_lk_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-lk"><a><i class="ico es-ico-lk fa fa-linkedin"></i><span><?php _e('Share on LinkedIn', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_sp_share_tag_sm !='' &&  $es_sp_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-sp"><a><i class="ico es-ico-sp fa fa-stumbleupon"></i><span><?php _e('Share on Stumbleupon', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_pt_share_tag_sm !='' &&  $es_pt_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-pt"><a><i class="ico es-ico-pt fa fa-pinterest"></i><span><?php _e('Share on Pinterest', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_tm_share_tag_sm !='' &&  $es_tm_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tm"><a><i class="ico es-ico-tm fa fa-tumblr"></i><span><?php _e('Share on Tumblr', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_em_share_tag_sm !='' &&  $es_em_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-em"><a><i class="ico es-ico-em fa fa-envelope-o"></i><span><?php _e('Share on Email', 'easy-share')?></span></a></li>
	   <?php } ?>
	   <?php if( $es_wt_share_tag_sm !='' &&  $es_wt_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-wt"><a href="whatsapp://send?text=<?php echo $url ?>" data-action="share/whatsapp/share"><i class="ico es-ico-wt fa fa-whatsapp"></i><span><?php _e('Share on Whatsapp', 'easy-share')?></span></a></li>	
	   <?php } ?>  	
	</ul>
</div>
<?php } ?>
<?php if( $es_sm_layout_options !='' &&  $es_sm_layout_options == 'center') {?>
<div class="es-social-media-wrapper-fluid bottom bottom-offset">
	<ul class="es-social-media-wrapper">
	   <?php if( $es_fb_share_tag_sm !='' &&  $es_fb_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-fb"><a><i class="ico es-ico-fb fa fa-facebook"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_tw_share_tag_sm !='' &&  $es_tw_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tw"><a><i class="ico es-ico-tw fa fa-twitter"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_gl_share_tag_sm !='' &&  $es_gl_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-gl"><a><i class="ico es-ico-gl fa fa-google-plus"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_lk_share_tag_sm !='' &&  $es_lk_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-lk"><a><i class="ico es-ico-lk fa fa-linkedin"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_sp_share_tag_sm !='' &&  $es_sp_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-sp"><a><i class="ico es-ico-sp fa fa-stumbleupon"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_pt_share_tag_sm !='' &&  $es_pt_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-pt"><a><i class="ico es-ico-pt fa fa-pinterest"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_tm_share_tag_sm !='' &&  $es_tm_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-tm"><a><i class="ico es-ico-tm fa fa-tumblr"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_em_share_tag_sm !='' &&  $es_em_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-social-click es-em"><a><i class="ico es-ico-em fa fa-envelope-o"></i></a></li><!---->
	   <?php } ?>
	   <?php if( $es_wt_share_tag_sm !='' &&  $es_wt_share_tag_sm == 'enable'){ ?>
           <li class="es-social-media-tag es-wt"><a href="whatsapp://send?text=<?php echo $url ?>" data-action="share/whatsapp/share"><i class="ico es-ico-wt fa fa-whatsapp"></i></a></li><!---->
	   <?php } ?>	
	</ul>
</div>
<?php } ?>
</div>
