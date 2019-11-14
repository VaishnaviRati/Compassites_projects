<?php
if (!function_exists('bravo_ios_slider_func')) {

	vc_map(array(
		"name"     => esc_html__("Bravo iPhone Slider", "studiox"),
		"base"     => "bravo_ios_slider",
		"category" => "Bravotheme",
		"params"   => array(
			array(
				"type"        => "attach_images",
				"heading"     => esc_html__("Images", "studiox"),
				"param_name"  => "images",
				"description" => esc_html__("You can upload multiple images", "studiox"),
			),

		)));


	function bravo_ios_slider_func($attr, $content = false)
	{
		$attr = wp_parse_args($attr, array(
			'images'     => false,
		));


		$attr['images']=explode(',',$attr['images']);

		return BravoTemplate::load_view('elements/bravo_ios_slider', false, $attr);
	}

	bravo_reg_shortcode('bravo_ios_slider', 'bravo_ios_slider_func');

}


