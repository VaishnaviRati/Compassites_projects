<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/6/17
 * Time: 9:35 PM
 */
$start=0;
$items=vc_param_group_parse_atts($items);
if(empty($items)) return;
?>
<div class="timline-year">
<h3><?php echo esc_html($year) ?></h3></div>
<ul class="timeline">
	<?php foreach($items as $k=> $item){
		$class=false;
        if(!empty($item['color'])){
            $class=BravoAssets::build_css('background:'.$item['color'].'!important',':hover >.timeline-panel');
            BravoAssets::add_css('.'.$class.":hover .timeline-badge a {color:".$item['color']."!important;}");
            BravoAssets::add_css('.'.$class.":hover .timeline-panel:after {border-left-color:".$item['color']."!important;border-right-color:".$item['color']."!important;}");
        }
		?>
		<li class="<?php echo esc_attr($class) ?> wow <?php if($k%2==1) echo 'fadeInRight timeline-inverted ';else echo 'fadeInLeft'?>" data-wow-duration="<?php echo esc_attr($start+500) ?>ms">
			<div class="timeline-badge"><a><i class="fa fa-circle"></i></a></div>
			<div class="timeline-panel">
				<div class="timeline-heading">
					<h4><?php echo esc_html($item['title']) ?></h4></div>
				<div class="timeline-body">
					<p><?php echo esc_html($item['desc']) ?></p>
				</div>
				<div class="timeline-footer">
					<p><?php echo esc_html($item['date']) ?></p>
				</div>
			</div>
		</li>
		<?php
	} ?>
	<li class="clearfix no-float"></li>
</ul>
