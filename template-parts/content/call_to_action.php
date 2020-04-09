<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
$DEFAULT_IMG = $theme . "/assets/images/Velox-Caricatures-Jordan@2x.png";

$image = get_field('cta_image');
if(empty( $image )) {
  $imageUri = $DEFAULT_IMG;
  $imageAttrs = "Caricature";
} else {
  $imageUri = esc_url($image['url']);
  $imageAttrs = esc_attr($image['alt']);
}

?>
<section class="call-to-action fancy-background sloped">
  <div class="wrap wrap-large">
    <section class="pitch">
      <h1 class="title"><?php the_field( "cta_title" ); ?></h1>
      <h3 class="subtitle"><?php the_field( "cta_sub_title" ); ?></h3>
      <?php the_field( "cta_copy" ); ?>
    </section>
    <figure>
    <?php printf("<img src='$imageUri' alt='$imageAttrs' class='icon-service' role='presentation'/>");?>
    </figure>
    <a href="<?php the_field( "cta_button_link" ); ?>" class="button button--big">
      <?php the_field( "cta_button_text" ); ?>
    </a>
  </div>
</section>
