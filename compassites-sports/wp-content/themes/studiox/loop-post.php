<article <?php post_class(' blog-item-v3 ')?>>

    <a href="<?php the_permalink()?>" class="img-center">
	<?php
	if(has_post_thumbnail()){
		echo get_the_post_thumbnail(get_the_ID(),'full',array('class'=>'img-responsive'));
	}
	?>
    </a>
	<div class="blog-content">
		<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
		<ul class="blog-author">
			<li><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><i class="fa fa-user"></i><?php esc_attr_e("By","studiox") ?> <?php the_author(); ?></a></li>
			<li><a href="<?php echo get_comments_link(get_the_ID()) ?>"><i class="fa fa-comment-o"></i><?php esc_attr_e("Leave A Comment","studiox") ?></a></li>
			<li><a href="<?php the_permalink()?>" ><i class="fa fa-clock-o"></i> <?php echo get_the_time(get_option('date_format')) ?></a> </li>
		</ul>
		<div><?php the_excerpt() ?></div>
		<a href="<?php the_permalink() ?>" class="btn-common btn-green bounce-top"><?php esc_attr_e("Read More","studiox") ?></a>
	</div>
</article>