<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
			<ul class="d-flex align-items-center">
				<li><a href="#"><i class="fab fa-youtube"></a></i></li>
				<li><a href="#"><img src="<?php echo get_template_directory_uri() . '/assets/images/social-box.png'; ?>" alt=""></a></li>
				<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
				<li><a href="#"><i class="fab fa-google-drive"></i></a></li>
			</ul>
		</div>
	</header>