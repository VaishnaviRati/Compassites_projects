<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 2/25/15
 * Time: 9:11 PM
 */

$config['version']='1.0';

/**
 * List all helpers file autoload
 * @see BravoEcommerce::_autoload();
 *
 * */
$config['autoload']['helpers']=array(
    'general',
    'post',
    'woocommerce'
);

/**
 * List all libraries file autoload
 * @see BravoEcommerce::_autoload();
 *
 * */
$config['autoload']['libraries']=array(
    'class-params',
    'assets',
    'input',
    'optiontree',
    'required_plugins',
    'importer',
    'optiontree-css-output',
    'author-meta',
    'otf_regen_thumbs',
    'rectan-menu-walker',
    'TwitterAPIExchange',
    'category-walker'
);

/**
 * List all models file autoload
 * @see BravoEcommerce::_autoload();
 *
 * */
$config['autoload']['models']=array(
    'general',
    'post',
    'page',
	'team',
    'portfolio',
    'woocommerce',
    'vc_customs',
    'layout',
    'login',
);


/**
 * Array of defaults navigation menu
 *
 * @see BravoGeneral::_after_setup_theme()
 *
 *
 * */
$config['nav_menus']=array(
    'primary' => esc_html__( 'Primary Menu', "studiox" ),
    'side_menu' => esc_html__( 'Side Menu', "studiox" ),
);



/**
 * Default sidebar
 * @see BravoGeneral::_add_sidebars();
 *
 * */
$config['sidebars']=array(
    array(
        'name' => esc_html__( 'Blog Sidebar', "studiox" ),
        'id' => 'blog-sidebar',
        'description' => esc_html__( 'Widgets in this area will be shown on all blog page.', "studiox"),
        'before_title' => '<h4 class="sidebar-heading">',
        'after_title' => '</h4>',
        'before_widget' => '<div id="%1$s" class="sidebar-widget bravo-sidebar widget %2$s">',
        'after_widget'  => '</div>',
    ),


);


/**
 * Default get assets folder
 * @see BravoAssets::url()
 *
 * */
$config['asset_url']=get_template_directory_uri().'/assets';


/**
 * Default Theme Options Menu Title
 *
 * @see BravoOptiontree::_change_menu_title()
 *
 *
 * */
$config['theme_option_menu_title']='Theme Settings';

