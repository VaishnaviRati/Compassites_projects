<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 7/11/15
 * Time: 10:33 PM
 */
    if(function_exists('vc_map')){
        vc_map( array(
            "name"      =>esc_html__("Bravo Google Map", 'studiox'),
            "base"      => "bravo_google_map",
            "class"     => "",
            "icon" => "icon-st",
            "category"=>"Shinetheme",
            "params"    => array(

                array(
                    "type"      => "textfield",
                    //"holder"    => "div",
                    "class"     => "",
                    "heading"   =>esc_html__("Latitude", 'studiox'),
                    "param_name"=> "latitude",
                    "value"     => "",
                    "description" =>esc_html__("Latitude, you can get it from  <a target='_blank' href='http://www.latlong.net/convert-address-to-lat-long.html'>here</a>", 'studiox'),
                    'admin_label'=>true
                ),
                array(
                    "type"      => "textfield",
//                    "holder"    => "div",
                    "class"     => "",
                    "heading"   =>esc_html__("Longitude", 'studiox'),
                    "param_name"=> "longitude",
                    "value"     => "",
                    "description" =>esc_html__("Longitude", 'studiox'),
                    'admin_label'=>true
                ),

                array(
                    "type"      => "textfield",
                    "holder"    => "div",
                    "class"     => "",
                    "heading"   =>esc_html__("Zoom", 'studiox'),
                    "param_name"=> "zoom",
                    "value"     => 13,
                ),

                array(
                    "type"      => "textfield",
                    "class"     => "",
                    "heading"   =>esc_html__("Custom Height", 'studiox'),
                    "param_name"=> "height",
                    "value"     => "",
                ),

            )));

	function bravo_google_map_func($arg, $content = null) {

		 extract(shortcode_atts(array(
			 'address'=>'93 Worth St, New York, NY',
			 'type'=>1,
			 'marker'=>'',
			 'height'=>'580',
			 'lightness'=>0,
			 'saturation'=>0,
			 'gama'=>0.5,
			 'zoom'=>13,
			 'longitude'=>false,
			 'latitude'=>false,
		 ),$arg));

			wp_enqueue_script('gmap-lib',BravoAssets::url('js/gmaps.min.js'));
		 if(is_ssl()){
			 $url=add_query_arg(array('sensor'=>'false','language'=>'en','key'=>bravo_get_option('gmap_api')),'https://maps.google.com/maps/api/js');
			 wp_enqueue_script('gmap3-init',$url);
		 }else{
			 $url=add_query_arg(array('sensor'=>'false','language'=>'en','key'=>bravo_get_option('gmap_api')),'http://maps.google.com/maps/api/js');
			 wp_enqueue_script('gmap3-init',$url);
		 }


		 $marker_url=BravoAssets::url('images/pin.png');
		 if($marker)
		 {
			 $img_obj=wp_get_attachment_image_src($marker,'full');
			 if(isset($img_obj[0])){
				 $marker_url=$img_obj[0];
			 }
		 }


		 $css='';
		 if($height)
		 {
			 $css.=' height:'.$height.'px;';
		 }

		 return "<div style='{$css}' class='bravo_map_wrap' id='map".time()."' ><div data-content='{$content}' data-type='{$type}' data-lat='{$latitude}' data-lng='{$longitude}' data-zoom='{$zoom}' style='height: {$height}px' data-lightness='{$lightness}' data-saturation='{$saturation}' data-gama='{$gama}'  class='bravo_google_map'  data-address='{$address}' data-marker='$marker_url'>
					</div></div>";
	}

		bravo_reg_shortcode('bravo_google_map','bravo_google_map_func');
	}

