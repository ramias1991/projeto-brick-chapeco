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
osc_enqueue_script('fineuploaderfino');
osc_enqueue_script('jquery-validatefino');

?>
<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />

        <!-- only item-post.php -->
        <?php ItemForm::location_javascript(); ?>
      <?php
        if(osc_images_enabled_at_items() && !fino_is_fineuploader()) {
            ItemForm::photos_javascript();
        }
        ?>
        <script type="text/javascript">

            function uniform_input_file(){
                photos_div = $('div.photos');
                $('div',photos_div).each(
                    function(){
                        if( $(this).find('div.uploader').length == 0  ){
                            divid = $(this).attr('id');
                            if(divid != 'photos'){
                                divclass = $(this).hasClass('box');
                                if( !$(this).hasClass('box') & !$(this).hasClass('uploader') & !$(this).hasClass('row')){
                                    $("div#"+$(this).attr('id')+" input:file").uniform({fileDefaultText: fileDefaultText,fileBtnText: fileBtnText});
                                }
                            }
                        }
                    }
                );
            }

            <?php if(osc_locale_thousands_sep()!='' || osc_locale_dec_point() != '') { ?>
            $().ready(function(){
                $("#price").blur(function(event) {
                    var price = $("#price").prop("value");
                    <?php if(osc_locale_thousands_sep()!='') { ?>
                    while(price.indexOf('<?php echo osc_esc_js(osc_locale_thousands_sep());  ?>')!=-1) {
                        price = price.replace('<?php echo osc_esc_js(osc_locale_thousands_sep());  ?>', '');
                    }
                    <?php }; ?>
                    <?php if(osc_locale_dec_point()!='') { ?>
                    var tmp = price.split('<?php echo osc_esc_js(osc_locale_dec_point())?>');
                    if(tmp.length>2) {
                        price = tmp[0]+'<?php echo osc_esc_js(osc_locale_dec_point())?>'+tmp[1];
                    }
                    <?php }; ?>
                    $("#price").prop("value", price);
                });
            });
            <?php }; ?>
        </script>
        <!-- end only item-post.php -->
    </head>
    <body>
        <?php osc_current_web_theme_path('header.php'); ?>

        <div class="container content">
				<div class="forcemessages-inline">
    <?php osc_show_flash_message(); ?>
</div>
		<div class="col-sm-12 page-head title-center">
				<h3 class="block-title publish"><?php _e('Publish a listing', 'fino'); ?></h3>		
			</div>
            <ul id="error_list"></ul>
			<div class="col-sm-6 col-sm-offset-3">
				<div class="general-info">
				<div class="head-block">
						<div class="icon">
							<span class="glyphicon glyphicon-pencil glyphicon-cussearch"  aria-hidden="true"></span>
						</div>
						<div class="title">
							<p class="text"><?php _e("General information", 'fino'); ?></p>						
						</div>
					</div>
					<form name="item" action="<?php echo osc_base_url(true);?>" class="form-horizontal contact-form" method="post" enctype="multipart/form-data">
				<input type="hidden" name="action" value="item_add_post" />
                <input type="hidden" name="page" value="item" />
				<div class="listpublish">
<?php ItemForm::category_multiple_selects(null, null, __('Select a category', 'fino')); ?>
</div>
<?php if(osc_get_preference('custom-fileds', 'fino') == 'top'){ ?>
				<div class="box">
                    <?php ItemForm::plugin_post_item(); ?></div>
					<?php }; ?>
