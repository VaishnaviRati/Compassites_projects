<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> data-spy="scroll" data-target=".navbars" data-offset="90" id="main">
    <?php echo BravoTemplate::load_view('content','preload'); ?>

    <?php echo BravoTemplate::load_view('content','menu'); ?>

    <div class="wrapper">
