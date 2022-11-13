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
<link rel="stylesheet" href="<?php echo osc_current_web_theme_url('admin/css/admin.css');?>">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<div class="credit-osclasspro"> <a href="https://<?php _e('osclass-pro.com', 'fino'); ?>/" target="_blank" class="pro_logo"> <img src="<?php echo osc_current_web_theme_url('admin/img/logo.png');?>" alt="Premium themes and plugins" title="Premium themes and plugins" /> </a>
  <div class="follow">
    <ul>
      <li>Follow us<i class="fa fa-hand-o-right"></i></li>
      <li><a href="https://www.facebook.com/<?php _e('osclassprocom', 'fino'); ?>" target="_blank" title="facebook"><img src="<?php echo osc_current_web_theme_url('img/facebook.png'); ?>" alt=""></a></li>
      <li><a href="https://twitter.com/<?php _e('osclass_pro_com', 'fino'); ?>" target="_blank" title="twitter"><img src="<?php echo osc_current_web_theme_url('img/twitter.png'); ?>" alt=""></a></li>
    </ul>
  </div>
</div>
<div class="clear"></div>

<div id="tabsWithStyle" class="style-tabs">
<ul>
    <li><a href="#general"><div class="icon facebook-icon"><?php _e('Theme settings', 'fino'); ?></div></a></li>
	<li><a href="#welcome"><div class="icon facebook-icon"><?php _e('Welcome text', 'fino'); ?></div></a></li>
    <li><a href="#social"><div class="icon facebook-icon"><?php _e('Social links', 'fino'); ?></div></a></li>
	<li><a href="#icons"><div class="icon facebook-icon"><?php _e('Category icons', 'fino'); ?></div></a></li>
	<li><a href="#items"><div class="icon facebook-icon"><?php _e('Items', 'fino'); ?></div></a></li>
	<li><a href="#ads"><div class="icon facebook-icon"><?php _e('Ads management', 'fino'); ?></div></a></li>
	<li><a href="#related"><div class="icon facebook-icon"><?php _e('Related ads', 'fino'); ?></div></a></li>
	<li><a href="#help"><div class="icon facebook-icon"><?php _e('Help', 'fino'); ?></div></a></li>
 </ul>
    <div id="general">
           <h2 class="render-title <?php echo (osc_get_preference('footer_link', 'fino') ? '' : 'separate-top'); ?>"><b><i class="fa fa-cog"></i> <?php _e('Theme settings', 'fino'); ?></b></h2>
