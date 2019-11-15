<?php
/**
 * Template Name: Home Page
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

// Home page first section
$edufront_home_section_page_id = 21;

//Edufront sections
$edufront_first_section_page_id = 22;
$edufront_second_section_page_id = 30;
$edufront_third_section_page_id = 31;

//Product sections
$product_first_section_page_id = 32;
$product_second_section_page_id = 33;
$product_third_section_page_id = 35;

//Contact
$contact_page_id = 25;

get_header(); ?>

    <div id="container-wrap">

        <div class="row">
            <div class="col-sm-12">
                <div id="home" class="container-fluid slide" data-color="one">
                    <div class="col-sm-6 no-pad-mob slide-left" data-aos="slide-right" data-aos-duration="3000">
                        <?php
                            $edufront_home_section = get_post($edufront_home_section_page_id);
                                        ?>
                        <div class="col-sm-5 col-sm-offset-5 toppad">
                            <h2 class="font-heading"><?php echo $edufront_home_section->main_title;?></h2>
                            <p class="font-para"><?php echo $edufront_home_section->sub_title;?></p>
                        </div>
                        <div class="col-sm-12">
                            <div class="col-sm-6">
                                <div class="img-block">
                                    <img src="<?php echo wp_get_attachment_url( $edufront_home_section->image1 );?>" alt="blue-img" class="img img-responsive img-blue" />
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="img-block">
                                    <img src="<?php echo wp_get_attachment_url( $edufront_home_section->image2 );?>" alt="pink-img" class="img img-responsive img-pink" />
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-6 slide-right slide-right" data-aos="slide-left" data-aos-duration="3000">
                        <div class="img-block">
                            <img src="<?php echo wp_get_attachment_url( $edufront_home_section->image3 );?>" alt="homedash" class="img img-responsive img-dashboard" />
                        </div>
                    </div>
                    <div class="img-block">
                        <div id="darkblue-circle"></div>
                    </div>
                </div>
            </div>
        </div>

        <div id="edufront" class="container-fluid slide" data-color="two">
            <?php
                $edufront_first_section = get_post($edufront_first_section_page_id);
            ?>
            <div class="img-block">
                <div id="darkblue-circle-two"></div>
            </div>
            <h1 class="text-center font-heading"><?php echo $edufront_first_section->main_title;?></h1>
            <div class="row top-marg">
                <div class="col-sm-4 card-layout" data-aos="fade-right" data-aos-duration="2000">
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-2 text-left">
                            <img src="<?php echo wp_get_attachment_url( $edufront_first_section->image );?>" alt="elegant-simplicity" class="img img-responsive ed-img-pink" />
                            <h2 class="font-subheading"><?php echo $edufront_first_section->sub_title;?></h2>
                            <p class="font-para"><?php echo $edufront_first_section->post_content?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-left card-layout" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="800">
                    <?php
                        $edufront_second_section = get_post($edufront_second_section_page_id);
                    ?>
                    <div class="row">
                        <div class="col-sm-10 col-sm-offset-1">
                            <img src="<?php echo wp_get_attachment_url( $edufront_second_section->image );?>" alt="superior-experience" class="img img-responsive  ed-img-yellow" />
                            <h2 class="font-subheading"><?php echo $edufront_second_section->sub_title;?></h2>
                            <p class="font-para"><?php echo $edufront_second_section->post_content?></p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 text-left card-layout" data-aos="fade-left" data-aos-duration="2000" data-aos-delay="800">
                    <?php
                        $edufront_third_section = get_post($edufront_third_section_page_id);
                        ?>
                    <div class="row">
                        <div class="col-sm-10">
                            <img src="<?php echo wp_get_attachment_url( $edufront_third_section->image );?>" alt="flexible-system" class="img img-responsive ed-img-blue" />
                            <h2 class="font-subheading"><?php echo $edufront_third_section->sub_title;?></h2>
                            <p class="font-para"><?php echo $edufront_third_section->post_content?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="product" class="container-fluid slide" data-color="three">
            <div class="img-block">
                <div id="cylinder-shape"></div>
            </div>
            <div class="img-block">
                <div id="rectangle-shape"></div>
            </div>
            <?php
                $product_first_section = get_post($product_first_section_page_id);
            ?>

            <h1 class="text-center font-heading" style="margin-bottom: 65px;"><?php echo $product_first_section->main_title;?></h1>
            <div class="col-sm-7" data-aos="zoom-in" data-aos-duration="3000">
                <div class="row">
                    <img src="<?php echo wp_get_attachment_url( $product_first_section->image );?>" alt="admin" class="img img-responsive prod-img-align" />

                </div>
            </div>
            <div class="col-sm-5 admin-content" data-aos="slide-left" data-aos-duration="2000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                <div class="row">
                    <div class="col-sm-10">
                        <h2 class="font-subheading"><?php echo $product_first_section->sub_title;?></h2>
                        <p class="font-para"><?php echo $product_first_section->post_content?></p>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 mob-content" data-aos="fade-right" data-aos-duration="2000" data-aos-delay="500">
                <?php
                    $product_second_section = get_post($product_second_section_page_id);
                ?>
                <div class="row">
                    <h2 class="font-subheading"><?php echo $product_second_section->sub_title?></h2>
                    <p class="font-para"><?php echo $product_second_section->post_content?></p>
                </div>
            </div>

            <div class="col-sm-6" data-aos="zoom-in" data-aos-duration="3000" data-aos-delay="1000">
                <div class="row">
                    <div class="col-sm-10">
                        <img src="<?php echo wp_get_attachment_url( $product_second_section->image );?>" alt="mobile" class="img img-responsive mob-img-align mob-img" />
                    </div>
                </div>
            </div>

            <div class="col-sm-7" data-aos="zoom-in" data-aos-duration="3000">
                <?php
                    $product_third_section = get_post($product_third_section_page_id);
                ?>
                <div class="row">
                    <img src="<?php echo wp_get_attachment_url( $product_third_section->image );?>" alt="communication" class="img img-responsive prod-img-align" />
                </div>
            </div>
            <div class="col-sm-5 com-content" data-aos="fade-left" data-aos-duration="2000">
                <div class="row">
                    <div class="col-sm-10">
                        <h2 class="font-subheading"><?php echo $product_third_section->sub_title;?></h2>
                        <p class="font-para"><?php echo $product_third_section->post_content?></p>
                    </div>
                </div>
            </div>
        </div>

        <div id="contact" class="container-fluid slide" data-color="four">
            <div class="img-block">
                <div id="pentagon"></div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center contact-pad">
                    <?php $contact = get_post($contact_page_id);?>
                    <h2 class="font-heading"><?php echo $contact->sub_title;?></h2>
                    <p class="font-para"><?php echo $contact->post_content;?></p>
                </div>
            </div>

            <div class="row" id= "">
                <div class="col-sm-4 col-sm-offset-4">
             <!--        <div class="form-group form-group-sm">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                    <div class="form-group form-group-sm">
                        <input type="submit" name="" class="btn btn-getin font-btn col-sm-offset-3" >              
                    </div> 
                </div> -->
                   
                        <?php echo do_shortcode('[contact-form-7 id="76" title="Contact form 1"]')?>  
                 </div>  
              
            </div>
            <div class="row">
                <div class="img-block">
                    <img src="<?php echo wp_get_attachment_url( $contact->image1 );?>" alt="img-contact" class="img img-responsive img-contact" />
                    <img src="<?php echo wp_get_attachment_url( $contact->image2 );?>" alt="img-contact" class="img img-responsive img-contact-mob" />
                </div>
            </div>

        </div>
    </div>



<?php
get_footer();
