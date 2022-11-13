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
osc_enqueue_script('pluginsfino');
osc_enqueue_script('datefino');
osc_enqueue_script('jquery-validatefino');

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
				<div class="container content">
		<?php

    $breadcrumb = osc_breadcrumb('&raquo;', false);
    if( $breadcrumb != '') { ?>
    <div class="way">
        <?php echo $breadcrumb; ?>
        <div class="clear"></div>
    </div>
<?php
    }
?>
<div class="forcemessages-inline">
    <?php osc_show_flash_message(); ?>
</div>
<div class="row listing">
				<div class="col-sm-12 listing-head">
				    <div class="price"><p><span class="glyphicon glyphicon-tags glyphicon-minsearch"  aria-hidden="true"></span>&nbsp;<?php if( osc_price_enabled_at_items() && osc_item_category_price_enabled() ) { echo osc_item_formated_price(); } ?></p></div>	
					<h3 class="block-title"><?php echo osc_item_title() . ' ' . osc_item_city(); ?></h3>		
				   <?php if(osc_is_web_user_logged_in() && osc_logged_user_id()==osc_item_user_id()) { ?>
                        <p id="edit_item_view">
                            <strong>
                                <a href="<?php echo osc_item_edit_url(); ?>" rel="nofollow"><?php _e('Edit item', 'fino'); ?></a>
                            </strong>
                        </p>
                    <?php } else { ?>
					<?php if( osc_get_preference('mark-as', 'fino') == 'enable') {?>
       <div class="clearfix" id="item_report">
<form action="<?php echo osc_base_url(true); ?>" method="post" name="mask_as_form" id="mask_as_form">
            <input type="hidden" name="id" value="<?php echo osc_item_id(); ?>" />
            <input type="hidden" name="as" value="spam" />
            <input type="hidden" name="action" value="mark" />
            <input type="hidden" name="page" value="item" />
            <select name="as" id="as" class="mark_as">
                  <option> <?php _e("Mark as...", 'fino'); ?></option>
                    <option value="spam"><?php _e("Mark as spam", 'fino'); ?></option>
                    <option value="badcat"><?php _e("Mark as misclassified", 'fino'); ?></option>
                    <option value="repeated"><?php _e("Mark as duplicated", 'fino'); ?></option>
                    <option value="expired"><?php _e("Mark as expired", 'fino'); ?></option>
                    <option value="offensive"><?php _e("Mark as offensive", 'fino'); ?></option>
            </select>
        </form>
  </div>
  <?php } ?>
  <div class="clearfix"></div>
                    <?php } ?>
				</div>
					<script text="text/javascript">
        $(document).ready(function(){
$(function()
		{
			$('.photos a').lightbox();
		});
        });
    </script>
				<div class="col-sm-9 listing-info">
				<?php if( osc_images_enabled_at_items() ) { ?>
                    <?php if( osc_count_item_resources() > 0 ) { ?>
					<div id="listing-gallery" class="photos">
					 <?php for ( $i = 0; osc_has_item_resources(); $i++ ) { ?>
					 <?php if( $i == 0 ) { ?>
						<div class="col-sm-12"><a href="<?php echo osc_resource_url(); ?>" rel="lightbox"><img src="<?php echo osc_resource_url(); ?>" alt="<?php echo osc_item_title(); ?>"></a></div>
						<?php } else { ?>
						<div class="col-sm-3 col-xs-3"><a href="<?php echo osc_resource_url(); ?>" rel="lightbox"><img src="<?php echo osc_resource_thumbnail_url(); ?>" alt="<?php echo osc_item_title(); ?>"></a></div>
					     <?php } ?>
                        <?php } ?>
					</div>
					 <div class="clearfix"></div>
					    <?php } ?>
						<?php } ?>
					<div class="main-info">
