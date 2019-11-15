<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Datai_compass
 * @since Datai Compass 0.1
 */

function getBrowser() { 
	$u_agent = $_SERVER['HTTP_USER_AGENT'];
	$bname = 'Unknown';
	$platform = 'Unknown';
	$version= "";
  
	//First get the platform?
	if (preg_match('/linux/i', $u_agent)) {
	  $platform = 'linux';
	}elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
	  $platform = 'mac';
	}elseif (preg_match('/windows|win32/i', $u_agent)) {
	  $platform = 'windows';
	}
  
	// Next get the name of the useragent yes seperately and for good reason
	if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)){
	  $bname = 'Internet Explorer';
	  $ub = "MSIE";
	}elseif(preg_match('/Firefox/i',$u_agent)){
	  $bname = 'Mozilla Firefox';
	  $ub = "Firefox";
	}elseif(preg_match('/OPR/i',$u_agent)){
	  $bname = 'Opera';
	  $ub = "Opera";
	}elseif(preg_match('/Chrome/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
	  $bname = 'Google Chrome';
	  $ub = "Chrome";
	}elseif(preg_match('/Safari/i',$u_agent) && !preg_match('/Edge/i',$u_agent)){
	  $bname = 'Apple Safari';
	  $ub = "Safari";
	}elseif(preg_match('/Netscape/i',$u_agent)){
	  $bname = 'Netscape';
	  $ub = "Netscape";
	}elseif(preg_match('/Edge/i',$u_agent)){
	  $bname = 'Edge';
	  $ub = "Edge";
	}elseif(preg_match('/Trident/i',$u_agent)){
	  $bname = 'Internet Explorer';
	  $ub = "MSIE";
	}
  
	// finally get the correct version number
	$known = array('Version', $ub, 'other');
	$pattern = '#(?<browser>' . join('|', $known) .
  ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';
	if (!preg_match_all($pattern, $u_agent, $matches)) {
	  // we have no matching number just continue
	}
	// see how many we have
	$i = count($matches['browser']);
	if ($i != 1) {
	  //we will have two since we are not using 'other' argument yet
	  //see if version is before or after the name
	  if (strripos($u_agent,"Version") < strripos($u_agent,$ub)){
		  $version= $matches['version'][0];
	  }else {
		  $version= $matches['version'][1];
	  }
	}else {
	  $version= $matches['version'][0];
	}
  
	// check if we have a number
	if ($version==null || $version=="") {$version="?";}
  
	return array(
	  'userAgent' => $u_agent,
	  'ub'        => $ub,
	  'name'      => $bname,
	  'version'   => $version,
	  'platform'  => $platform,
	  'pattern'    => $pattern
	);
  } 
  // now try it
$ua=getBrowser();
// $yourbrowser= "Your browser: " . $ua['name'] . " " . $ua['version'] . " on " .$ua['platform'] . " reports: <br >" . $ua['userAgent'];
// print_r($ua);
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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="hfeed site">
	<div class="site-loadingWrap">
		<div class="site-loading">
		</div>
	</div>
	<header>
		<div class="container-fluid">
			<div class="clearfix">
				<div class="pull-left logo-wrap">
					<a href="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.png">
					</a>
				</div>
				<div class="pull-right header-menu">
					<span class="header-login"><a href= "http://mydatai.com/" target="_blank">LOG IN</a></span>
					<i class="fa fa-bars openMenu"></i>
				</div>
			</div>
		</div>
	</header>
	<aside>
		<div class="login-space">
			<span class="aside-menu"><!-- LOG IN --></span>
			<i class="fa fa-bars closeMenu"></i>
		</div>
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		<!-- <ul class="list-fields">
			<li>
				<a href="">Product</a>
			</li>
			<li>
				<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
					<a href="#aboutUs" class="about-click">About us</a>
				<?php } else { ?>
					<a  class="about-click">About us</a>
				<?php } ?>
				
			</li>
			<li>
				<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
					<a href="#contactUs" class="contact-click">Contact</a>
				<?php } else { ?>
					<a  class="contact-click">Contact</a>
				<?php } ?>
			</li>
			<li>
				<a href="">Resources</a>
			</li>
			<li>
				<a href="">Log in</a>
			</li>
		</ul> -->
		<p>DATA.<br/>AUTOMATED.<br/>INTELLIGENTLY.</p>
	</aside>
	
