<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 12/18/15
 * Time: 9:16 PM
 */

if (!function_exists('bravo_testimonial_func')) {
	function bravo_testimonial_func($attr, $content = false)
	{
		$data = wp_parse_args($attr,array(
			'items' => false,
			'color'=>''
		));
		$html=BravoTemplate::load_view('elements/bravo_testimonial',false,$data);
		return $html;
	}
	bravo_reg_shortcode('bravo_testimonial', 'bravo_testimonial_func');

	vc_map(array(
		"name"     => esc_html__("Bravo Testimonial", "studiox"),
		"base"     => "bravo_testimonial",
		"category" => "Bravotheme",
		"params"   => array(
			array(
				"type"        => "dropdown",
				"heading"     => esc_html__("Color Scheme", 'studiox'),
				"param_name"  => "color",
				'admin_label' => true,
				'value'=>array(
					esc_html__('Dark','studiox')=>'dark',
					esc_html__('Light','studiox')=>'white',
				)
			),
			array(
				"type"        => "param_group",
				"heading"     => esc_html__("Items", 'studiox'),
				"param_name"  => "items",
				'admin_label' => false,
                "params"   => array(
                    array(
                        "type"        => "attach_image",
                        "heading"     => esc_html__("Avatar", 'studiox'),
                        "param_name"  => "avatar",
                        'admin_label' => true
                    ),
                    array(
                        "type"        => "textarea",
                        "heading"     => esc_html__("Review", "studiox"),
                        "param_name"  => "review",
                    ),
                    array(
                        "type"        => "textfield",
                        "heading"     => esc_html__("Name", "studiox"),
                        "param_name"  => "name",
                    ),
                    array(
                        "type"        => "textfield",
                        "heading"     => esc_html__("Job", "studiox"),
                        "param_name"  => "job",
                    ),
                )
			),
		)
	));
}