<?php

/* Template Name: Scholarship Page */

?>

<?php get_header(); ?>

<div class="scholarship">
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
	
	<div class="main-content">

		<?php get_template_part( 'template-parts/features-section-part' ) ?>

		<?php get_template_part( 'template-parts/download-section-part' ) ?>
		
		<?php get_template_part( 'template-parts/features-2-section-part' ) ?>

		<?php get_template_part( 'template-parts/past-winners-part' ) ?>
		
	</div>

</div>

<?php get_footer(); ?>