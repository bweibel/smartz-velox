<?php
/**
 * Template part for displaying an option in the wizard
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$subTitle = get_field('option_sub_title');
$extraInfo = get_field('option_extra_info');
$cost = get_field('option_cost');
?>

<section id="<?php the_field('option_id') ?>" class="option-card">
  <header class="fancy-background">
    <?php 
      the_title('<h2 class="option-title">','</h2>'); 
      printf('<h2 class="option-subtitle">%s</h2>', $subTitle);
      ?>
  </header>
  <div class="description">
  <?php 
    the_content();
    if(!empty($extraInfo)){
      get_template_part( 'template-parts/wizard/extra_info' );
    }
    printf('<span class="price" >$%s/user/month</span>', $cost);
    
  ?>

  </div>
</section>