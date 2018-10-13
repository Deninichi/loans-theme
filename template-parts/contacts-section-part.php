<?php 

	$lender_contacts_left_side = get_field( 'lender_contacts_left_side' );
	$lender_contacts_right_side = get_field( 'lender_contacts_right_side' );
	$lender_contacts_logo = get_field( 'lender_contacts_logo' );

	if ( empty( implode( '', $lender_contacts_left_side ) ) || empty( implode( '', $lender_contacts_right_side ) ) ) {
		return false;
	}
?>


<section class="contacts-section-wrap">
	
	<div class="contacts-section bg-green">
		<div class="contacts-wrap">
			<div class="row">
				<div class="col-12 col-md-6">
					<table>
						<?php if ( $lender_contacts_left_side['lender_website'] ): ?>
							<tr>
								<td><?php _e( 'Website', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_left_side['lender_website']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_founded'] ): ?>
							<tr>
								<td><?php _e( 'Founded', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_left_side['lender_founded']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_email'] ): ?>
							<tr>
								<td><?php _e( 'Email', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_left_side['lender_email']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_alla_bolag'] ): ?>
							<tr>
								<td><?php _e( 'Alla bolag', 'loans' ); ?></td>
								<td><a href="<?php echo $lender_contacts_left_side['lender_alla_bolag_url']; ?>"><?php echo $lender_contacts_left_side['lender_alla_bolag']; ?></a></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_left_side['lender_business_name'] ): ?>
							<tr>
								<td><?php _e( 'Business name', 'loans' ); ?></td>
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
								<td><?php _e( 'Street', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_right_side['lender_street']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_right_side['lender_city'] ): ?>
							<tr>
								<td><?php _e( 'City', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_right_side['lender_city']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( $lender_contacts_right_side['lender_payment_time'] ): ?>
							<tr>
								<td><?php _e( 'Payment time', 'loans' ); ?></td>
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
								<td><?php _e( 'Phone', 'loans' ); ?></td>
								<td><?php echo $lender_contacts_right_side['lender_phone']; ?></td>
							</tr>
						<?php endif ?>
						<?php if ( ! $lender_contacts_right_side['lender_socials'] || ! empty( implode( '', $lender_contacts_right_side['lender_socials'] ) ) ): ?>
							<tr>
								<td><?php _e( 'Socials', 'loans' ); ?></td>
								<td>
									<ul class="ul-inline">
										<?php if ( $lender_contacts_right_side['lender_socials']['facebook'] ): ?>
											<li>
												<a href="<?php echo esc_url( $lender_contacts_right_side['lender_socials']['facebook'] ); ?>">
													<i class="fab fa-facebook-f"></i>
												</a>
											</li>
										<?php endif ?>
										<?php if ( $lender_contacts_right_side['lender_socials']['linkedin'] ): ?>
											<li>
												<a href="<?php echo esc_url( $lender_contacts_right_side['lender_socials']['linkedin'] ); ?>">
													<i class="fab fa-linkedin-in"></i>
												</a>
											</li>
										<?php endif ?>
										<?php if ( $lender_contacts_right_side['lender_socials']['twitter'] ): ?>
											<li>
												<a href="<?php echo esc_url( $lender_contacts_right_side['lender_socials']['twitter'] ); ?>">
													<i class="fab fa-twitter"></i>
												</a>
											</li>
										<?php endif ?>
										<?php if ( $lender_contacts_right_side['lender_socials']['wiki'] ): ?>
											<li>
												<a href="<?php echo esc_url( $lender_contacts_right_side['lender_socials']['wiki'] ); ?>">
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

		<div class="contacts-logo">
			<div class="contacts-logo-wrap">
				<img src="<?php echo $lender_contacts_logo['sizes']['medium']; ?>" alt="">
			</div>
		</div>
	</div>
	
</section>