$config['vc_animation']=array(
	__( '-- Select --' , "studiox" )             => '' ,
	__( 'bounce' , "studiox" )             => 'bounce' ,
	__( 'flash' , "studiox" )              => 'flash' ,
	__( 'pulse' , "studiox" )              => 'flash' ,
	__( 'rubberBand' , "studiox" )         => 'rubberBand' ,
	__( 'shake' , "studiox" )              => 'shake' ,
	__( 'headShake' , "studiox" )          => 'headShake' ,
	__( 'swing' , "studiox" )              => 'swing' ,
	__( 'tada' , "studiox" )               => 'tada' ,
	__( 'wobble' , "studiox" )             => 'wobble' ,
	__( 'jello' , "studiox" )              => 'jello' ,
	__( 'bounceIn' , "studiox" )           => 'bounceIn' ,
	__( 'bounceInDown' , "studiox" )       => 'bounceInDown' ,
	__( 'bounceInLeft' , "studiox" )       => 'bounceInLeft' ,
	__( 'bounceInRight' , "studiox" )      => 'bounceInRight' ,
	__( 'bounceInUp' , "studiox" )         => 'bounceInUp' ,
	__( 'bounceOut' , "studiox" )          => 'bounceOut' ,
	__( 'bounceOutDown' , "studiox" )      => 'bounceOutDown' ,
	__( 'bounceOutLeft' , "studiox" )      => 'bounceOutLeft' ,
	__( 'bounceOutRight' , "studiox" )     => 'bounceOutRight' ,
	__( 'bounceOutUp' , "studiox" )        => 'bounceOutUp' ,
	__( 'fadeIn' , "studiox" )             => 'fadeIn' ,
	__( 'fadeInDown' , "studiox" )         => 'fadeInDown' ,
	__( 'fadeInDownBig' , "studiox" )      => 'fadeInDownBig' ,
	__( 'fadeInLeft' , "studiox" )         => 'fadeInLeft' ,
	__( 'fadeInLeftBig' , "studiox" )      => 'fadeInLeftBig' ,
	__( 'fadeInRight' , "studiox" )        => 'fadeInRight' ,
	__( 'fadeInRightBig' , "studiox" )     => 'fadeInRightBig' ,
	__( 'fadeInUp' , "studiox" )           => 'fadeInUp' ,
	__( 'fadeInUpBig' , "studiox" )        => 'fadeInUpBig' ,
	__( 'fadeOut' , "studiox" )            => 'fadeOut' ,
	__( 'fadeOutDown' , "studiox" )        => 'fadeOutDown' ,
	__( 'fadeOutDownBig' , "studiox" )     => 'fadeOutDownBig' ,
	__( 'fadeOutLeft' , "studiox" )        => 'fadeOutLeft' ,
	__( 'fadeOutLeftBig' , "studiox" )     => 'fadeOutLeftBig' ,
	__( 'fadeOutRight' , "studiox" )       => 'fadeOutRight' ,
	__( 'fadeOutRightBig' , "studiox" )    => 'fadeOutRightBig' ,
	__( 'fadeOutUp' , "studiox" )          => 'fadeOutUp' ,
	__( 'fadeOutUpBig' , "studiox" )       => 'fadeOutUpBig' ,
	__( 'flipInX' , "studiox" )            => 'flipInX' ,
	__( 'flipInY' , "studiox" )            => 'flipInY' ,
	__( 'flipOutX' , "studiox" )           => 'flipOutX' ,
	__( 'flipOutY' , "studiox" )           => 'flipOutY' ,
	__( 'lightSpeedIn' , "studiox" )       => 'lightSpeedIn' ,
	__( 'lightSpeedOut' , "studiox" )      => 'lightSpeedOut' ,
	__( 'rotateIn' , "studiox" )           => 'rotateIn' ,
	__( 'rotateInDownLeft' , "studiox" )   => 'rotateInDownLeft' ,
	__( 'rotateInDownRight' , "studiox" )  => 'rotateInDownRight' ,
	__( 'rotateInUpLeft' , "studiox" )     => 'rotateInUpLeft' ,
	__( 'rotateInUpRight' , "studiox" )    => 'rotateInUpRight' ,
	__( 'rotateOut' , "studiox" )          => 'rotateOut' ,
	__( 'rotateOutDownLeft' , "studiox" )  => 'rotateOutDownLeft' ,
	__( 'rotateOutDownRight' , "studiox" ) => 'rotateOutDownRight' ,
	__( 'rotateOutUpLeft' , "studiox" )    => 'rotateOutUpLeft' ,
	__( 'rotateOutUpRight' , "studiox" )   => 'rotateOutUpRight' ,
	__( 'hinge' , "studiox" )              => 'hinge' ,
	__( 'rollIn' , "studiox" )             => 'rollIn' ,
	__( 'rollOut' , "studiox" )            => 'rollOut' ,
	__( 'zoomIn' , "studiox" )             => 'zoomIn' ,
	__( 'zoomInDown' , "studiox" )         => 'zoomInDown' ,
	__( 'zoomInLeft' , "studiox" )         => 'zoomInLeft' ,
	__( 'zoomInRight' , "studiox" )        => 'zoomInRight' ,
	__( 'zoomInUp' , "studiox" )           => 'zoomInUp' ,
	__( 'zoomOut' , "studiox" )            => 'zoomOut' ,
	__( 'zoomOutDown' , "studiox" )        => 'zoomOutDown' ,
	__( 'zoomOutLeft' , "studiox" )        => 'zoomOutLeft' ,
	__( 'zoomOutRight' , "studiox" )       => 'zoomOutRight' ,
	__( 'zoomOutUp' , "studiox" )          => 'zoomOutUp' ,
	__( 'slideInDown' , "studiox" )        => 'slideInDown' ,
	__( 'slideInLeft' , "studiox" )        => 'slideInLeft' ,
	__( 'slideInRight' , "studiox" )       => 'slideInRight' ,
	__( 'slideInUp' , "studiox" )          => 'slideInUp' ,
	__( 'slideOutDown' , "studiox" )       => 'slideOutDown' ,
	__( 'slideOutLeft' , "studiox" )       => 'slideOutLeft' ,
	__( 'slideOutRight' , "studiox" )      => 'slideOutRight' ,
	__( 'slideOutUp' , "studiox" )         => 'slideOutUp' ,
);