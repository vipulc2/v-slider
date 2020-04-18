<?php

//Add Scripts
function v_add_front_scripts()
{
  // Add main CSS
  wp_enqueue_style( 'v-style', plugins_url(). '/v-slider/css/style.css' );

  wp_enqueue_script( 'v-script', plugins_url(). '/v-slider/js/main.js' );
}


add_action('wp_enqueue_scripts', 'v_add_front_scripts');


function v_add_back_scripts( )
{ 
  //wp_die($hook);
  // if ( 'toplevel_page_v-slider/includes/create-admin-menu' != $hook ) {
  //   return ;
  // }

  wp_enqueue_style( 'v-back-style', plugins_url(). '/v-slider/admin/adminstyle.css' );

  wp_enqueue_script( 'v-back-script', plugins_url(). '/v-slider/admin/adminjs.js' );

}

add_action( 'admin_enqueue_scripts', 'v_add_back_scripts' );