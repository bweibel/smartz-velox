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
			$args = array( 'cat' => get_field( "featured_post_category" ), 'posts_per_page' => 1 );
			$the_query = new WP_Query( $args ); ?>
 
			<?php if ( $the_query->have_posts() ) : ?>
      <section class="featured-post fancy-background sloped">
        <div class="wrap">
          <h1><?php the_field( "featured_post_title" ); ?></h1>
          <?php the_field( "featured_post_copy" ); ?>
      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <article>
          <?php get_template_part( 'template-parts/content/entry_thumbnail' ); ?>
          <?php get_template_part( 'template-parts/content/entry_title' ); ?>
          <?php get_template_part( 'template-parts/content/entry_summary' ); ?>
          <a href="<?php printf(esc_url( get_permalink() )); ?>" rel="bookmark" class="button">Read More</a>
        </article>
     
      <?php endwhile; ?>
      <!-- end of the loop -->

      <?php wp_reset_postdata(); ?>
        </div>
      </section>
			<?php endif; ?>


				
