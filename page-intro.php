<?php

/* Template Name: Intro Page */

$title_icon = get_field( 'title_icon' );

?>

<?php get_header(); ?>

<div class="intro">
	<div class="title-wrap white-shadow">
		<img src="<?php echo $title_icon['url']; ?>" alt="">
		<div class="title-block text-center d-flex justify-content-center align-items-center mb-3">
			<?php loans_the_title(); ?>
		</div>
		<div class="description has-read-more text-center">
			<?php loans_the_description() ?>
		</div>

		<div class="post-modify-date add-strike-through mt-5 mb-3">
			<span class="text-wrapper">
				<i class="fas fa-clock"></i>
				<?php loans_the_post_date(); ?>
			</span>
		</div>
	</div>
	
	<div class="main-content">

		<?php get_template_part( 'template-parts/countries-section' ) ?>
		
	</div>

</div>

<?php get_footer(); ?>