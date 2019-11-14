<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 2/28/15
 * Time: 7:01 PM
 */

/**
 *
 * List all theme options fields
 *
 * @see BravoOptiontree::_add_themeoptions();
 *
 *
 * */
$config['theme_options'] = array(
	'sections' => array(
		array(
			'id'    => 'option_general',
			'title' => esc_html__('General Options', "studiox")
		),

		array(
			'id'    => 'option_post',
			'title' => esc_html__('Posts Options', "studiox")
		),
		array(
			'id'    => 'option_style',
			'title' => esc_html__('Styling Options', "studiox")
		),
	),
	'settings' => array(
		/*----------------Begin General --------------------*/


		array(
			'id'      => 'logo',
			'label'   => esc_html__('Logo', "studiox"),
			'desc'    => esc_html__('This allow you to change logo', "studiox"),
			'type'    => 'upload',
			'section' => 'option_general',
			'std'     => BravoAssets::url() . 'images/logo-white-video.png'
		),

		array(
			'id'      => 'logo_scrolled',
			'label'   => esc_html__('Logo Scrolled', "studiox"),
			'desc'    => esc_html__('This allow you to change logo when scroll the page', "studiox"),
			'type'    => 'upload',
			'section' => 'option_general',
			'std'     => BravoAssets::url() . 'images/logo-video.png'
		),
		array(
			'label' =>esc_html__( 'Transparent Menu' , 'studiox' ) ,
			'type'  => 'on-off' ,
			'id'    => 'transparent_menu',
			'std'=>'off',
			'section' => 'option_general',
		),
		array(
			'id'      => 'logo_retina',
			'label'   => esc_html__('Logo Retina', "studiox"),
			'desc'    => esc_html__('Note: You MUST re-name Logo Retina to logo-name@2x.ext-name. Example:<br>
                                    Logo is: <em>my-logo.jpg</em><br>Logo Retina must be: <em>my-logo@2x.jpg</em>  ', "studiox"),
			'type'    => 'upload',
			'section' => 'option_general',
		),
        array(
            'id'        => 'footer_copyright',
            'label'     => esc_html__('Footer Copy Right', "studiox"),
            'type'      => 'textarea_simple',
            'section'   => 'option_general',
            'rows'=>2,
			'std'=>'Copyright &copy; 2017 StudioX. All rights reserved.'
        ),
        array(
            'id'        => 'footer_social',
            'label'     => esc_html__('Footer Social', "studiox"),
            'desc'     => esc_html__('Footer Social', "studiox"),
            'type'      => 'list-item',
            'section'   => 'option_general',
			'settings'=>array(
				array(
					'id'=>'icon',
					'type'=>'text',
					'label'=>esc_html__('FontAwesome Icon Code','studiox')
				),
				array(
					'id'=>'url',
					'type'=>'text',
					'label'=>esc_html__('URL','studiox')
				),
			),
			'std'=>array(
				array('title'=>'Facebook','icon'=>'fa fa-facebook','url'=>'#'),
				array('title'=>'Twitter','icon'=>'fa fa-fw fa-twitter','url'=>'#'),
				array('title'=>'Google Plus','icon'=>'fa fa-fw fa-google-plus','url'=>'#'),
				array('title'=>'Instagram','icon'=>'fa fa-fw fa-instagram','url'=>'#'),
			)
        ),

		array(
			'id'        => 'footer_page',
			'label'     => esc_html__('Footer Template (Optional)', "studiox"),
			'type'      => 'page-select',
			'section'   => 'option_general',
		),
		array(
			'id'      => 'gmap_api',
			'label'   => esc_html__('Google Map API Key', 'studiox'),
			'desc'    => sprintf(esc_html__('Google Map API Key. See %s', 'studiox'), sprintf('<a href="%s" target="_blank">%s</a>', 'https://developers.google.com/maps/documentation/javascript/get-api-key', esc_html__('Obtaining an API key.', 'studiox'))),
			'type'    => 'text',
			'section' => 'option_general',
		),


		/*----------------End General ----------------------*/




		/*----------------Begin  Styling ----------------------*/
        //preloader
        array(
            'id'          => 'enable_preload',
            'label'       =>esc_html__('Preload setting',"studiox"),
            'type'        => 'on-off',
            'section'     => 'option_style',
            'std'     => 'off'
        ),

		array(
			'id'      => 'main_color',
			'label'   => esc_html__('Main Color', "studiox"),
			'desc'    => esc_html__('Choose your own main color', "studiox"),
			'type'    => 'colorpicker',
			'section' => 'option_style',
			'std'     => '#008cba'
		),


		array(
			'label' =>esc_html__( 'Menu Multi Color?' , 'studiox' ) ,
			'type'  => 'on-off' ,
			'id'    => 'menu_multi_color',
			'std'=>'off',
			'section' => 'option_style',
		),
		array(
			'label' =>esc_html__( 'Side Menu Button Color' , 'studiox' ) ,
			'type'  => 'colorpicker' ,
			'id'    => 'side_menu_color',
			'section' => 'option_style',
		),
		array(
			'id'      => 'google_fonts',
			'label'   => esc_html__('Google Fonts', "studiox"),
			'desc'    => esc_html__('Google Fonts', "studiox"),
			'type'    => 'google-fonts',
			'section' => 'option_style'
		),
		array(
			'id'      => 'body_font',
			'label'   => esc_html__("Typography", "studiox"),
			'desc'    => esc_html__("Typography", "studiox"),
			'type'    => 'typography',
			'section' => 'option_style',
			'output'  => 'body,p'
		),
		array(
			'id'      => 'heading_font',
			'label'   => esc_html__("Heading Font", "studiox"),
			'desc'    => esc_html__("Heading Font", "studiox"),
			'type'    => 'typography',
			'section' => 'option_style',
			'output'  => 'h1,h2,h3,h4,h5'
		),
		array(
			'id'      => 'style_custom_css',
			'label'   => esc_html__('Custom CSS', "studiox"),
			'desc'    => esc_html__('Custom CSS', "studiox"),
			'type'    => 'css',
			'section' => 'option_style',
		),
		/*----------------End Styling ----------------------*/
		/*----------------Begin Posts Options ----------------------*/
		array(
			'id'      => 'post_blog_tab',
			'label'   => esc_html__('Blog Options', "studiox"),
			'type'    => 'tab',
			'section' => 'option_post'
		),
		array(
			'id'      => 'post_blog_title',
			'label'   => esc_html__('Blog page title', "studiox"),
			'type'    => 'text',
			'std'     => 'Our Latest Blog',
			'section' => 'option_post',
		),
        array(
            'id'      => 'post_blog_sub_title',
            'label'   => esc_html__('Sub page title', "studiox"),
            'type'    => 'text',
            'std'     => 'CLASSSIC NEWS POSTS',
            'section' => 'option_post',
        ),
		array(
			'id'      => 'blog_background_image',
			'label'   => esc_html__('Blog page background image', "studiox"),
			'desc'    => esc_html__('Blog page background image', "studiox"),
			'type'    => 'upload',
			'std'     => '',
			'section' => 'option_post',
			'output'=>'.header-banner'
		),
		array(
			'id'      => 'page_sidebar_pos',
			'label'   => esc_html__("Sidebar Position", "studiox"),
			'type'    => 'select',
			'section' => 'option_post',
			'choices' => array(
				array(
					'value' => 'no',
					'label' => esc_html__("No Sidebar", "studiox")
				),
				array(
					'value' => 'left',
					'label' => esc_html__("Sidebar Left", "studiox")
				),
				array(
					'value' => 'right',
					'label' => esc_html__("Sidebar Right", "studiox")
				),
			),
			'std'=>'right'
		),
		array(
			'id'      => 'page_sidebar_id',
			'label'   => esc_html__("Widget Area Selection", "studiox"),
			'type'    => 'sidebar-select',
			'section' => 'option_post',
			'std'     => 'blog-sidebar'
		),

	)
);
