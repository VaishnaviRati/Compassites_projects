<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 12/18/15
 * Time: 9:16 PM
 */

if (!function_exists('bravo_section_title_func')) {
	function bravo_section_title_func($attr, $content = false)
	{
        $data = wp_parse_args($attr,array(
            'title' => '1',
            'icon'  => '',
            'color'  => '',
			'icon_type'=>false,
			'animate'=>false,
        ));

        $data['content']=$content;
        $html=BravoTemplate::load_view('elements/bravo_section_title',false,$data);
        return $html;

    }
	bravo_reg_shortcode('bravo_section_title', 'bravo_section_title_func');
	vc_map(array(
		"name"     => esc_html__("Bravo Section Title", "studiox"),
		"base"     => "bravo_section_title",
		"category" => "Bravotheme",
		"params"   => array(
			array(
				"type"        => "dropdown",
				"heading"     => esc_html__("Color Scheme", "studiox"),
				"param_name"  => "color",
				'admin_label' => true,
				'value'=>array(
					esc_html__('Black','studiox')=>'dark',
					esc_html__('White','studiox')=>'white',
				),
			),
			array(
				"type"        => "textfield",
				"heading"     => esc_html__("Title", "studiox"),
				"param_name"  => "title",
				'admin_label' => true
			),
			array(
				"type"        => "textarea",
				"heading"     => esc_html__("Desc", "studiox"),
				"param_name"  => "content",
				'admin_label' => true
			),

			array(
				"type"        => "dropdown",
				"heading"     => esc_html__("Animation Name", "studiox"),
				"param_name"  => "animate",
				'admin_label' => true,
				'value'=>BravoConfig::get('vc_animation'),
				'description'=>__('Example: fadeInRight. Read more <a href="http://daneden.github.io/animate.css/" target="_blank">here</a>','studiox')
			),

		)
	));
}