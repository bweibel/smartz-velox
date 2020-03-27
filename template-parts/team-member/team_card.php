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

<section class="team-card" style="">
  <?php get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() ); ?>
  <?php the_title('<h2 class="team-name">', '</h2>') ?>
  <h3 class="job-title"><?php printf($job_title) ?></h3>
  <a href="<?php the_permalink() ?>" class="team-link"></a>
</section>
