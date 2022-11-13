<?php
 		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
?>
<!-- container -->
<div class="wrapper">
		<header>
			<nav class="navbar navbar-default header">
			  <div class="container">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="<?php echo osc_base_url(); ?>"><?php echo logo_header(); ?></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav navbar-right">
			        <li class="active"><a href="<?php echo osc_base_url(); ?>"><?php _e('Home', 'fino'); ?></a></li>
<?php if(osc_users_enabled()) { ?>
                <?php if( osc_is_web_user_logged_in() ) { ?>					
			        <li><a href="<?php echo osc_user_dashboard_url(); ?>"><?php _e('My account', 'fino'); ?></a></li>		        
			        <li><a href="<?php echo osc_user_logout_url(); ?>"><?php _e('Logout', 'fino'); ?></a></li>	
<?php } else { ?>					
			        <li><a href="<?php echo osc_user_login_url(); ?>"><?php _e('Login', 'fino'); ?></a></li>
					<?php if(osc_user_registration_enabled()) { ?>
<li><a href="<?php echo osc_register_account_url(); ?>"><?php _e('Registration', 'fino'); ?></a></li>	
  <?php }; ?>
	 <?php } ?>
	 <?php } ?>	
<?php if ( osc_count_web_enabled_locales() > 1) { ?>
                <?php osc_goto_first_locale() ; ?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php _e("Language", 'fino') ; ?></a>
						<ul class="dropdown-menu" role="menu">
				
                        <?php $i = 0 ;  ?>
                        <?php while ( osc_has_web_enabled_locales() ) { ?>
                            <li class="language"> <a id="<?php echo osc_locale_code() ; ?>" href="<?php echo osc_change_language_url ( osc_locale_code() ) ; ?>"><?php echo osc_locale_name() ; ?></a></li>
                            <?php $i++ ; ?>
                        <?php } ?>
                    </ul>
                </li>
            <?php } ?>	 
<?php if( osc_users_enabled() || ( !osc_users_enabled() && !osc_reg_user_post() )) { ?>	 
			        <li class=" btn btn-default"><a href="<?php echo osc_item_post_url_in_category(); ?>"><span class="glyphicon glyphicon-edit" ></span>&nbsp;<?php _e("Publish your ad", 'fino');?></a></li>		        
			      <?php } ?>  	
				  </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</header>




