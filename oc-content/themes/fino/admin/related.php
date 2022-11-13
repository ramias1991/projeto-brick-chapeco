<?php if ( (!defined('ABS_PATH')) ) exit('ABS_PATH is not loaded. Direct access is not allowed.');
if ( !OC_ADMIN ) exit('User access is not allowed.');
    
    $ra_numads            = '';
    $dao_preference = new Preference();
    if(Params::getParam('related_fino_ra_numads') != '') {
        $ra_numads = Params::getParam('related_fino_ra_numads');
    } else {
        $ra_numads = (osc_related_fino_ra_numads() != '') ? osc_related_fino_ra_numads() : '' ;
    }
    
    $category            = '';
    $dao_preference = new Preference();
    if(Params::getParam('related_fino_ra_category') != '') {
        $category = Params::getParam('related_fino_ra_category');
    } else {
        $category = (osc_related_fino_category() != '') ? osc_related_fino_category() : '' ;
    }
    
    $region            = '';
    $dao_preference = new Preference();
    if(Params::getParam('related_fino_ra_region') != '') {
        $region = Params::getParam('related_fino_ra_region');
    } else {
        $region = (osc_related_fino_region() != '') ? osc_related_fino_region() : '' ;
    }
    
    $country            = '';
    $dao_preference = new Preference();
    if(Params::getParam('related_fino_ra_country') != '') {
        $country = Params::getParam('related_fino_ra_country');
    } else {
        $country = (osc_related_fino_country() != '') ? osc_related_fino_country() : '' ;
    }
    
    $picOnly            = '';
    $dao_preference = new Preference();
    if(Params::getParam('related_fino_picOnly') != '') {
        $picOnly = Params::getParam('related_fino_picOnly');
    } else {
        $picOnly = (osc_related_fino_picOnly() != '') ? osc_related_fino_picOnly() : '' ;
    }
    
    
    $premiumonly            = '';
    $dao_preference = new Preference();
    if(Params::getParam('related_fino_premiumonly') != '') {
        $premiumonly = Params::getParam('related_fino_premiumonly');
    } else {
        $premiumonly = (osc_related_fino_premiumOnly() != '') ? osc_related_fino_premiumOnly() : '' ;
    }
    
    
    
    if( Params::getParam('option') == 'stepone' ) {

        osc_set_preference('related_fino_ra_numads', ($ra_numads), 'fino');
        osc_set_preference('related_fino_ra_category', ($category ? '1' : '0'), 'fino');
        osc_set_preference('related_fino_ra_country', ($country ? '1' : '0'), 'fino');
        osc_set_preference('related_fino_ra_region', ($region ? '1' : '0'), 'fino');
        osc_set_preference('related_fino_picOnly', ($picOnly ? '1' : '0'), 'fino');
        osc_set_preference('related_fino_premiumonly', ($premiumonly ? '1' : '0'), 'fino');


        osc_add_flash_ok_message(__('Setting saved successfully', 'fino'), 'admin');
                header('Location: ' . osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php#related')); exit;
    }
    unset($dao_preference) ;
    
?>
<h2 class="render-title "><b><i class="fa fa-cog"></i>  <?php _e('Related Ads Preferences', 'fino'); ?></b></h2>

<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php'); ?>" method="post" enctype="multipart/form-data" class="nocsrf">
    <input type="hidden" name="action_specific" value="related" />
    <input type="hidden" name="option" value="stepone" />
    
    <fieldset>
        
<div class="form-horizontal">

        <div class="form-row"><div class="form-label wide" style="width:400px;border-bottom:1px solid grey;">
        <label for="related_fino_ra_numads" style="font-weight: bold;float:left;margin-left:40px;"><?php _e('Number of related ads  ', 'fino'); ?></label>:
        </div>
         
        <div class="form-controls"><input type="text" name="related_fino_ra_numads" id="related_fino_ra_numads" value="<?php echo $ra_numads; ?>" />
        <div class="help-box"><?php _e('Enter how many ads you want to show on Item Page (Default is 4)', 'fino'); ?></div>
       </div>
        </div>
        
        <div class="form-row"><div class="form-label wide" style="width:400px;border-bottom:1px solid grey;">
        <label for="related_fino_premiumonly" style="font-weight: bold;float:left;margin-left:40px;"><?php _e('Show only premium ads', 'fino'); ?></label>:
        </div>
        <div class="form-controls"><div class="form-label-selection">
        <select name="related_fino_premiumonly" id="related_fino_premiumonly">
        	<option <?php if($premiumonly ==0){echo 'selected="selected"';}?> value='0'><?php _e('No', 'fino'); ?></option>
        	<option <?php if($premiumonly ==1){echo 'selected="selected"';}?> value='1'><?php _e('Yes', 'fino'); ?></option>
        </select>
        <div class="help-box"><?php _e('Select Yes if you want to show premium ads only', 'fino'); ?></div>
        </div></div>
        </div>
        
        <div class="form-row"><div class="form-label wide" style="width:400px;border-bottom:1px solid grey;">
        <label for="related_fino_picOnly" style="font-weight: bold;float:left;margin-left:40px;"><?php _e('Show ads with pictures only', 'fino'); ?></label>:
        </div>
        <div class="form-controls"><div class="form-label-selection">
        <select name="related_fino_picOnly" id="related_fino_picOnly">
        	<option <?php if($picOnly ==0){echo 'selected="selected"';}?> value='0'><?php _e('No', 'fino'); ?></option>
        	<option <?php if($picOnly ==1){echo 'selected="selected"';}?> value='1'><?php _e('Yes', 'fino'); ?></option>
        </select>
        <div class="help-box"><?php _e('Select Yes if you want to show ads with picture only', 'fino'); ?></div>
        </div></div>
        </div>
       
       	<div class="form-row"><div class="form-label wide" style="width:400px;border-bottom:1px solid grey;">
        <label for="related_fino_ra_category" style="font-weight: bold;float:left;margin-left:40px;"><?php _e('Show ads with same category', 'fino'); ?></label>:
        </div>
        <div class="form-controls"><div class="form-label-selection">
        <select name="related_fino_ra_category" id="related_fino_ra_category">
        	<option <?php if($category ==0){echo 'selected="selected"';}?> value='0'><?php _e('No', 'fino'); ?></option>
        	<option <?php if($category ==1){echo 'selected="selected"';}?> value='1'><?php _e('Yes', 'fino'); ?></option>
        </select>
        <div class="help-box"><?php _e('Select Yes to Filter ads by Category', 'fino'); ?></div>
        </div></div>
        </div>
       
       	<div class="form-row"><div class="form-label wide" style="width:400px;border-bottom:1px solid grey;">
        <label for="related_fino_ra_country" style="font-weight: bold;float:left;margin-left:40px;"><?php _e('Show ads with same country', 'fino'); ?></label>:
        </div>
        <div class="form-controls"><div class="form-label-selection">
        <select name="related_fino_ra_country" id="related_fino_ra_country">
        	<option <?php if($country ==0){echo 'selected="selected"';}?> value='0'><?php _e('No', 'fino'); ?></option>
        	<option <?php if($country ==1){echo 'selected="selected"';}?> value='1'><?php _e('Yes', 'fino'); ?></option>
        </select>
        <div class="help-box"><?php _e('Select Yes to Filter ads by Country', 'fino'); ?></div>
        </div></div>
        </div>
        
        <div class="form-row"><div class="form-label wide" style="width:400px;border-bottom:1px solid grey;">
        <label for="related_fino_ra_region" style="font-weight: bold;float:left;margin-left:40px;"><?php _e('Show ads with same region', 'fino'); ?></label>:
        </div>
        <div class="form-controls"><div class="form-label-selection">
        <select name="related_fino_ra_region" id="related_fino_ra_region">
        	<option <?php if($region ==0){echo 'selected="selected"';}?> value='0'><?php _e('No', 'fino'); ?></option>
        	<option <?php if($region ==1){echo 'selected="selected"';}?> value='1'><?php _e('Yes', 'fino'); ?></option>
        </select>
        <div class="help-box"><?php _e('Select Yes to Filter ads by Region', 'fino'); ?></div>
        </div></div>
        </div>
        



</div>
        <div class="form-actions">
        <input id="button" type="submit" value="<?php echo osc_esc_html( __('Save changes', 'fino') ); ?>" class="btn btn-submit"/>
        </div>
     </fieldset>
    
</form>
