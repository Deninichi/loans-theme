<?php 

	$lender_contacts_left_side = get_field( 'lender_contacts_left_side' );
	$lender_contacts_right_side = get_field( 'lender_contacts_right_side' );
	$lender_contacts_logo = get_field( 'lender_contacts_logo' );

	if ( empty( implode( '', $lender_contacts_left_side ) ) || empty( implode( '', $lender_contacts_right_side ) ) ) {
		return false;
	}
?>


<section class="contacts-section-wrap">
	
	<?php if ( $lender_contacts_logo ): ?>
		<style>
			.contacts-section-wrap::after {
				display: block;
			}
			.contacts-section-wrap {
			    margin-bottom: 5rem;
			}
		</style>
	<?php endif; ?>
	<div class="contacts-section bg-green">
		<div class="contacts-wrap">
			<div class="row">
				<div class="col-12 col-md-6">
					<table>
						<?php if ( $lender_contacts_left_side['lender_website'] ): ?>
							<tr>
								<td><?php _e( 'Hemsida:', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_left_side['lender_website']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_founded'] ): ?>
							<tr>
								<td><?php _e( 'Lanserades:', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_left_side['lender_founded']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_email'] ): ?>
							<tr>
								<td><?php _e( 'E-post:', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_left_side['lender_email']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_alla_bolag'] ): ?>
							<tr>
								<td><?php _e( 'Företagsinformation:', 'loans' ); ?></td>
								<td><a href="<?php echo $lender_contacts_left_side['lender_alla_bolag_url']; ?>" rel="nofollow"><?php echo $lender_contacts_left_side['lender_alla_bolag']; ?></a></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_business_name'] ): ?>
							<tr>
								<td><?php _e( 'Företagsnamn:', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_left_side['lender_business_name']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_orgnr'] ): ?>
							<tr>
								<td><?php _e( 'Orgnr', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_left_side['lender_orgnr']; ?></td>
							</tr>
						<?php endif ?>
					</table>
				</div><!-- .col-12.col-md-6 -->

				<div class="col-12 col-md-6">
					<table>
						<?php if ( $lender_contacts_right_side['lender_street'] ): ?>
							<tr>
								<td><?php _e( 'Gata:', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_right_side['lender_street']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_right_side['lender_city'] ): ?>
							<tr>
								<td><?php _e( 'Stad:', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_right_side['lender_city']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_right_side['lender_payment_time'] ): ?>
							<tr>
								<td><?php _e( 'Utbetalning:', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_right_side['lender_payment_time']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_right_side['lender_kreditupplysning'] ): ?>
							<tr>
								<td><?php _e( 'Kreditupplysning', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_right_side['lender_kreditupplysning']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_right_side['lender_phone'] ): ?>
							<tr>
								<td><?php _e( 'Telefonnummer:', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_right_side['lender_phone']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( ! $lender_contacts_right_side['lender_socials'] || ! empty( implode( '', $lender_contacts_right_side['lender_socials'] ) ) ): ?>
							<tr>
								<td><?php _e( 'Sociala medier:', 'loans' ); ?></td>
								<td>
									<ul class="ul-inline">
										<?php if ( $lender_contacts_right_side['lender_socials']['facebook'] ): ?>
											<li>
												<a href="<?php echo esc_url( $lender_contacts_right_side['lender_socials']['facebook'] ); ?>" rel="nofollow">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
										<?php endif ?>
										<?php if ( $lender_contacts_right_side['lender_socials']['linkedin'] ): ?>
											<li>
												<a href="<?php echo esc_url( $lender_contacts_right_side['lender_socials']['linkedin'] ); ?>" rel="nofollow" >
													<i class="fab fa-linkedin-in"></i>
												</a>
											</li>
										<?php endif ?>
										<?php if ( $lender_contacts_right_side['lender_socials']['twitter'] ): ?>
											<li>
												<a href="<?php echo esc_url( $lender_contacts_right_side['lender_socials']['twitter'] ); ?>" rel="nofollow">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
										<?php endif ?>
										<?php if ( $lender_contacts_right_side['lender_socials']['wiki'] ): ?>
											<li>
												<a rel="nofollow" href="<?php echo esc_url( $lender_contacts_right_side['lender_socials']['wiki'] ); ?>" rel="nofollow">
													<i class="fab fa-wikipedia-w"></i>
												</a>
											</li>
										<?php endif ?>
									</ul>
								</td>
							</tr>
						<?php endif ?>
					</table>
				</div><!-- .col-12.col-md-6 -->

			</div><!-- .row -->
		</div><!-- .contacts-wrap -->

		<?php if ( $lender_contacts_logo ): ?>
			<div class="contacts-logo">
				<div class="contacts-logo-wrap">
					<a href="<?php the_field( 'lender_contacts_logo_url' ); ?>"><img src="<?php echo $lender_contacts_logo['sizes']['medium']; ?>" alt=""></a>
				</div>
			</div>
		<?php endif ?>
		
	</div>
	
</section>