<form action="<?php echo osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php'); ?>" method="post" class="nocsrf">
    <input type="hidden" name="action_specific" value="settings" />
    <fieldset>
        <div class="form-horizontal">
            <div class="form-row">
                <div class="form-label"><b><?php _e('Search placeholder', 'fino'); ?></b></div>
                <div class="form-controls"><input type="text" class="xlarge" name="keyword_placeholder" value="<?php echo osc_esc_html( osc_get_preference('keyword_placeholder', 'fino') ); ?>"></div>
            </div>
            <div class="form-row">
                <div class="form-label"><b><?php _e('Footer link', 'fino'); ?></b></div>
                <div class="form-controls">
                    <div class="form-label-checkbox"><input class="checkbox" type="checkbox" name="footer_link" value="1" <?php echo (osc_get_preference('footer_link', 'fino') ? 'checked' : ''); ?> > <?php _e("I want to help osclass-pro.com by linking to <a href=\"https://osclass-pro.com/\" target=\"_blank\">osclass-pro.com</a> from my site with the following text:", 'fino'); ?></div>
                    <span class="help-box"><?php _e('This website is using the premium <a title="osclass-pro.com" href="https://osclass-pro.com/"> Osclass Theme Fino</a> from <strong> osclass-pro.com</strong>', 'fino'); ?></span>
                </div>
            </div>
        </div>
    </fieldset>
	<div class="form-row">
                <div class="form-label"><b><?php _e('Show lists as:', 'fino'); ?></b></div>
                <div class="form-controls">
                    <select name="defaultShowAs@all">
                        <option value="gallery" <?php if(fino_default_show_as() == 'gallery'){ echo 'selected="selected"' ; } ?>><?php _e('Gallery','fino'); ?></option>
                        <option value="list" <?php if(fino_default_show_as() == 'list'){ echo 'selected="selected"' ; } ?>><?php _e('List','fino'); ?></option>
                    </select>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><b><?php _e('Select color:', 'fino'); ?></b></div>
                <div class="form-controls">
                    <select name="finoColor@all">
					        <option value="black-red" <?php if(fino_color() == 'black-red'){ echo 'selected="selected"' ; } ?>><?php _e('Black-red','fino'); ?></option>
							<option value="blue" <?php if(fino_color() == 'blue'){ echo 'selected="selected"' ; } ?>><?php _e('Blue','fino'); ?></option>
							<option value="blue-cyan" <?php if(fino_color() == 'blue-cyan'){ echo 'selected="selected"' ; } ?>><?php _e('Blue-cyan','fino'); ?></option>
							<option value="blue-grey" <?php if(fino_color() == 'blue-grey'){ echo 'selected="selected"' ; } ?>><?php _e('Blue-grey','fino'); ?></option>
					        <option value="dark-pink" <?php if(fino_color() == 'dark-pink'){ echo 'selected="selected"' ; } ?>><?php _e('Dark-pink','fino'); ?></option>
							<option value="cornsilk" <?php if(fino_color() == 'cornsilk'){ echo 'selected="selected"' ; } ?>><?php _e('Cornsilk','fino'); ?></option> 
							<option value="green" <?php if(fino_color() == 'green'){ echo 'selected="selected"' ; } ?>><?php _e('Green','fino'); ?></option>                
							<option value="queen-blue" <?php if(fino_color() == 'queen-blue'){ echo 'selected="selected"' ; } ?>><?php _e('Queen-blue','fino'); ?></option>
							<option value="neptune" <?php if(fino_color() == 'neptune'){ echo 'selected="selected"' ; } ?>><?php _e('Neptune','fino'); ?></option>
							<option value="teal-green" <?php if(fino_color() == 'teal-green'){ echo 'selected="selected"' ; } ?>><?php _e('Teal-green','fino'); ?></option>
							<option value="tomato" <?php if(fino_color() == 'tomato'){ echo 'selected="selected"' ; } ?>><?php _e('Tomato','fino'); ?></option>
							<option value="violet-blue" <?php if(fino_color() == 'violet-blue'){ echo 'selected="selected"' ; } ?>><?php _e('Violet-blue','fino'); ?></option>
                    </select>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><b><?php _e('Category Style in Main page:', 'fino'); ?></b></div>

<div class="form-controls">
                    <select name="inc-main">
                        <option value="inc.main.subcategory" <?php if(fino_category_main() == 'inc.main.subcategory'){ echo 'selected="selected"' ; } ?>><?php _e('With Subcategories','fino'); ?></option>
                        <option value="inc.main.category" <?php if(fino_category_main() == 'inc.main.category'){ echo 'selected="selected"' ; } ?>><?php _e('Only Categories','fino'); ?></option>
</select>
                </div>
            </div>
			<div class="form-row">
			<div class="form-label"><b><?php _e('Search select option:', 'fino'); ?></b></div>
                <div class="form-label"><?php _e('Search select option(Use the city in the search, if you have a single region or not many regions.', 'fino'); ?></div>
			<div class="form-label"><?php _e('If you have many regions or countries. Home page can be opened for a long time with city option.)', 'fino'); ?></div>

