<?php

	$logo 		= get_field( 'lender_logo' );
	$checkboxes = get_field( 'lender_checkboxes' );
?>	

<article class="lender">
	
	<section class="general-info white-shadow">
		
		<div class="row-wrapper bb">
			<div class="logo-wrap col-12 col-md-3">
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
						<span>Lägstabelopp</span>
					</div>
				<?php endif ?>
				<?php if ( get_field( 'lender_hogstabelopp' ) ): ?>
					<div>
						<span><?php the_field( 'lender_hogstabelopp' ); ?> kr</span>
						<span>Högstabelopp</span>
					</div>
				<?php endif ?>
				<?php if ( get_field( 'lender_aldersgrans' ) ): ?>
					<div>
						<span><?php the_field( 'lender_aldersgrans' ); ?> ar</span>
						<span>Åldersgräns</span>
					</div>
				<?php endif ?>
				<?php if ( get_field( 'lender_avgift' ) ): ?>
					<div>
						<span><?php the_field( 'lender_avgift' ); ?> kr</span>
						<span>Avgift</span>
					</div>
				<?php endif ?>
				<?php if ( get_field( 'lender_ranta' ) ): ?>
					<div>
						<span><?php the_field( 'lender_ranta' ); ?></span>
						<span>Ränta</span>
					</div>
				<?php endif ?>
			</div>
		</div>

		<div class="row-wrapper pt-3 pb-3">
			<div class="col-12 col-md-3">
				<div class="bottom-desc">
					<?php the_field( 'lebder_freedom_finance' ); ?> valde Freedom finance
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
					<a class="btn" href="<?php the_field( 'lender_cta_button_url' ); ?>"><?php the_field( 'lender_cta_button_text' ); ?></a>
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

</article>