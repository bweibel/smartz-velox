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
$args = array( 
	'post_type' => 'velox_services',
);
$the_query = new WP_Query( $args ); 
?>

<section class="services sloped">
	<div class="wrap">
		<h1><?php the_field( "services_title" ); ?></h1>
		<?php the_field( "services_copy" ); ?>
	</div>
	
	<?php if ( $the_query->have_posts() ) : ?>
		<div class="container wrap-large">
      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php get_template_part( 'template-parts/content/service' ); ?>
     
      <?php endwhile; ?>
      <!-- end of the loop -->

      <?php wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
		

</section>

