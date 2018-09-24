<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

	<header>
		<div class="logo">
			Some<span>logo</span>
		</div>
		<div class="main-menu">
			<?php wp_nav_menu( array(
				'theme_location'  => 'primary_menu',
				'menu'            => 'header_menu',
				'container'       => 'nav'
			) ); ?>
		</div>
		<div class="top-socials">
			
		</div>
	</header>