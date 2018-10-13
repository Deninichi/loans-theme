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
			<a href="/">Some<span>logo</span></a>
		</div>
		<nav class="main-menu nav-primary navbar navbar-animated navbar-expand-xl">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<?php wp_nav_menu( array(
				'theme_location'  => 'primary_menu',
				'menu'            => 'header_menu',
				'container'       => 'div',
				'container_class' => 'collapse navbar-collapse',
				'container_id'    => 'navbarPrimary',
				'menu_class'      => 'navbar-nav ml-auto',
			) ); ?>
		</nav>
		<div class="top-socials d-none d-xl-block">
			<ul class="d-flex align-items-center">
				<li><a href="#"><i class="fab fa-youtube"></a></i></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/social-box.png'; ?>" alt=""></a></li>
				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
				<li><a href="#"><i class="fab fa-google-drive"></i></a></li>
			</ul>
		</div>
	</header>

	<div class="main container">