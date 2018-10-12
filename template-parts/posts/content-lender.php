<?php

	$logo 		= get_field( 'lender_logo' );
	$checkboxes = get_field( 'lender_checkboxes' );
?>	

<article class="lender">
	
	<section class="general-info white-shadow">
		
		<div class="row-wrapper bb">
			<div class="logo-wrap col-12 col-md-3">
				<div class="logo">
					<img src="<?php echo $logo['url']; ?>" alt="">
				</div>
			</div>
			<div class="info col-12 col-md-9 align-items-center">
				<div>
					<span><?php the_field( 'lender_lagstabelopp' ); ?> kr</span>
					<span>Lägstabelopp</span>
				</div>
				<div>
					<span><?php the_field( 'lender_hogstabelopp' ); ?> kr</span>
					<span>Högstabelopp</span>
				</div>
				<div>
					<span><?php the_field( 'lender_aldersgrans' ); ?> ar</span>
					<span>Åldersgräns</span>
				</div>
				<div>
					<span><?php the_field( 'lender_avgift' ); ?> kr</span>
					<span>Avgift</span>
				</div>
				<div>
					<span><?php the_field( 'lender_ranta' ); ?></span>
					<span>Ränta</span>
				</div>
			</div>
		</div>

		<div class="row-wrapper pt-3 pb-3">
			<div class="col-12 col-md-3">
				<div class="bottom-desc">
					<?php the_field( 'lebder_freedom_finance' ); ?> valde Freedom finance
				</div>
			</div>
			<div class="checkboxes col-12 col-md-6">
				
				<ul class="ul-inline align-items-center">
					<?php foreach ( $checkboxes as $checkbox ): ?>
						<li>
							<?php echo ( $checkbox['is_checked'][0] == 1 ) ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>'; ?>
							<?php echo $checkbox['text']; ?></li>
					<?php endforeach ?>
				</ul>

			</div>
			<div class="cta-btn col-12 col-md-3">
				<div class="actions">
					<a class="btn" href="">Läsmer</a>
				</div>
			</div>
		</div>
	</section>

	<section class="simple-content content-section">
		<?php the_field( 'lender_second_content' ); ?>
	</section>

</article>