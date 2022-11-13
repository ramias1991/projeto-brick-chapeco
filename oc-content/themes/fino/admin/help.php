<?php if ( (!defined('ABS_PATH')) ) exit('ABS_PATH is not loaded. Direct access is not allowed.'); ?>
<?php if ( !OC_ADMIN ) exit('User access is not allowed.'); ?>
<h2 class="render-title"><b><i class="fa fa-file-text"></i> <?php _e('Help', 'fino'); ?></b></h2>
<div id="form-horizontal">

    <ul>
	<strong><?php _e('Show regions or cities at main page', 'fino'); ?></strong>
	<li><?php _e('The panel of the administrator - Tools - Locations stats -Calculate Locations stats.', 'fino'); ?></li>
	    <br />	
    <strong><?php _e('Control of the size of images', 'fino'); ?></strong>
    <li><?php _e('The panel of the administrator - Settings - Media:', 'fino'); ?></li>
     <li> <?php _e('The miniature size - 270x203', 'fino'); ?></li>
	 <li><?php _e('The preview size - 350x263', 'fino'); ?></li>
	 <li><?php _e('The normal size - 805x605', 'fino'); ?></li>
	 <li><?php _e('Disable - Force image aspect. No white background will be added to keep the size.', 'fino'); ?></li>
	 <li><?php _e('Enable - Use ImageMagick instead of GD library', 'fino'); ?></li>
    <br />
    
    <br />
    <strong><?php _e('Ads management', 'fino'); ?></strong>
	<li><?php _e('Manage advertising platform, such as Google Adsense', 'fino'); ?> </li>
	<li><?php _e('Homepage and search middle of latest listings work only for list view', 'fino'); ?></li>
	<li><?php _e('Default - Middle calculated that on page 10 listing and show after 5 listing', 'fino'); ?></li>
	<li><?php _e('You can change this in Ads tab.', 'fino'); ?></li>
	 <br />
	<strong><?php _e('Pictures for categories', 'fino'); ?></strong>
    <li><?php _e('If you change standart Osclass categories (or add new), it is necessary for you to make the pictures for the changed categories.', 'fino'); ?></li>
	 <li><?php _e('The size of images should be 27x27 px in PNG file with transparent background', 'fino'); ?></li>
	 <li><?php _e('Images, for example, can be taken here:http://www.flaticon.com/free-icon/black-car_16301', 'fino'); ?></li>
	 <li><?php _e('Go to Category icons tab and ulpoad or replace icons.', 'fino'); ?></li>
     <br />
</ul>
  <br /><br />
</div>

         
