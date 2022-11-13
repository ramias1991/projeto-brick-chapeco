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
$sCategoryArray = osc_search_category_id(); 

$sCategory=false;

if($sCategoryArray){

$sCategory = $sCategoryArray['0'];

}
?>
<!DOCTYPE html>
<html lang="<?php echo str_replace('_', '-', osc_current_user_locale()); ?>">
    <head>
        <?php osc_current_web_theme_path('head.php'); ?>
        <?php if( osc_count_items() == 0 || Params::getParam('iPage') > 0 || stripos($_SERVER['REQUEST_URI'], 'search') )  { ?>
            <meta name="robots" content="noindex, nofollow" />
            <meta name="googlebot" content="noindex, nofollow" />
        <?php } else { ?>
            <meta name="robots" content="index, follow" />
            <meta name="googlebot" content="index, follow" />
        <?php } ?>

    </head>
    <body>
	
        <?php osc_current_web_theme_path('header.php'); ?>
		<div class="container content">
		<?php

    $breadcrumb = osc_breadcrumb('&raquo;', false);
    if( $breadcrumb != '') { ?>
    <div class="way">
        <?php echo $breadcrumb; ?>
        <div class="clear"></div>
    </div>
<?php
    }
?>
<div class="forcemessages-inline">
    <?php osc_show_flash_message(); ?>
</div>
<div class="col-sm-9 latest">
<div class="container-fluid sh1">
					<h3 class="block-title le"><?php echo search_title(); ?></h3>
</div>
					<div class="user-company-change">
						<div class="all <?php if(Params::getParam('sCompany') == '' or Params::getParam('sCompany') == null) { ?>active<?php } ?>"><span><?php _e('All', 'fino'); ?></span></div>
						<div class="individual <?php if(Params::getParam('sCompany') == '0') { ?>active<?php } ?>"><span><?php _e('Users', 'fino'); ?></span></div>
						<div class="company <?php if(Params::getParam('sCompany') == '1') { ?>active<?php } ?>"><span><?php _e('Company', 'fino'); ?></span></div>
					</div>

					<p class="text-left">
                             <mark><?php _e('Sort by', 'fino'); ?>:</mark>
                                <?php $i = 0; ?>
                                <?php $orders = osc_list_orders();
                                foreach($orders as $label => $params) {
                                    $orderType = ($params['iOrderType'] == 'asc') ? '0' : '1'; ?>
                                    <?php if(osc_search_order() == $params['sOrder'] && osc_search_order_type() == $orderType) { ?>
                                        <a class="sort" href="<?php echo osc_esc_html(osc_update_search_url($params)); ?>"><?php echo $label; ?></a>
                                    <?php } else { ?>
                                        <a class="sort" href="<?php echo osc_esc_html(osc_update_search_url($params)); ?>"><?php echo $label; ?></a>
                                    <?php } ?>
                                    <?php if ($i != count($orders)-1) { ?>
                                        <span>|</span>
                                    <?php } ?>
                                    <?php $i++; ?>
                                <?php } ?>

                            </p>
							<div class="clearfix"></div>
					<ul class="nav nav-tabs">
<li><?php $params1['sShowAs'] = 'gallery'; ?><a id="block" href="<?php echo osc_update_search_url($params1) ; ?>"><span class="glyphicon glyphicon-th glyphicon-nav" ></span></a></li>
<li><?php $params1['sShowAs'] = 'list'; ?><a id="list" href="<?php echo osc_update_search_url($params1) ; ?>"><span class="glyphicon glyphicon-th-list glyphicon-nav" ></span></a></li>
					</ul>
					<!-- end Nav tabs -->
