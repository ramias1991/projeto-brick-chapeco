<?php
 		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
    $number = osc_get_preference('search-title', 'fino');
       osc_get_premiums(20);
    if(osc_count_premiums() > 0) {
?>

        <?php while(osc_has_premiums()) { ?>
		<?php  $index = 0;
				         
                ?>
				<div class="fade in list-style" id="list-style">
				  	<div class="col-sm-12 latest-item">
				  		<div class="latest-caption premium" id="<?php if(function_exists('ppaypal_premium_get_class_color')){echo ppaypal_premium_get_class_color(osc_premium_id());}?>">
					  		<div class="types">
							<?php if( osc_get_preference('item-icon', 'fino') == 'enable') {?>
					  			<div class="icon">
										<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_premium_category_id()) . '.png' ?>" alt="">
									</div>
									<?php } ?>
									<p class="text"><?php echo osc_highlight( strip_tags( osc_premium_title() ),$number ); ?></p>
								</div>
					  		<p class="price"><?php if( osc_price_enabled_at_items()&& osc_item_category_price_enabled(osc_premium_category_id()) ) { echo osc_premium_formated_price() ; } ?></p>
								<div class="info">
									<p class="date"><span class="glyphicon glyphicon-calendar" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php echo osc_format_date(osc_premium_pub_date()); ?></p>
									<p class="address"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php echo osc_premium_city();?></p>
								</div>
					  		<div class="col-sm-4 left-block">
					  			<div class="img">
								<?php if( osc_images_enabled_at_items() ) { ?>
					  				<?php if( osc_count_premium_resources() ) { ?><a href="<?php echo osc_premium_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>"  alt="<?php echo osc_premium_title(); ?>"/></a><?php } else { ?>
                                                <img src="<?php echo osc_current_web_theme_url('img/no_photo.gif'); ?>" alt="" title="" />
                                            <?php } ?>
											<?php } ?>
					  			</div>
								<div class="pr2"><?php _e('Premium', 'fino'); ?></div>
					  		</div>
					  		<div class="col-sm-8 right-block">
									<p class="text"><?php if(strlen(osc_premium_description()) > 431){ echo strip_tags( mb_substr(osc_premium_description(), 0, 430,'UTF-8').'...'); } else { echo strip_tags (osc_premium_description()); } ?></p>
									<a class="btn" href="<?php echo osc_premium_url() ; ?>"><?php _e('Read more', 'fino'); ?></a>
								</div>
				  			
				  		</div>
				  	</div></div>
   
        <?php
                            $index++;
                            if($index == 20){
                                break; 
                            }
                        }
                    ?>  
<?php } ?>
   
		
		<?php $i = 0; ?>
		<?php while(osc_has_items()) { $i++; ?>
				
            <div class="fade in list-style" id="list-style">
				  	<div class="col-sm-12 latest-item">
				  		<div class="latest-caption" id="<?php if(function_exists('ppaypal_get_class_color')){echo ppaypal_get_class_color(osc_item_id());}?>">
					  		<div class="types">
							<?php if( osc_get_preference('item-icon', 'fino') == 'enable') {?>
					  			<div class="icon">
										<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_item_category_id()) . '.png' ?>" alt="">
									</div>
									<?php } ?>
									<p class="text"><?php echo osc_highlight( strip_tags( osc_item_title() ),$number ); ?></p>
								</div>
					  		<p class="price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) {echo osc_item_formated_price() ; } ?></p>
								<div class="info">
									<p class="date"><span class="glyphicon glyphicon-calendar" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php echo osc_format_date(osc_item_pub_date()); ?></p>
									<p class="address"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php echo osc_item_city();?></p>
								</div>
					  		<div class="col-sm-4 left-block">
					  			<div class="img">
								<?php if( osc_images_enabled_at_items() ) { ?>
					  				<?php if( osc_count_item_resources() ) { ?><a href="<?php echo osc_item_url(); ?>"><img src="<?php echo osc_resource_thumbnail_url(); ?>"  alt="<?php echo osc_item_title(); ?>"/></a><?php } else { ?>
                                                <img src="<?php echo osc_current_web_theme_url('img/no_photo.gif'); ?>" alt="" title="" />
                                            <?php } ?>
											<?php } ?>
					  			</div>
								
					  		</div>
					  		<div class="col-sm-8 right-block">
									<p class="text"><?php if(strlen(osc_item_description()) > 431){ echo strip_tags( mb_substr(osc_item_description(), 0, 430,'UTF-8').'...'); } else { echo strip_tags (osc_item_description()); } ?></p>
									<a class="btn" href="<?php echo osc_item_url() ; ?>"><?php _e('Read more', 'fino'); ?></a>
								</div>
				  			
				  		</div>
				  	</div></div>
			<?php if( $i == osc_get_preference('search-middle', 'fino') ) { ?>
			<div class="clearfix"></div>
			<?php osc_run_hook('search_middle'); ?>
			<div class="clearfix"></div>
<?php } ?>
        <?php } ?>
		<br>
		