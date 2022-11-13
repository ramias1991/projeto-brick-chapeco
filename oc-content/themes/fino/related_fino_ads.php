<div class="item-blocks">        
<h4 class="block-title"><?php _e('Related Ads', 'fino'); ?></h4>
	    <?php if( osc_count_items() == 0) { ?>
		 <p><?php _e('No Related Ads', 'fino'); ?></p>
	    <?php } else { ?>

			<?php while ( osc_has_items() ) { ?>
				
						<a href="<?php echo osc_item_url(); ?>" class="wrap-item-block"><div class="item-block">
							<div class="img">
							<?php if( osc_images_enabled_at_items() ) { ?>
								<?php if( osc_count_item_resources() ) { ?><img src="<?php echo osc_resource_thumbnail_url(); ?>"  alt="<?php echo osc_item_title(); ?>"/><?php } else { ?>
                                                <img src="<?php echo osc_current_web_theme_url('img/no_photo.gif'); ?>"  alt="" title="" />
                                            <?php } ?>
											<?php } ?>
							</div>
							<?php if( osc_get_preference('item-icon', 'fino') == 'enable') {?>
									<div class="icon">
								<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_item_category_id()) . '.png' ?>" alt="">
									</div>
									 <?php } ?>
							<div class="text">
								<p class="title"><?php if(strlen(osc_item_title()) > 21){ echo mb_substr(osc_item_title(), 0, 20,'UTF-8').'...'; } else { echo osc_item_title(); } ?></p>
								<p class="price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); }?></p>
							</div>
						</div></a>
						<!-- end item block -->
			 
			<?php } ?>

		<?php } ?>
		</div>		
 <br />
