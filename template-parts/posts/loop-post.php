<article class="post-loop mb-4">
	<div class="row-wrapper p-0">
		<div class="read-more">
			<a href="<?php the_permalink(); ?>"><i class="fas fa-external-link-alt"></i></a>
		</div>
		<div class="logo-wrap bg-grey col-3 col-md-2 d-flex align-items-center justify-content-center pt-md-5 pb-md-5 pt-4 pb-4">
			<div class="logo">
				<?php if ( has_post_thumbnail() ): ?>
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
				<?php else : ?>
					<img src="/wp-content/themes/loans/assets/images/posts_default_image.png" alt="">
				<?php endif; ?>
			</div>
		</div>
		<div class="row-wrapper post-content col-9 col-md-10">
			<h3><?php the_title(); ?></h3>
			<div class="post-meta mb-2">
				<span class="text-wrapper author mr-2">
					<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>
				</span>
				<span class="text-wrapper date">
					<i class="fas fa-clock mr-1"></i>
					<?php echo get_the_date( 'd.m.Y' ); ?>
				</span>
			</div>
			<div class="d-none d-md-block">
				<?php echo wp_trim_words( loans_get_description(), 30, '' ); ?>
			</div>
		</div>
		<div class="row-wrapper col-12 d-block d-md-none">
			<?php echo wp_trim_words( loans_get_description(), 30, '' ); ?>
		</div>
	</div>
</article>