<?php
 		   /*
 * Copyright 2016 osclass-pro.com
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
osc_enqueue_script('slick');
osc_enqueue_style('slick', osc_current_web_theme_url('js/slick/slick.css') );
?>
<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>
        <meta name="robots" content="index, follow" />
        <meta name="googlebot" content="index, follow" />
    </head>
    <body>
        <?php osc_current_web_theme_path('header.php'); ?>
		<div style="clear:both"></div>
		<div class="form_publish_main">
<?php if(fino_regcity_as() == 'inc.search'){?>
<?php osc_current_web_theme_path('inc.search.php') ; ?>
<?php } elseif(fino_regcity_as() == 'inc.search.items'){?>
<?php osc_current_web_theme_path('inc.search.items.php') ; ?>
<?php } elseif(fino_regcity_as() == 'inc.search.city.items'){?>
<?php osc_current_web_theme_path('inc.search.cityitems.php') ; ?>
<?php } elseif(fino_regcity_as() == 'inc.search.city'){?>
<?php osc_current_web_theme_path('inc.search.city.php') ; ?>
<?php } elseif(fino_regcity_as() == 'inc.search.countries'){?>
<?php osc_current_web_theme_path('inc.search.countries.php') ; ?>
<?php } else{?>
<?php osc_current_web_theme_path('inc.search.hide.php') ; ?>
<?php } ?>
        </div>
		<div class="clear"></div>
		<div class="container content">
		<div class="forcemessages-inline">
    <?php osc_show_flash_message(); ?>
</div>
<div class="clearfix"></div>
<?php if( osc_get_preference('main-carousel', 'fino') == 'premium') {?>
<?php $num_ads = fino_carousel_num_ads() ; ?>
		<?php osc_get_premiums($num_ads); ?>
                <?php if( osc_count_premiums() == 0) { ?>
				<br>

                <?php } else { ?>
<h3 class="block-title lines"><?php _e('Premium listings', 'fino'); ?></h3>
<div class="slider" style="background:none repeat scroll 0 0 #f6f6f6;">				
						 <?php  $index = 0;
				         
                ?>
			
                    <?php while ( osc_has_premiums() ) {
                        ?>
							<div class="tab-pane fade in block-style active" id="block-style">
						<div class="carousel-item">
								<a href="<?php echo osc_premium_url() ; ?>" class="wrap-item-block">
								<div class="item-block" id="<?php if(function_exists('ppaypal_premium_get_class_color')){echo ppaypal_premium_get_class_color(osc_premium_id());}?>">
									<div class="img">
									<?php if( osc_images_enabled_at_items() ) { ?>
<?php if( osc_count_premium_resources() ) { ?>
                                        <img src="<?php echo osc_resource_thumbnail_url(); ?>" />

                                    <?php } else { ?>
                                        <img src="<?php echo osc_current_web_theme_url('img/no_photo.gif') ; ?>" />
                                    <?php } ?>
									 <?php } ?>

									</div>
									<?php if( osc_get_preference('item-icon', 'fino') == 'enable') {?>
									<div class="icon">
										<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_premium_category_id()) . '.png' ?>" alt="">
									</div>
									<?php } ?>
									<div class="text">
										<p class="title"><?php echo osc_premium_title(); ?></p>
										<p class="price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled(osc_premium_category_id()) ) { echo osc_premium_formated_price() ; } ?></p>
									</div>
								</div>
							</a>
						<!-- end item block -->
								</div>
								</div>
							 <?php
                            $index++;
                            if($index == $num_ads){
                                break; 
                            }
                      
                    ?>  
   
			
				
                
                <?php View::newInstance()->_erase('items') ;
                } ?>
						</div>
      <script>
        $(document).ready(function(){
            $('.slider').slick({
              slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: true,
    responsive: [
    {
      breakpoint: 1191,
      settings: {
        slidesToShow: 3,
      }
    },
	 {
      breakpoint: 691,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
	]
            });
        });
    </script>
			

	<?php } ?>
	<?php } elseif(osc_get_preference('main-carousel', 'fino') == 'popular'){?>
			<div class="popular_main">
	<?php $num_ads = fino_carousel_num_ads() ; ?>
	<?php fino_popular_ads_start();?>
					<?php if( osc_count_custom_items() == 0) { ?>
                        <p class="empty"></p>
                    <?php } else { ?>
<h3 class="block-title lines"><?php _e('Most popular listings', 'fino'); ?></h3>
<div class="slider" style="background:none repeat scroll 0 0 #f6f6f6;">				
						 <?php  $index = 0;
				         
                ?>
								 
        <?php while(osc_has_custom_items()) { ?>
		
<div class="tab-pane fade in block-style active" id="block-style">
						<div class="carousel-item">
								<a href="<?php echo osc_item_url() ; ?>" class="wrap-item-block">
								<div class="item-block" id="<?php if(function_exists('ppaypal_get_class_color')){echo ppaypal_get_class_color(osc_item_id());}?>">
									<div class="img">
									<?php if( osc_images_enabled_at_items() ) { ?>
                                    <?php if( osc_count_item_resources() ) { ?>
	
                                        <img src="<?php echo osc_resource_thumbnail_url(); ?>" />
                                    <?php } else { ?>
                                        <img src="<?php echo osc_current_web_theme_url('img/no_photo.gif') ; ?>" />
                                    <?php } ?>
									  <?php } ?>

									</div>
									<?php if( osc_get_preference('item-icon', 'fino') == 'enable') {?>
									<div class="icon">
										<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_item_category_id()) . '.png' ?>" alt="">
									</div>
									<?php } ?>
									<div class="text">
										<p class="title"><?php echo osc_item_field('s_title'); ?></p>
										<p class="price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); } ?></p>
									</div>
								</div>
							</a>
						<!-- end item block -->
								</div>
								</div>
							 <?php
                            $index++;
                            if($index == $num_ads){
                                break; 
                            }
                    ?>  
   
			
				
                
                <?php View::newInstance()->_erase('items') ;
                } ?>
						</div>
      <script>
        $(document).ready(function(){
            $('.slider').slick({
              slidesToShow: 4,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 3000,
  arrows: true,
    responsive: [
    {
      breakpoint: 1191,
      settings: {
        slidesToShow: 3,
      }
    },
	 {
      breakpoint: 691,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
      }
    }
	]
            });
        });
    </script>
		</div>	

	<?php } ?>
<?php View::newInstance()->_erase('items'); ?>
<?php } else {?>							 
	<div class="clearfix"></div>
<?php } ?>
		   <div class="clearfix"></div>
		    <?php if( osc_get_preference('cat-finorevo', 'fino') != '') {?>
                <!-- cat ad Adaptive-->
                <div class="main_car">
                    <?php echo osc_get_preference('cat-finorevo', 'fino'); ?>
                </div>
				<div class="clearfix"></div>
                <!-- /cat ad Adaptive-->
                <?php } ?>   
<?php if(fino_catshow_as() == 'inc.main.category'){?>
<?php osc_current_web_theme_path('inc.main.category.php') ; ?>
<?php } else{?>
<?php osc_current_web_theme_path('inc.main.subcategory.php') ; ?>
<?php } ?>
						   			    <?php if( osc_get_preference('main-finorevo-top', 'fino') != '') {?> 
                    <?php echo osc_get_preference('main-finorevo-top', 'fino'); ?>
<div class="clearfix"></div>
                <?php } ?>			
               <div class="row latest">

				<h3 class="block-title le"><?php _e('Latest Listings', 'fino'); ?></h3>
			   <ul class="nav nav-tabs">
				  <li><?php $params['sShowAs'] = 'gallery'; ?><a id="block" href="<?php echo osc_base_url(true); ?>?sShowAs=gallery"><span class="glyphicon glyphicon-th glyphicon-nav" ></span></a></li>
				  <li><?php $params['sShowAs'] = 'list'; ?><a id="list" href="<?php echo osc_base_url(true); ?>?sShowAs=list"><span class="glyphicon glyphicon-th-list glyphicon-nav" ></span></a></li>
				</ul>				
					<?php osc_reset_latest_items(); ?> 
                    <?php if( osc_count_latest_items() == 0) { ?>
					
                        <p class="empty"><?php _e('No Latest Listings', 'fino'); ?></p>
						<div style="min-height: 100px;">
						</div>
                    <?php } else { ?>
				<div class="tab-content">
	<?php if(fino_show_as() == 'gallery'){?>
	
	 <?php $index1 = 0; ?>
                                <?php while(osc_has_latest_items()) { $index1++; ?>
								
				  <div class="tab-pane fade in block-style active" id="block-style">
						<div class="col-sm-3 block-style-item">
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
										<p class="title"><?php echo osc_item_title(); ?></p>
										<p class="price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) {echo osc_item_formated_price(); } ?></p>
									</div>
								</div>
							</a>
						<!-- end item block -->
						</div></div>

									<?php if( $index1 == 5 ) { ?>
                                <?php } ?>
                                <?php } ?>   
    <?php } else{?>
	<?php $numberm = osc_get_preference('main-title', 'fino');?>
	 <?php $index1 = 0; ?>
                                <?php while(osc_has_latest_items()) { $index1++; ?>
									
              <div class="fade in list-style" id="list-style">
				  	<div class="col-sm-12 latest-item">
				  		<div class="latest-caption" id="<?php if(function_exists('ppaypal_get_class_color')){echo ppaypal_get_class_color(osc_item_id());}?>">
					  		<div class="type">
							<?php if( osc_get_preference('item-icon', 'fino') == 'enable') {?>
					  			<div class="icon">
										<img src="<?php echo osc_current_web_theme_url('img/') . fino_category_root(osc_item_category_id()) . '.png' ?>" alt="">
									</div><?php } ?>
									<p class="text"><?php echo osc_highlight( strip_tags( osc_item_title() ),$numberm ); ?></p>
								</div>
					  		<p class="price"><?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price() ; } ?></p>
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
									<p class="text"><?php if(strlen(osc_item_description()) > 531){ echo strip_tags( mb_substr(osc_item_description(), 0, 530,'UTF-8').'...'); } else { echo strip_tags (osc_item_description()); } ?></p>
									<a class="btn" href="<?php echo osc_item_url() ; ?>"><?php _e('Read more', 'fino'); ?></a>
								</div>
				  			
				  		</div>
				  	</div></div>
              	<?php if( $index1 == osc_get_preference('main-middle', 'fino') ) { ?>
									<div class="clearfix"></div>
									<?php osc_run_hook('main_middle'); ?>
									<div class="clearfix"></div>
                                <?php } ?>
						<?php } ?>
		
				  	
	<?php } ?>

                               
				
                         
                        <?php if( osc_count_latest_items() == osc_max_latest_items() ) { ?>
                    		<?php if( osc_get_preference('main-finorevo-under', 'fino') != '') {?>
							<div style="clear:both"></div>
                <div class="top_main_u">
                    <?php echo osc_get_preference('main-finorevo-under', 'fino'); ?>
                </div>
				
                <?php } ?> 
                                 
                    <a href="<?php echo osc_search_show_all_url();?>" class="see-all"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span>&nbsp;<?php _e("See all offers", 'fino'); ?> </a>
           
                        <?php } ?>
                    <?php View::newInstance()->_erase('items'); } ?>
					</div>     
                </div>
					<div class="clearfix"></div> 	
			</div><div style="clear:both">
</div>
<div class="clearfix"></div> 
<!-- /container -->
<?php if(osc_get_preference('main-regcity', 'fino') == 'regions') {?>
<div class="cities">
			<div class="container">
			
				 <?php View::newInstance()->_exportVariableToView('list_regions', Search::newInstance()->listRegions('%%%%', '>=','region_name ASC') ) ; ?>
                        <?php if(osc_count_list_regions() > 0) {?>
                            <?php while(osc_has_list_regions()) { ?>
					<a href="<?php echo osc_list_region_url(); ?>" class="city"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;<?php echo osc_list_region_name();?></a>
      <?php } ?>
                          
                        <?php } ?>
				
				

		</div>
										</div>
										<?php } elseif(osc_get_preference('main-regcity', 'fino') == 'regionsitems') {?>
<div class="cities">
			<div class="container">
                        <?php if(osc_count_list_regions() > 0) {?>
                            <?php while(osc_has_list_regions()) { ?>
					<a href="<?php echo osc_list_region_url(); ?>" class="city"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;<?php echo osc_list_region_name();?></a>
      <?php } ?>
                          
                        <?php } ?>
				
				

		</div>
										</div>
							<?php } elseif(osc_get_preference('main-regcity', 'fino') == 'cities'){?>
							<div class="cities">
			<div class="container">
			
				 <?php View::newInstance()->_exportVariableToView('list_cities', Search::newInstance()->listCities('%%%%', '>=','city_name ASC') ) ; ?>
                        <?php if(osc_count_list_cities() > 0) {?>
                            <?php while(osc_has_list_cities()) { ?>
					<a href="<?php echo osc_list_city_url(); ?>" class="city"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;<?php echo osc_list_city_name();?></a>
      <?php } ?>
                          
                        <?php } ?>
				
				

		</div>
										</div>
										<?php } elseif(osc_get_preference('main-regcity', 'fino') == 'citiesitems'){?>
							<div class="cities">
			<div class="container">
                        <?php if(osc_count_list_cities() > 0) {?>
                            <?php while(osc_has_list_cities()) { ?>
					<a href="<?php echo osc_list_city_url(); ?>" class="city"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;<?php echo osc_list_city_name();?></a>
      <?php } ?>
                          
                        <?php } ?>
				
				

		</div>
										</div>
										<?php } elseif(osc_get_preference('main-regcity', 'fino') == 'countries'){?>
							<div class="cities">
			<div class="container">
                        <?php if(osc_count_list_countries() > 0) {?>
                            <?php while(osc_has_list_countries()) { ?>
					<a href="<?php echo osc_list_country_url(); ?>" class="city"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>&nbsp;<?php echo osc_list_country_name();?></a>
      <?php } ?>
                          
                        <?php } ?>
				
				

		</div>
										</div>
										<?php } else {?>							 
	<div class="clearfix"></div>
<?php } ?>
							
					
		<?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>
