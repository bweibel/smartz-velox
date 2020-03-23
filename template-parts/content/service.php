<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
$icon = get_field('service_icon');
$background = get_field('service_background');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
// if( $icon ) {
//     echo wp_get_attachment_image( $image, $size );
// }
?>

<div class="service" style="">
  <?php if( !empty( $icon ) ): ?>
    <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" class="icon-service"/>
  <?php endif; ?>
  <?php the_title('<h3 class="title">', '</h3>') ?>
  <!-- <?php the_content( ); ?> -->
  <div class="icon-arrow"></div>
  <a href="#" class="service-link"></a>
</div>
