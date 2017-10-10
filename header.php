<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width initial-scale=1">
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

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <div class="container">
  <a class="navbar-brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="navbar-toggler-icon"></span>
    </button>
    
          <?php
            wp_nav_menu( array(
              'theme_location'	=> 'primary',
              'depth'				    => 2,
              'container'			  => 'div',
              'container_class'	=> 'collapse navbar-collapse',
              'container_id'		=> 'bs-example-navbar-collapse-1',
              'menu_class'		  => 'navbar-nav ml-auto mt-1',
              'fallback_cb'	  	=> 'WP_Bootstrap_Navwalker::fallback',
              'walker'		    	=> new WP_Bootstrap_Navwalker())
            );
          ?>
      
      </div>
    </nav>

      <div class="container">
      <div class="row">

      



      </div> <!-- Endof Row -->
      <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />