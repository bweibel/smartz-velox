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
  'orderby'     => 'date',
  'order'     => 'ASC',
  'posts_per_page' => -1
);
$the_query = new WP_Query( $args ); 

?>
<section class="team-list wrap-large">
	
	<?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        
        <?php get_template_part( 'template-parts/team-member/team_card' ); ?>
     
      <?php endwhile; ?>

      <?php wp_reset_postdata(); ?>
			<?php endif; ?>
	
</section>
