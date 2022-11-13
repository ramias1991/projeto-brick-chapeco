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
        <?php UserForm::js_validation(); ?>
        <?php osc_current_web_theme_path('header.php'); ?>
                <div class="container content">
		<div class="forcemessages-inline">
    <?php osc_show_flash_message(); ?>
</div>
            <div class="col-md-6 col-md-offset-3">
			<div class="general-info">
			<div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-pencil glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('Register an account for free', 'fino'); ?></p>						
							</div>
						</div>
                <ul id="error_list"></ul>
                <form name="register" id="register" action="<?php echo osc_base_url(true); ?>" method="post" >
                    <input type="hidden" name="page" value="register" />
                    <input type="hidden" name="action" value="register_post" />

                    <fieldset>
                        <label for="name"><?php _e('Name', 'fino'); ?> *</label> <?php UserForm::name_text(); ?><br />
                        <label for="password"><?php _e('Password', 'fino'); ?> *</label> <?php UserForm::password_text(); ?><br />
                        <label for="password"><?php _e('Re-type password', 'fino'); ?> *</label> <?php UserForm::check_password_text(); ?><br />
                        <p id="password-error" style="display:none;">
                            <?php _e('Passwords don\'t match', 'fino'); ?>.
                        </p>
						<label for="password"><?php _e('Mobile Phone', 'fino'); ?></label>
						<input id="s_phone_mobile" type="text" name="s_phone_mobile" value="" placeholder="" class="form-control__big"><br />
						<label for="password"><?php _e('User type', 'fino'); ?></label>
						<select name="b_company" id="b_company" class="form-control__big">						
								<option value="0"><?php _e('User','fino'); ?></option>
								<option value="1"><?php _e('Company','fino'); ?></option>
								<select>
                        <label for="email"><?php _e('E-mail', 'fino'); ?> *</label> <?php UserForm::email_text(); ?><br />
						<div class="form-group">
												<p><?php _e('* This field is required', 'fino'); ?></p>
												</div>
                        <?php osc_run_hook('user_register_form'); ?>
                        <?php osc_show_recaptcha('register'); ?>
						<?php if( function_exists( "MyHoneyPot" )) { ?>		
			<?php MyHoneyPot(); ?>		
		<?php } ?>  
                        <button type="submit" class="ui-button"><?php _e('Create', 'fino'); ?></button>
                    </fieldset>
                </form>
            </div>
        </div></div><div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>