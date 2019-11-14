<!--header start-->
<header>
    <!--nav bar start -->
    <nav class="navbar navbar-default navbar-fixed-top navbars">
        <div class="container-fluid">
            <?php if(has_nav_menu('side_menu')){?>
            <a class="side-menu-button"> <i class="fa fa-bars" aria-hidden="true"></i> </a>
            <?php }?>
            <div class="container">
                <div class="navbar-header">
                    <?php if($logo=bravo_get_option('logo')) {
                        if(is_singular() and $meta=get_post_meta(get_the_ID(),'custom_logo',true)){
							$logo=$meta;
                        }
                        $scrolled=bravo_get_option('logo_scrolled');

						if(is_singular() and $meta=get_post_meta(get_the_ID(),'logo_scrolled',true)){
							$scrolled=$meta;
						}
                        ?>
                    <a class="navbar-brand" data-logo-scrolled="<?php echo esc_attr($scrolled) ?>" data-logo="<?php echo esc_attr($logo) ?>" href="<?php echo esc_url(home_url('/')) ?>"><img src="<?php echo esc_attr($logo) ?>" alt="logo"></a>
                    <?php }else{
                        printf('<a href="%s" class="navbar-brand navbar-text">%s</a>',esc_url(home_url('/')),get_bloginfo('title'));
                    }?>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse hidden-xs ">
                    <?php if(has_nav_menu('primary')){
                        wp_nav_menu(array(
                            'theme_location'=>'primary',
                            'items_wrap' => '<ul id="%1$s" class="%2$s nav navbar-nav navbar-right navbars">%3$s</ul>',
                            'walker'=>new Bravo_Menu_Walker()

                        ));
                    } ?>

                </div>

                <?php if(has_nav_menu('side_menu')){
                    echo '<div class="sidenav ">';
                    wp_nav_menu(array(
                        'theme_location'=>'side_menu',
                        'items_wrap' => '<ul id="%1$s" class="%2$s nav">%3$s</ul>',
                    ));
                    echo ' </div>';
                } ?>


            </div>
        </div>
    </nav>
</header>
<!--header end-->