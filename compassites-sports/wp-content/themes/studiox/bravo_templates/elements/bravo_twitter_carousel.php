<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/14/17
 * Time: 8:40 PM
 */
if(empty($rows)) return;
?>
<div class="bravo-twitter <?php echo esc_attr($color) ?>">
<h2><span class="sr-only">header</span><i class="fa fa-twitter" aria-hidden="true"></i></h2>
<div id="blog-text-slider" class="owl-carousel owl-theme">
	<?php
	if(!empty($rows)){
		foreach ($rows as $key=>$value)
		{
			?>
			<div class="item text-center">
				<div class="p-margin"><?php
					$tags=wp_kses_allowed_html('post');
					echo wp_kses($value->text,$tags) ?></div>
			</div>
			<?php
		}
	}
	?>
</div>
</div>
