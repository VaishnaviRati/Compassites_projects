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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri();?>/images/logo.jpg"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">  
  <link href="<?php echo get_template_directory_uri();?>/fonts/css/all.css" rel="stylesheet"/>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/css/style.css"/>
  <title>Must-BuildSoft</title>
</head>


<body <?php body_class(); ?>>

<header>
      <div class="header-block">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="col-md-6 pad-0">
              <img src="<?php echo get_template_directory_uri();?>/images/logo.jpg" alt="logo" width="20%" height="auto"/>
          </div>
          <div class="col-md-6 pad-0">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
          <?php   

            wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      =>  'ul',
                        'menu_class'     => 'navbar-nav'
                    )
                );

            ?>
<!--                   <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="features.html">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="benefits.html">Benefits</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>                 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="price.html">Price</a>                 
                    </li>
                  </ul> -->
                </div>
          </div>          
          </nav>
      </div>
    </header>