<?php if(osc_count_items() == 0) { ?>
                        <p class="empty" ><?php printf(__('There are no results matching "%s"', 'fino'), osc_search_pattern()); ?></p>
                    <?php } else { ?>
					<div class="clearfix"></div>
					   <?php osc_run_hook('search_top'); ?>
					   <div class="clearfix"></div>
                        <?php require(fino_show_as() == 'list' ? 'search_list.php' : 'search_gallery.php'); ?>
						<?php osc_run_hook('search_under'); ?>
                        <div class="paginate" >
                        <?php echo osc_search_pagination(); ?>
                        </div>
                    <?php } ?>
                    <div class="clear"></div>
                 
				</div>
<div class="row search-page">
				<div class="col-sm-3 search-fld">
					<div class="search-field">
					<?php if( osc_get_preference('side-finorevo', 'fino') != '') {?>
                <!-- side ad Adaptive-->
                <div class="main_car">
                    <?php echo osc_get_preference('side-finorevo', 'fino'); ?>
                </div>
				<div class="clearfix"></div>
                <!-- /side ad Adaptive-->
                <?php } ?>  
												<?php  if ( osc_is_search_page()  && ( osc_get_preference('sub', 'fino') == 'enable')) { ?>

	<?php $spubcat = get_categoriesHierarchy(); ?>
 	<?php if (!isset($spubcat[2]) && !isset($spubcat[1]) && isset($spubcat[0])){ ?>
	<div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-list-alt glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('Subcategories', 'fino'); ?></p>						
							</div>
						</div>
                    		<?php ;
							
                    		 echo '<ul class="categoryside">';
							
                    		 foreach(get_subcategories() as $subcat) {
			
					echo "<li class=\"subcatside\"><a href='".$subcat["url"]."'>".$subcat["s_name"]." <span class=\"views\">" . get_category_num_items($subcat) . "</span></a> </li>";
				 }
				 
				 echo '</ul>';
                    		 } 
				elseif (!isset($spubcat[2]) && isset($spubcat[1]) && isset($spubcat[0])) { ?>
					<div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-list-alt glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('Subcategories', 'fino'); ?></p>						
							</div>
						</div>
				<?php ; 
                    		echo '<ul class="categoryside">';
						
                    		 foreach(get_subcategories() as $subcat) {
					
					echo "<li class=\"subcatside\"><a href='".$subcat["url"]."'>".$subcat["s_name"]." <span class=\"views\">" . get_category_num_items($subcat) . "</span></a> </li>";
				 }
				
				 echo '</ul>';
                    		}
				elseif (isset($spubcat[2]) && isset($spubcat[1]) && isset($spubcat[0])) { ?>
					<div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-list-alt glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('Subcategories', 'fino'); ?></p>						
							</div>
						</div>
				<?php ; 
                    		echo '<ul class="categoryside">';
						
                    		 foreach(get_subcategories() as $subcat) {
					
					echo "<li class=\"subcatside\"><a href='".$subcat["url"]."'>".$subcat["s_name"]." <span class=\"views\">" . get_category_num_items($subcat) . "</span></a> </li>";
				 }
				
				 echo '</ul>';
                    		}							
                    	else { ?>
                    	<?php } ?>
<?php } ?>
						<div class="head-block">
							<div class="icon">
								<span class="glyphicon glyphicon-search glyphicon-cussearch"  aria-hidden="true"></span>
							</div>
							<div class="title">
								<p class="text"><?php _e('search', 'fino'); ?></p>						
							</div>
						</div>
						<form action="<?php echo osc_base_url(true); ?>" method="get" onsubmit="return doSearch()" class="form-horizontal search-page-form nocsrf" role="form">
							<input type="hidden" name="page" value="search" />
                        <input type="hidden" name="sOrder" value="<?php echo osc_esc_html(osc_search_order()); ?>" />
                        <input type="hidden" name="iOrderType" value="<?php $allowedTypesForSorting = Search::getAllowedTypesForSorting(); echo osc_esc_html($allowedTypesForSorting[osc_search_order_type()]); ?>" />
                        <?php foreach(osc_search_user() as $userId) { ?>
                            <input type="hidden" name="sUser[]" value="<?php echo $userId; ?>" />
                        <?php } ?>
						<input type="hidden" name="sCompany" value="<?php echo Params::getParam('sCompany'); ?>">
							<input class="search-page-inpt" type="text" name="sPattern" id="query" placeholder="<?php echo osc_esc_html( __('Your search', 'fino')); ?>" value="<?php echo osc_esc_html( osc_search_pattern() ); ?>">
							<input class="search-page-inpt" type="text" id="sCity" name="sCity" placeholder="<?php echo osc_esc_html( __('city', 'fino')); ?>" value="<?php echo osc_esc_html( osc_search_city() ); ?>">
							<input type="hidden" id="sRegion" name="sRegion" value="" />
							<?php 
							if(isset($sCategory)) {

    $category = array("pk_i_id" => $sCategory);

	} else {

		if(osc_is_search_page()){

	$category = 'null';

		} else {$category = array("pk_i_id" => '0');}

	}
							fino_categories_select('sCategory', $category , __('Categories', 'fino')) ; ?>
							<?php if( osc_images_enabled_at_items() ) { ?>
							<div class="search-check">
						    <label for="withPicture"><?php _e('Show only listings with pictures', 'fino'); ?>
						          <input type="checkbox" name="bPic" id="withPicture" value="1" <?php echo (osc_search_has_pic() ? 'checked="checked"' : ''); ?> />
						        </label>
						  </div>
						  <?php } ?>
