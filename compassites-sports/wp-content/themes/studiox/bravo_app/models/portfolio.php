<?php
/**
 * Created by PhpStorm.
 * User: MrHa
 * Date: 3/12/2015
 * Time: 9:22 AM
 */
if (!class_exists('BravoPortfolio')) {

	class BravoPortfolio
	{
		static $content;

		static function __init()
		{

			if (function_exists('bravo_reg_post_type')) {
				add_action('init', array(__CLASS__, '__register_post_type'));
			}

			add_action('init', array(__CLASS__, '__add_metabox'));
			add_action('init', array(__CLASS__, '_init_elements'));

			add_filter('bravo_get_sidebar', array(__CLASS__, '_service_filter_sidebar'));

		}

		static function _service_filter_sidebar($sidebar)
		{
			return $sidebar;
		}


		static function __register_post_type()
		{
			$labels = array(
				'name'               => esc_html__('Portfolio', "studiox"),
				'singular_name'      => esc_html__('Portfolio', "studiox"),
				'menu_name'          => esc_html__('Portfolio', "studiox"),
				'name_admin_bar'     => esc_html__('Portfolio', "studiox"),
				'add_new'            => esc_html__('Add New', "studiox"),
				'add_new_item'       => esc_html__('Add New Portfolio', "studiox"),
				'new_item'           => esc_html__('New Portfolio', "studiox"),
				'edit_item'          => esc_html__('Edit Portfolio', "studiox"),
				'view_item'          => esc_html__('View Portfolio', "studiox"),
				'all_items'          => esc_html__('All Portfolio', "studiox"),
				'search_items'       => esc_html__('Search Portfolio', "studiox"),
				'parent_item_colon'  => esc_html__('Parent Portfolio:', "studiox"),
				'not_found'          => esc_html__('No Portfolio found.', "studiox"),
				'not_found_in_trash' => esc_html__('No Portfolio found in Trash.', "studiox")
			);

			$args = array(
				'labels'             => $labels,
				'public'             => true,
				'publicly_queryable' => true,
				'show_ui'            => true,
				'show_in_menu'       => true,
				'query_var'          => true,
				'rewrite'            => array('slug' => 'bravo_portfolio'),
				'capability_type'    => 'post',
				'has_archive'        => true,
				'hierarchical'       => false,
				'menu_position'      => null,
				'supports'           => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
				'menu_icon'          => 'dashicons-bravo-portfolio'
			);
			bravo_reg_post_type('bravo_portfolio', $args);



			$labels = array(
				'name'              => esc_html__('Portfolio Categories', "studiox"),
				'singular_name'     => esc_html__('Portfolio Category', "studiox"),
				'search_items'      => esc_html__('Search Portfolio Categories', "studiox"),
				'all_items'         => esc_html__('All Portfolio Categories', "studiox"),
				'parent_item'       => esc_html__('Parent Portfolio Category', "studiox"),
				'parent_item_colon' => esc_html__('Parent Portfolio Category:', "studiox"),
				'edit_item'         => esc_html__('Edit Portfolio Category', "studiox"),
				'update_item'       => esc_html__('Update Portfolio Category', "studiox"),
				'add_new_item'      => esc_html__('Add New Portfolio Category', "studiox"),
				'new_item_name'     => esc_html__('New Portfolio Category Name', "studiox"),
				'menu_name'         => esc_html__('Portfolio Category', "studiox"),
			);

			$args = array(
				'hierarchical'      => true,
				'labels'            => $labels,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => array('slug' => 'bravo_portfolio_cat'),
			);

			bravo_reg_taxonomy('bravo_portfolio_cat', array('bravo_portfolio'), $args);


		}

		static function __add_metabox()
		{
			$my_meta_box = array(
				'id'       => 'bravo_portfolio_metabox',
				'title'    => esc_html__('Portfolio Options', "studiox"),
				'desc'     => '',
				'pages'    => array('bravo_portfolio'),
				'context'  => 'normal',
				'priority' => 'high',
				'fields'   => array(
					array(
						'label' => esc_html__( 'General' , "studiox" ) ,
						'type'  => 'tab' ,
						'id'    => 'gen_tab'
					) ,
                    array(
                        'label' => esc_html__('Icon Code (showing in Portfolio Element)', "studiox"),
                        'id'    => 'icon',
                        'type'  => 'text',
                        'desc'        => esc_html__('Fontawesome Icon', "studiox"),
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

		static function _init_elements()
		{

		}

	}


	BravoPortfolio::__init();
}