<div class="form-controls">
                    <select name="main-search">
                        <option value="inc.search" <?php if(fino_regioncity_main() == 'inc.search'){ echo 'selected="selected"' ; } ?>><?php _e('With all Regions','fino'); ?></option>
                        <option value="inc.search.items" <?php if(fino_regioncity_main() == 'inc.search.items'){ echo 'selected="selected"' ; } ?>><?php _e('Regions with items','fino'); ?></option>
						<option value="inc.search.city" <?php if(fino_regioncity_main() == 'inc.search.city'){ echo 'selected="selected"' ; } ?>><?php _e('With all Cities','fino'); ?></option>
						<option value="inc.search.city.items" <?php if(fino_regioncity_main() == 'inc.search.city.items'){ echo 'selected="selected"' ; } ?>><?php _e('Cities with items','fino'); ?></option>
                        <option value="inc.search.countries" <?php if(fino_regioncity_main() == 'inc.search.countries'){ echo 'selected="selected"' ; } ?>><?php _e('Countries with items','fino'); ?></option>
			<option value="inc.search.hide" <?php if(fino_regioncity_main() == 'inc.search.hide'){ echo 'selected="selected"' ; } ?>><?php _e('Hide','fino'); ?></option>
			 </select>  
                </div>
            </div>
			           				<div class="form-row">
                <div class="form-label"><b><?php _e('Footer in Main page:', 'fino'); ?></b></div>
<div class="form-label"><?php _e('Use the city in the footer, if you have a single region or not many regions.', 'fino'); ?></div>
			<div class="form-label"><?php _e('If you have many regions or countries. Home page can be opened for a long time with city option.)', 'fino'); ?></div>
<div class="form-label"><?php _e('Before select this option, Show more - Tools -Locations stats - Calculate location stats.)', 'fino'); ?></div>
			<div class="form-controls">
                    <select name="main-regcity">
                        <option value="regions" <?php if(osc_get_preference('main-regcity', 'fino') == 'regions'){ echo 'selected="selected"' ; } ?>><?php _e('Show all regions','fino'); ?></option>
                        <option value="regionsitems" <?php if(osc_get_preference('main-regcity', 'fino') == 'regionsitems'){ echo 'selected="selected"' ; } ?>><?php _e('Regions with items','fino'); ?></option>
						<option value="cities" <?php if(osc_get_preference('main-regcity', 'fino') == 'cities'){ echo 'selected="selected"' ; } ?>><?php _e('Show  all cities','fino'); ?></option>
						<option value="citiesitems" <?php if(osc_get_preference('main-regcity', 'fino') == 'citiesitems'){ echo 'selected="selected"' ; } ?>><?php _e('Cities with items','fino'); ?></option>
						<option value="countries" <?php if(osc_get_preference('main-regcity', 'fino') == 'countries'){ echo 'selected="selected"' ; } ?>><?php _e('Countries with items','fino'); ?></option>
						<option value="hide" <?php if(osc_get_preference('main-regcity', 'fino') == 'hide'){ echo 'selected="selected"' ; } ?>><?php _e('Hide','fino'); ?></option>
</select>
                </div>
            </div>
						<div class="form-row">
                <div class="form-label"><b><?php _e('Carousel in Main page:', 'fino'); ?></b></div>

<div class="form-controls">
                    <select name="main-carousel">
                        <option value="premium" <?php if(osc_get_preference('main-carousel', 'fino') == 'premium'){ echo 'selected="selected"' ; } ?>><?php _e('Premium items','fino'); ?></option>
                        <option value="popular" <?php if(osc_get_preference('main-carousel', 'fino') == 'popular'){ echo 'selected="selected"' ; } ?>><?php _e('Popular items','fino'); ?></option>
						<option value="hide" <?php if(osc_get_preference('main-carousel', 'fino') == 'hide'){ echo 'selected="selected"' ; } ?>><?php _e('Hide','fino'); ?></option>
