<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 12/18/15
 * Time: 9:16 PM
 */

if (!function_exists('bravo_timeline_func')) {
	function bravo_timeline_func($attr, $content = false)
	{
        $data = wp_parse_args($attr,array(
            'title' => '1',
            'icon'  => '',
            'color'  => '',
			'icon_type'=>false,
			'animate'=>false,
        ));

        $html=BravoTemplate::load_view('elements/bravo_timeline',false,$data);
        return $html;

    }
	bravo_reg_shortcode('bravo_timeline', 'bravo_timeline_func');
	vc_map(array(
		"name"     => esc_html__("Bravo Timeline", "studiox"),
		"base"     => "bravo_timeline",
		"category" => "Bravotheme",
		"params"   => array(
			array(
				"type"        => "textfield",
				"heading"     => esc_html__("Year", "studiox"),
				"param_name"  => "year",
				'admin_label' => true
			),
			array(
				"type"        => "param_group",
				"heading"     => esc_html__("Items", "studiox"),
				"param_name"  => "items",
				'params'=>array(
					array(
						"type"        => "textfield",
						"heading"     => esc_html__("Title", "studiox"),
						"param_name"  => "title",
					),
					array(
						"type"        => "textarea",
						"heading"     => esc_html__("Desc", "studiox"),
						"param_name"  => "desc",
					),
					array(
						"type"        => "textfield",
						"heading"     => esc_html__("Date", "studiox"),
						"param_name"  => "date",
					),
					array(
						"type"        => "colorpicker",
						"heading"     => esc_html__("Color Scheme (Optional)", "studiox"),
						"param_name"  => "color",
					),
				)
			),


		)
	));
}