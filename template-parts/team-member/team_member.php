<?php
/**
 * Template part for displaying a team member in a list
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
$job_title = get_field('job_title');
$team_link = 'meet-the-team';

?>

<article class="team-member wrap">
  <?php 
  the_post();
  the_title('<h2 class="team-name">','</h2>');
  printf("<h3 class='job-titles'>%s</h3> ", $job_title);
  get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
  echo '<div class="team-description">';
    the_content();
  echo '</div>';
  ?>
  <a href="<?php printf($team_link) ?>" class="button">
    <span class="dashicons dashicons-arrow-left"></span>Meet the Team
  </a>
</article>
