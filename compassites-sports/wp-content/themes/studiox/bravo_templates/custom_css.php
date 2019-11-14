<?php
if(empty($main_color)){
	$main_color=bravo_get_option('main_color','#01bab0');

	if(is_singular() and $meta=get_post_meta(get_the_ID(),'main_color',true)){
		$main_color=$meta;
	}

	$bg_rgb = bravo_hex2rgb($main_color);
	$bg_rgb = implode(' , ',$bg_rgb);
}else{
	$bg_rgb = "__rgba__";
}

$side_color=bravo_get_option('side_menu_color');
$menu_multi_color=bravo_get_option('menu_multi_color');
if(is_singular())
{
    if($meta=get_post_meta(get_the_ID(),'side_menu_color',true))
    {
		$side_color=$meta;
    }
    if($meta=get_post_meta(get_the_ID(),'menu_multi_color',true))
    {
		$menu_multi_color=$meta;
    }
}


?>

.what-we-do-features h3>span,
.bravo_facts .outer-circle:hover .icons
.our-team .hovereffect .overlay,
.progress-bar-custom,
.our-team .our-team-social > li > a > i.fa:hover, .our-team .our-team-social > li > a > i.fa:active,
.timeline > li:hover .timeline-panel,
.price.price-selected,
.bravo_testimonial .owl-controls .owl-page.active span,
#blog-slider .owl-controls .owl-page.active span,
.bravo-twitter #blog-text-slider .owl-controls .owl-page.active span,
footer,
.side-menu-button,
.shrink.navbar-default .navbar-nav > .active > a, .shrink.navbar-default .navbar-nav > .active > a:focus, .shrink.navbar-default .navbar-nav > .active > a:hover,
.our-team .hovereffect .overlay,
.price:hover,
.bravo_facts .outer-circle:hover .icons,
.what-we-do-features h3>span,
.tagcloud a:hover,
.blog-item .post-comment form input[type=submit], .contact form input[type=submit],
#area-main .tag-cloud li a:focus, #area-main .tag-cloud li a:hover, .blog-reply a.btn-rep:focus, .blog-reply a.btn-rep:hover,
.social-link li a:hover,
.slider-button.blue,
.slider-button.hl
{
    background-color:<?php echo esc_attr($main_color) ?>
}

.page-links a:hover, .page-links>span
{
    background-color:<?php echo esc_attr($main_color) ?>!important;
    color:white!important;
}
.bravo_facts .outer-circle:hover,
.social-link li a:hover,
form .buttons:active, form .buttons:hover
{
    border-color:<?php echo esc_attr($main_color) ?>
}
.timeline > li:hover .timeline-panel:after
{
    border-left-color: <?php echo esc_attr($main_color) ?>;
    border-right-color: <?php echo esc_attr($main_color) ?>;
}

.timeline > li:hover .timeline-badge > a,
.bravo_testimonial h5,
#blog-slider .blog-slider-descp p:nth-child(2) > span,
#blog-slider .item:hover h3,
.bravo-twitter h2,
.what-we-do-features:hover>h3,
.address-details:hover h2,
.address-details:hover p,
#blog-slider .item:hover p:last-child,
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:focus, .navbar-default .navbar-nav > .active > a:hover,
.sidenav ul > li.active> a,
.navbar .navbar-nav  li:hover> a,
.side-menu-button.actives .fa,
ul.category li .post-date,
ul.category li a:focus, ul.category li a:hover,
#area-main ul.blog-author li a:focus, #area-main ul.blog-author li a:hover,
.page-2 .navbar.shrink .navbar-nav>li:hover:not(.active)>a,
.page-2 .navbar:not(.shrink) .navbar-nav>li.active>a,
.navbar-nav li ul li.current-menu-item> a
{
    color:<?php echo esc_attr($main_color) ?>
}
.hl-bold
{
    color:<?php echo esc_attr($main_color) ?>;
    font-weight:bold;
}

.bravo_portfolio #owl-demo .hovereffect .overlay
{
    background:rgba(<?php echo esc_attr($bg_rgb) ?>,0.8)
}

.price:hover .header, .price.price-selected .header,
form .buttons
{
    color:<?php echo esc_attr($main_color) ?>;
    border-color:<?php echo esc_attr($main_color) ?>
}
.price.price-selected::before,
#blog-slider .blog-img,
.price:hover::before
{
    border-bottom-color:<?php echo esc_attr($main_color) ?>
}

<?php if($side_color){
    ?>
    .side-menu-button
    {
        background-color:<?php echo esc_attr($side_color) ?>
    }
    <?php
}

if($menu_multi_color=='on'){
    ?>
    .navbar-default .navbar-nav .green.active>a, .navbar-default .navbar-nav .green.active:hover>a
    {
        color:#a2be07;
    }
    .navbar-default .navbar-nav .yellow.active>a, .navbar-default .navbar-nav .yellow.active:hover>a
    {
        color:#ffa823;
    }
    .navbar-default .navbar-nav .red.active>a, .navbar-default .navbar-nav .red.active:hover>a
    {
        color:#d02552;
    }
    .navbar-default .navbar-nav .purple.active>a, .navbar-default .navbar-nav .purple.active:hover>a
    {
        color:#c472d5;
    }
    .navbar-default .navbar-nav .grey.active>a, .navbar-default .navbar-nav .grey.active:hover>a
    {
        color:#b2b2b2;
    }
    .shrink.navbar-default .navbar-nav>li.green.active>a
    {
        background: #a2be07;
        color:white;
    }
    .shrink.navbar-default .navbar-nav>li.yellow.active>a
    {
        background: #ffa823;
    color:white;
    }
    .shrink.navbar-default .navbar-nav>li.red.active>a
    {
        background: #d02552;
    color:white;
    }
    .shrink.navbar-default .navbar-nav>li.purple.active>a
    {
        background: #c472d5;
    color:white;
    }
    .shrink.navbar-default .navbar-nav>li.grey.active>a
    {
        background: #b2b2b2;
    color:white;
    }
    .shrink.navbar-default .navbar-nav>li.blue.active>a
    {
        background: #008cba;
    color:white;
    }
    <?php
}