<?php if( osc_price_enabled_at_items() ) { ?>
                                <h6><?php _e('Price', 'fino'); ?></h6>
                                <input class="search-page-inpt2" type="text" id="priceMin" name="sPriceMin" placeholder="<?php echo osc_esc_html( __('Min', 'fino')); ?>" value="<?php echo osc_esc_html(osc_search_price_min()); ?>" size="15" maxlength="15" />

                                <input class="search-page-inpt2" type="text" id="priceMax" name="sPriceMax" placeholder="<?php echo osc_esc_html( __('Max', 'fino')); ?>" value="<?php echo osc_esc_html(osc_search_price_max()); ?>" size="15" maxlength="15" />
                            <?php } ?>
							<?php if(osc_search_category_id()) {
                                osc_run_hook('search_form', osc_search_category_id());
                            } else {
                                osc_run_hook('search_form');
                            }?>
							<div class="clearfix"></div>
							<button type="submit" class="btn btn-block"><?php _e('SEARCH', 'fino'); ?></button>
						</form>
						<?php osc_alert_form(); ?>

					</div>
				</div>
 
            </div>

            <script type="text/javascript">
                $(function() {
                    function log( message ) {
                        $( "<div/>" ).text( message ).prependTo( "#log" );
                        $( "#log" ).attr( "scrollTop", 0 );
                    }

                    $( "#sCity" ).autocomplete({
                        source: "<?php echo osc_base_url(true); ?>?page=ajax&action=location",
                        minLength: 2,
                        select: function( event, ui ) {
                            $("#sRegion").attr("value", ui.item.region);
                            log( ui.item ?
                                "<?php _e('Selected', 'fino'); ?>: " + ui.item.value + " aka " + ui.item.id :
                                "<?php _e('Nothing selected, input was', 'fino'); ?> " + this.value );
                        }
                    });
                });

                function checkEmptyCategories() {
                    var n = $("input[id*=cat]:checked").length;
                    if(n>0) {
                        return true;
                    } else {
                        return false;
                    }
                }
            </script>
        </div>
		<div style="clear:both"></div>	
        <?php osc_current_web_theme_path('footer.php'); ?>
		  <script>
        $(document).ready(function() {
			$('.user-company-change .all').click(function() {
				$('[name=sCompany]').val('');
				$('form.search-page-form').submit();

			});
			$('.user-company-change .individual').click(function() {
				$('[name=sCompany]').val('0');
				$('form.search-page-form').submit();
			});
			$('.user-company-change .company').click(function() {
				$('[name=sCompany]').val('1');
				$('form.search-page-form').submit();
			});
        });
        </script>
    </body>
</html>
