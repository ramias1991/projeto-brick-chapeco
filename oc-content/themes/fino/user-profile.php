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
    $locales   = __get('locales');
    $user = osc_user();

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
            <div class="col-sm-9 account">
                <h3 class="block-title publish account"><?php _e('Update your profile', 'fino'); ?></h3>
                <?php UserForm::location_javascript(); ?>
                <script type="text/javascript">
                    $(document).ready(function(){
                        $("#delete_account").click(function(){
                            $("#dialog-delete-account").dialog('open');
                        });

                        $("#dialog-delete-account").dialog({
                            autoOpen: false,
                            modal: true,
                            buttons: {
                                "<?php echo osc_esc_js(__('Delete', 'fino')); ?>": function() {
                                    window.location = '<?php echo osc_base_url(true).'?page=user&action=delete&id='.osc_user_id().'&secret='.$user['s_secret']; ?>';
                                },
                                "<?php echo osc_esc_js(__('Cancel', 'fino')); ?>": function() {
                                    $( this ).dialog( "close" );
                                }
                            }
                        });
                    });
                </script>
                <form action="<?php echo osc_base_url(true); ?>" method="post">
                    <input type="hidden" name="page" value="user" />
                    <input type="hidden" name="action" value="profile_post" />
                    <fieldset>
                        <div class="row">
                            <label for="name"><?php _e('Name', 'fino'); ?></label>
                            <?php UserForm::name_text(osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="email"><?php _e('Username', 'fino'); ?></label>
                            <span class="update">
                                <?php echo osc_user_username(); ?><br />
                                <?php if(osc_user_username()==osc_user_id()) { ?>
                                    <a href="<?php echo osc_change_user_username_url(); ?>"><?php _e('Modify username', 'fino'); ?></a>
                                <?php }; ?>
                            </span>
                        </div>
                        <div class="row">
                            <label for="email"><?php _e('E-mail', 'fino'); ?></label>
                            <span class="update">
                                <?php echo osc_user_email(); ?><br />
                                <a href="<?php echo osc_change_user_email_url(); ?>"><?php _e('Modify e-mail', 'fino'); ?></a> <a href="<?php echo osc_change_user_password_url(); ?>" ><?php _e('Modify password', 'fino'); ?></a>
                            </span>
                        </div>
                        <div class="row">
                            <label for="user_type"><?php _e('User type', 'fino'); ?></label>
                            <?php UserForm::is_company_select(osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="phoneMobile"><?php _e('Cell phone', 'fino'); ?></label>
                            <?php UserForm::mobile_text(osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="phoneLand"><?php _e('Phone', 'fino'); ?></label>
                            <?php UserForm::phone_land_text(osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="country"><?php _e('Country', 'fino'); ?> *</label>
                            <?php UserForm::country_select(osc_get_countries(), osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="region"><?php _e('Region', 'fino'); ?> *</label>
                            <?php UserForm::region_select(osc_get_regions(), osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="city"><?php _e('City', 'fino'); ?> *</label>
                            <?php UserForm::city_select(osc_get_cities(), osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="city_area"><?php _e('City area', 'fino'); ?></label>
                            <?php UserForm::city_area_text(osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="address"><?php _e('Address', 'fino'); ?></label>
                            <?php UserForm::address_text(osc_user()); ?>
                        </div>
                        <div class="row">
                            <label for="webSite"><?php _e('Website', 'fino'); ?></label>
                            <?php UserForm::website_text(osc_user()); ?>
                        </div>
                        <div class="row">
						<label for="desc"><?php _e('User Description', 'fino'); ?></label>
                            <?php UserForm::multilanguage_info($locales, osc_user()); ?>
                        </div>
                        <div class="row">
                            <button type="submit" class="ui-button"><?php _e('Update', 'fino'); ?></button>
                            <button id="delete_account" type="button"><?php _e('Delete my account', 'fino'); ?></button>
                        </div>
                        <?php osc_run_hook('user_form'); ?>
                    </fieldset>
                </form>
            </div>
        </div>
        <div id="dialog-delete-account" title="<?php _e('Delete account', 'fino'); ?>" class="has-form-actions hide">
            <div class="form-horizontal">
                <div class="form-row">
                    <p><?php _e('All your listings and alerts will be removed, this action can not be undone.', 'fino');?></p>
                </div>
            </div>
        </div></div><div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>