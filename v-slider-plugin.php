<?php
/** 
 * Plugin Name: V-Slider
 * Description: This is an Image slider plugin with a shortcode
 * Author: Vipul
 * Version: 1.0
*/


// Exit if Accessed Directly
if(!defined('ABSPATH')){
  exit;
}


// add_action("admin_menu", "addMenu");

// function addMenu()
// {
//   add_menu_page("V-Slider", "V-Slider", 5, "v_sLider", "v_menu", "dashicons-format-image");
// }

// function v_menu()
// {
//   echo "hello world";
// }

// load Scripts
require_once(plugin_dir_path(__FILE__).'/includes/v-scripts.php');
require_once(plugin_dir_path(__FILE__).'/includes/create-admin-menu.php');