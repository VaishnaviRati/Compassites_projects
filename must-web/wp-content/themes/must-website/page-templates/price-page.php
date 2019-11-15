<?php
/**
 * Template Name: Price
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header();

$about_page_id = $post->ID;
?>
<div class="container">

  <div class="features-block">
        <h1><?php echo get_the_title(); ?></h1>
        <hr>
        <div class="row">
          <div class="col-md-8"> 
            <?php
                $about_us = get_post($about_page_id); ?>
            <p> <?php echo $about_us->first_description; ?>
            </p>
          </div>
          <div class="col-md-4 feature-img"> 
            <img src="<?php echo wp_get_attachment_url( $about_us->first_image );?>" alt="feature"/>
          </div>
          <div class="col-md-4 feature-img"> 
            <img src="<?php echo wp_get_attachment_url( $about_us->second_image);?>" alt="feature"/>
          </div>
          <div class="col-md-8">
            <h4>Founders Profile</h4>
             <p><?php echo $about_us->second_description; ?>       
             </p>
          </div>
        </div>
     </div>
</div>
<!-- <div class="container">
  <div class="features-block">
 <?php echo $post->ID; ?> 
        <h1><?php echo get_the_title(); ?></h1>
        <hr>
        <div class="row">
          <div class="col-md-8"> 
            <ul>
              <li>
 
              </li>
            </ul>
          </div>
          <div class="col-md-4 feature-img"> 
            <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>" alt="feature"/>
          </div>
        </div>
     </div>
</div> -->

<? wp_footer();