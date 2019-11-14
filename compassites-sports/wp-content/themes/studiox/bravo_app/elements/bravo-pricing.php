<?php
if (!function_exists('bravo_pricing_item_func')) {

	vc_map(array(
		"name"     => esc_html__("Bravo Pricing Item", "studiox"),
		"base"     => "bravo_pricing_item",
		"category" => "Bravotheme",
		"params"   => array(
			array(
				"type"        => "textfield",
				"heading"     => esc_html__("Title", "studiox"),
				"param_name"  => "title",
				"description" => esc_html__("Example: PREMIUM", "studiox"),
				'admin_label' => true
			),
			array(
				"type"        => "textfield",
				"heading"     => esc_html__("Subtitle", "studiox"),
				"param_name"  => "subtitle",
				"description" => esc_html__("Example: MONTHLY PLAN", "studiox"),
				'admin_label' => true
			),
			array(
				"type"        => "checkbox",
				"heading"     => esc_html__("Highlight?", "studiox"),
				"param_name"  => "highlight",
				'admin_label' => true
			),
			array(
				"type"        => "textfield",
				"heading"     => esc_html__("Price", "studiox"),
				"param_name"  => "price",
				"description" => esc_html__("Price", "studiox"),
				'admin_label' => true
			),

			array(
				"type"       => "param_group",
				"heading"    => esc_html__("Pricing Feature", 'studiox'),
				"param_name" => "features",
				"params"     => array(
					array(
						"type"        => "textfield",
						"heading"     => esc_html__("Title", "studiox"),
						"param_name"  => "title",
						"description" => esc_html__("Title", "studiox")
					),
				)
			),
			array(
				"type"       => "vc_link",
				"heading"    => esc_html__("Button", "studiox"),
				"param_name" => "link",
			),
			array(
				"type"        => "dropdown",
				"heading"     => esc_html__("Animation Name", "studiox"),
				"param_name"  => "animate",
				'admin_label' => true,
				'value'=>BravoConfig::get('vc_animation'),
				'description'=>__('Example: fadeInRight. Read more <a href="http://daneden.github.io/animate.css/" target="_blank">here</a>','studiox')
			),
			array(
				"type"        => "colorpicker",
				"heading"     => esc_html__("Color Scheme (Optional)", "studiox"),
				"param_name"  => "color",
			),
		)));


	function bravo_pricing_item_func($attr, $content = false)
	{
		$attr = wp_parse_args($attr, array(
			'title'     => false,
			'subtitle'  => false,
			'highlight' => false,
			'price'     => false,
			'features'  => false,
			'animate'   => false,
			'color'=>''
		));

		return BravoTemplate::load_view('elements/bravo_pricing_item', false, $attr);
	}

	bravo_reg_shortcode('bravo_pricing_item', 'bravo_pricing_item_func');

}


