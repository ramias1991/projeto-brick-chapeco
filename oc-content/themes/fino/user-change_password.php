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
            <div id="main" class="modify_profile">
                <h3 class="block-title publish account"><?php _e('Change your password', 'fino'); ?></h3>
                <form action="<?php echo osc_base_url(true); ?>" method="post">
                    <input type="hidden" name="page" value="user" />
                    <input type="hidden" name="action" value="change_password_post" />
                    <fieldset>
                        <p>
                            <label for="password"><?php _e('Current password', 'fino'); ?> *</label>
                            <input type="password" name="password" id="password" value="" />
                        </p>
                        <p>
                            <label for="new_password"><?php _e('New password', 'fino'); ?> *</label>
                            <input type="password" name="new_password" id="new_password" value="" />
                        </p>
                        <p>
                            <label for="new_password2"><?php _e('Repeat new password', 'fino'); ?> *</label>
                            <input type="password" name="new_password2" id="new_password2" value="" />
                        </p>
                        <div style="clear:both;"></div>
                        <button type="submit" class="ui-button"><?php _e('Update', 'fino'); ?></button>
                    </fieldset>
                </form>
            </div>
        </div></div><div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>