<?php

	$logo = get_field( 'lender_logo' );
	$checkboxes = get_field( 'lender_checkboxes' );

?>

<article class="lender-loop col-12 col-md-6 col-lg-4 mb-4">
	<div class="lender-loop-wrap">
		<div class="lender-number">
			<span>1</span>
		</div>
		<div class="lender-image">
			<a href="<?php the_permalink(); ?>"><img src="<?php echo $logo['url']; ?>" alt=""></a>
		</div>
		<div class="lender-content">
			<table>
				<tbody>
					<tr>
						<td>Lägstabelopp</td>
						<td><?php the_field( 'lender_lagstabelopp' ); ?> kr</td>
					</tr>
					<tr>
						<td>Högstabelopp</td>
						<td><?php the_field( 'lender_hogstabelopp' ); ?> kr</td>
					</tr>
					<tr>
						<td>Avgift</td>
						<td><?php the_field( 'lender_avgift' ); ?> kr</td>
					</tr>
					<tr>
						<td>Ränta</td>
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
						<td><?php _e( 'Åldersgräns', 'lender' ); ?></td>
						<td><?php the_field( 'lender_aldersgrans' ); ?> <?php _e( 'år', 'lender' ); ?></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="actions bt">
			<a class="btn" href="<?php the_field( 'lender_cta_button_url' ); ?>"><?php the_field( 'lender_cta_button_text' ); ?></a>
			<a class="btn-link" href="<?php the_field( 'lender_cta_link_url' ); ?>"><?php the_field( 'lender_cta_link_text' ); ?></a>
		</div>
		<div class="bottom-desc">
			<?php the_field( 'lebder_freedom_finance' ); ?> <?php _e( 'valde Freedom finance', 'loans' ); ?>
		</div>
	</div>
</article><!-- .post-loop -->