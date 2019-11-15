<?php
/**
 * Template Name: phone-contact Page
 *
 * @package WordPress
 * @subpackage Datai_compass
 * @since Datai Compass 0.1
 */
//$phone_contact_page_id=1690; (staging)
$phone_contact_page_id=1575;
?>
 <div class="container">
 	<style type="text/css">
 		body {
 			margin: 0;
 			padding: 0;
 			overflow: hidden;
 		}
 	</style>
	<?php 
	$phone_contact_desc = get_post($phone_contact_page_id);
	echo $phone_contact_desc->post_content;?>
</div >