<?php
/**
 * Template part for displaying video
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
?>
<section class="video-element sloped-top blue-background">
  <div class="wrap">
    <h1><?php the_field( "video_title" ); ?></h1>
    <?php the_field( "video_copy" ); ?>
    <div class="video-container">
      <iframe width="100%" src="https://www.youtube.com/embed/<?php the_field( "video_link" ); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <a href="<?php the_field( "video_button_link" ); ?>" class="button"><?php the_field( "video_button_text" ); ?></a>
  </div>
</section>
