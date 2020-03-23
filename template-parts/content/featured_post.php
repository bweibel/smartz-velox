<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

use WP_Query;
?>
		<?php 
			$args = array( 'author_name' => 'ben' );
			$the_query = new WP_Query( $args ); ?>
 
			<?php if ( $the_query->have_posts() ) : ?>
  
      <section class="featured-post fancy-background">
        <div class="wrap">
          <h1>Latest News</h1>
        </div>
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
					<h2><?php the_title(); ?></h2>
			<?php endwhile; ?>
			<!-- end of the loop -->
 
			<?php wp_reset_postdata(); ?>
      </section>
			<?php endif; ?>


				
