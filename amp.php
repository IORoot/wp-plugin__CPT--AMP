<?php

/*
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - CPT - AMP
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>📬CPT</strong> | Adds CPT - AMP
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */


define( 'ANDYP_CPT_AMP_PATH', __DIR__ );
define( 'ANDYP_CPT_AMP_URL', plugins_url( '/', __FILE__ ) );
define( 'ANDYP_CPT_AMP_PLUGIN_FILE',  __FILE__ );

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                         Use composer autoloader                         │
// └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/vendor/autoload.php';

// ┌─────────────────────────────────────────────────────────────────────────┐
// │                    Plugin Activation - once only.    		             │
// └─────────────────────────────────────────────────────────────────────────┘
new andyp\cpt\amp\setup\activate;


// ┌─────────────────────────────────────────────────────────────────────────┐
// │                        	   Initialise    		                     │
// └─────────────────────────────────────────────────────────────────────────┘
(new andyp\cpt\amp\initialise)->run();

