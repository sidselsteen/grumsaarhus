<?php 

/* 
* Plugin Name: WordPress Newsletter Plugin
* Plugin URI: https://sidselsteen.dk/grums/ 
* Description: This is a WordPress Newletter Plugin based on HTML5, CSS, JS and PHP
* Version: 0.6.0
* Author: Sidsel Steen & Nellie Hoestrup 
* Author: https://sidselsteen.dk/personalportfolio/
* License: GPL2
*/ 

function newsletter_form()
{

    $content = '';
    $content .= '<div class="login-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    $content .= '<div class="login-face">';
    $content .= '<img src=" '.plugins_url("newsletterplugin/img/logo-tagline-grums-black.png").' " ';
    $content .= 'alt="login-face"></div>';
    $content .= '<div id="promotion-header">';
    $content .= '<h1 id="promotion-header-title">Sign up for Newsletter <span>2019</span></h1></div>';
    $content .= '<section class="form">';
    $content .= '<form action="#">';
    $content .= '<div id="promotion-body">';
    $content .= '<p id="promotion-body-text">Sign up for our Newsletter and become a part of the Grums family. Because we CARE!</p>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="text" id="username" placeholder="Name" name="username" required><i class="fa fa-user fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div class="input">';
    $content .= '<input type="email" id="email" placeholder="E-mail" name="email" required><i class="fa fa-envelope fa-1x"></i>';
    $content .= '</div>';
    $content .= '<div id="submitForm">';
    $content .= '<input type="submit" id="submitBtn" name="submitBtn" value="Subscribe Newsletter!">';
    $content .= '</div>';
    $content .= '<div id="promotion-footer">';
    $content .= '<p id="promotion-footer-text">Yes, I would like to receive I GRUMS\'s newsletter via e-mail. You can unsubscribe at any time!</p>';
    $content .= '</div>';
    $content .= '</form>';
    $content .= '</section>';
    $content .= '</div>';
    
    return $content;
    
}
    #This parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the newsletter
    add_shortcode('show_newsletter','newsletter_form');

   

    function register_styles_and_scripts_for_plugin() 
    {
    
        wp_enqueue_style('CustomFontJosefineSlab','https://use.typekit.net/yag3jnf.css');
        
        wp_enqueue_style('CustomFontDosis', 'https://fonts.googleapis.com/css?family=Dosis&display=swap'); 
        
        
        wp_enqueue_style('CustomStylesheet',plugins_url('newsletterplugin/css/style.css'));
        
        
        wp_deregister_script('jquery'); 
        
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js',array(),null,'true'); 
        
        wp_enqueue_script('CustomScript', plugins_url('newsletterplugin/js/script.js'), array('jquery'), null, true); 
    }

 
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');