</select>
                </div>
            </div>
			<div class="form-row">
                <div class="form-label"><b><?php _e('No. of items in carousel:', 'fino'); ?></b></div>
                <div class="form-controls">
					<input type="text" class="input-small" name="carousel_numads" value="<?php echo osc_get_preference('carousel_numads', 'fino'); ?>" />
                </div>
            </div>
						<div class="form-row">
                <div class="form-label"><b><?php _e('Category Icon in latest and search items:', 'fino'); ?></b></div>

<div class="form-controls">
                    <select name="item-icon">
                        <option value="enable" <?php if(osc_get_preference('item-icon', 'fino') == 'enable'){ echo 'selected="selected"' ; } ?>><?php _e('Enable','fino'); ?></option>
                        <option value="disable" <?php if(osc_get_preference('item-icon', 'fino') == 'disable'){ echo 'selected="selected"' ; } ?>><?php _e('Disable','fino'); ?></option>
</select>
                </div>
            </div>
															<div class="form-row">
                <div class="form-label"><b><?php _e('Show subcategories in search page sidebar:', 'fino'); ?></b></div>

<div class="form-controls">
                    <select name="sub">
                        <option value="enable" <?php if(osc_get_preference('sub', 'fino') == 'enable'){ echo 'selected="selected"' ; } ?>><?php _e('Enable','fino'); ?></option>
                        <option value="disable" <?php if(osc_get_preference('sub', 'fino') == 'disable'){ echo 'selected="selected"' ; } ?>><?php _e('Disable','fino'); ?></option>
</select>
                </div>
            </div>
									<div class="form-row">
                <div class="form-label"><b><?php _e('Mark as in item page:', 'fino'); ?></b></div>

<div class="form-controls">
                    <select name="mark-as">
                        <option value="enable" <?php if(osc_get_preference('mark-as', 'fino') == 'enable'){ echo 'selected="selected"' ; } ?>><?php _e('Enable','fino'); ?></option>
                        <option value="disable" <?php if(osc_get_preference('mark-as', 'fino') == 'disable'){ echo 'selected="selected"' ; } ?>><?php _e('Disable','fino'); ?></option>
</select>
                </div>
            </div>
												<div class="form-row">
                <div class="form-label"><b><?php _e('Show useful info in item page:', 'fino'); ?></b></div>

<div class="form-controls">
                    <select name="useful">
                        <option value="enable" <?php if(osc_get_preference('useful', 'fino') == 'enable'){ echo 'selected="selected"' ; } ?>><?php _e('Enable','fino'); ?></option>
                        <option value="disable" <?php if(osc_get_preference('useful', 'fino') == 'disable'){ echo 'selected="selected"' ; } ?>><?php _e('Disable','fino'); ?></option>
</select>
                </div>
            </div>
 
<div class="form-actions">
        <input type="submit" value="<?php echo osc_esc_html( __('Save changes', 'fino') ); ?>" class="btn btn-submit btn-success">
      </div>
    </form>
		 </div>
  <div id="welcome">
    <?php include 'welcome.php'; ?>
  </div>
  <div id="social">
    <?php include 'social.php'; ?>
  </div>
    <div id="items">
    <?php include 'items_fino.php'; ?>
  </div>
  <div id="ads">
    <?php include 'ads.php'; ?>
  </div>
  <div id="related">
    <?php include 'related.php'; ?>
  </div>
  <div id="help">
    <?php include 'help.php'; ?>
  </div>
         <div id="icons">
    <?php include 'category_icons.php'; ?>
  </div>
 
  <script type="text/javascript">
            $(function() {
                $('#tabsWithStyle').tabs();
            });
        </script>
<address class="osclasspro_address">
	<span>&copy; <?php echo date('Y') ?>  <strong><a target="_blank" title="osclass-pro.com" href="https://<?php _e('osclass-pro.com', 'fino'); ?>/"><?php _e('osclass-pro.com', 'fino'); ?></a></strong>. All rights reserved.</span>
  </p>
  </address>
</div>
<script src="<?php echo osc_current_web_theme_url('admin/js/jquery.admin.js');?>"></script>
