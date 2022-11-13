<?php
		   /*
 * Copyright 2015 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
?>
<?php
    function drawSubcategory($category) {
        if ( osc_count_subcategories2() > 0 ) {
            osc_category_move_to_children();
		
            ?>
            <ul>
                <?php while ( osc_has_categories() ) { ?>
                    <li><a class="category cat_<?php echo osc_category_id(); ?>" href="<?php echo osc_search_category_url(); ?>"><?php echo osc_category_name(); ?></a> <span>(<?php echo osc_category_total_items(); ?>)</span><?php drawSubcategory(osc_category()); ?></li>
                <?php } ?>
            </ul>
				  	
        <?php
            osc_category_move_to_parent();
        }

    }
 $total_categories   = osc_count_categories();
?>
<div class="row categories">
<h3 class="block-title lines"><?php _e('Categories', 'fino'); ?></h3>
    <?php osc_goto_first_category(); ?>

    <?php while ( osc_has_categories() ) { ?>
	    <div class="col-sm-3 main-cat">
					<div class="category only">
						<div class="head">
							<div class="icon">
								<a href="<?php echo osc_search_category_url(); ?>"><img src="<?php echo osc_current_web_theme_url('img/') . osc_category_id() .'.png' ?>" alt=""></a>
							</div>
							<div class="title">
								<a href="<?php echo osc_search_category_url(); ?>"><?php if(strlen(osc_category_name()) > 25){ echo mb_substr(osc_category_name(), 0, 23,'UTF-8').'...'; } else { echo osc_category_name(); } ?></a>					
							</div>
						</div>	
</div>
        </div>

<?php } ?>
</div>

