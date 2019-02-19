<?php 
	$languages = icl_get_languages('skip_missing=1');
	$alt_urls = get_field( 'alternative_urls', get_the_ID() );

	$sweden_url = 'https://nocredit.se';
	foreach ( $alt_urls as $key => $language ) {
		if ( 'sv_SE' === $language['language'] ) {
			$sweden_url = $language['url'];
			break;
		}
	}
	var_dump($sweden_url);
?>


		</div><!-- .main.container -->

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="flags mb-5 mt-5">
							<ul>
								<li><a href="<?php echo $sweden_url; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/swe.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['es'] ) ) ? $languages['es']['url'] : '/es'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/spain.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['mx'] ) ) ? $languages['mx']['url'] : '/mx'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/mx.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['ag'] ) ) ? $languages['ag']['url'] : '/ag'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/arg.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['co'] ) ) ? $languages['co']['url'] : '/co'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/col.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['pe'] ) ) ? $languages['pe']['url'] : '/pe'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/flag.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['cl'] ) ) ? $languages['cl']['url'] : '/cl'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/chile.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['pt-br'] ) ) ? $languages['pt-br']['url'] : '/pt-br'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/brazil.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['pt-pt'] ) ) ? $languages['pt-pt']['url'] : '/pt-pt'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/pt.png'; ?>" alt=""></a></li>
								<li><a href="<?php echo ( isset( $languages['hi'] ) ) ? $languages['hi']['url'] : '/hi'; ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/flags/india.png'; ?>" alt=""></a></li>
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