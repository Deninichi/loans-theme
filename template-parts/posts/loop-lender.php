<?php

	$logo = get_field( 'lender_logo' );
	$checkboxes = get_field( 'lender_checkboxes' );

	$freedom_finance = get_field( 'lender_freedom_finance_text' );
	if ( empty( $freedom_finance ) ) {
		$freedom_finance = 'Freedom Finance';
	}

?>

<article class="lender-loop col-12 col-md-6 col-lg-4 mb-4">
	<div class="lender-loop-wrap">
		<div class="lender-image">
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $logo['url']; ?>" alt=""></a>
		</div>
		<div class="lender-content">
			<table>
				<tbody>
					<tr>
						<td><?php _e( 'Lägstabelopp', 'loans' ); ?></td>
						<td><?php the_field( 'lender_lagstabelopp' ); ?> kr</td>
					</tr>
					<tr>
						<td><?php _e( 'Högstabelopp', 'loans' ); ?></td>
						<td><?php the_field( 'lender_hogstabelopp' ); ?> kr</td>
					</tr>
					<tr>
						<td><?php _e( 'Löptid', 'loans' ); ?></td>
						<td><?php echo ( get_field( 'lender_loptid' ) ) ? get_field( 'lender_loptid' ) : '12-36 mån'; ?></td>
					</tr>
					<tr>
						<td><?php _e( 'Avgift', 'loans' ); ?></td>
						<td><?php the_field( 'lender_avgift' ); ?> kr</td>
					</tr>
					<tr>
						<td><?php _e( 'Ränta', 'loans' ); ?></td>
						<td><?php the_field( 'lender_ranta' ); ?></td>
					</tr>

					<?php if ( $checkboxes ): ?>
						<?php foreach ( $checkboxes as $checkbox ): ?>
						
							<tr>
								<td><?php echo $checkbox['text']; ?></td>
								<td><?php echo ( $checkbox['is_checked'][0] == 1 ) ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>'; ?></td>
							</tr>

						<?php endforeach ?>
					<?php endif ?>
					
					<tr>
						<td><?php _e( 'Åldersgräns', 'loans' ); ?></td>
						<td><?php the_field( 'lender_aldersgrans' ); ?> år</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="actions bt">
			<a class="btn lender-count" data-lender-id="<?php echo get_the_ID(); ?>" href="<?php the_field( 'lender_cta_button_url' ); ?>" rel="nofollow"><?php the_field( 'lender_cta_button_text' ); ?></a>
			<a class="btn-link" href="<?php the_field( 'lender_cta_link_url' ); ?>"><?php the_field( 'lender_cta_link_text' ); ?></a>
		</div>
		<div class="bottom-desc">
			<?php the_field( 'lebder_freedom_finance' ); ?> valde <?php echo $freedom_finance ?>
		</div>
		
		<?php if ( get_field( 'lender_interest_rate' ) ): ?>
			<div class="interest-rate text-left">
				<?php the_field( 'lender_interest_rate' ); ?>
			</div>
		<?php endif ?>
		
	</div>
</article><!-- .post-loop -->