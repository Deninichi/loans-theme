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
			<a href="/"><?php the_field( 'loans_logo', 'option' ); ?></a>
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
				<?php 
					$socials = get_field( 'loans_socials', 'option' );
				?>
				<?php if ( $socials['youtube'] ): ?>
					<li><a href="<?php echo $socials['youtube'] ?>"><i class="fab fa-youtube"></i></a></li>
				<?php endif ?>
				
				<?php if ( $socials['box'] ): ?>
					<li><a href="<?php echo $socials['box'] ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/social-box.png'; ?>" alt=""></a></li>
				<?php endif ?>
				
				<?php if ( $socials['google'] ): ?>
					<li><a href="<?php echo $socials['google'] ?>"><i class="fab fa-google-plus-g"></i></a></li>
				<?php endif ?>
				
				<?php if ( $socials['google_drive'] ): ?>
					<li><a href="<?php echo $socials['google_drive'] ?>"><i class="fab fa-google-drive"></i></a></li>
				<?php endif ?>
			</ul>
		</div>
	</header>

	<div class="main container">