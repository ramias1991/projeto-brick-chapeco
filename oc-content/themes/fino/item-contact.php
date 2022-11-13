<?php
 		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>
        <meta name="robots" content="noindex, nofollow" />
        <meta name="googlebot" content="noindex, nofollow" />
    </head>
    <body>
        <?php osc_current_web_theme_path('header.php'); ?>
        <div class="content user_forms">
            <div id="contact" class="inner">
                <h1><?php _e('Contact seller', 'fino'); ?></h1>
                <ul id="error_list"></ul>
                <?php ContactForm::js_validation(); ?>
                <form action="<?php echo osc_base_url(true); ?>" method="post" name="contact_form" id="contact_form">
                    <fieldset>
                        <?php ContactForm::primary_input_hidden(); ?>
                        <?php ContactForm::action_hidden(); ?>
                        <?php ContactForm::page_hidden(); ?>
                        <label><?php _e('To (seller)', 'fino'); ?>: <?php echo osc_item_contact_name();?></label><br />
                        <label><?php _e('Listing', 'fino'); ?>: <a href="<?php echo osc_item_url(); ?>"><?php echo osc_item_title(); ?></a></label><br />
                        <?php if(osc_is_web_user_logged_in()) { ?>
                            <input type="hidden" name="yourName" value="<?php echo osc_esc_html( osc_logged_user_name() ); ?>" />
                            <input type="hidden" name="yourEmail" value="<?php echo osc_logged_user_email();?>" />
                        <?php } else { ?>
                            <label for="yourName"><?php _e('Your name', 'fino'); ?></label> <?php ContactForm::your_name(); ?><br />
                            <label for="yourEmail"><?php _e('Your e-mail address', 'fino'); ?></label> <?php ContactForm::your_email(); ?><br />
                        <?php }; ?>
                        <label for="phoneNumber"><?php _e('Phone number', 'fino'); ?> (<?php _e('optional', 'fino'); ?>)</label> <?php ContactForm::your_phone_number(); ?><br />
                        <label for="message"><?php _e('Message', 'fino'); ?></label> <?php ContactForm::your_message(); ?><br />
                        <?php osc_show_recaptcha(); ?>
                        <button type="submit" class="ui-button"><?php _e('Send message', 'fino'); ?></button>
                    </fieldset>
                </form>
            </div>
        </div></div>
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>