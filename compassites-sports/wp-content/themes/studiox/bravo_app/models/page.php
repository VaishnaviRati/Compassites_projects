<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/3/15
 * Time: 7:41 PM
 */

if (!class_exists('BravoPage')) {
    class BravoPage
    {
        static function _init()
        {
            if (function_exists('vc_add_param')) {
                add_action('init', array(__CLASS__, '_init_elements'));

            }

            //add_filter('vc_tta_container_classes', array(__CLASS__, '_add_tab_class'), 10, 2);

            //add_filter('vc-tta-get-params-tabs-list',array(__CLASS__,'_add_tab_icon'),10,4);


        }

        static function _add_tab_icon($html, $atts, $content, $this_object){



            $isPageEditabe = vc_is_page_editable();

            $html = array();
            $html[] = '<div class="vc_tta-tabs-container">';
            $html[] = '<ul class="vc_tta-tabs-list">';
            if ( ! $isPageEditabe ) {

                $active_section = $this_object->getActiveSection( $atts, true );

                foreach ( WPBakeryShortCode_VC_Tta_Section::$section_info as $nth => $section ) {
                    $classes = array( 'vc_tta-tab' );
                    if ( ( $nth + 1 ) === $active_section ) {
                        $classes[] = $this_object->activeClass;
                    }
                    $data_icon=false;
                    $data_icon=isset($section['bravo_icon'])?$section['bravo_icon']:false;

                    $title = '<span class="vc_tta-title-text">' . esc_html($section['title']) . '</span>';
                    if ( 'true' === $section['add_icon'] ) {
                        $icon_html = '<span class="bravo_js_icon" data-icon="'.esc_attr($data_icon).'">'.esc_html($this_object->constructIcon( $section )).'</span>';
                        if ( 'left' === $section['i_position'] ) {
                            $title = $icon_html . $title;
                        } else {
                            $title = $title . $icon_html;
                        }
                    }
                    $a_html = '<a href="#' . esc_attr($section['tab_id']) . '" data-vc-tabs data-vc-container=".vc_tta">' . esc_html($title) . '</a>';
                    $html[] = '<li class="' . implode( ' ', $classes ) . '" data-vc-tab>' . esc_html($a_html) . '</li>';
                }
            }

            $html[] = '</ul>';
            $html[] = '</div>';

            return apply_filters( 'bravo-tta-get-params-tabs-list', $html, $atts, $content, $this_object );
        }
        static function _add_tab_class($class, $att = array())
        {
            $att = wp_parse_args($att, array(
                'bravo_service_tab' => ''
            ));

            if ($att['bravo_service_tab'] == 'true') {
                $class[] = 'services';
            }

            return $class;
        }

        static function _init_elements()
        {

            vc_add_param( 'vc_row' , array(
                    "type"       => "dropdown" ,
                    "heading"    =>esc_html__( 'Bravo Effect' , "studiox" ) ,
                    "param_name" => "row_effect" ,
                    "value"      => array(
                       esc_html__( '-- Select --' , "studiox" )             => '' ,
                       esc_html__( 'bounce' , "studiox" )             => 'bounce' ,
                       esc_html__( 'flash' , "studiox" )              => 'flash' ,
                       esc_html__( 'pulse' , "studiox" )              => 'flash' ,
                       esc_html__( 'rubberBand' , "studiox" )         => 'rubberBand' ,
                       esc_html__( 'shake' , "studiox" )              => 'shake' ,
                       esc_html__( 'headShake' , "studiox" )          => 'headShake' ,
                       esc_html__( 'swing' , "studiox" )              => 'swing' ,
                       esc_html__( 'tada' , "studiox" )               => 'tada' ,
                       esc_html__( 'wobble' , "studiox" )             => 'wobble' ,
                       esc_html__( 'jello' , "studiox" )              => 'jello' ,
                       esc_html__( 'bounceIn' , "studiox" )           => 'bounceIn' ,
                       esc_html__( 'bounceInDown' , "studiox" )       => 'bounceInDown' ,
                       esc_html__( 'bounceInLeft' , "studiox" )       => 'bounceInLeft' ,
                       esc_html__( 'bounceInRight' , "studiox" )      => 'bounceInRight' ,
                       esc_html__( 'bounceInUp' , "studiox" )         => 'bounceInUp' ,
                       esc_html__( 'bounceOut' , "studiox" )          => 'bounceOut' ,
                       esc_html__( 'bounceOutDown' , "studiox" )      => 'bounceOutDown' ,
                       esc_html__( 'bounceOutLeft' , "studiox" )      => 'bounceOutLeft' ,
                       esc_html__( 'bounceOutRight' , "studiox" )     => 'bounceOutRight' ,
                       esc_html__( 'bounceOutUp' , "studiox" )        => 'bounceOutUp' ,
                       esc_html__( 'fadeIn' , "studiox" )             => 'fadeIn' ,
                       esc_html__( 'fadeInDown' , "studiox" )         => 'fadeInDown' ,
                       esc_html__( 'fadeInDownBig' , "studiox" )      => 'fadeInDownBig' ,
                       esc_html__( 'fadeInLeft' , "studiox" )         => 'fadeInLeft' ,
                       esc_html__( 'fadeInLeftBig' , "studiox" )      => 'fadeInLeftBig' ,
                       esc_html__( 'fadeInRight' , "studiox" )        => 'fadeInRight' ,
                       esc_html__( 'fadeInRightBig' , "studiox" )     => 'fadeInRightBig' ,
                       esc_html__( 'fadeInUp' , "studiox" )           => 'fadeInUp' ,
                       esc_html__( 'fadeInUpBig' , "studiox" )        => 'fadeInUpBig' ,
                       esc_html__( 'fadeOut' , "studiox" )            => 'fadeOut' ,
                       esc_html__( 'fadeOutDown' , "studiox" )        => 'fadeOutDown' ,
                       esc_html__( 'fadeOutDownBig' , "studiox" )     => 'fadeOutDownBig' ,
                       esc_html__( 'fadeOutLeft' , "studiox" )        => 'fadeOutLeft' ,
                       esc_html__( 'fadeOutLeftBig' , "studiox" )     => 'fadeOutLeftBig' ,
                       esc_html__( 'fadeOutRight' , "studiox" )       => 'fadeOutRight' ,
                       esc_html__( 'fadeOutRightBig' , "studiox" )    => 'fadeOutRightBig' ,
                       esc_html__( 'fadeOutUp' , "studiox" )          => 'fadeOutUp' ,
                       esc_html__( 'fadeOutUpBig' , "studiox" )       => 'fadeOutUpBig' ,
                       esc_html__( 'flipInX' , "studiox" )            => 'flipInX' ,
                       esc_html__( 'flipInY' , "studiox" )            => 'flipInY' ,
                       esc_html__( 'flipOutX' , "studiox" )           => 'flipOutX' ,
                       esc_html__( 'flipOutY' , "studiox" )           => 'flipOutY' ,
                       esc_html__( 'lightSpeedIn' , "studiox" )       => 'lightSpeedIn' ,
                       esc_html__( 'lightSpeedOut' , "studiox" )      => 'lightSpeedOut' ,
                       esc_html__( 'rotateIn' , "studiox" )           => 'rotateIn' ,
                       esc_html__( 'rotateInDownLeft' , "studiox" )   => 'rotateInDownLeft' ,
                       esc_html__( 'rotateInDownRight' , "studiox" )  => 'rotateInDownRight' ,
                       esc_html__( 'rotateInUpLeft' , "studiox" )     => 'rotateInUpLeft' ,
                       esc_html__( 'rotateInUpRight' , "studiox" )    => 'rotateInUpRight' ,
                       esc_html__( 'rotateOut' , "studiox" )          => 'rotateOut' ,
                       esc_html__( 'rotateOutDownLeft' , "studiox" )  => 'rotateOutDownLeft' ,
                       esc_html__( 'rotateOutDownRight' , "studiox" ) => 'rotateOutDownRight' ,
                       esc_html__( 'rotateOutUpLeft' , "studiox" )    => 'rotateOutUpLeft' ,
                       esc_html__( 'rotateOutUpRight' , "studiox" )   => 'rotateOutUpRight' ,
                       esc_html__( 'hinge' , "studiox" )              => 'hinge' ,
                       esc_html__( 'rollIn' , "studiox" )             => 'rollIn' ,
                       esc_html__( 'rollOut' , "studiox" )            => 'rollOut' ,
                       esc_html__( 'zoomIn' , "studiox" )             => 'zoomIn' ,
                       esc_html__( 'zoomInDown' , "studiox" )         => 'zoomInDown' ,
                       esc_html__( 'zoomInLeft' , "studiox" )         => 'zoomInLeft' ,
                       esc_html__( 'zoomInRight' , "studiox" )        => 'zoomInRight' ,
                       esc_html__( 'zoomInUp' , "studiox" )           => 'zoomInUp' ,
                       esc_html__( 'zoomOut' , "studiox" )            => 'zoomOut' ,
                       esc_html__( 'zoomOutDown' , "studiox" )        => 'zoomOutDown' ,
                       esc_html__( 'zoomOutLeft' , "studiox" )        => 'zoomOutLeft' ,
                       esc_html__( 'zoomOutRight' , "studiox" )       => 'zoomOutRight' ,
                       esc_html__( 'zoomOutUp' , "studiox" )          => 'zoomOutUp' ,
                       esc_html__( 'slideInDown' , "studiox" )        => 'slideInDown' ,
                       esc_html__( 'slideInLeft' , "studiox" )        => 'slideInLeft' ,
                       esc_html__( 'slideInRight' , "studiox" )       => 'slideInRight' ,
                       esc_html__( 'slideInUp' , "studiox" )          => 'slideInUp' ,
                       esc_html__( 'slideOutDown' , "studiox" )       => 'slideOutDown' ,
                       esc_html__( 'slideOutLeft' , "studiox" )       => 'slideOutLeft' ,
                       esc_html__( 'slideOutRight' , "studiox" )      => 'slideOutRight' ,
                       esc_html__( 'slideOutUp' , "studiox" )         => 'slideOutUp' ,
                    ) ,
                )
            );

            vc_add_param( 'vc_column' , array(
                    "type"       => "dropdown" ,
                    "heading"    =>esc_html__( 'Bravo Effect' , "studiox" ) ,
                    "param_name" => "row_effect" ,
                    "value"      => array(
                       esc_html__( '-- Select --' , "studiox" )             => '' ,
                       esc_html__( 'bounce' , "studiox" )             => 'bounce' ,
                       esc_html__( 'flash' , "studiox" )              => 'flash' ,
                       esc_html__( 'pulse' , "studiox" )              => 'flash' ,
                       esc_html__( 'rubberBand' , "studiox" )         => 'rubberBand' ,
                       esc_html__( 'shake' , "studiox" )              => 'shake' ,
                       esc_html__( 'headShake' , "studiox" )          => 'headShake' ,
                       esc_html__( 'swing' , "studiox" )              => 'swing' ,
                       esc_html__( 'tada' , "studiox" )               => 'tada' ,
                       esc_html__( 'wobble' , "studiox" )             => 'wobble' ,
                       esc_html__( 'jello' , "studiox" )              => 'jello' ,
                       esc_html__( 'bounceIn' , "studiox" )           => 'bounceIn' ,
                       esc_html__( 'bounceInDown' , "studiox" )       => 'bounceInDown' ,
                       esc_html__( 'bounceInLeft' , "studiox" )       => 'bounceInLeft' ,
                       esc_html__( 'bounceInRight' , "studiox" )      => 'bounceInRight' ,
                       esc_html__( 'bounceInUp' , "studiox" )         => 'bounceInUp' ,
                       esc_html__( 'bounceOut' , "studiox" )          => 'bounceOut' ,
                       esc_html__( 'bounceOutDown' , "studiox" )      => 'bounceOutDown' ,
                       esc_html__( 'bounceOutLeft' , "studiox" )      => 'bounceOutLeft' ,
                       esc_html__( 'bounceOutRight' , "studiox" )     => 'bounceOutRight' ,
                       esc_html__( 'bounceOutUp' , "studiox" )        => 'bounceOutUp' ,
                       esc_html__( 'fadeIn' , "studiox" )             => 'fadeIn' ,
                       esc_html__( 'fadeInDown' , "studiox" )         => 'fadeInDown' ,
                       esc_html__( 'fadeInDownBig' , "studiox" )      => 'fadeInDownBig' ,
                       esc_html__( 'fadeInLeft' , "studiox" )         => 'fadeInLeft' ,
                       esc_html__( 'fadeInLeftBig' , "studiox" )      => 'fadeInLeftBig' ,
                       esc_html__( 'fadeInRight' , "studiox" )        => 'fadeInRight' ,
                       esc_html__( 'fadeInRightBig' , "studiox" )     => 'fadeInRightBig' ,
                       esc_html__( 'fadeInUp' , "studiox" )           => 'fadeInUp' ,
                       esc_html__( 'fadeInUpBig' , "studiox" )        => 'fadeInUpBig' ,
                       esc_html__( 'fadeOut' , "studiox" )            => 'fadeOut' ,
                       esc_html__( 'fadeOutDown' , "studiox" )        => 'fadeOutDown' ,
                       esc_html__( 'fadeOutDownBig' , "studiox" )     => 'fadeOutDownBig' ,
                       esc_html__( 'fadeOutLeft' , "studiox" )        => 'fadeOutLeft' ,
                       esc_html__( 'fadeOutLeftBig' , "studiox" )     => 'fadeOutLeftBig' ,
                       esc_html__( 'fadeOutRight' , "studiox" )       => 'fadeOutRight' ,
                       esc_html__( 'fadeOutRightBig' , "studiox" )    => 'fadeOutRightBig' ,
                       esc_html__( 'fadeOutUp' , "studiox" )          => 'fadeOutUp' ,
                       esc_html__( 'fadeOutUpBig' , "studiox" )       => 'fadeOutUpBig' ,
                       esc_html__( 'flipInX' , "studiox" )            => 'flipInX' ,
                       esc_html__( 'flipInY' , "studiox" )            => 'flipInY' ,
                       esc_html__( 'flipOutX' , "studiox" )           => 'flipOutX' ,
                       esc_html__( 'flipOutY' , "studiox" )           => 'flipOutY' ,
                       esc_html__( 'lightSpeedIn' , "studiox" )       => 'lightSpeedIn' ,
                       esc_html__( 'lightSpeedOut' , "studiox" )      => 'lightSpeedOut' ,
                       esc_html__( 'rotateIn' , "studiox" )           => 'rotateIn' ,
                       esc_html__( 'rotateInDownLeft' , "studiox" )   => 'rotateInDownLeft' ,
                       esc_html__( 'rotateInDownRight' , "studiox" )  => 'rotateInDownRight' ,
                       esc_html__( 'rotateInUpLeft' , "studiox" )     => 'rotateInUpLeft' ,
                       esc_html__( 'rotateInUpRight' , "studiox" )    => 'rotateInUpRight' ,
                       esc_html__( 'rotateOut' , "studiox" )          => 'rotateOut' ,
                       esc_html__( 'rotateOutDownLeft' , "studiox" )  => 'rotateOutDownLeft' ,
                       esc_html__( 'rotateOutDownRight' , "studiox" ) => 'rotateOutDownRight' ,
                       esc_html__( 'rotateOutUpLeft' , "studiox" )    => 'rotateOutUpLeft' ,
                       esc_html__( 'rotateOutUpRight' , "studiox" )   => 'rotateOutUpRight' ,
                       esc_html__( 'hinge' , "studiox" )              => 'hinge' ,
                       esc_html__( 'rollIn' , "studiox" )             => 'rollIn' ,
                       esc_html__( 'rollOut' , "studiox" )            => 'rollOut' ,
                       esc_html__( 'zoomIn' , "studiox" )             => 'zoomIn' ,
                       esc_html__( 'zoomInDown' , "studiox" )         => 'zoomInDown' ,
                       esc_html__( 'zoomInLeft' , "studiox" )         => 'zoomInLeft' ,
                       esc_html__( 'zoomInRight' , "studiox" )        => 'zoomInRight' ,
                       esc_html__( 'zoomInUp' , "studiox" )           => 'zoomInUp' ,
                       esc_html__( 'zoomOut' , "studiox" )            => 'zoomOut' ,
                       esc_html__( 'zoomOutDown' , "studiox" )        => 'zoomOutDown' ,
                       esc_html__( 'zoomOutLeft' , "studiox" )        => 'zoomOutLeft' ,
                       esc_html__( 'zoomOutRight' , "studiox" )       => 'zoomOutRight' ,
                       esc_html__( 'zoomOutUp' , "studiox" )          => 'zoomOutUp' ,
                       esc_html__( 'slideInDown' , "studiox" )        => 'slideInDown' ,
                       esc_html__( 'slideInLeft' , "studiox" )        => 'slideInLeft' ,
                       esc_html__( 'slideInRight' , "studiox" )       => 'slideInRight' ,
                       esc_html__( 'slideInUp' , "studiox" )          => 'slideInUp' ,
                       esc_html__( 'slideOutDown' , "studiox" )       => 'slideOutDown' ,
                       esc_html__( 'slideOutLeft' , "studiox" )       => 'slideOutLeft' ,
                       esc_html__( 'slideOutRight' , "studiox" )      => 'slideOutRight' ,
                       esc_html__( 'slideOutUp' , "studiox" )         => 'slideOutUp' ,
                    ) ,
                )
            );

            vc_add_param( 'vc_row_inner' , array(
                    "type"       => "dropdown" ,
                    "heading"    =>esc_html__( 'Bravo Effect' , "studiox" ) ,
                    "param_name" => "row_effect" ,
                    "value"      => array(
                       esc_html__( '-- Select --' , "studiox" )             => '' ,
                       esc_html__( 'bounce' , "studiox" )             => 'bounce' ,
                       esc_html__( 'flash' , "studiox" )              => 'flash' ,
                       esc_html__( 'pulse' , "studiox" )              => 'flash' ,
                       esc_html__( 'rubberBand' , "studiox" )         => 'rubberBand' ,
                       esc_html__( 'shake' , "studiox" )              => 'shake' ,
                       esc_html__( 'headShake' , "studiox" )          => 'headShake' ,
                       esc_html__( 'swing' , "studiox" )              => 'swing' ,
                       esc_html__( 'tada' , "studiox" )               => 'tada' ,
                       esc_html__( 'wobble' , "studiox" )             => 'wobble' ,
                       esc_html__( 'jello' , "studiox" )              => 'jello' ,
                       esc_html__( 'bounceIn' , "studiox" )           => 'bounceIn' ,
                       esc_html__( 'bounceInDown' , "studiox" )       => 'bounceInDown' ,
                       esc_html__( 'bounceInLeft' , "studiox" )       => 'bounceInLeft' ,
                       esc_html__( 'bounceInRight' , "studiox" )      => 'bounceInRight' ,
                       esc_html__( 'bounceInUp' , "studiox" )         => 'bounceInUp' ,
                       esc_html__( 'bounceOut' , "studiox" )          => 'bounceOut' ,
                       esc_html__( 'bounceOutDown' , "studiox" )      => 'bounceOutDown' ,
                       esc_html__( 'bounceOutLeft' , "studiox" )      => 'bounceOutLeft' ,
                       esc_html__( 'bounceOutRight' , "studiox" )     => 'bounceOutRight' ,
                       esc_html__( 'bounceOutUp' , "studiox" )        => 'bounceOutUp' ,
                       esc_html__( 'fadeIn' , "studiox" )             => 'fadeIn' ,
                       esc_html__( 'fadeInDown' , "studiox" )         => 'fadeInDown' ,
                       esc_html__( 'fadeInDownBig' , "studiox" )      => 'fadeInDownBig' ,
                       esc_html__( 'fadeInLeft' , "studiox" )         => 'fadeInLeft' ,
                       esc_html__( 'fadeInLeftBig' , "studiox" )      => 'fadeInLeftBig' ,
                       esc_html__( 'fadeInRight' , "studiox" )        => 'fadeInRight' ,
                       esc_html__( 'fadeInRightBig' , "studiox" )     => 'fadeInRightBig' ,
                       esc_html__( 'fadeInUp' , "studiox" )           => 'fadeInUp' ,
                       esc_html__( 'fadeInUpBig' , "studiox" )        => 'fadeInUpBig' ,
                       esc_html__( 'fadeOut' , "studiox" )            => 'fadeOut' ,
                       esc_html__( 'fadeOutDown' , "studiox" )        => 'fadeOutDown' ,
                       esc_html__( 'fadeOutDownBig' , "studiox" )     => 'fadeOutDownBig' ,
                       esc_html__( 'fadeOutLeft' , "studiox" )        => 'fadeOutLeft' ,
                       esc_html__( 'fadeOutLeftBig' , "studiox" )     => 'fadeOutLeftBig' ,
                       esc_html__( 'fadeOutRight' , "studiox" )       => 'fadeOutRight' ,
                       esc_html__( 'fadeOutRightBig' , "studiox" )    => 'fadeOutRightBig' ,
                       esc_html__( 'fadeOutUp' , "studiox" )          => 'fadeOutUp' ,
                       esc_html__( 'fadeOutUpBig' , "studiox" )       => 'fadeOutUpBig' ,
                       esc_html__( 'flipInX' , "studiox" )            => 'flipInX' ,
                       esc_html__( 'flipInY' , "studiox" )            => 'flipInY' ,
                       esc_html__( 'flipOutX' , "studiox" )           => 'flipOutX' ,
                       esc_html__( 'flipOutY' , "studiox" )           => 'flipOutY' ,
                       esc_html__( 'lightSpeedIn' , "studiox" )       => 'lightSpeedIn' ,
                       esc_html__( 'lightSpeedOut' , "studiox" )      => 'lightSpeedOut' ,
                       esc_html__( 'rotateIn' , "studiox" )           => 'rotateIn' ,
                       esc_html__( 'rotateInDownLeft' , "studiox" )   => 'rotateInDownLeft' ,
                       esc_html__( 'rotateInDownRight' , "studiox" )  => 'rotateInDownRight' ,
                       esc_html__( 'rotateInUpLeft' , "studiox" )     => 'rotateInUpLeft' ,
                       esc_html__( 'rotateInUpRight' , "studiox" )    => 'rotateInUpRight' ,
                       esc_html__( 'rotateOut' , "studiox" )          => 'rotateOut' ,
                       esc_html__( 'rotateOutDownLeft' , "studiox" )  => 'rotateOutDownLeft' ,
                       esc_html__( 'rotateOutDownRight' , "studiox" ) => 'rotateOutDownRight' ,
                       esc_html__( 'rotateOutUpLeft' , "studiox" )    => 'rotateOutUpLeft' ,
                       esc_html__( 'rotateOutUpRight' , "studiox" )   => 'rotateOutUpRight' ,
                       esc_html__( 'hinge' , "studiox" )              => 'hinge' ,
                       esc_html__( 'rollIn' , "studiox" )             => 'rollIn' ,
                       esc_html__( 'rollOut' , "studiox" )            => 'rollOut' ,
                       esc_html__( 'zoomIn' , "studiox" )             => 'zoomIn' ,
                       esc_html__( 'zoomInDown' , "studiox" )         => 'zoomInDown' ,
                       esc_html__( 'zoomInLeft' , "studiox" )         => 'zoomInLeft' ,
                       esc_html__( 'zoomInRight' , "studiox" )        => 'zoomInRight' ,
                       esc_html__( 'zoomInUp' , "studiox" )           => 'zoomInUp' ,
                       esc_html__( 'zoomOut' , "studiox" )            => 'zoomOut' ,
                       esc_html__( 'zoomOutDown' , "studiox" )        => 'zoomOutDown' ,
                       esc_html__( 'zoomOutLeft' , "studiox" )        => 'zoomOutLeft' ,
                       esc_html__( 'zoomOutRight' , "studiox" )       => 'zoomOutRight' ,
                       esc_html__( 'zoomOutUp' , "studiox" )          => 'zoomOutUp' ,
                       esc_html__( 'slideInDown' , "studiox" )        => 'slideInDown' ,
                       esc_html__( 'slideInLeft' , "studiox" )        => 'slideInLeft' ,
                       esc_html__( 'slideInRight' , "studiox" )       => 'slideInRight' ,
                       esc_html__( 'slideInUp' , "studiox" )          => 'slideInUp' ,
                       esc_html__( 'slideOutDown' , "studiox" )       => 'slideOutDown' ,
                       esc_html__( 'slideOutLeft' , "studiox" )       => 'slideOutLeft' ,
                       esc_html__( 'slideOutRight' , "studiox" )      => 'slideOutRight' ,
                       esc_html__( 'slideOutUp' , "studiox" )         => 'slideOutUp' ,
                    ) ,
                )
            );
            vc_add_param( 'vc_column_inner' , array(
                    "type"       => "dropdown" ,
                    "heading"    =>esc_html__( 'Bravo Effect' , "studiox" ) ,
                    "param_name" => "row_effect" ,
                    "value"      => array(
                       esc_html__( '-- Select --' , "studiox" )             => '' ,
                       esc_html__( 'bounce' , "studiox" )             => 'bounce' ,
                       esc_html__( 'flash' , "studiox" )              => 'flash' ,
                       esc_html__( 'pulse' , "studiox" )              => 'flash' ,
                       esc_html__( 'rubberBand' , "studiox" )         => 'rubberBand' ,
                       esc_html__( 'shake' , "studiox" )              => 'shake' ,
                       esc_html__( 'headShake' , "studiox" )          => 'headShake' ,
                       esc_html__( 'swing' , "studiox" )              => 'swing' ,
                       esc_html__( 'tada' , "studiox" )               => 'tada' ,
                       esc_html__( 'wobble' , "studiox" )             => 'wobble' ,
                       esc_html__( 'jello' , "studiox" )              => 'jello' ,
                       esc_html__( 'bounceIn' , "studiox" )           => 'bounceIn' ,
                       esc_html__( 'bounceInDown' , "studiox" )       => 'bounceInDown' ,
                       esc_html__( 'bounceInLeft' , "studiox" )       => 'bounceInLeft' ,
                       esc_html__( 'bounceInRight' , "studiox" )      => 'bounceInRight' ,
                       esc_html__( 'bounceInUp' , "studiox" )         => 'bounceInUp' ,
                       esc_html__( 'bounceOut' , "studiox" )          => 'bounceOut' ,
                       esc_html__( 'bounceOutDown' , "studiox" )      => 'bounceOutDown' ,
                       esc_html__( 'bounceOutLeft' , "studiox" )      => 'bounceOutLeft' ,
                       esc_html__( 'bounceOutRight' , "studiox" )     => 'bounceOutRight' ,
                       esc_html__( 'bounceOutUp' , "studiox" )        => 'bounceOutUp' ,
                       esc_html__( 'fadeIn' , "studiox" )             => 'fadeIn' ,
                       esc_html__( 'fadeInDown' , "studiox" )         => 'fadeInDown' ,
                       esc_html__( 'fadeInDownBig' , "studiox" )      => 'fadeInDownBig' ,
                       esc_html__( 'fadeInLeft' , "studiox" )         => 'fadeInLeft' ,
                       esc_html__( 'fadeInLeftBig' , "studiox" )      => 'fadeInLeftBig' ,
                       esc_html__( 'fadeInRight' , "studiox" )        => 'fadeInRight' ,
                       esc_html__( 'fadeInRightBig' , "studiox" )     => 'fadeInRightBig' ,
                       esc_html__( 'fadeInUp' , "studiox" )           => 'fadeInUp' ,
                       esc_html__( 'fadeInUpBig' , "studiox" )        => 'fadeInUpBig' ,
                       esc_html__( 'fadeOut' , "studiox" )            => 'fadeOut' ,
                       esc_html__( 'fadeOutDown' , "studiox" )        => 'fadeOutDown' ,
                       esc_html__( 'fadeOutDownBig' , "studiox" )     => 'fadeOutDownBig' ,
                       esc_html__( 'fadeOutLeft' , "studiox" )        => 'fadeOutLeft' ,
                       esc_html__( 'fadeOutLeftBig' , "studiox" )     => 'fadeOutLeftBig' ,
                       esc_html__( 'fadeOutRight' , "studiox" )       => 'fadeOutRight' ,
                       esc_html__( 'fadeOutRightBig' , "studiox" )    => 'fadeOutRightBig' ,
                       esc_html__( 'fadeOutUp' , "studiox" )          => 'fadeOutUp' ,
                       esc_html__( 'fadeOutUpBig' , "studiox" )       => 'fadeOutUpBig' ,
                       esc_html__( 'flipInX' , "studiox" )            => 'flipInX' ,
                       esc_html__( 'flipInY' , "studiox" )            => 'flipInY' ,
                       esc_html__( 'flipOutX' , "studiox" )           => 'flipOutX' ,
                       esc_html__( 'flipOutY' , "studiox" )           => 'flipOutY' ,
                       esc_html__( 'lightSpeedIn' , "studiox" )       => 'lightSpeedIn' ,
                       esc_html__( 'lightSpeedOut' , "studiox" )      => 'lightSpeedOut' ,
                       esc_html__( 'rotateIn' , "studiox" )           => 'rotateIn' ,
                       esc_html__( 'rotateInDownLeft' , "studiox" )   => 'rotateInDownLeft' ,
                       esc_html__( 'rotateInDownRight' , "studiox" )  => 'rotateInDownRight' ,
                       esc_html__( 'rotateInUpLeft' , "studiox" )     => 'rotateInUpLeft' ,
                       esc_html__( 'rotateInUpRight' , "studiox" )    => 'rotateInUpRight' ,
                       esc_html__( 'rotateOut' , "studiox" )          => 'rotateOut' ,
                       esc_html__( 'rotateOutDownLeft' , "studiox" )  => 'rotateOutDownLeft' ,
                       esc_html__( 'rotateOutDownRight' , "studiox" ) => 'rotateOutDownRight' ,
                       esc_html__( 'rotateOutUpLeft' , "studiox" )    => 'rotateOutUpLeft' ,
                       esc_html__( 'rotateOutUpRight' , "studiox" )   => 'rotateOutUpRight' ,
                       esc_html__( 'hinge' , "studiox" )              => 'hinge' ,
                       esc_html__( 'rollIn' , "studiox" )             => 'rollIn' ,
                       esc_html__( 'rollOut' , "studiox" )            => 'rollOut' ,
                       esc_html__( 'zoomIn' , "studiox" )             => 'zoomIn' ,
                       esc_html__( 'zoomInDown' , "studiox" )         => 'zoomInDown' ,
                       esc_html__( 'zoomInLeft' , "studiox" )         => 'zoomInLeft' ,
                       esc_html__( 'zoomInRight' , "studiox" )        => 'zoomInRight' ,
                       esc_html__( 'zoomInUp' , "studiox" )           => 'zoomInUp' ,
                       esc_html__( 'zoomOut' , "studiox" )            => 'zoomOut' ,
                       esc_html__( 'zoomOutDown' , "studiox" )        => 'zoomOutDown' ,
                       esc_html__( 'zoomOutLeft' , "studiox" )        => 'zoomOutLeft' ,
                       esc_html__( 'zoomOutRight' , "studiox" )       => 'zoomOutRight' ,
                       esc_html__( 'zoomOutUp' , "studiox" )          => 'zoomOutUp' ,
                       esc_html__( 'slideInDown' , "studiox" )        => 'slideInDown' ,
                       esc_html__( 'slideInLeft' , "studiox" )        => 'slideInLeft' ,
                       esc_html__( 'slideInRight' , "studiox" )       => 'slideInRight' ,
                       esc_html__( 'slideInUp' , "studiox" )          => 'slideInUp' ,
                       esc_html__( 'slideOutDown' , "studiox" )       => 'slideOutDown' ,
                       esc_html__( 'slideOutLeft' , "studiox" )       => 'slideOutLeft' ,
                       esc_html__( 'slideOutRight' , "studiox" )      => 'slideOutRight' ,
                       esc_html__( 'slideOutUp' , "studiox" )         => 'slideOutUp' ,
                    ) ,
                )
            );


        }


    }

    BravoPage::_init();
}
