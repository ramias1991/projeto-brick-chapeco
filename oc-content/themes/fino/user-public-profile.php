<?php
 		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */

    $address = '';
    if(osc_user_address()!='') {
        if(osc_user_city_area()!='') {
            $address = osc_user_address().", ".osc_user_city_area();
        } else {
            $address = osc_user_address();
        }
    } else {
        $address = osc_user_city_area();
    }
    $location_array = array();
    if(trim(osc_user_city()." ".osc_user_zip())!='') {
        $location_array[] = trim(osc_user_city()." ".osc_user_zip());
    }
    if(osc_user_region()!='') {
        $location_array[] = osc_user_region();
    }
    if(osc_user_country()!='') {
        $location_array[] = osc_user_country();
    }
    $location = implode(", ", $location_array);
     unset($location_array);
	$user_keep = osc_user();

osc_enqueue_script('jqueryfino');
osc_enqueue_script('jquery-uifino');
osc_enqueue_script('bootfino');
osc_enqueue_script('globalfino');
osc_enqueue_script('datefino');
osc_enqueue_script('jquery-validatefino');
?>
<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
	<?php View::newInstance()->_exportVariableToView('user', $user_keep); ?>
        <?php osc_current_web_theme_path('head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
    </head>
    <body>
        <?php osc_current_web_theme_path('header.php'); ?>
		        <div class="container content">
		<div class="forcemessages-inline">
    <?php osc_show_flash_message(); ?>
</div>
        <div class="col-sm-9 latest">
		<div class="head-block">
						<div class="icon">
							<span class="glyphicon glyphicon-user glyphicon-cussearch"  aria-hidden="true"></span>
						</div>
						<div class="title">
                            <p class="name"><?php echo sprintf(__('%s\'s profile', 'fino'), osc_user_name()); ?></p>	
						</div>
					</div>
					<div class="contact-fld contact-form">
<p class="email"><span class="glyphicon glyphicon-user" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e('Full name', 'fino'); ?>: <?php echo osc_user_name(); ?></p>						
<p class="phone"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e('Location', 'fino'); ?>: <?php echo $location; ?></p>
<p class="phone"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e('Address', 'fino'); ?>: <?php echo $address; ?></p>
	<?php if ( osc_user_phone_land() != '' ) { ?>
                            <p class="phone"><span class="glyphicon glyphicon-earphone" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Tel", 'fino'); ?>.: <?php echo osc_user_phone_land(); ?></p>
                        <?php } ?>
<?php if ( osc_user_phone_mobile() != '' ) { ?>
                            <p class="phone"><span class="glyphicon glyphicon-earphone" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Tel", 'fino'); ?>.: <?php echo osc_user_phone_mobile(); ?></p>
                        <?php } ?>
<p class="phone"><span class="glyphicon glyphicon-link" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e('Website', 'fino'); ?>: <?php echo osc_user_website(); ?></p>
<p class="phone"><span class="glyphicon glyphicon-comment" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e('User Description', 'fino'); ?>: <?php echo osc_user_info(); ?></p>
						</div>
				<div class="head-block">
						<div class="icon">
							<span class="glyphicon glyphicon-list-alt glyphicon-cussearch"  aria-hidden="true"></span>
						</div>
						<div class="title">
                            <p class="name"><?php _e('Latest listings', 'fino'); ?></p>	
						</div>
					</div>
                   
            
			<?php while ( osc_has_items() ) { ?>
			 
		<div class="tab-pane fade in block-style active" id="block-style">
						<div class="col-sm-4 block-style-item">
							<a href="<?php echo osc_item_url(); ?>" class="wrap-item-block">
							<div class="item-block">
									<div class="img">
										<?php if( osc_count_item_resources() ) { ?><img src="<?php echo osc_resource_thumbnail_url(); ?>"  alt="<?php echo osc_item_title(); ?>"/><?php } else { ?>
                                                <img src="<?php echo osc_current_web_theme_url('images/no_photo.gif'); ?>" alt="" title="" />
                                            <?php } ?>
									</div>
									<div class="icon">
								<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_item_category_id()) . '.png' ?>" alt="">
									</div>
									<div class="text">
										<p class="title"><?php if(strlen(osc_item_title()) > 21){ echo mb_substr(osc_item_title(), 0, 20,'UTF-8').'...'; } else { echo osc_item_title(); } ?></p>
										<p class="price"><?php echo osc_item_formated_price(); ?></p>
									</div>
								</div>
							</a>
						<!-- end item block -->
						</div></div>   
			<?php } ?>
                   <div class="paginate"> <?php echo osc_pagination_items(); ?></div> 
           
          
			</div>
            <div class="row search-page">
                <?php if(osc_logged_user_id()!=  osc_user_id()) { ?>
                <?php     if(osc_reg_user_can_contact() && osc_is_web_user_logged_in() || !osc_reg_user_can_contact() ) { ?>
                <div class="col-sm-3 contact-fld">
				<div class="head-block">
						<div class="icon">
							<span class="glyphicon glyphicon-envelope glyphicon-cussearch"  aria-hidden="true"></span>
						</div>
						<div class="title">
							<p class="text"><?php _e("Contact publisher", 'fino'); ?></p>						
						</div>
					</div>
                    <ul id="error_list"></ul>
                 
					<form action="<?php echo osc_base_url(true); ?>" class="form-horizontal contact-form" role="form" method="post" name="contact_form" id="contact_form">
						 <input type="hidden" name="action" value="contact_post" />
                           <input type="hidden" name="page" value="user" />
                           <input type="hidden" name="id" value="<?php echo osc_user_id();?>" />
						<input class="contact-inpt" type="text" name="yourName" id="yourName" placeholder="<?php echo osc_esc_html( __('Your name', 'fino')); ?>">
						<input class="contact-inpt" type="text" id="yourEmail" name="yourEmail" placeholder="<?php echo osc_esc_html( __('Your e-mail address', 'fino')); ?>">
						<input class="contact-inpt" type="text" id="phoneNumber" name="phoneNumber" placeholder="<?php echo osc_esc_html( __('Phone number', 'fino')); ?> (<?php echo osc_esc_html( __('optional', 'fino')); ?>)">
						
						<textarea id="message" name="message" rows="10" placeholder="<?php echo osc_esc_html( __('Message', 'fino')); ?>"></textarea>
						  
						   <br />
						   <?php osc_run_hook('item_contact_form', osc_item_id()); ?>
						<div class="captch">
						 <?php if( osc_recaptcha_public_key() ) { ?>
                                <script type="text/javascript">
                                    var RecaptchaOptions = {
                                        theme : 'custom',
                                        custom_theme_widget: 'recaptcha_widget'
                                    };
                                </script>
                                <style type="text/css"> div#recaptcha_widget, div#recaptcha_image > img { width:90%;padding-top:7px; } </style>
                                <?php } ?>
                                <?php osc_show_recaptcha(); ?>
						</div>
						<button type="submit" class="btn btn-block"><?php _e('Send', 'fino'); ?></button>
					</form>
					<?php ContactForm::js_validation(); ?>
                </div>
                <?php     } ?>
                <?php } ?>
            </div>
        </div><div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>
