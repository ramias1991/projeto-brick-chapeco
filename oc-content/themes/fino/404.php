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
		<div class="col-sm-12 page-head title-center">
            <h1 class="block-title publish account"><?php _e('Page not found', 'fino'); ?></h1>
        </div>
		<div class="col-md-6 col-md-offset-3">
    <p><?php _e("Let us help you, we have got a few tips for you to find it.", 'fino') ; ?></p>
 
            <?php _e("<strong>Search</strong> for it:", 'fino') ; ?>
            <form action="<?php echo osc_base_url(true) ; ?>" method="get" class="search">
                <input type="hidden" name="page" value="search" />
                <fieldset class="main">
                    <input type="text" name="sPattern"  id="query" value="" />
                    <button type="submit" class="ui-button ui-button-middle"><?php _e('Search', 'fino') ; ?></button>
                </fieldset>
            </form>

       <?php _e("<strong>Look</strong> for it in the most popular categories.", 'fino') ; ?>

                <?php osc_goto_first_category() ; ?>
                <?php while ( osc_has_categories() ) { ?>
				<ul class="categoryside">
                        <li class="subcatside"><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?> <span class="views">(<?php echo osc_category_total_items() ; ?>)</span></a></li>
                        <?php if ( osc_count_subcategories() > 0 ) { ?>
                            <?php while ( osc_has_subcategories() ) { ?>
                                <?php if( osc_category_total_items() > 0 ) { ?>
                                    <li class="subcatside"><a class="<?php echo osc_category_slug() ; ?>" href="<?php echo osc_search_category_url() ; ?>"><?php echo osc_category_name() ; ?> <span class="views">(<?php echo osc_category_total_items() ; ?>)</span></a></li>
                                <?php } ?>
                            <?php } ?>
                        <?php } ?>
						</ul>
                <?php } ?>
           
           <div class="clear"></div>
  
</div>
		</div><div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
    </body>
</html>