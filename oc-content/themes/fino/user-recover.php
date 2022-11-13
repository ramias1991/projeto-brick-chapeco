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
<div class="col-md-6 col-md-offset-3">
			<div class="general-info">
			<div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-transfer glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('Recover your password', 'fino'); ?></p>						
							</div>
						</div>
                <form id="register" action="<?php echo osc_base_url(true); ?>" method="post" >
                    <input type="hidden" name="page" value="login" />
                    <input type="hidden" name="action" value="recover_post" />
                    <fieldset>
                        <label for="email"><?php _e('E-mail', 'fino'); ?></label> <?php UserForm::email_text(); ?><br />
                        <?php osc_show_recaptcha('recover_password'); ?>
                        <button type="submit" class="ui-button"><?php _e('Send me a new password', 'fino'); ?></button>
                    </fieldset>
                </form>
            </div>
        </div></div><div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>