<?php

function studiox_child_scripts() {
    wp_enqueue_style( 'studiox-parent-style', get_template_directory_uri(). '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'studiox_child_scripts' );