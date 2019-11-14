<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 2/28/15
 * Time: 10:07 PM
 */

if (!class_exists('BravoGeneral')) {

    class BravoGeneral
    {
        static function _init()
        {
            //Default Framwork Hooked

            add_action('wp', array(__CLASS__, '_setup_author'));
            add_action('after_setup_theme', array(__CLASS__, '_after_setup_theme'));
            add_action('widgets_init', array(__CLASS__, '_add_sidebars'));

            add_action('wp_enqueue_scripts', array(__CLASS__, '_add_scripts'));
            add_action('admin_enqueue_scripts', array(__CLASS__, '_add_admin_scripts'));

            //Custom hooked
            add_filter('bravo_get_sidebar', array(__CLASS__, '_blog_filter_sidebar'));
            add_action('init', array(__CLASS__, '_init_elements'));

            add_filter('body_class', array(__CLASS__, '_add_body_class'));

			add_action('wp_footer',array(__CLASS__,'_enqueue_footer_css'));


            // Header image
            add_action('bravo_header_image_src', array(__CLASS__, '_home_page_header_img'));

            add_filter('st_blog_title',array(__CLASS__,'_st_blog_title'));

            add_filter( 'excerpt_length',array(__CLASS__,'_excerpt_length') );


            add_filter('bs_blog_single_header_image',array(__CLASS__,'_change_image'));


            add_filter('get_the_archive_title',array(__CLASS__,'_change_archive_title'));


            add_filter('widget_categories_args',array(__CLASS__,'_change_category_walker'));



        }

        static function _change_category_walker($args){

            $args['walker']=new Bravo_Category_Walker();

            return $args;
        }

        static function _init_elements()
        {
        }


        static function _change_archive_title($title)
        {
            if(is_search()){
                $title=sprintf(esc_html__("Search Result for: %s","studiox"),get_query_var('s'));
            }
            return $title;
        }
        static function _excerpt_length($length)
        {
            return bravo_get_option('post_exerpt_length',$length);
        }

        static function _st_blog_title($title)
        {
            if(is_archive()){
                $title=get_the_archive_title();
            }

            if(is_search()){
                $title= sprintf( esc_html__( 'Search Results for: %s', "studiox" ), get_search_query() );

            }
            return $title;
        }
        static function _home_page_header_img($image_src)
        {
            if (is_page_template('template-blank.php')) {
                $image_src = bravo_get_option('header_image', $image_src);
            }

            if (is_singular()) {
                if ($meta = get_post_meta(get_the_ID(), '_header_image', true)) {
                    $image_src = $meta;
                }
            }

            return $image_src;
        }

        static  function _enqueue_footer_css()
		{
			wp_enqueue_style('bravo-custom');
		}

        static function _add_body_class($class)
        {
            $menu = bravo_get_option('menu_width_fullwidth', 'on');
            if (is_singular()) {
                $meta = get_post_meta(get_the_ID(), 'menu_width_fullwidth', true);
                if ($meta) $menu = $meta;
            }

            $transparent_header = bravo_get_option('transparent_header', 'off');
            if (is_singular() and get_post_meta(get_the_ID(), 'custom_header_style', true) == 'on') {
                $meta = get_post_meta(get_the_ID(), 'transparent_header', true);
                if ($meta) $transparent_header = $meta;
            }

            if ($transparent_header == 'on') {
                $class[] = 'header_transparent';
            }

            if ($menu == 'on')
                $class[] = 'bravo_fullwidth_menu';
            else
                $class[] = 'bravo_boxed_menu';


            $class[] = 'woocommerce';

			if(bravo_get_option('gen_enable_preload')=='on'){
				$class[]='gen_enable_preload';
			}

			$transparent_menu=bravo_get_option('transparent_menu');
			if(is_singular() and $meta=get_post_meta(get_the_ID(),'transparent_menu',true)){
				$transparent_menu=$meta;
			}

			if(!is_page_template('template-blank.php') or $transparent_menu=='on')
			{
				$class[]='page-2';
			}

            $positionMenu = bravo_menu_pos();
            $class[]=$positionMenu.'-menu';

            return $class;
        }


        static function _add_breadcrumb()
        {
            get_template_part('bc');
        }



        static function _blog_filter_sidebar($sidebar)
        {

                $pos = bravo_get_option('page_sidebar_pos', 'right');

                $sidebar_id = bravo_get_option('page_sidebar_id', 'blog-sidebar');

                /// ID Meta ///
                if (is_singular()) {
                    if ($meta = get_post_meta(get_the_ID(), 'sidebar_id', true)) {
                        $sidebar_id = $meta;
                    }
                }
                if ($sidebar_id) {
                    $sidebar['id'] = $sidebar_id;
                }

                /// position Meta///
                $sidebar['position'] = $pos;
                if (is_singular()) {
                    if ($meta = get_post_meta(get_the_ID(), 'sidebar_pos', true)) {
                        $sidebar['position'] = $meta;
                    }
                }

                if (BravoInput::get('sidebar_pos')) {
                    $sidebar['position'] = BravoInput::get('sidebar_pos');
                }
                if (BravoInput::get('sidebar_id')) {
                    $sidebar['id'] = BravoInput::get('sidebar_id');
                }


            return $sidebar;
        }

        static function _top_page()
        {
            echo BravoTemplate::load_view('top_page');
        }
        static function studio_fonts_url() {
            $font_url = '';

            /*
            Translators: If there are characters in your language that are not supported
            by chosen font(s), translate this to 'off'. Do not translate into your own language.
             */
            if ( 'off' !== _x( 'on', 'Google font: on or off', 'studiox' ) ) {
                $font_url =add_query_arg( 'family', urlencode( 'Open Sans|Raleway:100,200,300,400' ), "//fonts.googleapis.com/css" );
            }
            return $font_url;
        }

        static function _add_scripts()
        {
            /*
             * Javascript
             * */
            wp_enqueue_script('gmaps-api',BravoAssets::url('js/gmaps.min.js'),array('jquery'),null,true);
            wp_enqueue_script('bootstrap',BravoAssets::url('js/bootstrap.min.js'),array('jquery'),null,true);
            wp_enqueue_script('wow',BravoAssets::url('js/wow.js'),array('jquery'),null,true);
            wp_enqueue_script('owl_carousel',BravoAssets::url('js/owl.carousel.min.js'),array('jquery'),null,true);
            wp_enqueue_script('responsivetabs',BravoAssets::url('js/jquery.responsiveTabs.min.js'),array('jquery'),null,true);
            wp_enqueue_script('fancybox',BravoAssets::url('js/jquery.fancybox.pack.js'),array('jquery'),null,true);
            wp_enqueue_script('jquery-appear',BravoAssets::url('js/jquery.appear.js'),array('jquery'),null,true);


            wp_enqueue_script('bravo-main-scripts',BravoAssets::url('js/script.js'),array('jquery'),null,true);
            wp_enqueue_script('bravo-custom-scripts',BravoAssets::url('js/custom.js'),array('jquery'),null,true);


            if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

            wp_localize_script('jquery', 'bravo_params', array(
                'url_logo' =>  bravo_get_option('logo'),
                'url_logo_white' =>  bravo_get_option('logo_white'),
                'on_loading_text' => esc_html__("Loading ....", "studiox"),
                'loadmore_text'   => esc_html__('Load More', "studiox"),
                'ajax_url'        => esc_url(admin_url('admin-ajax.php')),
                'nomore_text'     => esc_html__('No More', "studiox")
            ));

			wp_add_inline_script('jquery-migrate',"jQuery(document).ready(function($){ $('.bravo-sidebar ul').addClass('category');
			$('.widget_archive li').each(function(){
				var text=$(this).clone();
				var a=$(this).find('a').clone();
				text.find('a').remove();
				a.append('<span class=\"count-posts\">'+text.html()+'</span>');
	
				$(this).html(a);
			});});");


            // Style
            add_editor_style();

            wp_enqueue_style('studio-default',get_stylesheet_uri());

            wp_register_style('bootstrap',BravoAssets::url('css/bootstrap.min.css'));

            wp_enqueue_style('studiox-style',BravoAssets::url('css/studiox-style.css'),array('bootstrap'));
			wp_register_style('bravo-custom',BravoAssets::url('css/custom.css'));


			wp_add_inline_style('studiox-style', BravoTemplate::load_view('custom_css'));
			wp_add_inline_style('studiox-style', bravo_get_option('style_custom_css'));


        }


        static function _add_admin_scripts()
        {

        }


        // -----------------------------------------------------
        // Default Hooked, Do not edit

        /**
         * Hook setup theme
         *
         *
         * */

        static function _after_setup_theme()
        {
            /*
             * Make theme available for translation.
             * Translations can be filed in the /languages/ directory.
             * If you're building a theme based on stframework, use a find and replace
             * to change $st_textdomain to the name of your theme in all the template files
             */

            // This theme uses wp_nav_menu() in one location.
            $menus = BravoConfig::get('nav_menus');
            if (is_array($menus) and !empty($menus)) {
                register_nav_menus($menus);
            }


            //Theme supports from config

            add_theme_support('automatic-feed-links');
            add_theme_support('post-thumbnails');
            add_theme_support('html5', array(
                'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
            ));
//            add_theme_support('post-formats', array(
//                'image', 'video', 'gallery', 'audio', 'quote'
//            ));
            add_theme_support('woocommerce');
            add_theme_support('custom-header', array());
            add_theme_support('custom-background', array());
            add_theme_support('title-tag', array());

            if (!isset($content_width)) $content_width = 900;

        }

        /**
         * Add default sidebar to website
         *
         *
         * */
        static function _add_sidebars()
        {
            // From config file
            $sidebars = BravoConfig::get('sidebars');
            if (is_array($sidebars) and !empty($sidebars)) {
                foreach ($sidebars as $value) {
                    register_sidebar($value);
                }
            }

        }


        /**
         * Set up author data
         *
         * */
        static function _setup_author()
        {
            global $wp_query;

            if ($wp_query->is_author() && isset($wp_query->post)) {
                $GLOBALS['authordata'] = get_userdata($wp_query->post->post_author);
            }
        }


        /**
         * Hook to wp_title
         *
         * */
        static function _wp_title($title, $sep)
        {
            if (is_feed()) {
                return $title;
            }

            global $page, $paged;

            // Add the blog name
            $title .= get_bloginfo('name', 'display');

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && (is_home() || is_front_page())) {
                $title .= " $sep $site_description";
            }

            // Add a page number if necessary:
            if (($paged >= 2 || $page >= 2) && !is_404()) {
                $title .= " $sep " . sprintf(esc_html__('Page %s', "studiox"), max($paged, $page));
            }

            return $title;
        }



    }

    BravoGeneral::_init();
}