<?php get_header(); ?>

<body>
    <div class="row topnav">
        <div class="col-sm-2 text-center-ed">
            <a class="navbar-brand topnav-logo">
                <img class="logo" src="<?php bloginfo('template_directory');?>/images/logo.png"?>
            </a>
        </div>
        <div class="col-sm-8 menu-items">

            <?php   

            wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'container'      =>  'ul',
                        'menu_class'     => 'nav data-wall-section-nav'
                    )
                );

            ?>
            <!-- <ul class="nav" data-wall-section-nav>
                <li class="nav-link" style="display: none">Home
                </li>
                <li class="nav-link"> Edufront
                </li>
                <li class="nav-link">Product
                </li>
                <li class="nav-link">Contact
                </li>
            </ul> -->
        </div>
        <div class="col-sm-2 text-center-ed">
            <button type="button" class="btn btnsign-width btn-signup">Sign up</button>
        </div>
    </div>

    <div id="container-wrap">

        <div id="wall" class="wall main">

            <section class="section section-1">
                <div class="row">
                    <div class="col-sm-6 home-ed">
                        <h2>Education, upgraded.</h2>
                        <p>K12 technology for better schools.</p>
                        <img src="<?php bloginfo('template_directory');?>/images/ed-upgrade.png" class="img-home-ed">
                        <img src="<?php bloginfo('template_directory');?>/images/home1.png" class="img-home-ed-blue">
                    </div>
                    <div class="col-sm-6">
                        <img src="<?php bloginfo('template_directory');?>/images/homedashboard.png" class="img-dash">
                        <img src="<?php bloginfo('template_directory');?>/images/home2.png" class="img-dash-yellow">
                    </div>
                </div>
            </section>

            <section class="section section-2">
                <h2 class="text-center-ed mob-card-heading">Why Edufront?</h2>
                <div class="row">
                    <div class="col-sm-4 text-center-ed-card">
                        <img src="<?php bloginfo('template_directory');?>/images/card1.png" class="cardclass">
                        <h4 class="text-left block-heading-pad">Elegant Simplicity</h4>
                        <p class="text-left">No setup required, assistance at every step, a system to be used not administrated.</p>
                    </div>
                    <div class="col-sm-4 text-center-ed-card">
                        <img src="<?php bloginfo('template_directory');?>/images/card2.png" class="cardclass">
                        <h4 class="text-left block-heading-pad">Superior Experience</h4>
                        <p class="text-left">Designed with user in mind, we've pushed user experience and simplicity to the next level.</p>
                    </div>
                    <div class="col-sm-4 text-center-ed-card">
                        <img src="<?php bloginfo('template_directory');?>/images/card3.png" class="cardclass">
                        <h4 class="text-left block-heading-pad">Flexible system</h4>
                        <p class="text-left">Adopt your system to your needs, by selecting what features you want, when you want them</p>
                    </div>
                </div>

            </section>

            <section class="section section-3">
                <h2 class="text-center-ed">Product features</h2>
                <div class="row prod-pad-row prod-row1">
                    <div class="col-sm-8">
                        <img src="<?php bloginfo('template_directory');?>/images/product.png" class="img-admin">
                    </div>
                    <div class="col-sm-4 admin-block">
                        <h4>Administration</h4>
                        <p class="wow fadeOutDown">No more paper confusion and duplication: keep track of everything you might need effortlessly. Profiles,Grades,Attendance...and more</p>
                    </div>
                </div>
                <div class="row prod-pad-row">
                    <div class="col-sm-8 mob-block prod-block-mobtext">
                        <h4>Mobile Tools</h4>
                        <p class="wow fadeOutDown">Grading, Attendance, Timetable... All these features and more can be accessed via specially designed mobile applications to ensure the smoothest experience.</p>
                    </div>
                    <div class="col-sm-4 prod-block-mob">
                        <img src="<?php bloginfo('template_directory');?>/images/mobile.png" class="img-mob">
                    </div>
                </div>
                <div class="row prod-pad-row">
                    <div class="col-sm-8">
                        <img src="<?php bloginfo('template_directory');?>/images/product.png" class="img-comm">
                    </div>
                    <div class="col-sm-4 comm-block">
                        <h4>Communication</h4>
                        <p class="wow fadeOutDown">Get parents involved using our SMS, WhatsApp and email tools; keeping them automatically updated with gorgeous attendance and grade reports</p>
                    </div>
                </div>
            </section>

            <section class="section section-4" data-wall-animate-duration=3>
                <div class="row">
                    <div class="text-center-ed mob-pad-contact">
                        <h2>Try our tool now</h2>
                        <p class="contact-p">Contact us for more information on how we can help you save time and resources in your school and we'll give you a 3 month free trail!</p>
                        <button type="button" class="btn btn-getin btn-signup">Get in touch</button>

                    </div>
                </div>
                <img src="<?php bloginfo('template_directory');?>/images/contact.png" class="img-contact">
                <img src="<?php bloginfo('template_directory');?>/images/contactresp.png" class="img-contact-resp">
            </section>

        </div>

    </div>

    <ul class="dot" data-wall-section-nav style="display: none">
        <li data-toggle="tooltip" data-placement="left" title="Home"></li>
        <li data-toggle="tooltip" data-placement="left" title="Edufront"></li>
        <li data-toggle="tooltip" data-placement="left" title="Product"></li>
        <li data-toggle="tooltip" data-placement="left" title="Contact"></li>
    </ul>

</body>

</html>