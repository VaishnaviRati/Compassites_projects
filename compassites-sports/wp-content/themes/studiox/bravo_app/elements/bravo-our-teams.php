<?php
if (!function_exists('bravo_our_team_func')) {

	vc_map(array(
		"name"     => esc_html__("Bravo Our Team", "studiox"),
		"base"     => "bravo_our_team",
		"category" => "Bravotheme",
		"params"   => array(
			array(
				"type"        => "textfield",
				"heading"     => esc_html__("Number", "studiox"),
				"param_name"  => "number",
				'admin_label' => true,
				'std'=>4
			),

			array(
				"type"             => "dropdown" ,
				"heading"          =>esc_html__( "Order" , "studiox" ) ,
				"param_name"       => "order" ,
				'value'            => array(
					esc_html__( 'Asc' , "studiox" )  => 'asc' ,
					esc_html__( 'Desc' , "studiox" ) => 'desc'
				) ,
				'edit_field_class' => 'vc_col-sm-6' ,
			) ,
			array(
				"type"             => "dropdown" ,
				"heading"          =>esc_html__( "Order By" , "studiox" ) ,
				"param_name"       => "orderby" ,
				"value"            => array(
					esc_html__( 'None' , "studiox" )          => 'none' ,
					esc_html__( 'ID' , "studiox" )            => 'ID' ,
					esc_html__( 'Author' , "studiox" )        => 'author' ,
					esc_html__( 'Title' , "studiox" )         => 'title' ,
					esc_html__( 'Name' , "studiox" )          => 'name' ,
					esc_html__( 'Type' , "studiox" )          => 'type' ,
					esc_html__( 'Date' , "studiox" )          => 'date' ,
					esc_html__( 'Modified' , "studiox" )      => 'modified' ,
					esc_html__( 'Parent' , "studiox" )        => 'parent' ,
					esc_html__( 'Rand' , "studiox" )          => 'rand' ,
				) ,
				'edit_field_class' => 'vc_col-sm-6' ,
			) ,
			array(
				"type"        => "dropdown",
				"heading"     => esc_html__("Animation Name", "studiox"),
				"param_name"  => "animate",
				'admin_label' => true,
				'value'=>BravoConfig::get('vc_animation'),
				'description'=>__('Example: fadeInRight. Read more <a href="http://daneden.github.io/animate.css/" target="_blank">here</a>','studiox')
			),
			array(
				'type'=>'checkbox',
				'heading'=>esc_html__('Multiple Color?','studiox'),
				'param_name'=>'multiple_color'
			)

		)));

	function bravo_our_team_func($attr,$content)
	{
		$attr=wp_parse_args($attr,array(
			'number'=>$number,
			'order'=>'asc',
			'orderby'=>'none',
			'multiple_color'=>''
		));

		$query=new WP_Query(array(
			'post_type'=>'bravo_team',
			'posts_per_page'=>$attr['number'],
			'order'=>$attr['order'],
			'orderby'=>$attr['orderby']
		));
		$attr['query']=$query;

		$html=BravoTemplate::load_view('elements/bravo_our_team',false,$attr);

		wp_reset_postdata();

		return $html;
	}

	bravo_reg_shortcode('bravo_our_team','bravo_our_team_func');
}
