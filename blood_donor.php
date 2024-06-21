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

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require plugin_dir_path(__FILE__). 'vendor/autoload.php';


add_shortcode('blood_donor', 'displayApp');

function displayApp(){
    echo ("
    <div class='container'>
    <link rel='stylesheet' href='public/css/main.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.15.1/css/all.css'
      integrity='sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp' crossorigin='anonymous'>

        <h1>
            Blood donor
        </h1>
            <p>
            Select your blood group to find out to whom you can donate blood.
            </p>
            <div class='cases'>
                <div class='case' id='case1' onclick='scene1()'>
                <p class='case-txt'> O-</p>
                </div>

                <div class='case' id='case2' onclick='scene2()'>
                <p class='case-txt' id='text'>O+</p>
                </div>

                <div class='case' id='case3' onclick='scene3()'>
                    <p class='case-txt'> A-</p>
                </div>

                <div class='case'  id='case4'onclick='scene4()'>
                    <p class='case-txt'> A+</p>
                </div>

                <div class='case'  id='case5' onclick='scene5()'>
                    <p class='case-txt'> B-</p>
                </div>

                <div class='case'  id='case6' onclick='scene6()'>
                    <p class='case-txt'> B+</p>
                </div>

                <div class='case' id='case7' onclick='scene7()'>
                    <div class='case-txt'> AB-</div>
                </div>

                <div class='case'  id='case8' onclick='scene8()'>
                    <div class='case-txt'> AB +</div>
                </div>
            </div>

            <div class='main'>
                <div class='main__top'>
                    <div class='main__top__box' id='box'>
                        <div class='size' id='size'>

                        </div>
                    </div>
                </div>

                    <div class='main__content'>
                        <div class='main__content__line'>
                            <div class='line left'>
                                    <div class='peopleL' id='o-I'>
                                        <p class='text' id='text'>O-</p> <i class='fas fa-user'></i>
                                    </div>

                                    <div class='grey' id='o-'>

                                    </div>
                            </div>

                            <div class='line right'>
                                <div class='peopleR' id='o+I'>
                                    <i class='fas fa-user'></i> <p class='text' id='text'>O+</p>
                                </div>

                                <div class='grey' id='o+'>

                                </div>
                            </div>
                        </div>

                        <div class='main__content__line'>
                            <div class='line left'>
                                    <div class='people peopleL' id='a-I'>
                                        <p class='text' id='text'>A-</p> <i class='fas fa-user'></i>
                                    </div>

                                    <div class='grey' id='a-'>

                                    </div>
                            </div>

                            <div class='line right'>
                                <div class='people peopleR' id='a+I'>
                                    <i class='fas fa-user'></i>  <p class='text' id='text'>A+</p>
                                </div>

                                <div class='grey' id='a+'>

                                </div>
                            </div>
                        </div>

                        <div class='main__content__line'>
                            <div class='line left'>
                                    <div class='people peopleL' id='b-I'>
                                        <p class='text' id='text'>B-</p> <i class='fas fa-user'></i>
                                    </div>

                                    <div class='grey' id='b-'>

                                    </div>
                            </div>

                            <div class='line right'>
                                <div class='people peopleR' id='b+I'>
                                    <i class='fas fa-user'></i>  <p class='text' id='text'>B+</p>
                                </div>

                                <div class='grey' id='b+'>

                                </div>
                            </div>
                        </div>

                        <div class='main__content__line'>
                            <div class='line left'>
                                    <div class=' people peopleL LL' id='ab-I'>
                                        <p class='text' id='text'>AB-</p> <i class='fas fa-user ' id='ff'></i>
                                    </div>

                                    <div class='grey' id='ab-'>

                                    </div>
                            </div>

                            <div class='line right'>
                                <div class='people peopleR' id='ab+I'>
                                    <i class='fas fa-user'></i> <p class='text' id='text'>AB+</p>
                                </div>

                                <div class='grey' id='ab+'>

                                </div>
                            </div>
                        </div>

                        <div class='main-line' id ='main_line'>

                        </div>
                    </div>
            </div>
        </div>
            ");
}

