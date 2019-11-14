<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 6/18/15
 * Time: 9:36 PM
 */
if (!class_exists('Bravo_Post_Model')) {
	class Bravo_Post_Model
	{
		static function _init()
		{
			add_action('init', array(__CLASS__, '_add_metabox'));
			add_action('init', array(__CLASS__, '_add_metabox2'));

			add_filter('bravo_post_single_label', array(__CLASS__, '_bravo_post_single_label'));
			add_filter('bravo_post_single_icon', array(__CLASS__, '_bravo_post_single_icon'));
			add_filter('bravo_header_bg_line', array(__CLASS__, '_bravo_header_bg_line'));
		}

		static function _bravo_header_bg_line($label)
		{
			if (!is_page_template('template-blank.php')) {
				return FALSE;
			}

			return $label;
		}

		static function _bravo_post_single_icon($icon)
		{
			if (is_singular()) {
				$meta = get_post_meta(get_the_ID(), 'page_icon', TRUE);
				if ($meta) $icon = $meta;
			}

			return $icon;
		}

		static function _bravo_post_single_label($label)
		{
			if (is_singular()) {
				$meta = get_post_meta(get_the_ID(), 'page_label', TRUE);
				if ($meta) $label = $meta;
			}

			return $label;
		}

		static function _add_metabox()
		{
			$my_meta_box = array(
				'id'       => 'bravo_post_metabox',
				'title'    =>esc_html__('Page Information', 'studiox'),
				'desc'     => '',
				'pages'    => array('page'),
				'context'  => 'normal',
				'priority' => 'high',
				'fields'   => array(
					array(
						'label' =>esc_html__( 'General' , 'studiox' ) ,
						'type'  => 'tab' ,
						'id'    => 'gen_tab'
					),
					array(
						'label' =>esc_html__( 'Custom Logo' , 'studiox' ) ,
						'desc' =>esc_html__( 'Custom Logo' , 'studiox' ) ,
						'type'  => 'upload' ,
						'id'    => 'custom_logo'
					),
					array(
						'id'      => 'logo_scrolled',
						'label'   => esc_html__('Logo Scrolled', "studiox"),
						'desc'    => esc_html__('This allow you to change logo when scroll the page', "studiox"),
						'type'    => 'upload',
						'section' => 'option_general',
					),
					array(
						'label' =>esc_html__( 'Transparent Menu' , 'studiox' ) ,
						'type'  => 'on-off' ,
						'id'    => 'transparent_menu',
						'std'=>'off',
						'section' => 'option_general',
					),
					array(
						'label' =>esc_html__( 'Custom Main Color' , 'studiox' ) ,
						'desc' =>esc_html__( 'Custom Main Color' , 'studiox' ) ,
						'type'  => 'colorpicker' ,
						'id'    => 'main_color'
					),

					array(
						'label' =>esc_html__( 'Styling' , 'studiox' ) ,
						'type'  => 'tab' ,
						'id'    => 'styling_option'
					),
					array(
						'label' =>esc_html__( 'Menu Multi Color?' , 'studiox' ) ,
						'type'  => 'on-off' ,
						'id'    => 'menu_multi_color',
						'std'=>'off'
					),
					array(
						'label' =>esc_html__( 'Side Menu Button Color' , 'studiox' ) ,
						'type'  => 'colorpicker' ,
						'id'    => 'side_menu_color'
					),
				)
			);

			/**
			 * Register our meta boxes using the
			 * ot_register_meta_box() function.
			 */
			if (function_exists('ot_register_meta_box')) {
				ot_register_meta_box($my_meta_box);
			}
		}

		static function _add_metabox2()
		{
			$my_meta_box = array(
				'id'       => 'bravo_other_options',
				'title'    =>esc_html__('Other Options', 'studiox'),
				'desc'     => '',
				'pages'    => array('post','page','portfolio'),
				'context'  => 'side',
				'priority' => 'default',
				'fields'   => array(
					array(
						'id'      => 'post_blog_title',
						'label'   => esc_html__('Blog page title', "studiox"),
						'type'    => 'text',
					),
					array(
						'id'      => 'post_blog_sub_title',
						'label'   => esc_html__('Sub page title', "studiox"),
						'type'    => 'text',
						'std'     => '',
						'section' => 'option_post',
					),
					array(
						'id'      => 'blog_background_image',
						'label'   => esc_html__('Blog page background image', "studiox"),
						'type'    => 'upload',
						'std'     => '',
						'section' => 'option_post',
					),
					array(
						'label'   =>esc_html__('Sidebar Position', 'studiox'),
						'id'      => 'sidebar_pos',
						'type'    => 'select',
						'choices' => array(
							array(
								'value' => '',
								'label' =>esc_html__("-- Select --", 'studiox')
							),
							array(
								'value' => 'no',
								'label' =>esc_html__("No Sidebar", 'studiox')
							),
							array(
								'value' => 'left',
								'label' =>esc_html__("Sidebar Left", 'studiox')
							),
							array(
								'value' => 'right',
								'label' =>esc_html__("Sidebar Right", 'studiox')
							),
						)
					),
					array(
						'label' =>esc_html__('Sidebar ID', 'studiox'),
						'id'    => 'sidebar_id',
						'type'  => 'sidebar-select'
					),

				)
			);

			/**
			 * Register our meta boxes using the
			 * ot_register_meta_box() function.
			 */
			if (function_exists('ot_register_meta_box')) {
				ot_register_meta_box($my_meta_box);
			}
		}
	}

	Bravo_Post_Model::_init();
}