<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
$parenthandle = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
$theme = wp_get_theme();
wp_enqueue_style( $parenthandle, get_template_directory_uri() . '/style.css',
array(), // if the parent theme code has a dependency, copy it to here
$theme->parent()->get('Version')
);
wp_enqueue_style( 'child-style', get_stylesheet_uri(),
array( $parenthandle ),
$theme->get('Version') // this only works if you have Version in the style header
);
        wp_deregister_script('jquery');
    
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
  
  wp_enqueue_script( 'myscript', get_stylesheet_directory_uri() . '/myscript.js', array(), null, true);
}


function lydpåbilleder()
{
    $content='';

$content .= '<audio id="rektorAudio">
 <source src="sound/rektor.wav" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';
    
    
$content .= '<audio id="jenschristianAudio">
 <source src="sound/jenschristian.wav" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';
    
    
$content .= '<audio id="nicolineAudio">
 <source src="sound/nicoline.wav" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';
    
    
$content .= '<audio id="jonasAudio">
  <source src="sound/jonas.wav" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>';


$content .= '<a href="javascript:playHorseAudio();"><img src="img/horse.png" alt="horse" width="150px" height="auto"></a><br>';

$content .= '<a href="javascript:playMonkeyAudio();"><img src="img/monkey.jpg" alt="monkey" width="150px" height="auto"></a><br>';



<script>
var y = document.getElementById("monkeyAudio")
var x = document.getElementById("horseAudio"); 

function playHorseAudio() { 
  x.play(); 
} 

    
function playMonkeyAudio() { 
  y.play(); 
} 

    
    

</script>
    
    
    }