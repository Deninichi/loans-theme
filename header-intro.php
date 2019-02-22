<!DOCTYPE html>
<html lang="es-ES" >
<head>
	<title><?php wp_title(); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
  	<meta charset="<?php bloginfo( 'charset' ); ?>">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">

  	<?php if( get_field( 'alternative_urls' ) ): ?>
		<?php foreach ( get_field( 'alternative_urls' ) as $key => $lang ): ?>
			<link rel="alternate" hreflang="<?php echo $lang['language'] ?>" href="<?php echo $lang['url'] ?>">
		<?php endforeach ?>
  	<?php endif; ?>

  <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>

	<header class="intro container">
		<div class="logo">
			<a href="<?php echo icl_get_home_url(); ?>"><?php the_field( 'loans_logo', 'option' ); ?></a>
		</div>
	</header>

	<div class="main main-intro container">