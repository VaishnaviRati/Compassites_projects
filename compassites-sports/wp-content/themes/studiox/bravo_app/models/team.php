<?php
/**
 * Created by PhpStorm.
 * User: MrHa
 * Date: 3/12/2015
 * Time: 9:22 AM
 */
if (!class_exists('BravoTeamMember')) {

	class BravoTeamMember
	{
		static $content;

		static function __init()
		{

			if (function_exists('bravo_reg_post_type')) {
				add_action('init', array(__CLASS__, '__register_post_type'));
			}

			add_action('init', array(__CLASS__, '__add_metabox'));

		}

		static function __add_metabox()
		{
			$my_meta_box = array(
				'id'       => 'bravo_other_options',
				'title'    =>esc_html__('Team Member Options', 'studiox'),
				'desc'     => '',
				'pages'    => array('bravo_team'),
				'context'  => 'normal',
				'priority' => 'high',
				'fields'   => array(
					array(
						'id'      => 'job',
						'label'   => esc_html__('Job Name', "studiox"),
						'type'    => 'text',
					),
					array(
						'id'      => 'desc',
						'label'   => esc_html__('Description', "studiox"),
						'type'    => 'textarea',
					),
					array(
						'id'      => 'social',
						'label'   => esc_html__('Social Info', "studiox"),
						'type'    => 'list-item',
						'settings'=>array(

							array(
								'id'      => 'url',
								'label'   => esc_html__('URL', "studiox"),
								'type'    => 'text',
							),
							array(
								'id'      => 'icon',
								'label'   => esc_html__('Icon Code (Font Awesome)', "studiox"),
								'type'    => 'text',
							),
						)
					),

					array(
						'id'      => 'skills',
						'label'   => esc_html__('Skills', "studiox"),
						'type'    => 'list-item',
						'settings'=>array(

							array(
								'id'      => 'percent',
								'label'   => esc_html__('Percent', "studiox"),
								'type'    => 'numeric-slider',
								'min-max-step'=>'0,100,1'
							),
							array(
								'id'      => 'color',
								'label'   => esc_html__('Color Scheme (Optional)', "studiox"),
								'type'    => 'colorpicker',
							),
						)
					),

					array(
						'id'      => 'color',
						'label'   => esc_html__('Color Scheme (Optional)', "studiox"),
						'type'    => 'colorpicker',
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

		static function _service_filter_sidebar($sidebar)
		{
			return $sidebar;
		}


		static function __register_post_type()
		{
			$labels = array(
				'name'               => esc_html__('Team Member', "studiox"),
				'singular_name'      => esc_html__('Team Member', "studiox"),
				'menu_name'          => esc_html__('Team Member', "studiox"),
				'name_admin_bar'     => esc_html__('Team Member', "studiox"),
				'add_new'            => esc_html__('Add New', "studiox"),
				'add_new_item'       => esc_html__('Add New Team Member', "studiox"),
				'new_item'           => esc_html__('New Team Member', "studiox"),
				'edit_item'          => esc_html__('Edit Team Member', "studiox"),
				'view_item'          => esc_html__('View Team Member', "studiox"),
				'all_items'          => esc_html__('All Team Member', "studiox"),
				'search_items'       => esc_html__('Search Team Member', "studiox"),
				'parent_item_colon'  => esc_html__('Parent Team Member:', "studiox"),
				'not_found'          => esc_html__('No Team Member found.', "studiox"),
				'not_found_in_trash' => esc_html__('No Team Member found in Trash.', "studiox")
			);

			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array('slug' => 'team-member'),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
				'menu_icon'          => 'dashicons-bravo-portfolio'
			);
			bravo_reg_post_type('bravo_team', $args);


		}


	}


	BravoTeamMember::__init();
}