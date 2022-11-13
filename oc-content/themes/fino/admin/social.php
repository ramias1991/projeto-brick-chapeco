<?php 
 		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
?>

<?php if ( (!defined('ABS_PATH')) ) exit('ABS_PATH is not loaded. Direct access is not allowed.'); ?>
<?php if ( !OC_ADMIN ) exit('User access is not allowed.'); ?>

<h2 class="render-title"><b><i class="fa fa-cog"></i> <?php _e('Social links in footer', 'fino'); ?></b></h2>
<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php');?>" method="post" class="nocsrf">
    <input type="hidden" name="action_specific" value="social_fino" />
   <fieldset>
   <div class="form-horizontal">
		     <div class="form-row">
                <div class="form-label"><?php _e('Facebook', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 18px; width: 500px;"name="facebook-finorevo"><?php echo osc_esc_html( osc_get_preference('facebook-finorevo', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This link to you Facebook page will be shown in footer.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><?php _e('Twitter', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 18px; width: 500px;"name="twitter-finorevo"><?php echo osc_esc_html( osc_get_preference('twitter-finorevo', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This link to you Twitter page will be shown in footer.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><?php _e('Google+', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 18px; width: 500px;"name="google-finorevo"><?php echo osc_esc_html( osc_get_preference('google-finorevo', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This link to you Google+ page will be shown in footer.', 'fino'); ?></div>
                </div>
            </div>
			</div>

			<div class="form-actions">
				<input id="button" type="submit" value="<?php echo osc_esc_html(__('Save changes','fino')); ?>" class="btn btn-submit">
			</div>
	
	</fieldset>
</form>