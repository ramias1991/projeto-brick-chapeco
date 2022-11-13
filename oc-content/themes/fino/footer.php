<?php
		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */


    $sQuery = osc_esc_js(osc_get_preference('keyword_placeholder', 'fino'));
?>

<!-- footer -->
		<a href="#" id="vverh"><img src="<?php echo osc_current_web_theme_url('img/vverh.png'); ?>" alt=""></a>
		<div class="for-footer"></div>

	<!-- end wrapper -->
	<footer>
	<div class="container">
	<div class="col-sm-4">
	<?php osc_show_widgets('footer1') ; ?>
	</div>
	<div class="col-sm-4">
	<?php osc_show_widgets('footer2') ; ?>
	</div>
	<div class="col-sm-4">
	<?php osc_show_widgets('footer3') ; ?>
	</div>
	</div>
	<div class="clearfix"></div>
		<div class="links">
		<?php if( osc_get_preference('facebook-finorevo', 'fino') != '') {?>
                    <a class="social" href="<?php echo osc_get_preference('facebook-finorevo', 'fino'); ?>" target="_blank"><img src="<?php echo osc_current_web_theme_url('img/facebook.png'); ?>" alt=""></a>
					<?php } ?>
					<?php if( osc_get_preference('twitter-finorevo', 'fino') != '') {?>
                    <a class="social" href="<?php echo osc_get_preference('twitter-finorevo', 'fino'); ?>" target="_blank"><img src="<?php echo osc_current_web_theme_url('img/twitter.png'); ?>" alt=""></a>
					<?php } ?>
					<?php if( osc_get_preference('google-finorevo', 'fino') != '') {?>
                    <a class="social" href="<?php echo osc_get_preference('google-finorevo', 'fino'); ?>" target="_blank"><img src="<?php echo osc_current_web_theme_url('img/google.png'); ?>" alt=""></a>
					<?php } ?>
		
		</div>
		<div class="copy">
			<a href="<?php echo osc_contact_url(); ?>"><?php _e('Contact', 'fino'); ?></a>
			 <?php osc_reset_static_pages(); ?>
        <?php while( osc_has_static_pages() ) { ?>
            | <a href="<?php echo osc_static_page_url(); ?>"><?php echo osc_static_page_title(); ?></a>
        <?php } ?>
        <?php
            if( osc_get_preference('footer_link', 'fino') ) {
                echo ' | ' . __('We using <a title="Osclass Themes" href="https://osclass-pro.com/en/">Osclass Theme</a> <strong>Fino</strong>', 'fino');
            }
        ?>
		
		</div>
		</br>
	</footer>
<!-- /footer -->

<script type="text/javascript">
    var sQuery = '<?php echo $sQuery; ?>';
    function doSearch() {
        if($('input[name=sPattern]').val() == sQuery || ( $('input[name=sPattern]').val() != '' && $('input[name=sPattern]').val().length < 3 ) ) {
            $('input[name=sPattern]').css('background', '#FFC6C6');
            $('#search-example').text('<?php echo osc_esc_js( __('Your search must be at least three characters long','fino') ); ?>')
            return false;
        }
        return true;
    }
</script>
<?php osc_run_hook('footer'); ?>