<p id="text-1"><span class="glyphicon glyphicon-folder-open"  aria-hidden="true"></span>&nbsp;&nbsp;<?php echo osc_item_category(); ?></p>
						<p id="text-2"><?php echo osc_item_description(); ?></p>
						   <?php if( osc_count_item_meta() >= 1 ) { ?>
                            <br />
                            <div class="meta_list">
                                <?php while ( osc_has_item_meta() ) { ?>
                                    <?php if(osc_item_meta_value()!='') { ?>
                                        <div class="meta">
                                            <strong><?php echo osc_item_meta_name(); ?>:</strong> <?php echo osc_item_meta_value(); ?>
                                        </div>
                                    <?php } ?>
                                <?php } ?>
                            </div>
                        <?php } ?>
					</div>
					<div class="tech-info">
						<div class="left-tech-info">
									<?php if ( osc_item_pub_date() != "" ) { ?>  
							<div class="pub-date">
							<p class="title"><span class="glyphicon glyphicon-calendar" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Published date", 'fino') ; ?>:</p>
								<p class="text"><?php echo osc_format_date( osc_item_pub_date() );?></p>
							</div>
							<?php } ?>
							<?php if ( osc_item_mod_date() != "" ) { ?>
							<div class="mod-date">
								<p class="title"><span class="glyphicon glyphicon-calendar" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Modified date", 'fino') ; ?>:</p>
								<p class="text"><?php echo osc_format_date( osc_item_mod_date() ); ?></p>
							</div>
							<?php } ?>
							<?php if ( osc_item_region() != "" ) { ?>
							<div class="reg-text">
								<p class="title"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Region", 'fino'); ?>:</p>
								<p class="text"><?php echo osc_item_region(); ?></p>
							</div>
							<?php } ?>
							<?php if ( osc_item_city() != "" ) { ?>
							<div class="city-text">
								<p class="title"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("City", 'fino'); ?>:</p>
								<p class="text"><?php echo osc_item_city(); ?></p>
							</div>
							<?php } ?>
							<?php if ( osc_item_city_area() != "" ) { ?>
							<div class="city-text">
								<p class="title"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("City area", 'fino'); ?>:</p>
								<p class="text"><?php echo osc_item_city_area(); ?></p>
							</div>
							<?php } ?>
							<?php if ( osc_item_address() != "" ) { ?>
							<div class="city-text">
								<p class="title"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Address", 'fino'); ?>:</p>
								<p class="text"><?php echo osc_item_address(); ?></p>
							</div>
							<?php } ?>
						</div>
						<div class="views">
							<p class="title"><span class="glyphicon glyphicon-eye-open" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Views", 'fino') ; ?></p>
							<p class="text"><?php echo osc_item_views(); ?></p>
						</div>
					</div>
					                    <div class="clear"></div>
					<?php if( osc_get_preference('item-finorevo_desc', 'fino') != '') {?>
                <div class="fino_item_desc">
                    <?php echo osc_get_preference('item-finorevo_desc', 'fino'); ?>
                </div>
                <?php } ?>
					<br />
					<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-535d5a6132ffb0f3" async="async"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_sharing_toolbox"></div>
<br />
   <?php osc_run_hook('item_detail', osc_item() ); ?>
                    <br />
                    
					<div class="map">
