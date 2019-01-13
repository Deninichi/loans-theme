<?php

	$logo 			= get_field( 'lender_logo' );
	$checkboxes 	= get_field( 'lender_checkboxes' );
	$related_posts  = get_field( 'lender_related_lenders' );
	$related_posts  = $related_posts['global_related_lenders'];

	$freedom_finance = get_field( 'lender_freedom_finance_text' );
	if ( empty( $freedom_finance ) ) {
		$freedom_finance = 'Freedom Finance';
	}

?>	

<article class="lender">
	
	<section class="general-info white-shadow">
		
		<div class="row-wrapper bb">
			<div class="logo-wrap col-12 col-md-3 d-flex align-items-center justify-content-center">
				<?php if ( isset( $logo['url'] ) ): ?>
					<div class="logo">
						<img src="<?php echo $logo['url']; ?>" alt="">
					</div>
				<?php endif ?>
			</div>
			<div class="info col-12 col-md-9 align-items-center">
				<?php if ( get_field( 'lender_lagstabelopp' ) ): ?>
					<div>
						<span><?php the_field( 'lender_lagstabelopp' ); ?> kr</span>
						<span><?php _e( 'Lägstabelopp', 'loans' ); ?></span>
					</div>
				<?php endif ?>
				<?php if ( get_field( 'lender_hogstabelopp' ) ): ?>
					<div>
						<span><?php the_field( 'lender_hogstabelopp' ); ?> kr</span>
						<span><?php _e( 'Högstabelopp', 'loans' ); ?></span>
					</div>
				<?php endif ?>
				<?php if ( get_field( 'lender_aldersgrans' ) ): ?>
					<div>
						<span><?php the_field( 'lender_aldersgrans' ); ?> ar</span>
						<span><?php _e( 'Åldersgräns', 'loans' ); ?></span>
					</div>
				<?php endif ?>
				<?php if ( get_field( 'lender_avgift' ) ): ?>
					<div>
						<span><?php the_field( 'lender_avgift' ); ?> kr</span>
						<span><?php _e( 'Avgift', 'loans' ); ?></span>
					</div>
				<?php endif ?>
				<?php if ( get_field( 'lender_ranta' ) ): ?>
					<div>
						<span><?php the_field( 'lender_ranta' ); ?></span>
						<span><?php _e( 'Ränta', 'loans' ); ?></span>
					</div>
				<?php endif ?>
			</div>
		</div>

		<div class="row-wrapper pt-3 pb-3">
			<div class="col-12 col-md-3">
				<div class="bottom-desc">
					<?php the_field( 'lebder_freedom_finance' ); ?> valde <?php echo $freedom_finance ?>
				</div>
			</div>
			<div class="checkboxes col-12 col-md-6">
				
				<?php if ($checkboxes): ?>
					<ul class="ul-inline align-items-center justify-content-between">
						<?php foreach ( $checkboxes as $checkbox ): ?>
							<li>
								<?php echo ( $checkbox['is_checked'][0] == 1 ) ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>'; ?>
								<?php echo $checkbox['text']; ?></li>
						<?php endforeach ?>
					</ul>
				<?php endif ?>

			</div>
			<div class="cta-btn col-12 col-md-3">
				<div class="actions">
					<a class="btn lender-count" data-lender-id="<?php echo get_the_ID(); ?>" href="<?php the_field( 'lender_cta_button_url' ); ?>" rel="nofollow"><?php the_field( 'lender_cta_button_text' ); ?></a>
				</div>
			</div>
		</div>
	</section>

	<?php if ( get_field( 'lender_second_content' ) ): ?>
		<section class="simple-content content-section">
			<?php the_field( 'lender_second_content' ); ?>
		</section>
	<?php endif ?>
	
	<?php get_template_part( 'template-parts/work-days-section-part' ); ?>

	<?php get_template_part( 'template-parts/contacts-section-part' ); ?>

	<?php get_template_part( 'template-parts/pros-cons-section-part' ); ?>

	<?php get_template_part( 'template-parts/advanced-content-section-part' ); ?>

	<?php get_template_part( 'template-parts/gallery-section-part' ); ?>

	<?php if ( ! empty($related_posts) ): ?>
		
	
		<section class="posts content-section text-center bt mt-0 mb-3 pl-0 pr-0">
			<div class="row posts-loop mt-3">

				<?php
					global $post;
					$tmp_post = $post;

					$args = array(
						'post_type'   => 'lender',
						'post__in' 	  => $related_posts,
						'posts_per_page' => -1
					);
					$related_query = new WP_Query( $args );


					if ( $related_query->have_posts() ) :

						/* Start the Loop */
						while ( $related_query->have_posts() ) : $related_query->the_post();

							/*
							 * Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */

							get_template_part( 'template-parts/posts/loop', get_post_type() );

						endwhile;

						$post = $tmp_post;
						wp_reset_postdata();
					endif;
				?>
				
			</div>
		</section>
	<?php endif ?>

	<?php get_template_part( 'template-parts/tags-section-part' ); ?>

</article>