<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/6/17
 * Time: 9:13 PM
 */
$class=$class2=false;
if($color){
    $class=BravoAssets::build_css("background:".$color.'!important;border:none!important;');
    $class2=BravoAssets::build_css("border-color:".$color.'!important',':hover');
}
?>
<div class="bravo_facts record text-center <?php if($animate) echo 'wow '.$animate ?>">
    <div class="outer-circle <?php echo esc_attr($class2) ?>">
        <div class="icons <?php echo esc_attr($class)?>"><i class="<?php echo esc_attr($icon) ?>" aria-hidden="true"></i></div>
    </div>
    <div class="incrementalNumber numscroller" data-value="<?php echo esc_attr($number) ?>"></div>
    <p><?php echo esc_html($title)?></p>
</div>
