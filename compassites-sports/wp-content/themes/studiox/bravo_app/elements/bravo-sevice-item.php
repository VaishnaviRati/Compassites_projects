<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 12/18/15
 * Time: 9:16 PM
 */

if (!function_exists('bravo_service_item_func')) {
	function bravo_service_item_func($attr, $content = false)
	{
        $data = wp_parse_args($attr,array(
            'title' => '1',
            'icon'  => '',
            'color'  => '',
			'align'=>'left',
        ));

        $data['content']=$content;
        $html=BravoTemplate::load_view('elements/bravo_service_item',false,$data);
        return $html;

    }
	bravo_reg_shortcode('bravo_service_item', 'bravo_service_item_func');
	vc_map(array(
		"name"     => esc_html__("Bravo Service Item", "studiox"),
		"base"     => "bravo_service_item",
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
				"type"        => "textfield",
				"heading"     => esc_html__("Desc", "studiox"),
				"param_name"  => "content",
				'admin_label' => true
			),

			array(
				"type"        => "dropdown",
				"heading"     => esc_html__("Alignment", "studiox"),
				"param_name"  => "align",
				'admin_label' => true,
				'value'=>array(
					esc_html__('Left','studiox')=>'left',
					esc_html__('Right','studiox')=>'right',
				)
			),
			array(
				"type"        => "colorpicker",
				"heading"     => esc_html__("Color Scheme (Optional)", "studiox"),
				"param_name"  => "color",
			),


		)
	));
}