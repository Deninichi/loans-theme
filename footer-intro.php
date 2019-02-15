		</div><!-- .main.container -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="flags mb-5 mt-5">
							<ul>
								<li><a href="https://nocredit.se"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/swe.png'; ?>" alt=""></a></li>
								<li><a href="/es"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/spain.png'; ?>" alt=""></a></li>
								<li><a href="/mx"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/mx.png'; ?>" alt=""></a></li>
								<li><a href="/ag/"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/arg.png'; ?>" alt=""></a></li>
								<li><a href="/co/"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/col.png'; ?>" alt=""></a></li>
								<li><a href="/pe/"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/flag.png'; ?>" alt=""></a></li>
								<li><a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/fra.png'; ?>" alt=""></a></li>
								<li><a href=""><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/ger.png'; ?>" alt=""></a></li>
							</ul>
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