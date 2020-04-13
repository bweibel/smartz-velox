<?php
/**
 * Template part for displaying extra info in an option
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<!-- <button class='button extra-toggle'>More Info</button> -->
<div class="extra-info">
  <hr>
  <?php the_field('option_extra_info'); ?>
</div>
