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


<section id="<?php get_field('option_id') ?>" class="option-card">
  <header class="fancy-background">
    <?php 
      the_title('<h2 class="option-title">','</h2>'); 
      printf('<h2 class="option-subtitle">%s</h2>', $subTitle);
      printf('<span class="price">$%s/user/month</span>', $cost);
      ?>
  </header>
  <div class="description">
  <?php 
    the_content();
    if(!empty($extraInfo)){
      printf("<button class='button extra-toggle'>More Info</button>");
      the_field('option_extra_info');
    }
    
    
  ?>

  </div>
</section>