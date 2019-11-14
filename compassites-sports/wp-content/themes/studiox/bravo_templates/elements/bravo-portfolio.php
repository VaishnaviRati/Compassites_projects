<?php

$query=array(
    'posts_per_page'=>$number,
    'post_type' => 'bravo_portfolio',
    'order'=>$order,
    'orderby'=>$orderby,
);
$check = (explode(",",$bravo_category));
$list_cat = array();
if($bravo_category != "_0_" and !in_array('_0_',$check) and !empty($bravo_category))
{
    $query['tax_query'][]=array(
        'taxonomy'=>'bravo_portfolio_cat',
        'field'  =>'slug',
        'terms'=>explode(",",$bravo_category)
    );
    $terms=get_terms('bravo_portfolio_cat', array( 'taxonomy'   => 'bravo_portfolio_cat' , 'hide_empty' => false , 'slug'    => explode(",",$bravo_category) ));
    if(!empty($terms)){
        foreach($terms as $k=>$v){
            $list_cat[$v->name]= $v->slug;
        }
    }
}
if($bravo_category == "_0_" and in_array('_0_',$check)){
    $terms=get_terms('bravo_portfolio_cat',array('taxonomy'=>'bravo_portfolio_cat','hide_empty'=>false));
    if(!empty($terms)){
        foreach($terms as $k=>$v){
            $list_cat[$v->name]= $v->slug;
        }
    }
}
$bravo_query = new WP_Query( $query );
?>
<div class="bravo_portfolio">
    <div id="owl-demo">
        <?php while ($bravo_query->have_posts()){
            $bravo_query->the_post();
            ?>
            <div class="item">
                <div class="hovereffect">
                    <?php the_post_thumbnail(array(528,424),array('class'=>'img-responsive')) ?>
                    <div class="overlay">
                        <div class="owl-captions">
                            <a class="fancy-box"  href="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'full') ?>" title="<?php the_title()?>"> <i
                                        class="<?php echo get_post_meta(get_the_ID(),'icon',true) ?>" aria-hidden="true"></i></a>
                            <h3><a class="fancy-box" href="<?php echo wp_get_attachment_image_url(get_post_thumbnail_id(get_the_ID()),'full') ?>" title="<?php the_title()?>"><?php the_title()?></a></h3>
                            <p class="p-margin"><?php echo strip_tags(get_the_excerpt()) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        } ?>

    </div>
</div>

<?php wp_reset_postdata(); ?>
