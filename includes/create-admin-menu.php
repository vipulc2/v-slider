<?php
/*
Creating Admin Menu Settings for v-slider Plugin

@package v-slider-plugin

*/

add_action( 'admin_menu', 'create_admin_menu' );

function create_admin_menu()
{
  add_menu_page( 'Create Plugin Setting Page', 'V-Slider', 'administrator', __FILE__, 'add_menu_settings_page', 'dashicons-format-image' );


}


function add_menu_settings_page()
{
  
  wp_enqueue_media();

  ?>
  
<div class='image-preview-wrapper'>


<img id='image-preview' src='' width='100' height='100' style='max-height: 100px; width: 100px;'>



</div>
<input id="btnImage" type="button" class="button" value="<?php _e( 'Upload image' );

?>
" />
<input type='hidden' name='image_attachment_id' id='image_attachment_id' value=''>

<?php

  
  


}




