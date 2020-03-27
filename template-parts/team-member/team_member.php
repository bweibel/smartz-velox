<?php
/**
 * Template part for displaying a team member in a list
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
$job_title = get_field('job_title');

?>

<article class="team-member wrap">
  
  <?php the_post(); ?>
  <?php the_title('<h2 class="team-name">','</h2>');?>
  <h3 class="job-title"><?php the_field( "job_title" );?></h3>
  <?php get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );?>
  <div class="team-description">
    <?php the_content(); ?>
  </div>
  <a href="/team" class="button">
    <span class="dashicons dashicons-arrow-left"></span>Meet the Team
  </a>

</article>
