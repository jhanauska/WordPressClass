<?php

  // Add Custom header feature  
function Hazen_custom_header_setup() {
	 
  $hazen_customhargs = array(
	'flex-width'    => true,
	'width'         => 1200,
	'flex-height'    => true,
	'height'        => 500,
	'header-text'   => false,
	'default-image' => get_template_directory_uri() . '/images/defaulth.png',
  );
  
  add_theme_support( 'custom-header', $hazen_customhargs );
  
}
add_action( 'after_setup_theme', 'Hazen_custom_header_setup' );  
?>