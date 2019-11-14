<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 12/18/15
 * Time: 11:44 PM
 */

if (function_exists('vc_map')) {
	//Register "container" content element. It will hold all your inner (child) content elements
	vc_map(array(
		"name"                    =>esc_html__("Bravo Twitter Carousel", 'studiox'),
		"base"                    => "bravo_twitter_carousel",
		"content_element"         => true,
		"show_settings_on_create" => true,
		"category"                => "CMSBlueTheme",
		"params"                  => array(
			// add params same as with any other content element

			array(
				"type"        => "dropdown",
				"heading"     => esc_html__("Color Scheme", 'studiox'),
				"param_name"  => "color",
				'admin_label' => true,
				'value'       => array(
					esc_html__('Dark', 'studiox')  => 'dark',
					esc_html__('Light', 'studiox') => 'white',
				)
			),
			array(
				"type"        => "textfield",
				"heading"     =>esc_html__("Twitter Username", 'studiox'),
				"param_name"  => "id",
				'admin_label' => true,
			), array(
				"type"        => "textfield",
				"heading"     =>esc_html__("Number of post", 'studiox'),
				"param_name"  => "number",
				'value'       => 5,
				'admin_label' => true,
			),

		),
	));


	if (!function_exists('bravo_twitter_carousel_func')) {
		function bravo_twitter_carousel_func($attr, $content = false)
		{
			$attr = wp_parse_args($attr, array(
				'id'     => 'envato',
				'number' => 5
			));
			$args = array(
				'consumer_key'    => "18ihEuNsfOJokCLb8SAgA",
				'consumer_secret' => "7vTYnLYYiP4BhXvkMWtD3bGnysgiGqYlsPFfwXhGk"
			);
			$query = 'screen_name=' . $attr['id'] . '&count=' . $attr['number'];
			$twitter = new Wp_Twitter_Api($args);

			$rows = $twitter->query($query);

			$attr['rows'] = $rows;

			return BravoTemplate::load_view('elements/bravo_twitter_carousel', false, $attr);
		}

		bravo_reg_shortcode('bravo_twitter_carousel', 'bravo_twitter_carousel_func');
	}

}