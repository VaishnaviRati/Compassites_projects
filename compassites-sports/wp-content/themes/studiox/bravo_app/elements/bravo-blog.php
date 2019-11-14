<?php

if (!function_exists('bravo_blog_func')) {
	function bravo_blog_func($attr, $content = false)
	{
		$attr = wp_parse_args($attr, array(
			'title' => '',
			'excerpt' => '',
			'number' => '6',
			'bravo_category'  => '',
			'order'  => 'asc',
			'orderby'  => 'none',
		));
		return BravoTemplate::load_view('elements/bravo-blog', false, $attr);
	}

	bravo_reg_shortcode('bravo_blog', 'bravo_blog_func');

	vc_map(array(
		"name"     => esc_html__("Bravo Blog", "studiox"),
		"base"     => "bravo_blog",
		"category" => "CMSBlueTheme",
		"params"   => array(

            array(
                "type"        => "textfield",
                "heading"     => esc_html__("Number", "studiox"),
                "param_name"  => "number",
                'admin_label' => true,
            ),
			array(
				"type" => "checkbox",
				"class" => "",
				"heading" =>esc_html__("Category", "studiox"),
				"param_name" => "bravo_category",
				"value" => bravo_get_list_taxonomy('category'),
				"description" =>esc_html__("<em>Tick 'All Categories' if you want to show portfolios of all Categories</em>", "studiox")
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
					esc_html__( 'Comment Count' , "studiox" ) => 'comment_count' ,
				) ,
				'edit_field_class' => 'vc_col-sm-6' ,
			) ,

		)
	));
}