<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
 if (is_page('Home') ) { 
$casousel_page_id=1537;
?>

 <div class="container">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<h2 class="text-center trusted-text" style="color:#696969; margin: 60px 0 60px 0; font-family: 'Raleway', sans-serif;">
	<?php 
	$casousel_desc = get_post($casousel_page_id);
	echo $casousel_desc->post_content;?>
	</h2>
	<div class="xyz" style="margin: 60px 0 60px 0;">
		<?php echo do_shortcode('[carousel_slide id="1510"]'); ?>
		
	</div>

</div >
<?php } ?>

<footer>

		<div class="container">
			<div class="row">

				<div class="col-md-3 footer1">
					<a href="">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png">
					</a>
					<!-- <div class="social-icon-wrap">
						<ul class="clearfix">
							<li>
								<a href=""><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a href=""><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a href=""><i class="fa fa-youtube"></i></a>
							</li>
							<li>
								<a href=""><i class="fa fa-instagram"></i></a>
							</li>
						</ul>
					</div> -->
				</div>
				<div class="col-md-8 footer2">
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-1' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-2' ) ); ?> 		<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-3' ) ); ?>
				<?php wp_nav_menu( array( 'theme_location' => 'footer-menu-4' ) ); ?>
					<!-- <ul>
						<li>
							<a href="">ABOUT US</a>
						</li>
						<li>
							<a href="">Product</a>
						</li>
						<li>
							<a href="">Company</a>
						</li>
						<li>
							<a href="">Contact</a>
						</li>
					</ul> 
					<ul>
						<li>
							<a href="">RESOURCES</a>
						</li>
						<li>
							<a href="">Press</a>
						</li>
						<li>
							<a href="">Career</a>
						</li>
					</ul>
					<ul>
						<li>
							<a href="">LEGAL</a>
						</li>
						<li>
							<a href="">Privacy Policy</a>
						</li>
						<li>
							<a href="">Terms & Conditions</a>
						</li>
						<li>
							<a href="">Sitemap</a>
						</li>
					</ul>-->
				</div>
			</div>
		</div>
		<p class="text-center">A Compassites product. All rights reserved. © 2019</p>
	</footer>
	<?php wp_footer(); ?>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" crossorigin="anonymous"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/tilt.js"></script>
	<script type="text/javascript">
		new WOW().init();
		$(window).on('load', function(){
			var winH = $(window).height();
			var winW = $(window).width();
			$('.section').height(winH+100);
			$('.section3_container').height(winH/3);
			$('.section3 .background-wrap').height(winH- $('.section3_container').height()+'px');
			$('.section8').height(winH+50);
			$('.section8 .background').height(winH+50);
			$('.absolute-wrap-1').height(winH- $('.absolute-wrap-2').height()+'px');
			// $('.section10').height(winH+100+$('footer').height());
			$('.site-loadingWrap').hide();

			if (winW < 650) {
				$('.section').height(winH);
				$('.section1').height(winH+50);
				$('.section8').height(winH+100);
				$('.section2_content_wrap').height($('.section2_content_piller').height()+70);
				$('.section3_content_wrap').height($('.section3_content_wrap .background-wrap').height()+$('.section3_container').height());
				$('.section5_content_wrap').height($('.absolute-wrap-1').height()+$('.absolute-wrap-2').height());
				$('.section10').height($('.section10 .background-content').height()+120);
			}	
		});
		
		var isSafari = /constructor/i.test(window.HTMLElement) || (function (p) { return p.toString() === "[object SafariRemoteNotification]"; })(!window['safari'] || safari.pushNotification);
		console.log(isSafari);
   		if (isSafari){
			$('.downArrowBtn').hide();
			$('.section_fixed .section__content').css({"position": "absolute"});
			$('.background-1').css({"background-attachment": "initial !important"});
		}
		if (window.navigator.userAgent.match("Edge")){
			$('.second-piller-background').find('.background').removeClass('js-tilt-core');
			$('.second-piller-background').addClass('active');
			$('.background-1').css({"background-size": "25% !important"});
			$('aside').css({"margin-right": "15px"});

			// $('.section1 .downArrowBtn i, .getStartedBtn').click(function(){
			// 	$('html, body').animate({ scrollTop: $('.section2_content_wrap').height()+50 }, 1000);
			// });

			// $('.background-1').mouseenter(function(){
			// 	console.log("working");
			// 	$(this).css({"transform": "scale(1.5)"});
			// });
			
			// $('.downArrowBtn').hide();
			$('body').scroll(function(){
				var scrollTop = $(window).scrollTop();
				console.log(scrollTop);
				if (scrollTop > $('.section2_content_wrap').offset().top && scrollTop < $('.section3_content_wrap').offset().top  ) {
					$('.header-login, .header-menu i').css({"color": "#000"});
					$('.logo-wrap img').attr('src', '<?php echo get_template_directory_uri(); ?>/img/logo_blck.png');
				} else if (scrollTop > $('.section5_content_wrap').offset().top && scrollTop < $('.section7_content_wrap').offset().top  ) {
					$('.header-login, .header-menu i').css({"color": "#000"});
					$('.logo-wrap img').attr('src', '<?php echo get_template_directory_uri(); ?>/img/logo_blck.png');
				} else if (scrollTop > $('.section10').offset().top) {
					$('.header-login, .header-menu i').css({"color": "#000"});
					$('.logo-wrap img').attr('src', '<?php echo get_template_directory_uri(); ?>/img/logo_blck.png');
				} else {
					$('.header-login, .header-menu i').css({"color": "#fff"});
					$('.logo-wrap img').attr('src', '<?php echo get_template_directory_uri(); ?>/img/logo_white.png');
				}
			});
		} 

		$(window).scroll(function(){
			var scrollTop = $(window).scrollTop();
			// console.log($('.section5_content_wrap').offset().top);
			// console.log(scrollTop);

			// if (scrollTop > $('.section5_content_wrap').offset().top) {
			// 	$('.section6_content_wrap').addClass('active');
			// 	// console.log(scrollTop);
			// }

			if (scrollTop > $('.section2_content_wrap').offset().top && scrollTop < $('.section3_content_wrap').offset().top  ) {
				$('.header-login, .header-menu i, .header-login a').css({"color": "#000"});
				$('.logo-wrap img').attr('src', '<?php echo get_template_directory_uri(); ?>/img/logo_blck.png');
			} else if (scrollTop > $('.section5_content_wrap').offset().top && scrollTop < $('.section7_content_wrap').offset().top  ) {
				$('.header-login, .header-menu i, .header-login a').css({"color": "#000"});
				$('.logo-wrap img').attr('src', '<?php echo get_template_directory_uri(); ?>/img/logo_blck.png');
			} else if (scrollTop > $('.section10').offset().top) {
				$('.header-login, .header-menu i, .header-login a').css({"color": "#000"});
				$('.logo-wrap img').attr('src', '<?php echo get_template_directory_uri(); ?>/img/logo_blck.png');
			} else {
				$('.header-login, .header-menu i, .header-login a').css({"color": "#fff"});
				$('.logo-wrap img').attr('src', '<?php echo get_template_directory_uri(); ?>/img/logo_white.png');
			}
		});		

		$(document).ready(function() {

			// $('.openMenu').click(function(){				
			// 	$('aside').css({"right": "0px"});
			// 	$('.header-menu').hide();
			// });
			// $('.closeMenu').click(function(){
			// 	$('.header-menu').show();
			// 	$('aside').css({"right": "-1000px"});
			// });
           
            $('body').click(function(e){     	
            	if($(event.target).hasClass('openMenu') || $(event.target).hasClass('side-bar')|| event.target.nodeName == 'ASIDE'){
                 $('aside').css({"right": "0px"});
				$('.header-menu').hide();
            	} else{
            		$('.header-menu').show();
				$('aside').css({"right": "-1000px"});
            	}
            	
            })

            $(window).scroll(function() {
			  $('.header-menu').show();
				$('aside').css({"right": "-1000px"});
			});	

			$(window).bind('touchmove', function(e) { 
				$('.header-menu').show();
				$('aside').css({"right": "-1000px"}); // Replace this with your code.
				});
			var winW = $(window).width();
			if (winW < 650) {
				$('.section1 .downArrowBtn i, .getStartedBtn').click(function(){
					$('html, body').animate({ scrollTop: $('.section2_content_wrap').offset().top-50 }, 1000);
				});
				$('.connectBtn, .section2_content_wrap .downArrowBtn i ').click(function(){
					$('html, body').animate({ scrollTop: $('.section3_content_wrap').offset().top+545 }, 1000);
				});
				
				$('.flowBtn, .section3_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section4_content_wrap').offset().top+645}, 1000);
				});
				
				$('.coreBtn, .section4_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section5_content_wrap').offset().top+720}, 1000);
					$('.absolute-wrap-piller').addClass("active");
					$('.second-piller-background img').mousein();
				});
				
				$('.controlBtn, .section5_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section6_content_wrap').offset().top+845 }, 1000);
				});
				
				$('.visionBtn, .section6_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section7_content_mobile_wrap').offset().top+945 }, 1000);
				});

				$('.section7_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section8').offset().top+545 }, 1000);
				});

				$('.section8 .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section10').offset().top+900 }, 1000);
				});
				// $('.section9 .downArrowBtn i').click(function(){
				// 	$('html, body').animate({ scrollTop: $('.section10').offset().top }, 1000);
				// });

				$('.about-click').on('click', function(){
					$('html, body').animate({ scrollTop: $('.section10').offset().top }, 1000);
					$('.about-click').css({"color" : "#727272"});
					$('.contact-click').css({"color": "#c8cbd2"});
				}); 
				  
				 	$('.product-click').on('click', function(){
					$('html, body').animate({ scrollTop: $('.section2_content_wrap').offset().top }, 1000);
					$('.about-click').css({"color" : "#727272"});
					$('.contact-click').css({"color": "#c8cbd2"});
				});
				  
				$('.contact-click').on('click', function(){
					$('html, body').animate({ scrollTop: $('.section8').offset().top }, 1000);
					$('.contact-click').css({"color" : "#727272"});
					$('.about-click').css({"color": "#c8cbd2"});
				});
			} else {

				$('.section1 .downArrowBtn i, .getStartedBtn').click(function(){
					$('html, body').animate({ scrollTop: $('.section2_content_wrap').height()+50 }, 1000);
				});	

				$('.connectBtn, .section2_content_wrap .downArrowBtn i ').click(function(){
					$('html, body').animate({ scrollTop: $('.section3_content_wrap').offset().top+50 }, 1000);
				});
				
				$('.flowBtn, .section3_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section4_content_wrap').offset().top+50}, 1000);
				});
				
				$('.coreBtn, .section4_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section5_content_wrap').offset().top+50}, 1000);
					$('.absolute-wrap-piller').addClass("active");
					$('.second-piller-background img').mousein();
				});
				
				$('.controlBtn, .section5_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section6_content_wrap').offset().top+50 }, 1000);
				});
				
				$('.visionBtn, .section6_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section7_content_wrap').offset().top+50 }, 1000);
				});

				$('.section7_content_wrap .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section8').offset().top+50 }, 1000);
				});

				$('.section8 .downArrowBtn i').click(function(){
					$('html, body').animate({ scrollTop: $('.section10').offset().top+50 }, 1000);
				});
				// $('.section9 .downArrowBtn i').click(function(){
				// 	$('html, body').animate({ scrollTop: $('.section10').offset().top }, 1000);
				// });

				$('.about-click').on('click', function(){
					$('html, body').animate({ scrollTop: $('.section10').offset().top+50 }, 1000);
					$('.about-click').css({"color" : "#727272"});
					$('.contact-click').css({"color": "#c8cbd2"});
				});
				  
				  
				$('.contact-click').on('click', function(){
					$('html, body').animate({ scrollTop: $('.section8').offset().top+50 }, 1000);
					$('.contact-click').css({"color" : "#727272"});
					$('.about-click').css({"color": "#c8cbd2"});
				});
			}

			if ($('.section5_content_wrap').length) {
				$('.js-core-tilt').tilt({
					maxTilt: 10,
					// reset: false
				});
			}
			$('.moving-heading').tilt({
				maxTilt: 30,
				scale: 1.05,
				transition: true
				// reset: false
			});
			$('.js-tilt').tilt({
				maxTilt: 10,
				// reset: false
			});
			$('.moving-js-tilt').tilt({
				maxTilt: 30,
				scale: 1.05,
				transition: true
				// reset: false
			});
			$('.js-tilt-heading').tilt({
				maxTilt: 2,
				// reset: false
			});
			$('.js-tilt-core').tilt({
				maxTilt: 10,
				// reset: false
			});
			$('.js-tilt-control').tilt({
				maxTilt: 10,
				// reset: false
			});
		});
		
	</script>
</body>
</html>
