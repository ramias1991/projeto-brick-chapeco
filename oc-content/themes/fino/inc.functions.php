<?php
		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
?>
<?php

osc_add_hook('init_admin', 'theme_fino_actions_admin');
function fino_is_fineuploader() {
    return Scripts::newInstance()->registered['jquery-fineuploader'] && method_exists('ItemForm', 'ajax_photos');
}
if (function_exists('osc_admin_menu_appearance')) {
    osc_admin_menu_appearance(__('Header logo', 'fino'), osc_admin_render_theme_url('oc-content/themes/fino/admin/header.php'), 'header_fino');
    osc_admin_menu_appearance(__('Theme settings', 'fino'), osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php'), 'settings_fino');
} else {

    function fino_admin_menu() {
        echo '<h3><a href="#">' . __('Fino theme', 'fino') . '</a></h3>
            <ul>
                <li><a href="' . osc_admin_render_theme_url('oc-content/themes/fino/admin/header.php') . '">&raquo; ' . __('Header logo', 'fino') . '</a></li>
                <li><a href="' . osc_admin_render_theme_url('oc-content/themes/fino/admin/settings.php') . '">&raquo; ' . __('Theme settings', 'fino') . '</a></li>
		   </ul>';
    }

    osc_add_hook('admin_menu', 'fino_admin_menu');
}

?>