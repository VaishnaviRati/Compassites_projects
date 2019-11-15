<?php
/**
 * Template Name: Privacy Page
 *
 * @package WordPress
 * @subpackage Datai_compass
 * @since Datai Compass 0.1
 */
get_header();
?>
<div class="container-fluid">
			<div class="clearfix">
				<div class="pull-left logo-wrap-privacy">
					<a href="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo_blck.png"">
					</a>
				</div>
			</div>
		</div>
<div id="main-content" class="main-content">

<?php
if ( is_front_page() && twentyfourteen_has_featured_posts() ) {
	// Include the featured content template.
	get_template_part( 'featured-content' );
}
?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php
				// Start the Loop.
			while ( have_posts() ) :
				the_post();

				// Include the page content template.
				get_template_part( 'content', 'page' );

				endwhile;
			?>

		</div><!-- #content -->
	</div><!-- #primary -->
	
</div><!-- #main-content -->
<style type="text/css">
body{
    background: hsla(0, 20%, 84%, 0.2);
}
.logo-wrap,.header-menu{
	display: none;
}	
.entry-header .entry-title
{
  display: none;
}
.logo-wrap-privacy img {
  width: 145px;
  height: 50px;
}
.entry-content {    
    margin: 0 auto;
    position: relative;
    width: 80%;
    text-align: justify;

}
</style>

<?php

get_footer();
