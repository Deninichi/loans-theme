<?php

/* Template Name: Home Page */

$title = get_field( 'homepage_title' );
$title_icon = get_field( 'homepage_title_icon' );
?>

<?php get_header(); ?>

<div class="homepage">
	<div class="title-block text-center d-flex justify-content-center align-items-center mb-3">
		<h1><?php echo $title; ?></h1>
		<img src="<?php echo $title_icon ?>" alt="">
	</div>
	<p class="description text-center">
		Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum.
	</p>

	<div class="post-modify-date add-strike-through mt-5 mb-3">
		<span class="text-wrapper">
			<i class="fas fa-clock"></i>
			<?php loans_the_post_date( 'home' ); ?>
		</span>
	</div>
	
	<div class="main-content row">
		<div id="content" class="content col-12 col-lg-8 col-xl-9">
			
			<?php get_template_part( 'template-parts/icon-boxes-part' ) ?>

			<?php get_template_part( 'template-parts/collapse-section-part' ) ?>

			<section class="posts content-section text-center">
				<h2 class="posts-heading mb-3">Alla Positioner</h2>
				<p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue.<br>Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus.</p>
				<div class="row posts-loop mt-5">

					<?php get_template_part( 'template-parts/posts/post-loop' ) ?>
					<?php get_template_part( 'template-parts/posts/post-loop' ) ?>
					<?php get_template_part( 'template-parts/posts/post-loop' ) ?>
					
				</div>

			</section>

		</div>
		<div id="sidebar" class="col-12 col-lg-4 col-xl-3">
			<?php dynamic_sidebar( 'primary-sidebar' ); ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>