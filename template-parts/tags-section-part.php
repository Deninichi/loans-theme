<?php 

	$tags = get_the_tags();

?>

<section class="tags-section content-section border color-border mt-0">
	
	<div class="tags-wrap">
		<span><?php _e( 'Tags: ', 'lender' ); ?></span>
		<?php foreach ( $tags as $key => $tag ): ?>
			<a href="<?php echo get_tag_link($tag->term_id); ?>"><span><?php echo $tag->name; ?></span></a>
		<?php endforeach ?>
	</div>

</section>