<?php
/*
* Plugin Name: Blood donor
* Description: Select your blood group and find out which one you can donate blood to
* Version: 1.3
* Requires PHP: 8.0
* Author: Rachad A. ADEKAMBI
* Author URI: https://rachad-alabi-adekambi.github.io/portfolio 
* Text Domain: magic-plugin
* Domain Path: /languages
*/

// Ensure the plugin is not directly accessed
if (!defined('ABSPATH')) {
    exit;
}

add_shortcode('magic', 'displayForm');

