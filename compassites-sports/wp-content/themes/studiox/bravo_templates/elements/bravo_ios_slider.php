<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/13/17
 * Time: 8:59 PM
 */
if(empty($images)) return;
?>
<div id="mobile-img">
	<img src="<?php echo get_template_directory_uri() ?>/assets/images/device.jpg" alt="<?php esc_html_e('iPhone Device','studiox') ?>">
	<div id="mobile-slider" class="owl-carousel owl-theme">
        <?php foreach($images as $image){
            printf('<div class="item">%s</div>',wp_get_attachment_image($image,'full'));
        } ?>

	</div>
</div>
