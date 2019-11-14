	</div><!-- End wrapper-->
	<!-- Footer-->
    <?php
    $has_footer=false;

	if($footer=bravo_get_option('footer_page') and get_post_type($footer)=='page'){
		$has_footer=true;
	}elseif($option=bravo_get_option('footer_copyright')){
		$has_footer=true;
	}
	if($has_footer){
    ?>
    <footer>
        <div class="container">
			<?php
			if($footer=bravo_get_option('footer_page') and get_post_type($footer)=='page'){
				if(is_singular() and $meta=get_post_meta(get_the_ID(),'footer_page',true)){
					$footer=$meta;
				}
				echo BravoTemplate::get_vc_pagecontent($footer);
			}else{
			    ?>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="footer-text"><?php
							$tags=wp_kses_allowed_html('post');
							echo wp_kses(bravo_get_option('footer_copyright'),$tags) ?></div>
                    </div>
                    <div class="col-sm-6 pull-right  ">
                        <ul class="list-inline pull-right footer-social">
							<?php $social=bravo_get_option('footer_social');
							if(!empty($social) and is_array($social)){
								foreach($social as $c){
									printf('<li><a href="%s" class="fa fb"><i class="%s"></i></a></li>',esc_url($c['url']),esc_attr($c['icon']));
								}
							}?>
                        </ul>
                    </div>
                </div>
                <?php
			}?>

        </div>
    </footer>
    <?php }?>
	<?php wp_footer();?>
	</body>
</html>