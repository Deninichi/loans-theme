<?php 

function loans_get_post_date( $type = 'post', $post_id = '' ){

	switch ( $type ) {
		case 'home':
			// Last Post
			$args = array(
			    'post_type'   => 'post',
			    'posts_per_page' => '1',
			    'orderby'        => 'modified',
			    'order'          => 'DESC'
			    );
			$last_post = get_posts( $args );

			$date = get_the_modified_date( 'd.m.Y',  $last_post[0]->ID );
			break;
		
		default:
			$date = get_the_modified_date( 'd.m.Y' );
			break;
	}

	return 'Updated: <strong>' . $date . '</strong>';

}

function loans_the_post_date( $type, $post_id = '' ){
	echo loans_get_post_date( $type, $post_id );
}