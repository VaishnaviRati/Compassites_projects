<?php
if (!function_exists('bravo_facts_func')) {
	function bravo_facts_func($attr, $content = false)
	{
		$attr = wp_parse_args($attr,array(
            'title' => '1',
            'number'  => '',
            'icon'  => '',
            'color'  => '',
        ));


        $html=BravoTemplate::load_view('elements/bravo_facts',false,$attr);
        return $html;

    }
	bravo_reg_shortcode('bravo_facts', 'bravo_facts_func');
	vc_map(array(
		"name"     => esc_html__("Bravo Counter Up", "studiox"),
		"base"     => "bravo_facts",
		"category" => "Bravotheme",
		"params"   => array(
			array(
				"type"        => "iconpicker",
				"heading"     => esc_html__("Icon", 'studiox'),
				"param_name"  => "icon",
				'admin_label' => true,
			),
			array(
				"type"        => "textfield",
				"heading"     => esc_html__("Number", "studiox"),
				"param_name"  => "number",
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
				"param_name"  => "animate",
				'value'=>BravoConfig::get('vc_animation'),
				'admin_label' => true,
				'description'=>__('Example: fadeInRight. Read more <a href="http://daneden.github.io/animate.css/" target="_blank">here</a>','studiox')
			),

			array(
				"type"        => "colorpicker",
				"heading"     => esc_html__("Color Scheme (Optional)", "studiox"),
				"param_name"  => "color",
			),
		)
	));
}