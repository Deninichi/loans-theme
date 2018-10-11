<?php

/* Template Name: Home Page */

$title = get_field( 'homepage_title' );
$title_icon = get_field( 'homepage_title_icon' );

$args = array(
	'post_type' => 'lender',
	'numberposts' => -1
);
$wp_query = new WP_Query( $args );

?>

<?php get_header(); ?>

<div class="homepage">
	<div class="title-block text-center d-flex justify-content-center align-items-center mb-3">
		<?php loans_the_title(); ?>
	</div>
	<div class="description has-read-more text-center">
		<?php loans_the_description() ?>
	</div>

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

					<?php

						if ( $wp_query->have_posts() ) :

							/* Start the Loop */
							while ( $wp_query->have_posts() ) : $wp_query->the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */

								get_template_part( 'template-parts/posts/loop', get_post_type() );

							endwhile;

						endif;
						?>
					
				</div>

				<div class="load-more">
					<i class="fas fa-sync"></i>
					<span>MORE</span>
				</div>

			</section>

		</div>
		<div id="sidebar" class="col-12 col-lg-4 col-xl-3">
			<?php dynamic_sidebar( 'primary-sidebar' ); ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>