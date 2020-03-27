<?php
/**
 * Template part for team member listings
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;

$theme = get_template_directory_uri();


$args = array( 
	'post_type' => 'team_member',
);
$the_query = new WP_Query( $args ); 

?>
<section class="team-list">
	
	<?php if ( $the_query->have_posts() ) : ?>
		<div class="container wrap-large">
      <!-- the loop -->
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
        <?php get_template_part( 'template-parts/content/team_card' ); ?>
     
      <?php endwhile; ?>
      <!-- end of the loop -->

      <?php wp_reset_postdata(); ?>
			</div>
			<?php endif; ?>
	
</section>
