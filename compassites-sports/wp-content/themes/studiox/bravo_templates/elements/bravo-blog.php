<?php

$query=array(
    'posts_per_page'=>$number,
    'post_type' => 'post',
    'order'=>$order,
    'orderby'=>$orderby,
);
$check = (explode(",",$bravo_category));
$list_cat = array();
if($bravo_category != "_0_" and !in_array('_0_',$check) and !empty($bravo_category))
{
    $query['tax_query'][]=array(
        'taxonomy'=>'category',
        'field'  =>'slug',
        'terms'=>explode(",",$bravo_category)
    );
}
$bravo_query = new WP_Query( $query );
if($bravo_query->have_posts()) {
	?>
    <div id="blog-slider">
        <?php while ($bravo_query->have_posts()){
            $bravo_query->the_post();
            ?>
            <div class="item">
                <div class="blog-img">
                    <a href="<?php the_permalink()?>">
                        <?php
                        the_post_thumbnail(array(362,241));
                        ?>
                     </a>
                </div>
                <div class="blog-border">
                    <div class="blog-slider-descp">
                        <h3><a href="<?php the_permalink()?>"><?php the_title() ?></a></h3>
                        <p class="p-font"><?php printf(esc_html__('by %s','studiox'),'<span><a href="'.get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ).'">'.get_the_author().'</a></span>') ?> | <?php printf(esc_html__('%s at %s','studiox'),get_the_time(get_option('date_format')),get_the_time(get_option('time_format'))) ?></p>
                        <p class="p-font"><?php echo strip_tags(get_the_excerpt()) ?></p>
                        <p class="p-font"><a href="<?php the_permalink()?>"><?php esc_html_e('Read More','studiox')?></a></p>
                    </div>
                </div>
            </div>
            <?php
        }?>

    </div>
	<?php
}
wp_reset_postdata(); ?>
