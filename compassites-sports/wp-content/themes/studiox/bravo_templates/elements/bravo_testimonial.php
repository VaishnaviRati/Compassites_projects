<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/6/17
 * Time: 10:03 PM
 */
$items=vc_param_group_parse_atts($items);
if(empty($items)) return;
?>
<div class="bravo_testimonial <?php echo esc_attr($color) ?>">
    <div id="owl-slider" class="owl-carousel owl-theme">
        <?php foreach($items as $item){
            ?>
            <div class="item text-center">
                <div class="client-img">
                    <?php echo wp_get_attachment_image($item['avatar'],array(270,270)) ?>
                </div>
                <p class="p-margin"><?php echo esc_html($item['review']) ?></p>
                <h5><?php echo esc_html($item['name']) ?></h5>
                <p class="client-p"><?php echo esc_html($item['job']) ?></p>
            </div>
            <?php
            }
            ?>

    </div>
</div>