<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/6/17
 * Time: 9:20 PM
 */
if($query->have_posts())
{

	?>
    <div class="our-team">
	    <div id="responsiveTabsDemo" class="margin-60-top row">
		<ul class="row">
			<?php while ($query->have_posts()){
				$query->the_post();
				$class=false;
				if($multiple_color)
                {
                    $color=get_post_meta(get_the_ID(),'color',true);
                    if($color){
                        $class=BravoAssets::build_css('background:'.$color.'!important');
                    }
                }
				?>
				<li class="col-xs-3 <?php if($animate) echo 'wow '.$animate ?>  ">
					<a href="#tab-post-<?php echo get_the_ID() ?>" class="triangle-border top">
						<div class="hovereffect">
							<?php the_post_thumbnail(array(534,572)) ?>
							<div class="overlay <?php echo esc_attr($class)?>">
								<h3><?php the_title()?></h3>
								<p><?php echo get_post_meta(get_the_ID(),'job',true) ?></p>
							</div>
						</div>
						<div class="arrow"></div>
					</a>
				</li>
				<?php
			} ?>
		</ul>
		<?php
		while ($query->have_posts())
		{
			$query->the_post();
			?>
			<div id="tab-post-<?php the_ID()?>" class="custom-panel">
				<div class="row padding-three our-team-border">
					<div class="col-sm-7">
						<div class="bravo-team-desc">
							<?php echo get_post_meta(get_the_ID(),'desc',true) ?>
						</div>
						<?php $social=get_post_meta(get_the_ID(),'social',true);
						if(!empty($social)){
							echo '<ul class="list-inline our-team-social">';
							foreach($social as $c)
							{
								printf('<li><a href="%s"><i class="fa fa-fw %s"></i></a></li>',esc_attr($c['url']),esc_attr($c['icon']));
							}
							echo '</ul>';
						}
						?>

					</div>
					<div class="col-sm-5 progess-bars">
						<?php $skills=get_post_meta(get_the_ID(),'skills',true);
						if(!empty($skills)){
							foreach($skills as $skill)
							{
							    $class=false;
							    if(!empty($skill['color']) and $multiple_color) $class=BravoAssets::build_css('background:'.$skill['color'].'!important');
								?>
								<!-- Skill Bars -->
								<div class="progress skill-bar ">
									<div class="progress-bar progress-bar-success progress-bar-custom <?php echo esc_attr($class)?>" role="progressbar"
										 aria-valuenow="<?php echo esc_attr($skill['percent']) ?>" aria-valuemin="0" aria-valuemax="100"><span><?php echo esc_html($skill['title']) ?> <?php echo esc_html($skill['percent']) ?>%</span>
									</div>
								</div>
								<?php
							}
						}
						?>

					</div>
				</div>
			</div>
			<?php
		}
		?>
	</div>
    </div>
	<?php
}
