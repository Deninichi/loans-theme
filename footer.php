		</div><!-- .main.container -->

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
							<?php the_field( 'loans_footer_text', 'option' ); ?>
						</div>
					</div>
					<div class="col-12 col-lg-3 mt-4 mt-lg-0 d-flex flex-column justify-content-between align-items-center">
						<div class="dmca-logo">
							<img src="<?php echo get_template_directory_uri() . '/assets/images/dmca.png'; ?>" alt="">
						</div>
						<div class="copyright">
							<?php the_field( 'loans_footer_copyright', 'option' ); ?>
						</div>
					</div>
				</div>
			</div>
		</footer>

  		<?php wp_footer(); ?>
	</body>
</html>