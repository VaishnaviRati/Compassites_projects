<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/6/17
 * Time: 9:55 PM
 */
$features=vc_param_group_parse_atts($features);
$link=vc_build_link($link);
$class=$class2=$class3=false;
if($color){
    $class3='multi-color';
    $class2=BravoAssets::build_css('background:'.$color.'!important');

	BravoAssets::add_css('.'.$class2.':before{border-bottom-color:'.$color.'!important}');

	$class=BravoAssets::build_css('border-color:'.$color.'!important;color:'.$color.'!important');


	// Hover
	BravoAssets::add_css('.'.$class2.':hover:before{border-bottom-color:#6a6a6a!important}');
	BravoAssets::add_css('.'.$class2.':hover{background:#6a6a6a!important}');
	BravoAssets::add_css('.'.$class2.':hover li{border-bottom-color: #7a7a7a!important}');
	BravoAssets::add_css('.'.$class2.':hover .'.$class.' { border-color:#6a6a6a!important;color:#6a6a6a!important }');

	if($class2){
		$class2.=' multi-color ';
    }
}
?>
<div class="bravo_pricing_item  <?php if($animate) echo 'wow '.$animate;?>">
	<ul class="price <?php echo esc_attr($class3) ?> <?php echo esc_attr($class2)?> <?php if($highlight) echo 'price-selected'; else echo 'price-1'; ?>">
		<li class="header <?php echo esc_attr($class)?>"><?php echo esc_html($price) ?></li>
		<li class="grey">
			<h3><?php echo esc_html($title) ?></h3>
			<p><?php echo esc_html($subtitle) ?></p>
			<?php if(!empty($features[0])){
				printf('<p>%s</p>',esc_html($features[0]['title']));
				}?>

		</li>
		<?php if(!empty($features[1])){
			foreach($features as $feature){
				printf('<li>
							<p>%s</p>
						</li>',esc_html($feature['title']));
			}
		} ?>

		<li class="grey"><a href="<?php echo esc_url($link['url']) ?>" class="btn btn-default buttons"><?php echo esc_html($link['title']) ?></a></li>
	</ul>
</div>
