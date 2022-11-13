<?php
		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
?>
<script type="text/javascript">
$(document).ready(function(){
    $(".btn2").click(function(){
        $.post('<?php echo osc_base_url(true); ?>', {email:$("#alert_email").val(), userid:$("#alert_userId").val(), alert:$("#alert").val(), page:"ajax", action:"alerts"}, 
            function(data){
                if(data==1) { alert('<?php echo osc_esc_js(__('You have sucessfully subscribed to the alert', 'fino')); ?>'); }
                else if(data==-1) { alert('<?php echo osc_esc_js(__('Invalid email address', 'fino')); ?>'); }
                else { alert('<?php echo osc_esc_js(__('There was a problem with the alert', 'fino')); ?>');
                };
        });
        return false;
    });

    var sQuery = '<?php echo osc_esc_js(AlertForm::default_email_text()); ?>';

    if($('input[name=alert_email]').val() == sQuery) {
        $('input[name=alert_email]').css('color', 'gray');
    }
    $('input[name=alert_email]').click(function(){
        if($('input[name=alert_email]').val() == sQuery) {
            $('input[name=alert_email]').val('');
            $('input[name=alert_email]').css('color', '');
        }
    });
    $('input[name=alert_email]').blur(function(){
        if($('input[name=alert_email]').val() == '') {
            $('input[name=alert_email]').val(sQuery);
            $('input[name=alert_email]').css('color', 'gray');
        }
    });
    $('input[name=alert_email]').keypress(function(){
        $('input[name=alert_email]').css('background','');
    })
});
</script>
<div class="rss">
							<div class="head-block">
								<div class="icon">
<span class="glyphicon glyphicon-transfer glyphicon-cussearch"  aria-hidden="true"></span>
								</div>
								<div class="title">
									<p class="text"><?php _e('Subscribe to this search', 'fino'); ?></p>						
								</div>
							</div>
							<form action="<?php echo osc_base_url(true); ?>" method="post" name="sub_alert" id="sub_alert" class="rss-form">
								   <?php AlertForm::page_hidden(); ?>
            <?php AlertForm::alert_hidden(); ?>

            <?php if(osc_is_web_user_logged_in()) { ?>
                <?php AlertForm::user_id_hidden(); ?>
                <?php AlertForm::email_hidden(); ?>

            <?php } else { ?>
                <?php AlertForm::user_id_hidden(); ?>
                <?php AlertForm::email_text(); ?>

            <?php }; ?>
								<button type="submit" class="btn2 btn-block"><?php _e('Subscribe', 'fino'); ?>!</button>
							</form>
						</div>
