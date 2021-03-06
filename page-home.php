<?php

/* Template Name: Home Page */

$title = get_field( 'homepage_title' );
$title_icon = get_field( 'homepage_title_icon' );

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
	
	<div class="main-content row justify-content-center">
		<div id="content" class="content col-12 col-lg-12 col-xl-9">
			
			<?php get_template_part( 'template-parts/icon-boxes-part' ) ?>

			<?php get_template_part( 'template-parts/collapse-section-part' ) ?>

			<?php if ( get_field( 'home_content' ) ): ?>
				<section class="simple-content content-section">
					<?php the_field( 'home_content' ); ?>
				</section>
			<?php endif ?>

			
			<?php

				$posts_args = array(
					'post_type' => 'post',
					'posts_per_page' => 7
				);
				$posts_query = new WP_Query( $posts_args );

				// Posts Loop
				if ( $posts_query->have_posts() ) :

					if ( ! empty( get_field( 'homepage_posts_list_heading' ) ) ): ?>
						<h2 class="section-title colored-title text-center pt-3 pb-3 mb-4 border color-border"><?php the_field( 'homepage_posts_list_heading' ) ?></h2>
					<?php endif;

					/* Start the Main Loop */
					while ( $posts_query->have_posts() ) : $posts_query->the_post();

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
		<div id="sidebar" class="col-12 col-lg-4 col-xl-3">
			<?php dynamic_sidebar( 'primary-sidebar' ); ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>