<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/6/17
 * Time: 9:07 PM
 */
?>
<div class="bravo_section_title text-center <?php if($animate) echo esc_attr('wow '.$animate); if($color) echo ' color-'.$color; ?>" >
	<h2><?php echo esc_html($title)?></h2>
    <?php if($content){?>
	<hr>
	<div class="title-desc p-margin">
		<?php echo wpb_js_remove_wpautop($content) ?>
	</div>
    <?php }?>
</div>
