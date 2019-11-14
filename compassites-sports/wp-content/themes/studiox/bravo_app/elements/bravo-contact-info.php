<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 12/18/15
 * Time: 9:16 PM
 */

if (!function_exists('bravo_contact_info_func')) {
	function bravo_contact_info_func($attr, $content = false)
	{
		$data = wp_parse_args($attr, array(
			'title'     => '1',
			'icon'      => '',
			'color'     => '',
			'icon_type' => false,
			'animate'   => false,
		));
		$data['content']=$content;

		$html = BravoTemplate::load_view('elements/bravo_contact_info', false, $data);

		return $html;

	}

	bravo_reg_shortcode('bravo_contact_info', 'bravo_contact_info_func');
	vc_map(array(
		"name"     => esc_html__("Bravo Contact Info", "studiox"),
		"base"     => "bravo_contact_info",
		"category" => "Bravotheme",
		"params"   => array(
			array(
				"type"        => "iconpicker",
				"heading"     => esc_html__("Icon", "studiox"),
				"param_name"  => "icon",
				'admin_label' => true
			),
			array(
				"type"        => "textfield",
				"heading"     => esc_html__("Title", "studiox"),
				"param_name"  => "title",
				'admin_label' => true
			),

			array(
				"type"        => "dropdown",
				"heading"     => esc_html__("Animation Name", "studiox"),
				'value'       => BravoConfig::get('vc_animation'),
				"param_name"  => "animate",
				'admin_label' => true,
				'description' => sprintf(esc_html__('Example: fadeInRight. Read more %s', 'studiox'),'<a href="http://daneden.github.io/animate.css/" target="_blank">here</a>')
			),

			array(
				"type"        => "colorpicker",
				"heading"     => esc_html__("Color Scheme (Optional)", "studiox"),
				"param_name"  => "color",
			),
		)
	));
}