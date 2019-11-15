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
?>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
    <script>
        AOS.init({
            once: true
        })
    </script>
<?php wp_footer(); ?>
</body>
</html>


