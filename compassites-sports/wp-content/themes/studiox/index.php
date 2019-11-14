<?php
$bravo_sidebar=bravo_get_sidebar();
$bravo_sidebar_pos=$bravo_sidebar['position'];
global $wp_query;
get_header();
$bravo_title = bravo_get_option('post_blog_title',esc_html__('Our Latest Blog','studiox'));
if(is_archive()){
	$bravo_title=get_the_archive_title();
	if(is_tax()){
		$bravo_title=single_term_title( '', false );
    }
}
$bravo_sub_title = bravo_get_option('post_blog_sub_title',esc_html__('CLASSSIC NEWS POSTS','studiox'));
$bravo_bg = bravo_get_option('blog_background_image');
$class=false;
if($bravo_bg)
$class = BravoAssets::build_css(' background-image: url("'.esc_url($bravo_bg).'")');

if(is_search()){
	$bravo_title=sprintf(esc_html__("Search result for '%s'",'studiox'),get_query_var('s'));
}
    if($class){
	?>
    <div class="innerpage-banner header-banner padding-two <?php echo esc_attr($class) ?>">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class=""><?php echo esc_html($bravo_title) ?></h2>
                    <p class="tagline"><?php echo esc_html($bravo_sub_title) ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php }else
    {
        echo("<div class='empty-banner'></div>");
	}?>
	<div id="area-main" class="padding-one">
		<div class="blog">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 <?php echo esc_html($bravo_sidebar_pos=='no'?'col-md-12':'col-md-8'); ?>">
							<?php
                            if(have_posts()){
								while(have_posts()){
									the_post();
									get_template_part('loop','post');
								}
                            }else
                            {
                                get_template_part('loop','none');
                            }

							?>
						<?php echo bravo_paginate_links(); ?>
					</div>
					<?php if($bravo_sidebar_pos!='no'){ get_sidebar(); }?>
				</div>
			</div>
		</div>
	</div>
    <?php
get_footer();