<div class="clearfix"></div>
<div class="row postitem">
                            <label for="title[<?php echo osc_current_user_locale(); ?>]"><?php _e('Title', 'fino'); ?></label>
                                <?php ItemForm::title_input('title', osc_current_user_locale(), osc_esc_html( fino_item_title() )); ?>
                        </div>
                        <div class="row">
                            <label for="description[<?php echo osc_current_user_locale(); ?>]"><?php _e('Description', 'fino'); ?></label>
                                <?php ItemForm::description_textarea('description',osc_current_user_locale(), osc_esc_html( fino_item_description() )); ?>
                        </div>

						<div class="row">
						 <?php if( osc_price_enabled_at_items() ) { ?>
						 <label for="price"><?php _e('Price', 'fino'); ?></label>
 <?php ItemForm::price_input_text(); ?>
						<p class="dollar"><?php ItemForm::currency_select(); ?></p>
                    <?php } ?>
					</div>
					<div class="clearfix"></div>
						<?php if( osc_images_enabled_at_items() ) { ?>
						<div class="box photos">
                        <?php
                            if(osc_images_enabled_at_items()) {
                                if(fino_is_fineuploader()) {
                                    // new ajax photo upload
                                    ItemForm::ajax_photos();
                                }
                            } else { ?>
                        <div id="photos" class="upload-images">
                            <div class="row">
                                <input type="file" name="photos[]" />
                            </div>
                        </div>
                        <a href="#" onclick="addNewPhoto(); uniform_input_file(); return false;"><?php _e('Add new photo', 'fino'); ?></a>

                        <?php } ?>
						</div>
						<?php } ?>
						<div class="clearfix"></div>
						<div class="head-block">
						<div class="icon">
							<span class="glyphicon glyphicon-map-marker glyphicon-cussearch"  aria-hidden="true"></span>
						</div>
						<div class="title">
							<p class="text"><?php _e('Listing Location', 'fino'); ?></p>						
						</div>
					</div>
					<div class="box location">
					<?php if(osc_get_preference('item-post', 'fino') == 'countries'){ ?>
					<div class="row">
                            <label for="country"><?php _e('Country', 'fino'); ?></label>
					<?php ItemForm::country_select(osc_get_countries(), osc_user()); ?>
					</div>
					<?php }; ?>
					 <div class="row">
                            <label for="regionId"><?php _e('Region', 'fino'); ?></label>
                             <?php ItemForm::region_select(osc_get_regions(), osc_user()) ; ?>
                        </div>
                        <div class="row">
                            <label for="city"><?php _e('City', 'fino'); ?></label>
                            <?php ItemForm::city_select(osc_get_cities(osc_user_region()), osc_user()) ; ?>
                        </div>
                        <div class="row">
                            <label for="city"><?php _e('City Area', 'fino'); ?></label>
                            <?php ItemForm::city_area_text(osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="address"><?php _e('Address', 'fino'); ?></label>
                            <?php ItemForm::address_text(osc_user()); ?>
                        </div>
                    </div>
                    <!-- seller info -->
                    <?php if(!osc_is_web_user_logged_in() ) { ?>
                    <div class="box seller_info">
					<div class="head-block">
						<div class="icon">
							<span class="glyphicon glyphicon-user glyphicon-cussearch"  aria-hidden="true"></span>
						</div>
						<div class="title">
							<p class="text"><?php _e("Seller's information", 'fino'); ?></p>						
						</div>
					</div>
                        <div class="row">
                            <label for="contactName"><?php _e('Name', 'fino'); ?></label>
                            <?php ItemForm::contact_name_text(); ?>
                        </div>
                        <div class="row">
                            <label for="contactEmail"><?php _e('E-mail', 'fino'); ?> *</label>
                            <?php ItemForm::contact_email_text(); ?>
                        </div>
                        <div class="row">

                                <?php ItemForm::show_email_checkbox(); ?>

                            <label for="showEmail" ><?php _e('Show e-mail on the listing page', 'fino'); ?></label>
                        </div>
                    </div>
                    <?php }; ?>
					<?php if(osc_get_preference('custom-fileds', 'fino') == 'bottom'){ ?>
				<div class="box">
                    <?php ItemForm::plugin_post_item(); ?></div>
					<?php }; ?>
                    <?php if( osc_recaptcha_items_enabled() ) {?>
                    <div class="box">
                        <div class="row">
                            <?php osc_show_recaptcha(); ?>
                        </div>
                    </div>
                    <?php }?>
                <div class="clearfix"></div>
				</br>
				<?php if( function_exists( "MyHoneyPot" )) { ?>		
			<?php MyHoneyPot(); ?>		
		<?php } ?>  
                <button  type="submit" class="btn-post"><?php _e('Publish', 'fino'); ?></button>
					</form>
				</div>
			</div>
        </div><div class="clearfix"></div>
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>