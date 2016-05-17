<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 
	<title><?php wp_title('|', true, 'right');?> <?php bloginfo('name'); ?></title>
 
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 

 <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
 	<div class="container">
		<!-- #MAIN HEADER  -->
		<header id="main-header">
 
		  <nav>
		    <div class="nav-wrapper">
		      <a href="#!" class="brand-logo">
		      	<img class="responsive-img" src="http://wordpress.dev/wp-content/uploads/2016/03/Royal-Resorts-Logo.png" />		      	
		      </a>
		      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      <!-- Impresion de el menu Escritorio -->
		      <?php wp_nav_menu(array(
								'theme_location'  => 'menu-principal',
								'container'       => 'ul',
								'menu_class'=>'right hide-on-med-and-down',
								/*'items_wrap'      => '<ul id="%1$s" class="%2$s nav nav-pills">%3$s</ul>'*/
							)); ?> 
			<!-- Impresion de el menu responsive -->				
		      <?php wp_nav_menu(array(
								'theme_location'  => 'menu-principal',
								'container'       => 'ul',
								'menu_class'=>'side-nav',
								'container_id'=>'mobile-demo'
								/*'items_wrap'      => '<ul id="%1$s" class="%2$s nav nav-pills">%3$s</ul>'*/
							)); ?> 					

		    </div>
		  </nav>
		</header>