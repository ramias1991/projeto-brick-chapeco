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

<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php');?>" method="post" class="nocsrf">
    <input type="hidden" name="action_specific" value="items_fino" />
   <fieldset>
   <h2 class="render-title"><b><i class="fa fa-cog"></i> <?php _e('Item-post options', 'fino'); ?></b></h2>
   <div class="form-horizontal">
   <div class="form-row">
                <div class="form-label"><b><?php _e('Location option:', 'fino'); ?></b></div>

<div class="form-controls">
                    <select name="item-post">
                        <option value="countries" <?php if(osc_get_preference('item-post', 'fino') == 'countries'){ echo 'selected="selected"' ; } ?>><?php _e('With Countries','fino'); ?></option>
                        <option value="default" <?php if(osc_get_preference('item-post', 'fino') == 'default'){ echo 'selected="selected"' ; } ?>><?php _e('Without Countries','fino'); ?></option>
</select>
                </div>
</br>				
				<div class="form-label"><b><?php _e('Custom fileds postion:', 'fino'); ?></b></div>
				<div class="form-controls">
                    <select name="custom-fileds">
                        <option value="top" <?php if(osc_get_preference('custom-fileds', 'fino') == 'top'){ echo 'selected="selected"' ; } ?>><?php _e('After categories','fino'); ?></option>
                        <option value="bottom" <?php if(osc_get_preference('custom-fileds', 'fino') == 'bottom'){ echo 'selected="selected"' ; } ?>><?php _e('Bottom','fino'); ?></option>
</select>
                </div>
            </div>
</div>
<div style="clear:both;"></div>
<h2 class="render-title"><b><i class="fa fa-cog"></i> <?php _e('List view title length', 'fino'); ?></b></h2>
<p><b><?php _e('If titles of the items are out of bounds in List view. Reduce these values.', 'fino'); ?></b></p>
   <div class="form-horizontal">
   <div class="form-row">
                <div class="form-label"><b><?php _e('Title length in main page:', 'fino'); ?></b></div>

<div class="form-controls">
<div class="form-controls">
					<input type="text" class="input-small" name="main-title" value="<?php echo osc_get_preference('main-title', 'fino'); ?>" />
                </div>
                </div>
</br>				
				<div class="form-label"><b><?php _e('Title length in search page:', 'fino'); ?></b></div>
				<div class="form-controls">
<div class="form-controls">
					<input type="text" class="input-small" name="search-title" value="<?php echo osc_get_preference('search-title', 'fino'); ?>" />
                </div>
                </div>
            </div>
</div>
</fieldset>
			<div class="form-actions">
				<input id="button" type="submit" value="<?php echo osc_esc_html(__('Save changes','fino')); ?>" class="btn btn-submit">
			</div>
	
	
</form>