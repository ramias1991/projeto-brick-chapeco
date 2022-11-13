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
?>
<style type="text/css" media="screen">
    .command { background-color: white; color: #2E2E2E; border: 1px solid black; padding: 8px; }
    .theme-files { min-width: 500px; }
</style>
<h2 class="render-title"><?php _e('Header logo', 'fino'); ?></h2>
<?php if( is_writable( WebThemes::newInstance()->getCurrentThemePath() . "img/") ) { ?>
    <?php if(file_exists( WebThemes::newInstance()->getCurrentThemePath() . "img/logo.jpg" ) ) { ?>
        <h3 class="render-title"><?php _e('Preview', 'fino') ?></h3>
        <img border="0" alt="<?php echo osc_esc_html( osc_page_title() ); ?>" src="<?php echo osc_current_web_theme_url('img/logo.jpg');?>" />
        <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/fino/admin/header.php');?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="action_specific" value="remove" />
            <fieldset>
                <div class="form-horizontal">
                    <div class="form-actions">
                        <input id="button_remove" type="submit" value="<?php echo osc_esc_html(__('Remove logo','fino')); ?>" class="btn btn-red">
                    </div>
                </div>
            </fieldset>
        </form>
    </p>
    <?php } else { ?>
        <div class="flashmessage flashmessage-warning flashmessage-inline" style="display: block;">
            <p><?php _e("No logo has been uploaded yet", 'fino'); ?></p>
        </div>
    <?php } ?>
    <h2 class="render-title separate-top"><?php _e('Upload logo', 'fino') ?></h2>
    <p>
        <?php _e('The recomended maximum size of the logo is 200x55.', 'fino'); ?>
        <?php if( file_exists( WebThemes::newInstance()->getCurrentThemePath() . "img/logo.jpg" ) ) { ?>
        <?php _e('<strong>Note:</strong> Uploading another logo will overwrite the current logo.', 'fino'); ?>
        <?php } ?>
    </p>
    <form action="<?php echo osc_admin_render_theme_url('oc-content/themes/fino/admin/header.php'); ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action_specific" value="upload_logo" />
        <fieldset>
            <div class="form-horizontal">
                <div class="form-row">
                    <div class="form-label"><?php _e('Logo image (png,gif,jpg)','fino'); ?></div>
                    <div class="form-controls">
                        <input type="file" name="logo" id="package" />
                    </div>
                </div>
                <div class="form-actions">
                    <input id="button_save" type="submit" value="<?php echo osc_esc_html(__('Upload','fino')); ?>" class="btn btn-submit">
                </div>
            </div>
        </fieldset>
    </form>
<?php } else { ?>
    <div class="flashmessage flashmessage-error" style="display: block;">
        <p>
            <?php
                $msg  = sprintf(__('The images folder <strong>%s</strong> is not writable on your server', 'fino'), WebThemes::newInstance()->getCurrentThemePath() ."img/" ) .", ";
                $msg .= __("OSClass can't upload the logo image from the administration panel.", 'fino') . ' ';
                $msg .= __("Please make the aforementioned image folder writable.", 'fino') . ' ';
                echo $msg;
            ?>
        </p>
        <p>
            <?php _e('To make a directory writable under UNIX execute this command from the shell:','fino'); ?>
        </p>
        <p class="command">
            chmod a+w <?php echo WebThemes::newInstance()->getCurrentThemePath() ."img/" ; ?>
        </p>
    </div>
<?php } ?>