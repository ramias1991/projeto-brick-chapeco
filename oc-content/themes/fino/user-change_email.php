<?php
    /*
     *      Osclass – software for creating and publishing online classified
     *                           advertising platforms
     *
     *                        Copyright (C) 2012 OSCLASS
     *
     *       This program is free software: you can redistribute it and/or
     *     modify it under the terms of the GNU Affero General Public License
     *     as published by the Free Software Foundation, either version 3 of
     *            the License, or (at your option) any later version.
     *
     *     This program is distributed in the hope that it will be useful, but
     *         WITHOUT ANY WARRANTY; without even the implied warranty of
     *        MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
     *             GNU Affero General Public License for more details.
     *
     *      You should have received a copy of the GNU Affero General Public
     * License along with this program.  If not, see <http://www.gnu.org/licenses/>.
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
        <script type="text/javascript">
            $(document).ready(function() {
                $('form#change-email').validate({
                    rules: {
                        new_email: {
                            required: true,
                            email: true
                        }
                    },
                    messages: {
                        new_email: {
                            required: '?php echo osc_esc_js(__("Email: this field is required", "fino")); ?>.',
                            email: '<?php echo osc_esc_js(__("Invalid email address", "fino")); ?>.'
                        }
                    },
                    errorLabelContainer: "#error_list",
                    wrapper: "li",
                    invalidHandler: function(form, validator) {
                        $('html,body').animate({ scrollTop: $('h1').offset().top }, { duration: 250, easing: 'swing'});
                    },
                    submitHandler: function(form){
                        $('button[type=submit], input[type=submit]').attr('disabled', 'disabled');
                        form.submit();
                    }
                });
            });
        </script>
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
                <h3 class="block-title publish account"><?php _e('Change your e-mail', 'fino'); ?></h3>
                <ul id="error_list"></ul>
                <form id="change-email" action="<?php echo osc_base_url(true); ?>" method="post">
                    <input type="hidden" name="page" value="user" />
                    <input type="hidden" name="action" value="change_email_post" />
                    <fieldset>
                        <p>
                            <label for="email"><?php _e('Current e-mail', 'fino'); ?></label>
                            <span><?php echo osc_logged_user_email(); ?></span>
                        </p>
                        <p>
                            <label for="new_email"><?php _e('New e-mail', 'fino'); ?> *</label>
                            <input type="text" name="new_email" id="new_email" value="" />
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