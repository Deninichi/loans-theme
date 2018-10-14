<?php

  $top_3_lenders_heading = get_field( 'top_3_lenders_heading' );
  $top_3_lenders         = get_field( 'top_3_lenders' );

  $related_lenders  = get_field( 'post_related_lenders' );
  $related_lenders  = $related_lenders['global_related_lenders'];

?>  

<article <?php post_class( 'post' ); ?>>

  <?php if ( ! empty($top_3_lenders) ): ?>
    
    <section class="content-section text-center mt-0 mb-3 pl-0 pt-0 pr-0">

      <?php if ( ! empty( $top_3_lenders_heading ) ): ?>
        <h2 class="bg-grey section-title colored-title text-center pt-3 pb-3 mb-4 border color-border"><?php echo $top_3_lenders_heading ?></h2>
      <?php endif ?>

      <div class="row posts-loop mt-3">

        <?php
          $args = array(
            'post_type'   => 'lender',
            'post__in'    => $top_3_lenders,
            'numberposts' => -1
          );
          $wp_query = new WP_Query( $args );


          if ( $wp_query->have_posts() ) :

            /* Start the Loop */
            while ( $wp_query->have_posts() ) : $wp_query->the_post();

              /*
               * Include the Post-Format-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */

              get_template_part( 'template-parts/posts/loop-2', get_post_type() );

            endwhile;
            wp_reset_query();
          endif;
        ?>
        
      </div>

    </section>
  <?php endif ?>
  
  <?php get_template_part( 'template-parts/advanced-content-section-part' ); ?>

  <?php if ( ! empty($related_lenders) ): ?>
    
    <section class="posts content-section text-center bt mt-0 mb-3 pl-0 pr-0">
      <div class="row posts-loop mt-3">

        <?php
          $args = array(
            'post_type'   => 'lender',
            'post__in'    => $related_lenders,
            'numberposts' => -1
          );

          $wp_query = new WP_Query( $args );

          if ( $wp_query->have_posts() ) :

            /* Start the Loop */
            while ( $wp_query->have_posts() ) : $wp_query->the_post();

              /*  
               * Include the Post-Format-specific template for the content.
               * If you want to override this in a child theme, then include a file
               * called content-___.php (where ___ is the Post Format name) and that will be used instead.
               */

              get_template_part( 'template-parts/posts/loop', get_post_type() );

            endwhile;
            wp_reset_query();
          endif;
        ?>
        
      </div>

      <div class="load-more">
        <i class="fas fa-sync"></i>
        <span><?php _e( 'MORE', 'loans' ); ?></span>
      </div>

    </section>
  <?php endif ?>

  <?php get_template_part( 'template-parts/tags-section-part' ); ?>

</article>