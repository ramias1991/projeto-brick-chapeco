<?php
 		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */

  osc_get_premiums(20);
    if(osc_count_premiums() > 0) {
?>	
        <?php while(osc_has_premiums()) { ?>
		<?php  $index = 0;
				         
                ?>
            <div class="tab-pane fade in block-style active" id="block-style">
						<div class="col-sm-4 block-style-item">
						<a href="<?php echo osc_premium_url(); ?>" class="wrap-item-block">
						<div class="item-block premium" id="<?php if(function_exists('ppaypal_premium_get_class_color')){echo ppaypal_premium_get_class_color(osc_premium_id());}?>">
									<div class="img">
									<?php if( osc_images_enabled_at_items() ) { ?>
										<?php if( osc_count_premium_resources() ) { ?><img src="<?php echo osc_resource_thumbnail_url(); ?>"  alt="<?php echo osc_premium_title(); ?>"/><?php } else { ?>
                                                <img src="<?php echo osc_current_web_theme_url('img/no_photo.gif'); ?>" alt="" title="" />
                                            <?php } ?>
											<div class="pr"><?php _e('Premium', 'fino'); ?></div>
											<?php } ?>
									</div>
									<?php if( osc_get_preference('item-icon', 'fino') == 'enable') {?>
									<div class="icon">
								<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_premium_category_id()) . '.png' ?>" alt="">
									</div>
									 <?php } ?>
									<div class="text">
										<p class="title"><?php echo osc_premium_title(); ?></p>
										<p class="price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) {echo osc_premium_formated_price() ; } ?></p>
									</div>
								</div>
							</a>
						<!-- end item block -->
						</div></div>
			 <?php
                            $index++;
                            if($index == 20){
                                break; 
                            }
                        }
                    ?>  

<?php } ?>

        <?php while(osc_has_items()) { ?>
<div class="tab-pane fade in block-style active" id="block-style">
						<div class="col-sm-4 block-style-item">
							<a href="<?php echo osc_item_url(); ?>" class="wrap-item-block">
							<div class="item-block" id="<?php if(function_exists('ppaypal_get_class_color')){echo ppaypal_get_class_color(osc_item_id());}?>">
									<div class="img">
									<?php if( osc_images_enabled_at_items() ) { ?>
										<?php if( osc_count_item_resources() ) { ?><img src="<?php echo osc_resource_thumbnail_url(); ?>"  alt="<?php echo osc_item_title(); ?>"/><?php } else { ?>
                                                <img src="<?php echo osc_current_web_theme_url('img/no_photo.gif'); ?>" alt="" title="" />
                                            <?php } ?>
											<?php } ?>
									</div>
									<?php if( osc_get_preference('item-icon', 'fino') == 'enable') {?>
									<div class="icon">
								<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_item_category_id()) . '.png' ?>" alt="">
									</div>
									<?php } ?>
									<div class="text">
										<p class="title"><?php echo osc_item_title();  ?></p>
										<p class="price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); }?></p>
									</div>
								</div>
							</a>
						<!-- end item block -->
						</div></div>

        <?php } ?>