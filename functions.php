<?php 
  
function artbattle_scripts_styles(){
   wp_enqueue_style('artbattle_style', get_stylesheet_uri());
}
  
add_action('wp_enqueue_scripts', 'artbattle_scripts_styles');