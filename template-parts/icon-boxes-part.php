<?php 

	$boxes = get_field( 'homepage_icon_boxes' );

?>

<section class="content-section icon-boxes">
	
	<div class="row">
		<?php foreach ( $boxes['global_icon_boxes'] as $key => $box ): ?>
			<div class="box col-12 col-md-6 col-lg-4">
				<img src="<?php echo $box['icon']['url']; ?>" alt="">
				<h5 class="mt-4 mb-4"><?php echo $box['heading']; ?></h5>
				<p><?php echo $box['text']; ?></p>
			</div>
		<?php endforeach ?>
	</div>

</section>