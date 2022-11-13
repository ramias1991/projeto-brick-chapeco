<?php
 		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
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
		<div class="row	search-page">
		<div class="col-sm-12 page-head">
            <h3 class="block-title publish account"><?php _e('User account manager', 'fino'); ?></h3></div>
             <div class="col-sm-3">
					<div class="account-ul">
                <?php echo osc_private_user_menu( get_user_menu() ); ?>
            </div></div>
            <div class="col-sm-9">
                <h3 class="block-title publish account"><?php echo sprintf(__('Listings from %s', 'fino') ,osc_logged_user_name()); ?></h3>
                <?php if(osc_count_items() == 0) { ?>
                    <h3 class="block-title publish account"><?php _e('No listings have been added yet', 'fino'); ?></h3>
                <?php } else { ?>
                    <?php while(osc_has_items()) { ?>
                        <div class="col-sm-12 latest-item">
						<div class="latest-caption">
                            <div class="types">
							<div class="icon">
										<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_item_category_id()) . '.png' ?>" alt="">
									</div>
<p class="text"><?php echo osc_highlight( strip_tags( osc_item_title() ),100 ); ?></p>
								</div>
                           <p class="price"><?php echo osc_item_formated_price() ; ?></p>
						   <div class="info">
									<p class="date"><span class="glyphicon glyphicon-calendar" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php echo osc_format_date(osc_item_pub_date()); ?></p>
								<p class="address"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php echo osc_item_city();?></p>
								</div>
								<div class="col-sm-3 left-block">
					  			<div class="img">
					  				<?php if( osc_count_item_resources() ) { ?><a href="<?php echo osc_item_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>"  alt="<?php echo osc_item_title(); ?>"/></a><?php } else { ?>
                                                <img src="<?php echo osc_current_web_theme_url('img/no_photo.gif'); ?>" alt="" title="" />
                                            <?php } ?>
					  			</div>
								
					  		</div>
								<div class="col-sm-9 right-block">
									<p class="text"><?php if(strlen(osc_item_description()) > 431){ echo strip_tags( mb_substr(osc_item_description(), 0, 430,'UTF-8').'...'); } else { echo strip_tags (osc_item_description()); } ?></p>
									<a class="btn" href="<?php echo osc_item_url() ; ?>"><?php _e('View listing', 'fino'); ?></a>
									<a class="btn" href="<?php echo osc_item_edit_url(); ?>"><?php _e('Edit', 'fino'); ?></a>
                                        <?php if(osc_item_is_inactive()) {?>
                           
                                        <a class="btn" href="<?php echo osc_item_activate_url();?>" ><?php _e('Activate', 'fino'); ?></a>
                                        <?php } ?>
								</div>
                  
                        </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div></div><div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>
