<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
 
	<title><?php wp_title('|', true, 'right');?> <?php bloginfo('name'); ?></title>
 
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
 

 <?php wp_head(); ?>
</head>
 
<body <?php body_class(); ?>>
 
	<!-- #MAIN HEADER  -->
	<header id="main-header">
 
		<div class="container">
			<div class="row">
 
				<!-- Título del sitio  -->	
				<div id="logo" class="col-md-6">
					<h1><?php bloginfo('name');?><br>
					<small><?php bloginfo('description'); ?></small></h1>
				</div>
				 
				<div class="col-md-6">
					<?php wp_nav_menu(array(
						'theme_location'  => 'menu-principal',
						'container'       => 'nav',
						'items_wrap'      => '<ul id="%1$s" class="%2$s nav nav-pills">%3$s</ul>'
					)); ?> 
				</div>
 
			</div>
 
			<hr />
		</div>
 
	</header>