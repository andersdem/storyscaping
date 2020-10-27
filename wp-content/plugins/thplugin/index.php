<?php
/*
* Plugin Name: TH Langs Plugin 
* Plugin URI: http://http://localhost/git/portfolio/
* Description: This is a Supervision Form Plugin for TH LANGS based on HTML5, CSS, JS and PHP
* Version: 2.9.9
* Author: Sofus Lambach, Emma Hedeager & Anders Matthiesen
* Author URI: http://http://localhost/git/portfolio/
* License: GPL2
*/

function supervision_form()
{
    $content = '';
    $content .= '<div class="vejledning-form">';
    $content .= '<div class="popupCloseButton">X</div>';
    
 $content .= '<section id="bagboks">';
  	$content .= '<section>';
    $content .= '<img id="logo" src=" '.plugins_url("thplugin/img/thlangs-logo.png").' " ';
    $content .= 'alt="TH Langs Logo">';
  	$content .= '<h1 id="overvej">Har du overvejet HF?</h1>';
    $content .= '<h4 id="plugtext">Hvis du har spørgsmål om TH. LANGS, som du gerne vil have svar på, så kontakt vores studievejledere herunder</h4>';
    

     $content .= '<h5 class="overtekst">Navn</h5>';
    $content .= '<input type="text" id="navn" name="navn" placeholder="Skriv dit navn her...">';
     	 $content .= '<h5 class="overtekst">Email</h5>';
    $content .= '<input type="email" id="email" name="email" placeholder="Skriv din email her...">';
     $content .= '<h5 class="overtekst">Dit Spørgsmål</h5>';
   $content .= '<textarea id="tekstfelt" name="tekstfelt" rows="1" cols="1" placeholder="Skriv dit spørgsmål her..."></textarea>';

    $content .= '<section class="form">';
  	$content .= '<div>';
 	$content .= '<input type="submit" value="Kontakt studievejledning >" name="submitBtn" id="submitBtn2">';
    $content .= '</div>';

    $content .= '</form>';
    
    $content .= '</section>';
    
  	$content .= '</div>';
    return $content;
}

    #First parameter is a self choosen name for a unique short-code. Second parameter is the name of the function that creates the supervision form
 add_shortcode('show_thplugin','supervision_form');
    
    add_action('wp_enqueue_scripts','register_styles_and_scripts_for_plugin');



    function register_styles_and_scripts_for_plugin() 
    {
        wp_enqueue_style('fontAwesomCDN', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css');
        
        wp_enqueue_style('CustomFontAdobe','https://use.typekit.net/mab2mni.css');
        
        
        wp_enqueue_style('CustomStylesheet', plugins_url('thplugin/css/style.css'));
        
        wp_deregister_script('jquery');
        
        wp_enqueue_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
        
        wp_enqueue_script('CustomScript', plugins_url('thplugin/js/script.js'), array('jquery'), null, true);
    }
