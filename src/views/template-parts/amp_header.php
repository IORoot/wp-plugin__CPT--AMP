<?php
    $body_classes = get_field('body_classes'); 
?>
<!doctype html>
<html ⚡ lang="en-uk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <meta name="description" content="This is the AMP Boilerplate.">
        <link rel="preload" as="script" href="https://cdn.ampproject.org/v0.js">
        <script async src="https://cdn.ampproject.org/v0.js"></script>
        <script async custom-element="amp-carousel" src="https://cdn.ampproject.org/v0/amp-carousel-0.1.js"></script>
        <!-- Import other AMP Extensions here -->
        
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
        <noscript><style amp-boilerplate=""> body { -webkit-animation: none; -moz-animation: none; -ms-animation: none; animation: none; } </style></noscript>
        
        <style amp-custom>
            <?php 
            
                echo file_get_contents(ANDYP_THEME_PATH . '/src/assets/css/style.css'); // REMOVE!

                echo file_get_contents(ANDYP_CPT_AMP_PATH . '/src/css/style.css');
                
            ?>
        </style>

        <?php 
			do_action('page_builder_header_code'); 
		?>

        <link rel="canonical" href=".">

        <title>AMP Page</title>

        <?php include( __DIR__ . '/amp_schema.php'); ?>

    </head>
    <body <?php body_class('amp londonparkour ' . $body_classes );?> >

        <?php include( __DIR__ . '/amp_sidemenu.php'); ?>
        <?php include( __DIR__ . '/amp_navigation.php'); ?>