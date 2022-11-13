<?php
 		   /*
 * Copyright 2017 osclass-pro.com
 *
 * You shall not distribute this theme and any its files (except third-party libraries) to third parties.
 * Rental, leasing, sale and any other form of distribution are not allowed and are strictly forbidden.
 */
?>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

<title><?php echo meta_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="title" content="<?php echo osc_esc_html(meta_title()); ?>" />
<?php if( meta_description() != '' ) { ?>
<meta name="description" content="<?php echo osc_esc_html(meta_description()); ?>" />
<?php } ?>
<?php if( function_exists('meta_keywords') ) { ?>
<?php if( meta_keywords() != '' ) { ?>
<meta name="keywords" content="<?php echo osc_esc_html(meta_keywords()); ?>" />
<?php } ?>
<?php } ?>
<?php if( osc_get_canonical() != '' ) { ?>
<link rel="canonical" href="<?php echo osc_get_canonical(); ?>"/>
<?php } ?>
<meta http-equiv="Cache-Control" content="no-cache" />
<meta http-equiv="Expires" content="Fri, Jan 01 1970 00:00:00 GMT" />
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,600&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

<?php

osc_register_script('globalfino', osc_current_web_theme_js_url('script.js'));
osc_register_script('jqueryfino', osc_current_web_theme_js_url('jquery-2.1.3.min.js'));
osc_register_script('jquery-uifino', osc_current_web_theme_js_url('jquery-ui.min.js'));
osc_register_script('bootfino', osc_current_web_theme_js_url('bootstrap.min.js'));
osc_register_script('pluginsfino', osc_current_web_theme_js_url('plugins.js'));
osc_register_script('fineuploaderfino', osc_current_web_theme_js_url('fineuploader/jquery.fineuploader.min.js'));
osc_register_script('jquery-validatefino', osc_current_web_theme_js_url('jquery.validate.min.js'));
osc_register_script('datefino', osc_current_web_theme_js_url('date.js'));
osc_register_script('slick', osc_current_web_theme_js_url('slick/slick.js'));
 ?>
<link href="<?php echo osc_current_web_theme_url('css/bootstrap.min.css') ; ?>" rel="stylesheet" type="text/css" />
<link href="<?php echo osc_current_web_theme_url('css/jquery-ui/jquery-ui.min.css') ; ?>" rel="stylesheet" type="text/css" />
<?php $getfinocolor = fino_color(); ?>
<link href="<?php echo osc_current_web_theme_url('css/'.$getfinocolor.'.css') ; ?>" rel="stylesheet" type="text/css" />
<!--[if IE]>
      <link href="<?php echo osc_current_web_theme_url('css/ie.css') ; ?>" rel="stylesheet" type="text/css" />
    <![endif]-->
	<!--[if lt IE 9]>
      <link href="<?php echo osc_current_web_theme_url('css/ie8.css') ; ?>" rel="stylesheet" type="text/css" />
    <![endif]-->
 <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo osc_current_web_theme_url('js/html5shiv.min.js') ; ?>"></script>
      <script src="<?php echo osc_current_web_theme_url('js/respond.min.js') ; ?>"></script>
    <![endif]-->

<?php
osc_run_hook('header');

FieldForm::i18n_datePicker();

?>
