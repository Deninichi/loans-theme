		</div><!-- .main.container -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="flags mb-5 mt-5">
							<ul>
								<li><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/swe.png'; ?>" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/spain.png'; ?>" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/it.png'; ?>" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/arg.png'; ?>" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/col.png'; ?>" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/flag.png'; ?>" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/fra.png'; ?>" alt=""></li>
								<li><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/ger.png'; ?>" alt=""></li>
							</ul>
						</div>
						<div class="footer-menu">
							<?php wp_nav_menu( array(
								'theme_location'  => 'footer_menu',
								'menu'            => 'footer_menu',
								'container'       => 'nav'
							) ); ?>
						</div>

						<div class="footer-copy mb-5">
							<?php the_field( 'loans_footer_text', 'option' ); ?>
						</div>
						<div class="copyright mb-3">
							<span class="logo">
								<img src="<?php echo get_template_directory_uri() . '/assets/images/dmca-logo.png'; ?>" alt="">
							</span>
							<span><?php the_field( 'loans_footer_copyright', 'option' ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</footer>

  		<?php wp_footer(); ?>
	</body>
</html>