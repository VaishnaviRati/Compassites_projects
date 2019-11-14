<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/14/17
 * Time: 9:20 PM
 */
$class=false;
if($color){
    $class=BravoAssets::build_css('color:'.$color);
}
?>
<div class="bravo-contact-info <?php echo esc_attr($class)?> text-center <?php if($animate) echo 'wow '.$animate ?>   address-details">
	<h2><span class="sr-only">header</span><i class="<?php echo esc_attr($icon)?>" aria-hidden="true"></i>
	</h2>
	<p><?php echo wpb_js_remove_wpautop($title) ?></p>
</div>
