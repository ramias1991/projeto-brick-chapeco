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

  <h2 class="render-title"><b><i class="fa fa-file-text"></i> <?php _e('Main Welcome Text', 'fino'); ?></b></h2>
<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php');?>" method="post" class="nocsrf">
    <input type="hidden" name="action_specific" value="welcome_fino" />
   <fieldset>
   <div class="form-horizontal">
		     <div class="form-row">
                <div class="form-label"><?php _e('Main page H1 Welcome Text ', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 59px; width: 500px;"name="mainh1-finorevo"><?php echo osc_esc_html( osc_get_preference('mainh1-finorevo', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This  H1 Welcome Text be shown at the Main page.', 'fino'); ?></div>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><?php _e('Main page under H1 Welcome Text ', 'fino'); ?></div>
                <div class="form-controls">
                    <textarea style="height: 115px; width: 500px;"name="maintext-finorevo"><?php echo osc_esc_html( osc_get_preference('maintext-finorevo', 'fino') ); ?></textarea>
                    <br/><br/>
                    <div class="help-box"><?php _e('This Welcome Text under H1 be shown at the Main page.', 'fino'); ?></div>
                </div>
            </div>
			</div>
    

			<div class="form-actions">
				<input id="button" type="submit" value="<?php echo osc_esc_html(__('Save changes','fino')); ?>" class="btn btn-submit">
			</div>
	
	</fieldset>
</form>