<?php
/**
* @title		joombig banner auto slider module
* @website		http://www.joombig.com
* @copyright	Copyright (C) 2013 joombig.com. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>

<link rel="stylesheet" href="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/css/settings.css" type="text/css" />

<style>
	#rev_slider_1_1_wrapper{
		width:<?php echo $width_module;?>;
		margin:0 auto;
	}
<?php if ($display_bullets == 0){?>
		.tp-bullets{
			display:none; 
		}
<?php }?>
</style>
<div id="banner_auto_slider_main" value="1" style="margin:0 auto;"> 
<div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper" style="left:<?php echo $left_module ;?>px;background-color:transparent;padding:0px;padding-bottom:5px;">
	<div id="rev_slider_1_1" class="rev_slider" style="display:none;">
<ul>	
<?php 
	$count1=1;
	foreach($lists as $item) { ?>
	<li data-transition="<?php echo $animation_style;?>">
		<img src="<?php echo $item->image ?>"  alt="<?php echo $item->title ?>"  data-bgposition="center center" data-bgfit="100% auto" data-bgrepeat="no-repeat" id="img_info<?php echo $count1;?>">
	</li>
<?php	
	$count1++;}
?>		
</ul>
<?php if($display_bannertimer == 1){?>
	<div class="tp-bannertimer"></div>
<?php }?>
</div>
</div>	
<div style="clear:both;"></div>	
</div>	
<?php
if ($enable_jQuery == 1) {?>
	<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/jquery.min.js" type="text/javascript"></script>
<?php }?>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/jquery-noconflict.js" type="text/javascript"></script>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/caption.js" type="text/javascript"></script>
<script>
	var pic = document.getElementById("img_info1");
	var img_height = pic.height;
	var img_width = pic.width;
	var mod_width = document.getElementById("rev_slider_1_1_wrapper").clientWidth;
	var  call_width_module, call_height_module, call_speed;
	//call_width_module  = '<?php echo $width_module;?>';
	//call_height_module = <?php echo $height_module;?>;
	call_speed = <?php echo $speed;?>;
</script>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/jquery.theme.js" type="text/javascript"></script>
<script src="<?php echo $mosConfig_live_site; ?>/modules/mod_joombig_banner_auto_slider/assets/script/jquery.slider.js" type="text/javascript"></script>	
