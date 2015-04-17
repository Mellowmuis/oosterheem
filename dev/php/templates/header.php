<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
     <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!-- build:remove:expanded -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">
    <!-- /build -->
    <!-- build:remove:compressed -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.css">
    <!-- /build -->

    <!-- build:remove:compressed -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.min.js"></script>
    <!-- /build -->

    <!-- Wordpress head function -->
    <?php wp_head(); ?>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

  </head>
  <body <?php body_class(); ?> >
<header class="scheme1">
    <div class="u-gridContainer">
        <div class="u-gridRow">
            <div class="u-gridCol4 top-contact u-objRight">
                <a href="#"><i  class="fa fa-phone-square fa-2x"></i>&nbsp;079  34 24 34</a>&nbsp;&nbsp;
                <a href="#"><i style="color:#cf1e1a;" class="fa fa-plus-circle fa-2x"></i>&nbsp;06 40 99 67 90 (spoed)</a>
            </div>
        </div>

    </div>

    <div class="Bot-Nav">
        <div class="u-gridContainer ">
            <div class="Nav-toggle u-cf">
                <a class="Navigation-menuToggle" id="js-navCollapse">
                    
                    <i class="fa fa-bars fa-2x"></i>
                </a>
            </div>
            <div class="u-gridCol2">
                <img class="Logo" src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png">
            </div>
            <div class="u-gridCol4 u-cf">
                <div class="animal-top">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/cat.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hond.png">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/konijn.png">
                </div>
            </div>
            <div class="u-gridCol6 menuContainer">
                <div class="top-menu">
                    <?php include 'includes/navigation.php'; ?>
                </div>
            </div>

            
             
            <div class="Mob-contact-ico">
                <a class="Button Button--transparent u-textInverted u-noLine telsvg" href="tel:0793424340">
                    <i class="fa fa-phone fa-2x"></i>
                </a>
            
                    <a class="Button Button--transparent u-textInverted u-noLine mailsvg" href="mailto:info@dierenkliniekoosterheem.nl">
                    <i class="fa fa-envelope fa-2x"></i>
                </a>
            </div><!-- header-contact -->
        </div>
    </div>
</header>