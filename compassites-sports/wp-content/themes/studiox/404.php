<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
$sidebar=bravo_get_sidebar();
$sidebar_pos=$sidebar['position'];
$bravo_bg = bravo_get_option('blog_background_image');
$class=false;
if($bravo_bg)
	$class = BravoAssets::build_css(' background-image: url("'.esc_url($bravo_bg).'")');
get_header();
?>
    <div class="innerpage-banner header-banner padding-two <?php echo esc_attr($class) ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class=""><?php esc_html_e('404 Not found','studiox') ?></h2>
                    <p class="tagline"><?php esc_html_e("Oops! That page can't be found",'studiox') ?></p>
                </div>
            </div>
        </div>
    </div>
    <div id="area-main" class="padding-404">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-12">
                        <div class="row grid-blog">
                            <div class="col-sm-3">&nbsp;</div>
                            <div class="col-md-6 text-center">
                                <div class="section_header">
                                    <h1><?php esc_html_e( "Oops! That page can't be found.", "studiox" ); ?></h1>
                                    <br>
                                    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', "studiox"); ?></p>
                                    <br>
                                </div>
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        <!-- E: .blog -->
    </div>


<?php
get_footer();