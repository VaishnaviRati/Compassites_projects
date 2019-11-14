<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/1/15
 * Time: 6:18 PM
 */
get_header();
global $post;
$author_id = $post->post_author;
$bravo_sidebar=bravo_get_sidebar();
$bravo_sidebar_pos=$bravo_sidebar['position'];
$bravo_enable_head = bravo_get_option('enable_head_page');
$bravo_title = bravo_get_option('post_blog_title',esc_html__('Our Latest Blog','studiox'));
$bravo_sub_title = bravo_get_option('post_blog_sub_title',esc_html__('CLASSSIC NEWS POSTS','studiox'));
$bravo_bg = bravo_get_option('blog_background_image');

if(is_singular()){
	if($meta=get_post_meta(get_the_ID(),'post_blog_title',true)){
		$bravo_title=$meta;
	}
	if($meta=get_post_meta(get_the_ID(),'post_blog_sub_title',true)){
		$bravo_sub_title=$meta;
	}
	if($meta=get_post_meta(get_the_ID(),'blog_background_image',true)){
		$bravo_bg=$meta;
	}
}

$class=false;
if($bravo_bg){
	$class = BravoAssets::build_css(' background: url("'.esc_url($bravo_bg).'") no-repeat center center / cover ;');
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
	echo ("<div class='empty-banner'></div>");
}?>
<?php
while(have_posts()){
    the_post();
    ?>
    <div id="area-main" class="padding-one">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 <?php echo esc_html($bravo_sidebar_pos=='no'?'col-md-12':'col-md-8'); ?>">
                    <div class="blog-item">
                        <div class="text-center blog-img">
                        <?php
                        if(has_post_thumbnail()) {
                            echo get_the_post_thumbnail(get_the_ID(),'full',array('class'=>'img-responsive'));
                        }
                        ?>
                        </div>
                        <div class="blog-content">
                            <h3 class="blog-name"><?php the_title() ?></h3>
                            <ul class="blog-author">
                                <li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fa fa-user"></i><?php esc_html_e("By ",'studiox') ?><?php the_author(); ?></a></li>
                                <li><a href="<?php echo get_comments_link() ?>"><i class="fa fa-comment-o"></i><?php esc_html_e('Leave A Comment','studiox') ?></a></li>
                                <li><a href="<?php the_permalink()?>" ><i class="fa fa-clock-o"></i> <?php echo get_the_time(get_option('date_format')) ?></a></li>
                            </ul>
                            <div class="blog-the-content"><?php the_content()?></div>
                            <?php
							wp_link_pages( array(
								'before'      => '<div class="page-links"><p class="page-links-title">' . esc_html__( 'Pages:', "studiox" ) . '</p>',
								'after'       => '</div>',
								'link_before' => '<span>',
								'link_after'  => '</span>',
								'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', "studiox" ) . ' </span>%',
								'separator'   => '',
							) );
                            ?>
                            <hr class="hr">
                            <?php

                            the_terms(get_the_ID(),'category','<strong>'.esc_html__('Category: ','studiox').'</strong>');



                            $list = get_the_tags();
                            ?>
                        </div>
                        <div class="post-tag clearfix <?php if(empty($list)) echo ' no-tag'; ?>">
                            <ul class="tag-cloud pull-left">
                                <?php

                                if(!empty($list)){
                                    foreach($list as $k=>$v){
                                        echo ' <li><a href="'.get_tag_link($v->term_id).'"> '.esc_html($v->name).'</a></li>';
                                    }
                                }
                                ?>
                            </ul>
                            <?php get_template_part('share'); ?>
                        </div>
                        <div class="content-comment">
                            <?php
                            if(comments_open() or pings_open()){
                                comments_template();
                            }?>
                        </div>
                    </div>
                </div>
                <?php if($bravo_sidebar_pos!='no'){ get_sidebar(); }?>
            </div>
        </div>
    </div>
    <?php
}
get_footer();