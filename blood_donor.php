<?php
/**
 * @package Bood_donor
 * @version 1.0.0
 */
/*
* Plugin Name: Blood donor
* Description: This handy plugin helps you find out which blood types you can donate to, based on your blood type. Just select your blood group, and we'll do the rest!
* Version: 1.0.0
* Requires PHP: 8.0
* Author: Rachad A. ADEKAMBI
* Author URI: https://rachad-alabi-adekambi.github.io/portfolio 
* Text Domain: magic-plugin
* Domain Path: /languages
*/
add_shortcode('blood_donor', 'displayApp');

function displayApp(){
    echo ('<p>Hello people</p>');
}

