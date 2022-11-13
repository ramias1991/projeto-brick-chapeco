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
        <?php osc_current_web_theme_path('head.php') ; ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
    </head>
    <body>
        <?php osc_current_web_theme_path('header.php') ; ?>
		 <div class="container content">
		<div class="forcemessages-inline">
    <?php osc_show_flash_message(); ?>
</div>
        <div class="" style="float:left; width: 550px;">
            <h1><?php echo osc_static_page_title() ; ?></h1>
            <div><?php echo osc_static_page_text() ; ?></div>
        </div>
        <div class="user_forms" style="float:right;">
            <div class="inner">
                <div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-envelope glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('Contact us', 'fino'); ?></p>						
							</div>
						</div>
                <ul id="error_list"></ul>
                <form action="<?php echo osc_base_url(true) ; ?>" method="post" name="contact" id="contact">
                    <input type="hidden" name="page" value="contact" />
                    <input type="hidden" name="action" value="contact_post" />
                    <fieldset>
                        <label for="subject"><?php _e('Subject', 'fino') ; ?> (<?php _e('optional', 'fino'); ?>)</label> <?php ContactForm::the_subject() ; ?><br />
                        <label for="message"><?php _e('Message', 'fino') ; ?></label> <?php ContactForm::your_message() ; ?><br />
                        <label for="yourName"><?php _e('Your name', 'fino') ; ?> (<?php _e('optional', 'fino'); ?>)</label> <?php ContactForm::your_name() ; ?><br />
                        <label for="yourEmail"><?php _e('Your e-mail address', 'fino') ; ?></label> <?php ContactForm::your_email(); ?><br />
                        <?php osc_show_recaptcha(); ?>
                        <button type="submit" class="ui-button"><?php _e('Send', 'fino') ; ?></button>
                        <?php osc_run_hook('user_register_form') ; ?>
                    </fieldset>
                </form>
            </div>
        </div></div><div style="clear:both"></div>
        <?php osc_current_web_theme_path('footer.php') ; ?>
    </body>
</html>