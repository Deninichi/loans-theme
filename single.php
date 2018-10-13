<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<div class="container">

	<div class="title-block text-center d-flex justify-content-center align-items-center mb-3">
		<h1><?php loans_the_title(); ?></h1>
		<img src="<?php echo $title_icon ?>" alt="">
	</div>
	<div class="description has-read-more text-center">
		<?php loans_the_description() ?>
	</div>

	<div class="post-modify-date add-strike-through mt-5 mb-3">
		<span class="text-wrapper">
			<i class="fas fa-clock"></i>
			<?php loans_the_post_date(); ?>
		</span>
		<div class="breadcrumbs">
			<?php the_breadcrumbs(); ?>
		</div>
	</div>

	<div class="wrap row justify-content-center">
		<div id="primary" class="main-content col-12 col-lg-12 col-xl-9">
			<main id="main" class="content" role="main">

				<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						get_template_part( 'template-parts/posts/content', get_post_type() );

					endwhile;

				endif;
				?>

			</main><!-- #main -->
		</div><!-- #primary -->
		
		<div id="sidebar" class="col-12 col-lg-4 col-xl-3">
			<?php dynamic_sidebar( 'primary-sidebar' ); ?>
		</div>
	</div><!-- .wrap -->
</div><!-- .container -->

<?php get_footer();
