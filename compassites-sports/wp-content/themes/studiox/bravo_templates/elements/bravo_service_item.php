<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/13/17
 * Time: 8:54 PM
 */
$class=$class2='';
if($color){
    $class=BravoAssets::build_css('color: '.$color.'!important',':hover>h3');
    $class2=BravoAssets::build_css('background: '.$color.'!important');
}
?>
<div class="what-we-do-features <?php  echo esc_attr($class) ?>">
	<h3 class="text-<?php echo esc_attr($align);  ?>">
        <span class="<?php echo esc_attr($class2) ?>"><i class="<?php echo esc_attr($icon) ?>" aria-hidden="true"></i></span>
        <?php echo esc_html($title) ?></h3>
	<p class="text-<?php echo esc_attr($align) ?>"><?php echo wpb_js_remove_wpautop($content) ?></p>
</div>