<?php osc_run_hook('location'); ?>
					</div>
					<?php if( osc_get_preference('useful', 'fino') == 'enable') {?>
					                <div class="main-info">
									<div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-warning-sign glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('Useful information', 'fino'); ?></p>						
							</div>
						</div>
                    <ul>
                        <li><?php _e('Avoid scams by acting locally or paying with PayPal', 'fino'); ?></li>
                        <li><?php _e('Never pay with Western Union, Moneygram or other anonymous payment services', 'fino'); ?></li>
                        <li><?php _e('Don\'t buy or sell outside of your country. Don\'t accept cashier cheques from outside your country', 'fino'); ?></li>
                        <li><?php _e('This site is never involved in any transaction, and does not handle payments, shipping, guarantee transactions, provide escrow services, or offer "buyer protection" or "seller certification"', 'fino'); ?></li>
                    </ul>
                </div>
				 <?php } ?>
                <?php if( osc_comments_enabled() ) { ?>
                    <?php if( osc_reg_user_post_comments () && osc_is_web_user_logged_in() || !osc_reg_user_post_comments() ) { ?>
                    <div id="comments">
						<div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-comment glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('Comments', 'fino'); ?></p>						
							</div>
						</div>
                        <ul id="comment_error_list"></ul>
                        <?php CommentForm::js_validation(); ?>
                        <?php if( osc_count_item_comments() >= 1 ) { ?>
                            <div class="comments_list">
                                <?php while ( osc_has_item_comments() ) { ?>
                                    <div class="comment">
                                        <h5><strong><?php echo osc_comment_title(); ?></strong> <em><?php _e("by", 'fino'); ?> <?php echo osc_comment_author_name(); ?>:</em></h5>
                                        <p><?php echo nl2br( osc_comment_body() ); ?> </p>
                                        <?php if ( osc_comment_user_id() && (osc_comment_user_id() == osc_logged_user_id()) ) { ?>
                                        <p>
                                            <a rel="nofollow" href="<?php echo osc_delete_comment_url(); ?>" title="<?php _e('Delete your comment', 'fino'); ?>"><?php _e('Delete', 'fino'); ?></a>
                                        </p>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                                <div class="paginate" style="text-align: right;">
                                    <?php echo osc_comments_pagination(); ?>
                                </div>
                            </div>
                        <?php } ?>
                        <form action="<?php echo osc_base_url(true); ?>" method="post" name="comment_form" id="comment_form">
                            <fieldset>
                                <h4><span class="glyphicon glyphicon-pencil"  aria-hidden="true"></span>&nbsp;<?php _e('Leave your comment (spam and offensive messages will be removed)', 'fino'); ?></h4>
                                <input type="hidden" name="action" value="add_comment" />
                                <input type="hidden" name="page" value="item" />
                                <input type="hidden" name="id" value="<?php echo osc_item_id(); ?>" />
                                <?php if(osc_is_web_user_logged_in()) { ?>
                                    <input type="hidden" name="authorName" value="<?php echo osc_esc_html( osc_logged_user_name() ); ?>" />
                                    <input type="hidden" name="authorEmail" value="<?php echo osc_logged_user_email();?>" />
                                <?php } else { ?>
								   <input type="text" name="authorName" id="authorName" class="contact-inpt" placeholder="<?php echo osc_esc_html( __('Your name', 'fino')); ?>" />
                                 <input class="email" type="text" name="authorEmail" id="authorEmail" placeholder="<?php echo osc_esc_html( __('Your e-mail', 'fino')); ?>" /><br />
                                <?php } ?>
								<input class="title" type="text" name="title" id="title" placeholder="<?php echo osc_esc_html( __('Title', 'fino')); ?>"><br />
								<textarea id="body" name="body" rows="10" placeholder="<?php echo osc_esc_html( __('Comment', 'fino')); ?>"></textarea><br /><br />
                                <button type="submit" class="btn"><?php echo osc_esc_html( __('Send', 'fino')); ?></button>
                            </fieldset>
                        </form>
                    </div>
                    <?php } ?>
                <?php } ?>
				</div>
				<div class="col-sm-3 contact-fld">
				<?php if( osc_get_preference('item-finorevo_image', 'fino') != '') {?>
                <div class="fino_item_desc">
                    <?php echo osc_get_preference('item-finorevo_image', 'fino'); ?>
                </div>
                <?php } ?>
				<div class="head-block">
						<div class="icon">
					  <p class="name"><a href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>" ><span class="glyphicon glyphicon-user glyphicon-cussearch"  aria-hidden="true"></a></span></p>
						</div>
						<div class="title">
							<?php if( osc_item_user_id() != null ) { ?>
                            <p class="name"><a style="text-decoration:underline;"href="<?php echo osc_user_public_profile_url( osc_item_user_id() ); ?>" ><?php echo osc_item_contact_name(); ?></a></p>
                        <?php } else { ?>
                            <p><?php echo osc_item_contact_name(); ?></p>
                        <?php } ?>						
						</div>
					</div>
					<div class="contact-fld contact-form">
					    															<?php if(osc_item_user_id() <> 0) { ?>
                <?php $user = User::newInstance()->findByPrimaryKey( osc_item_user_id() ); ?>
                <?php if($user['b_company'] == 1) { ?>
                  <p class="phone"><span class="glyphicon glyphicon glyphicon-user" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e('Company', 'fino'); ?></p>
                <?php } else { ?>
                  <p class="phone"><span class="glyphicon glyphicon glyphicon-user" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e('User', 'fino'); ?></p>
                <?php } ?>
            <?php } ?>
				
                        <?php if( osc_item_show_email() ) { ?>
                            <p class="phone"><span class="glyphicon glyphicon-envelope" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e('E-mail', 'fino'); ?>: <?php echo osc_item_contact_email(); ?></p>
                        <?php } ?>
                        
							<?php if ( osc_user_phone_land() != '' ) { ?>
                            <p class="phone"><span class="glyphicon glyphicon-earphone" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Tel", 'fino'); ?>.: <?php echo osc_user_phone_land(); ?></p>
                        <?php } ?>
						<?php if ( osc_user_phone_mobile() != '' ) { ?>
                            <p class="phone"><span class="glyphicon glyphicon-earphone" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Tel", 'fino'); ?>.: <?php echo osc_user_phone_mobile(); ?></p>
                        <?php } ?>
						<?php if ( osc_user_region() != '' ) { ?>
                            <p class="phone"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("Region", 'fino'); ?>: <?php echo osc_user_region(); ?></p>
                        <?php } ?>
						<?php if ( osc_user_city() != '' ) { ?>
                            <p class="phone"><span class="glyphicon glyphicon-map-marker" style="font-size:16px;" aria-hidden="true"></span>&nbsp;<?php _e("City", 'fino'); ?>: <?php echo osc_user_city(); ?></p>
                        <?php } ?>
						</div>
					<div class="head-block pub1">
						<div class="icon">
							<span class="glyphicon glyphicon-envelope glyphicon-cussearch"  aria-hidden="true"></span>
						</div>
						<div class="title">
							<p class="text"><?php _e("Contact publisher", 'fino'); ?></p>						
						</div>
					</div>
					     <?php if( osc_item_is_expired () ) { ?>
                        <p>
                            <?php _e("The listing is expired. You can't contact the publisher.", 'fino'); ?>
                        </p>
                    <?php } else if( ( osc_logged_user_id() == osc_item_user_id() ) && osc_logged_user_id() != 0 ) { ?>
                        <p>
                            <?php _e("It's your own listing, you can't contact the publisher.", 'fino'); ?>
                        </p>
                    <?php } else if( osc_reg_user_can_contact() && !osc_is_web_user_logged_in() ) { ?>
                        <p>
                            <?php _e("You must log in or register a new account in order to contact the publisher", 'fino'); ?>
                        </p>
                        <p class="contact_button">
                            <strong><a href="<?php echo osc_user_login_url(); ?>"><?php _e('Login', 'fino'); ?></a></strong>
                            <strong><a href="<?php echo osc_register_account_url(); ?>"><?php _e('Register for a free account', 'fino'); ?></a></strong>
                        </p>
                    <?php } else { ?>
		
						<ul id="error_list"></ul>
 <?php ContactForm::js_validation(); ?>
					<form action="<?php echo osc_base_url(true); ?>" class="form-horizontal contact-form" role="form" method="post" name="contact_form" id="contact_form">
						<?php osc_prepare_user_info(); ?>
						<input class="contact-inpt" type="text" name="yourName" id="yourName" placeholder="<?php echo osc_esc_html( __('Your name', 'fino')); ?>">
						<input class="contact-inpt" type="text" id="yourEmail" name="yourEmail" placeholder="<?php echo osc_esc_html( __('Your e-mail address', 'fino')); ?>">
						<input class="contact-inpt" type="text" id="phoneNumber" name="phoneNumber" placeholder="<?php echo osc_esc_html( __('Phone number', 'fino')); ?> (<?php echo osc_esc_html( __('optional', 'fino')); ?>)">
						<?php osc_run_hook('item_contact_form', osc_item_id()); ?>
						<textarea id="message" name="message" rows="10" placeholder="<?php echo osc_esc_html( __('Message', 'fino')); ?>"></textarea>
						   <input type="hidden" name="action" value="contact_post" />
                           <input type="hidden" name="page" value="item" />
                           <input type="hidden" name="id" value="<?php echo osc_item_id(); ?>" />
						   <br />
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
                    <?php } ?>
			<?php if (function_exists('related_fino_start')) {related_fino_start();} ?> 
					<!-- end item blocks -->
				</div>
			</div>
		</div><!-- end iNEW! -->
			

			
        <div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>
