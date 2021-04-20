<?php

namespace andyp\cpt\amp\setup;

class activate
{

    public function __construct()
    {
        register_activation_hook( ANDYP_CPT_AMP_PLUGIN_FILE, [$this, 'flush_post_types'] );
    }

    public function flush_post_types() {

        $amp = new \andyp\cpt\amp\initialise;
        $amp->setup_cpt();
        $amp->register_cpt();
        $amp->run_cpt();

        global $wp_rewrite;
        $wp_rewrite->flush_rules();
    }

}