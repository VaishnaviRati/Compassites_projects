<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Datai_compass
 * @since Datai Compass 0.1
 */


// Home Page
$home_page_id=1451;
$connect_head_page=1496;
$flow_head_page=1497;
$core_head_page=1498;
$command_head_page=1499;
$vision_head_page=1500;
$contact_page_id =1502;

// Second - 5 Module section
$module_five_tittle_page_id=1452;
$module_five_text_page_id=1453;
$module_five_connect_page_id=1454;
$module_five_flow_page_id=1455;
$module_five_core_page_id=1456;
$module_five_control_page_id=1457;
$module_five_vision_page_id=1458;

// Connect - Section
$connect_discover_page_id=1433;
$connect_share_page_id=1434;
$connect_engage_page_id=1435;

// Flow - Section
$flow_initiate_page_id=1436;
$flow_collaborate_page_id=1437;
$flow_communicate_page_id=1438;

// Core - Section 
$core_structure_page_id=1439;
$core_automate_page_id=1440;
$core_activate_page_id=1441;

// Control 
$control_invoicing_page_id=1445;
$control_risk_page_id=1446;

// vision - Section 
$vision_monitor_page_id=1442;
$vision_insights_page_id=1443;
$vision_trend_page_id=1444;

// About us 
$about_page_id=1447;
$about_what_page_id=1448;
$about_why_page_id=1449;
$about_who_page_id=1450;
get_header();
$ua=getBrowser();
// print_r($ua);?>
	
	<div id="sections">
		<div class="section section_fixed section1">
			<div class="section__clip">
				<div class="section__content">
					<div class="background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/first_image.jpg');"></div>
					<div class="background-content" data-wow-duration="2s" data-wow-delay="1s">
						<?php
							$home_page = get_post($home_page_id);
						?>
						<h3 class="js-tilt-heading"><?php echo $home_page->sub_title;?></h3>
						<p><?php echo $home_page->post_content;?></p>
						<!-- <p>A single, intuitive and comprehensive platform for <br/>advertisers and media agencies to plan, design, execute and <br/>manage the entire media investment process</p> -->
						<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
							<a href="#getStarted"><button class="getStartedBtn">GET STARTED</button></a>
						<?php } else { ?>
							<button class="getStartedBtn">GET STARTED</button>
						<?php } ?>
						
					</div>
					<div class="downArrowBtn">
						<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
							<a href="#getStarted"><i class="fa fa-angle-down"></i></a>
						<?php } else { ?>
							<i class="fa fa-angle-down"></i>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
		<div class="section section_fixed section2_content_wrap" id="getStarted">
			<div class="section__clip">
				<div class="section__content">
					<div class="section2_content_piller">
						<div class="">
							<div class="section2_content">
							<?php
									$module_five_title = get_post($module_five_tittle_page_id);
									$module_five_text = get_post($module_five_text_page_id);
									$module_five_connect = get_post($module_five_connect_page_id);
									$module_five_flow = get_post($module_five_flow_page_id);
									$module_five_core = get_post($module_five_core_page_id);
									$module_five_control = get_post($module_five_control_page_id);
									$module_five_vision = get_post($module_five_vision_page_id);
							?>
							<h3 class="text-center"><?php echo $module_five_title->post_content;?></h3>
							<h4 class="text-center"><?php echo $module_five_text->post_content;?></h4>
								<!-- <h3 class="text-center">Unified platform to plan, manage and measure media investment</h3> -->
								<!-- <h4 class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4> -->
							</div>
							<div class="et_pb_code_inner clearfix" style="padding-left:35px">
								<div class="col-md-2 col-sm-4 col-xs-12 tile-container">
									<div class="tile-block js-tilt">
										<div class="padding-inner">
											<div class="label-heading">
												<h6><?php echo $module_five_connect->sub_title;?></h6>
												<span class="label-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/share-1.png">
												</span> 
											</div>
											<p><?php echo $module_five_connect->post_content;?></p>
											<!-- <p>Build your network in media space to share your ideas, interests using DATAI’s social platform. 	</p>-->
												<div class="button-block">
												<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
													<a href="#connect"><button class="connectBtn">Explore</button></a>
												<?php } else { ?>
													<button class="connectBtn">Explore</button>
												<?php } ?>
											</div>
										</div>
									</div> 
								</div>
								<div class="col-md-2 col-sm-4 col-xs-12 tile-container">
									<div class="tile-block js-tilt">
										<div class="padding-inner">
											<div class="label-heading">
												<h6><?php echo $module_five_flow->sub_title;?></h6>
												<span class="label-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/reload.png">
												</span> 
											</div>
											<p><?php echo $module_five_flow->post_content;?></p>
											<!-- <p>Enables the different stakeholders to automate the investment plan, trafficking plan and publish into Ad servers with robust workflow engine.</p> -->
											<div class="button-block">
												<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
													<a href="#flow"><button class="flowBtn">Explore</button></a>
												<?php } else { ?>
													<button class="flowBtn">Explore</button>
												<?php } ?>											
											</div>
										</div>
									</div> 
									<img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
								</div>
								<div class="col-md-2 col-sm-4 col-xs-12 tile-container">
									<div class="tile-block js-tilt">
										<div class="padding-inner">
											<div class="label-heading">
												<h6><?php echo $module_five_core->sub_title;?></h6>
												<span class="label-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/diamond.png">
												</span> 
											</div>
											<p><?php echo $module_five_core->post_content;?></p>
											<!-- <p>Enables to automate the process intelligently by having uniform data structure across all the media channels. </p> -->
											<div class="button-block">
												<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
													<a href="#core"><button class="coreBtn">Explore</button></a>
												<?php } else { ?>
													<button class="coreBtn">Explore</button>
												<?php } ?>											
											</div>
										</div>
									</div> 
									<img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
								</div>
								<div class="col-md-2 col-sm-4 col-xs-12 tile-container">
									<div class="tile-block js-tilt">
										<div class="padding-inner">
											<div class="label-heading">
												<h6><?php echo $module_five_control->sub_title;?></h6>
												<span class="label-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/control.png">
												</span> 
											</div>
											<p><?php echo $module_five_control->post_content;?></p>
											<!-- <p>Automation of invoicing using different pre-defined templates, taxation, servicing fees with precision accuracy. </p> -->
											<div class="button-block">
												<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
													<a href="#control"><button class="controlBtn">Explore</button></a>
												<?php } else { ?>
													<button class="controlBtn">Explore</button>
												<?php } ?>											
											</div>
										</div>
									</div> 
									<img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
								</div>
								<div class="col-md-2 col-sm-4 col-xs-12 tile-container">
									<div class="tile-block js-tilt">
										<div class="padding-inner">
											<div class="label-heading">
												<h6><?php echo $module_five_vision->sub_title;?></h6>
												<span class="label-icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/vision.png">
												</span> 
											</div>
											<p><?php echo $module_five_vision->post_content;?></p>
											<!-- <p>Modernized dashboard, intuitive graphical representations of data driven analytical reports which helps to achieve their strategic goals. </p> -->
											<div class="button-block">
												<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
													<a href="#vision"><button class="visionBtn">Explore</button></a>
												<?php } else { ?>
													<button class="visionBtn">Explore</button>
												<?php } ?>											
											</div>
										</div>
									</div> 
									<img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png">
								</div>
							</div>
						</div>
					</div>
					<div class="downArrowBtn">
						<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
							<a href="#connect"><i class="fa fa-angle-down"></i></a>
						<?php } else { ?>
							<i class="fa fa-angle-down"></i>
						<?php } ?>							
					</div>
				</div>
			</div>
		</div>
		<div class="section section_fixed section3 section3_content_wrap" id="connect">
			<div class="section__clip">
				<div class="section__content">
					<div class="background-wrap">
						<div class="background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/background2.jpg');"></div>
						<div class="background-content">
							<div class="">
							<?php
							$connect_head_page=1496;
							$connect_page = get_post($connect_head_page);
							?><h3 class="moving-heading"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $connect_page->sub_title;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h3>
							</div>
						</div>
					</div>
					<?php
							$discover = get_post($connect_discover_page_id);
							$share = get_post($connect_share_page_id);
							$engage = get_post($connect_engage_page_id);
					?>
					<div class="section3_container text-center">
						<div class="row">
							<div class="col-md-4">
								<h3><?php echo $discover->sub_title;?></h3>
								<p><?php echo $discover->post_content;?></p>
								<!-- <p>Unlock connections in your network and discover new collaboration opportunities</p> -->
							</div>
							<div class="col-md-4">
								<h3><?php echo $share->sub_title;?></h3>
								<p><?php echo $share->post_content;?></p>
								<!-- <p>Foster your community of industry insiders by sharing your latest news, industry trends, and perspective</p> -->
							</div>
							<div class="col-md-4">
								<h3><?php echo $engage->sub_title;?></h3>
								<p><?php echo $engage->post_content;?></p>
								<!-- <p>Initiate new connections and help bridge new partners to take your projects to a whole new level</p> -->
							</div>
						</div>
						<div class="downArrowBtn">
							<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
								<a href="#flow"><i class="fa fa-angle-down"></i></a>
							<?php } else { ?>
								<i class="fa fa-angle-down"></i>
							<?php } ?>							
						</div>
						<!-- <div class="downArrowBtn"><a href="#flow"><i class="fa fa-angle-down"></i></a></div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="section section_fixed section5 section4_content_wrap" id="flow">
			<div class="section__clip">
				<div class="section__content">
					<div class="background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/flow.jpg');"></div>
					<div class="">
						<div class="container">
						<?php
							$flow_head_page=1497;
							$flow_page = get_post($flow_head_page);
							$initiate = get_post($flow_initiate_page_id);
							$collaborate = get_post($flow_collaborate_page_id);
							$communicate = get_post($flow_communicate_page_id);
						?>
							<div class="section5_container text-center">
								<div class="section5_container_heading">
									<h2 class="fill-width"><span class="moving-js-tilt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $flow_page->sub_title;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h2>
								</div>
								<div class="row section5_container_content">
									<div class="col-md-4">
										<h3><?php echo $initiate->sub_title;?></h3>
										<p><?php echo $initiate->post_content;?></p>
										<!-- <p>As your starting point, manage all of your investments within a unified workflow with your partners & stakeholders.</p> -->
									</div>
									<div class="col-md-4">
										<h3><?php echo $collaborate->sub_title;?></h3>
										<p><?php echo $collaborate->post_content;?></p>
										<!-- <p>“Working from the same page” takes on a new meaning when you and your partners have access to the real-time status within a unified workflow platform</p> -->
									</div>
									<div class="col-md-4">
										<h3><?php echo $communicate->sub_title;?></h3>
										<p><?php echo $communicate->post_content;?></p>
										<!-- <p>Streamline your communications efforts by monitoring the progress of your investment status within one intuitive interface.</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="downArrowBtn">
						<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
							<a href="#core"><i class="fa fa-angle-down"></i></a>
						<?php } else { ?>
							<i class="fa fa-angle-down"></i>
						<?php } ?>	
					</div>
					<!-- <div class="downArrowBtn"><a href="#core"><i class="fa fa-angle-down"></i></a></div> -->
				</div>			
			</div>
		</div>
		<div class="section section_fixed section6 section5_content_wrap" id="core">
			<div class="section__clip">
				<div class="section__content">
					<div class="section6-content">
						<div class="heading-text">
						<?php
							$core_head_page=1498;
							$core_page = get_post($core_head_page);
						?><h3 class="fill-width text-center"><span class="moving-js-tilt"><?php echo $core_page->sub_title;?></span></h3>
						</div>
						<div class="absolute-wrap-piller">
							<div class="absolute-wrap-1">
								<div class="first-piller container-fluid">
									<div class="row">
										<div class="first-piller-background">
											<img src="<?php echo get_template_directory_uri(); ?>/img/core1.png">
										</div>
										<div class="second-piller-background">
											<!-- <img class="js-tilt" src="<?php echo get_template_directory_uri(); ?>/img/core2.png"> -->
											<div class="background background-1 js-tilt-core" style="background: url('<?php echo get_template_directory_uri(); ?>/img/core2.png');"></div>
										</div>
									</div>
								</div>	
							</div>
							<div class="absolute-wrap-2">
								<?php
									$structure = get_post($core_structure_page_id);
									$automate = get_post($core_automate_page_id);
									$activate = get_post($core_activate_page_id);
								?>
								<div class="container">
									<div class="row">
										<div class="col-md-4">
											<h3><?php echo $structure->sub_title;?></h3>
											<p><?php echo $structure->post_content;?></p>
											<!-- <p>As your starting point, manage all of your investments within a unified workflow with your partners & stakeholders.</p> -->
										</div>
										<div class="col-md-4">
											<h3><?php echo $automate->sub_title;?></h3>
											<p><?php echo $automate->post_content;?></p>
											<!-- <p>“Working from the same page” takes on a new meaning when you and your partners have access to the real-time status within a unified workflow platform</p> -->
										</div>
										<div class="col-md-4">
											<h3><?php echo $activate->sub_title;?></h3>
											<p><?php echo $activate->post_content;?></p>
											<!-- <p>Streamline your communications efforts by monitoring the progress of your investment status within one intuitive interface.</p> -->
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="downArrowBtn">
							<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
								<a href="#control"><i class="fa fa-angle-down"></i></a>
							<?php } else { ?>
								<i class="fa fa-angle-down"></i>
							<?php } ?>	
						</div>
						<!-- <div class="downArrowBtn"><a href="#control"><i class="fa fa-angle-down"></i></a></div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="section section_fixed section7 section6_content_wrap" id="control">
			<div class="section__clip">
				<div class="section__content">
					<div class="absolute-control-wrap">
						<?php
							$invoicing = get_post($control_invoicing_page_id);
							$risk = get_post($control_risk_page_id);
							$command_head_page=1499;
							$command_page = get_post($command_head_page);
						?>
						<h3 class="control-heading fill-width"><span class="moving-js-tilt"><?php echo $command_page->sub_title;?></span></h3>
						<div class="row">
							<div class="absolute-control-wrap-1" style="will-change: transform;transform: perspective(300px) rotateX(0deg) rotateY(0deg);">
								<h4><?php echo $invoicing->sub_title;?></h4>
								<p><?php echo $invoicing->post_content;?></p>
								<h4><?php echo $risk->sub_title;?></h4>
								<p><?php echo $risk->post_content;?></p>
							</div>
							<div class="absolute-control-wrap-2">
								<img class="js-tilt-control" src="<?php echo get_template_directory_uri(); ?>/img/command1.png" class="pull-right">
							</div>
						</div>
						<div class="downArrowBtn">
							<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
								<a href="#vision"><i class="fa fa-angle-down"></i></a>
							<?php } else { ?>
								<i class="fa fa-angle-down"></i>
							<?php } ?>
						</div>
						<!-- <div class="downArrowBtn"><a href="#vision"><i class="fa fa-angle-down"></i></a></div> -->
					</div>
				</div>
			</div>
		</div>
		<div class="section section_fixed section5 section7_content_wrap section7_content_website_wrap" id="vision">
			<div class="section__clip">
				<div class="section__content">
					<div class="background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/background3.jpg');"></div>
					<div class="">
						<div class="container">
						<?php
							$invoicing = get_post($control_invoicing_page_id);
							$risk = get_post($control_risk_page_id);
							$vision_head_page=1500;
							$vision_page = get_post($vision_head_page);
						?>
						<div class="section5_container vision-container text-center">
								<div class="section7_content_heading">
									<h2 class="fill-width"><span class="moving-js-tilt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $vision_page->sub_title;?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></h2>
								</div>
								<?php
										$monitor = get_post($vision_monitor_page_id);
										$insights = get_post($vision_insights_page_id);
										$trend = get_post($vision_trend_page_id)
								?>
								<div class="vision-piller">
									<div class="vision-piller-1">
										<div class="strip"></div>
										<div class="container">
											<div class="row text-center">
												<div class="col-md-4">
													<h3><?php echo $monitor->sub_title;?></h3>
												</div>
												<div class="col-md-4">
													<h3><?php echo $insights->sub_title;?></h3>
												</div>
												<div class="col-md-4">
													<h3><?php echo $trend->sub_title;?></h3>
												</div>
											</div>
										</div>
									</div>
									<div class="vision-piller-2">
										<div class="container">
											<div class="row">
												<div class="col-md-4">
													<p><?php echo $monitor->post_content;?></p>
												</div>
												<div class="col-md-4">
													<p><?php echo $insights->post_content;?></p>
													<!-- <p>Unlock the potential of your investments through DATAI’s unique visualization. Together with DATAI’s smart structure, discover new dimensions of your investments to help you maximize your ROI.</p> -->
												</div>
												<div class="col-md-4">
													<p><?php echo $trend->post_content;?></p>
													<!-- <p>Discover trends in your marketplace with DATAI and develop new strategies to make your brand standout from the crowd</p> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="parent-vision-transparent">
						<div class="row vision-transparent"></div>
					</div> -->
					<div class="downArrowBtn">
						<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
							<a href="#contactUs"><i class="fa fa-angle-down"></i></a>
						<?php } else { ?>
							<i class="fa fa-angle-down"></i>
						<?php } ?>
					</div>
					<!-- <div class="downArrowBtn"><a href="#contactUs"><i class="fa fa-angle-down"></i></a></div> -->
				</div>
			</div>
		</div>
		<div class="section section_fixed section5 section7_content_wrap section7_content_mobile_wrap" id="vision">
			<div class="section__clip">
				<div class="section__content">
					<div class="background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/background3.jpg');"></div>
					<div class="">
						<div class="container">
							<div class="section5_container vision-container text-center">
								<div class="section7_content_heading">
									<h2><span class="js-tilt"><?php echo $vision_page->sub_title;?></span></h2>
								</div>
								<?php
										$monitor = get_post($vision_monitor_page_id);
										$insights = get_post($vision_insights_page_id);
										$trend = get_post($vision_trend_page_id)
								?>
								<div class="vision-piller">
									<div class="vision-piller-2">
										<div class="container">
											<div class="row">
												<div class="col-md-4">
													<h3><?php echo $monitor->sub_title;?></h3>
													<p><?php echo $monitor->post_content;?></p>
												</div>
												<div class="col-md-4">
													<h3><?php echo $insights->sub_title;?></h3>
													<p><?php echo $insights->post_content;?></p>
													<!-- <p>Unlock the potential of your investments through DATAI’s unique visualization. Together with DATAI’s smart structure, discover new dimensions of your investments to help you maximize your ROI.</p> -->
												</div>
												<div class="col-md-4">
													<h3><?php echo $trend->sub_title;?></h3>
													<p><?php echo $trend->post_content;?></p>
													<!-- <p>Discover trends in your marketplace with DATAI and develop new strategies to make your brand standout from the crowd</p> -->
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="parent-vision-transparent">
						<div class="row vision-transparent"></div>
					</div> -->
					<div class="downArrowBtn">
						<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
							<a href="#contactUs"><i class="fa fa-angle-down"></i></a>
						<?php } else { ?>
							<i class="fa fa-angle-down"></i>
						<?php } ?>
					</div>
					<!-- <div class="downArrowBtn"><a href="#contactUs"><i class="fa fa-angle-down"></i></a></div> -->
				</div>
			</div>
		</div>
		<div class="section section_fixed section8" id="contactUs">
			<div class="section__clip">
				<div class="section__content">
					<div class="background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/background5.jpg');"></div>
					<div class="background-content">
					<?php
						$contact_page = get_post($contact_page_id);
					?>
						<div class="container">
							<div class="section8_container text-center">
								<h2 class="moving-js-tilt"><?php echo $contact_page->sub_title;?></h2>
								<b><?php echo $contact_page->post_content;?></b>
								<div class="contact-box-wrap js-tilt">
									<h3><?php echo $contact_page->text_one;?></h3>
									<p><?php echo $contact_page->text_two;?></p>
								</div>
								<div class="contact-form-wrap">
									<!-- Plugin contact form 7 staging 1552-->
									<?php echo do_shortcode( '[contact-form-7 id="1552" title="Contact form 1"]' );?>
								</div>
							</div>
						</div>
					</div>
					<a target="_blank" href="<?php echo esc_url( get_permalink(1575) ); ?>"><img class="phone-image" src="<?php echo get_template_directory_uri();?>/img/call-volume-round.png" alt="phone image" /></a>
					<div class="downArrowBtn">
						<?php if(in_array($ua['ub'],['MSIE','Edge'] )) { ?>
							<a href="#aboutUs"><i class="fa fa-angle-down"></i></a>
						<?php } else { ?>
							<i class="fa fa-angle-down"></i>
						<?php } ?>
					</div>
					<!-- <div class="downArrowBtn"><a href="#aboutUs"><i class="fa fa-angle-down"></i></a></div> -->
				</div>
			</div>
		</div>
		<!-- <div class="section section_fixed section9">
			<div class="section__clip">
				<div class="section__content">
					<div class="background" style="background: url('<?php echo get_template_directory_uri(); ?>/img/background4.jpg');"></div>
					<div class="background-content">
						<div class="container">
							<div class="section9_container text-center">
								<h2 class="js-tilt">resources</h2>
								<span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</span>
								<div class="row">
									<div class="col-md-3" style="padding:0 20px 0 50px;">
										<i class="fa fa-book js-tilt"></i>
										<h3 class="js-tilt">WHITEPAPER</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="col-md-3"  style="padding:0 20px 0 50px;">
										<i class="fa fa-desktop js-tilt"></i>
										<h3 class="js-tilt">WEBINARS</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="col-md-3" style="padding:0 20px 0 50px;">
										<i class="fa fa-bars js-tilt"></i>
										<h3 class="js-tilt">CASES</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
									<div class="col-md-3" style="padding:0 20px 0 50px;">
										<i class="fa fa-paperclip js-tilt"></i>
										<h3 class="js-tilt">FAQS</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="downArrowBtn"><i class="fa fa-angle-down"></i></div>
				</div>
			</div>
		</div> -->
		<div class="section section_fixed section10" id="aboutUs">
			<div class="section__clip">
				<div class="section__content">
					<div class="background-content">
						<div class="container">
							<div class="section10_container text-center">
								<?php
									$about_page = get_post($about_page_id);
									$about_what_page = get_post($about_what_page_id);
									$about_why_page = get_post($about_why_page_id);
									$about_who_page = get_post($about_who_page_id);
								?>
								<h2 class="moving-js-tilt"><?php echo get_the_title('1447');?></h2>
								<span><?php echo $about_page->post_content;?></span>
								<div class="row">
									<div class="col-md-4">
										<img class="js-tilt" src="<?php echo get_template_directory_uri(); ?>/img/image1.png">
										<h3><?php echo $about_what_page->sub_title;?></h3>
										<p><?php echo $about_what_page->post_content;?></p>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
									</div>
									<div class="col-md-4">
										<img class="js-tilt" src="<?php echo get_template_directory_uri(); ?>/img/image2.png">
										<h3><?php echo $about_why_page->sub_title;?></h3>
										<p><?php echo $about_why_page->post_content;?></p>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
									</div>
									<div class="col-md-4">
										<img class="js-tilt" src="<?php echo get_template_directory_uri(); ?>/img/image3.png">
										<h3><?php echo $about_who_page->sub_title;?></h3>
										<p><?php echo $about_who_page->post_content;?></p>
										<!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- <div class="downArrowBtn"><i class="fa fa-angle-down"></i></div> -->
				</div>
			</div>
		</div>
	</div>

<?php
get_footer();