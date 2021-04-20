<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'CPT: AMP ',
        'icon'      => 'flash-circle',
        'color'     => '#38EF7D',
        'path'      => __FILE__,
    ]);
} );