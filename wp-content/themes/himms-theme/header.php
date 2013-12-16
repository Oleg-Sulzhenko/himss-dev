<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <meta charset="utf-8">

        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
           Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

        <meta name="description" content="">
        <meta name="author" content="">

        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "html5-boilerplate/css/normalize.css") ?>
        <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "html5-boilerplate/css/main.css") ?>

        <!-- Wordpress Templates require a style.css in theme root directory -->
        <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"] . "style.css") ?>

        <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
        <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"] . "html5-boilerplate/js/vendor/modernizr-2.6.1.min.js") ?>

        <!-- Wordpress Head Items -->
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <?php wp_head(); ?>
        <link href="<?php bloginfo('template_directory'); ?>/html5-boilerplate/css/colorbox.css" rel="stylesheet" type="text/css" />
        <link href="<?php bloginfo('template_directory'); ?>/html5-boilerplate/css/tabulous.css" rel="stylesheet" type="text/css" />
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
          <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <div id="container">
            <header role="banner">
                <div class="wrap">
                    <div class="log0-menu-container">
                        <div class="main-logo">
                            <a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/img/main-logo.png"/></a>
                        </div>

                        <!--                        <div class="visit-link">
                                                    Visit <a href="http://www.himss.org/">HIMSS.org</a>
                                                </div>-->
                        <div class="menu-icon"></div>

                        <div class="top-menu">  
                            <?php wp_nav_menu('menu=main-top-menu'); ?>
                        </div>

                    </div>
                    <div class="grey-line" id="big-line"><span>GLOBAL SOLUTIONS</span></div>

                </div>
            </header>
