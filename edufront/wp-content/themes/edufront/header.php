<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
    <title>Edufront</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="<?php echo get_template_directory_uri();?>/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css">
    <link href="//db.onlinewebfonts.com/c/670a719d3203350a2847887c24e0b8af?family=Kohinoor" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    

    <nav class="navbar  navbar-fixed-top topnav" data-color="topnav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#home">
                        <img src="<?php echo get_template_directory_uri();?>/images/logo.png" alt="logo" class="img img-responsive toplogo">
                    </a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="topNavbar">
                        <ul class="nav navbar-nav menu-item">
                            <li><a href="#edufront" class="font-menu">Edufront</a></li>
                            <li><a href="#product" class="font-menu">Product</a></li>
                            <li><a href="#contact" class="font-menu">Contact</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#contact" type="submit" class="btn font-btn btn-sign" role="button">Get in touch</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>

        <!--   <?php   

            wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      =>  'ul',
                        'menu_class'     => 'nav navbar-nav menu-item'
                    )
                );

            ?> -->
                
    <!-- /top nav bar -->


                










