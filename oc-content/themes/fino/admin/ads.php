<?php
 /*
 * Copyright 2017 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
?>

<?php if ( (!defined('ABS_PATH')) ) exit('ABS_PATH is not loaded. Direct access is not allowed.'); ?>
<?php if ( !OC_ADMIN ) exit('User access is not allowed.'); ?>
<h2 class="render-title"><b><i class="fa fa-money"></i> <?php _e('Ads management', 'fino'); ?></b></h2>
	<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php'); ?>" method="post" class="nocsrf">
    <input type="hidden" name="action_specific" value="ads_fino" />
	 <fieldset>
	
    <div class="form-row">
        <div class="form-label"></div>
        <div class="form-controls">
            <p><?php _e('In this section you can configure your site to display ads and start generating revenue.', 'fino'); ?><br/><?php _e('If you are using an online advertising platform, such as Google Adsense, copy and paste here the provided code for ads.', 'fino'); ?><br/><?php _e('Important! Google Adsense allows you to place only three blocks in page ', 'fino'); ?></p>
        </div>
    </div>
	
   
        <div class="form-horizontal">
		     <div class="form-row">
                <div class="form-label"><?php _e('Main page under categories', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="cat-finorevo"><?php echo osc_esc_html( osc_get_preference('cat-finorevo', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the Main page under categories. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Homepage top of  latest listings', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="main-finorevo-top"><?php echo osc_esc_html( osc_get_preference('main-finorevo-top', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the top of your latest listings in main page. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Homepage under of latest listings', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="main-finorevo-under"><?php echo osc_esc_html( osc_get_preference('main-finorevo-under', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on the main page under of your latest listings. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Homepage middle of latest listings(only list view).Read Help', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="main-finorevo-middle"><?php echo osc_esc_html( osc_get_preference('main-finorevo-middle', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on the main page middle of your latest listings. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><b><?php _e('No. of item after Show - Homepage middle:', 'fino'); ?></b></div>
                <div class="form-controls">
					<input type="text" class="input-small" name="main-middle" value="<?php echo osc_get_preference('main-middle', 'fino'); ?>" />
                </div>
            </div>
			<div style="clear:both;"></div>
            <div class="form-row">
                <div class="form-label"><?php _e('Search results top', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="search-finorevo-top"><?php echo osc_esc_html( osc_get_preference('search-finorevo-top', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the top search results of your site. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-label"><?php _e('Search results middle(only list view).Read Help', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="search-finorevo_middle"><?php echo osc_esc_html( osc_get_preference('search-finorevo_middle', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at middle of search results of your website. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-row" >
                <div class="form-label"><b><?php _e('No. of item after Show - Search results middle:', 'fino'); ?></b></div>
                <div class="form-controls">
					<input type="text" class="input-small" name="search-middle" value="<?php echo osc_get_preference('search-middle', 'fino'); ?>" />
                </div>
            </div>
			<div style="clear:both;"></div>
			<div class="form-row">
                <div class="form-label"><?php _e('Search under of listings', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="search-finorevo_under"><?php echo osc_esc_html( osc_get_preference('search-finorevo_under', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on the search page under of your listings. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><?php _e('Search sidebar', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="side-finorevo"><?php echo osc_esc_html( osc_get_preference('side-finorevo', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown at the Search sidebar. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><?php _e('Item under of listing description', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="item-finorevo_desc"><?php echo osc_esc_html( osc_get_preference('item-finorevo_desc', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on the item page under of listing description. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><?php _e('Item right of listing images', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;" name="item-finorevo_image"><?php echo osc_esc_html( osc_get_preference('item-finorevo_image', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This ad will be shown on the item page right of listing images. Note that the  ad will be Adaptive.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-actions">
                <input type="submit" value="<?php echo osc_esc_html( __('Save changes', 'fino') ); ?>" class="btn btn-submit">
            </div>
        </div>
    </fieldset>
</form>








