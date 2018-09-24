		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-9">
						<div class="footer-menu">
							<?php wp_nav_menu( array(
								'theme_location'  => 'footer_menu',
								'menu'            => 'footer_menu',
								'container'       => 'nav'
							) ); ?>
						</div>

						<div class="footer-copy">
							Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.
						</div>
					</div>
					<div class="col-12 col-lg-3 d-flex flex-column justify-content-between align-items-center">
						<div class="dmca-logo">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/dmca.png'; ?>" alt="">
						</div>
						<div class="copyright">
							© All Rights Reserved
						</div>
					</div>
				</div>
			</div>
		</footer>

  		<?php wp_footer(); ?>
	</body>
</html>