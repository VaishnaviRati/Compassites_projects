<?php
/**
 * Created by PhpStorm.
 * User: me664
 * Date: 3/1/15
 * Time: 6:05 PM
 */
?>
<section class="no-results not-found">
    <div class="page-content">

        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p><?php printf( esc_html__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', "studiox" ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

        <?php elseif ( is_search() ) : ?>

            <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', "studiox" ); ?></p>
            <br>
            <div class="row">
                <div class="col-sm-3">&nbsp;</div>
                <div class="col-sm-6">
					<?php get_search_form(); ?>

                </div>
            </div>

        <?php else : ?>

            <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', "studiox" ); ?></p>
            <?php get_search_form(); ?>

        <?php endif; ?>

    </div><!-- .page-content -->
</section><!-- .no-results -->