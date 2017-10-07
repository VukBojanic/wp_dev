<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Kinetic Theme</title>
		<?php wp_head(); ?>
  </head>
  
  <?php 
    if(is_front_page()):
      $kinetic_classes = array('kinetic-class', 'my-class');
    else:
      $kinetic_classes = array('no-kinetic-class');
    endif;
  ?>
	
	<body <?php body_class($kinetic_classes); ?>>

      <?php wp_nav_menu(array('theme_location'=>'primary')); ?>