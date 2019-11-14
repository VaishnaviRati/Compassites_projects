<?php
$enable_preload = bravo_get_option('enable_preload','off');

if($enable_preload == 'on'):

    ?>
    <div class="loader">
        <div class="cssload-loader">
            <div class="cssload-inner cssload-one"></div>
            <div class="cssload-inner cssload-two"></div>
            <div class="cssload-inner cssload-three"></div>
        </div>
    </div>
    <?php

endif;

