<?php
/**
 * Template part for displaying the options on a selector form
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
use WP_Query;
?>

<?php 
$form_options = get_field('selector_options');
?>

<section class="management-options">
	<div class="options-list">

	<?php 
	if($form_options) {
		foreach($form_options as $post) {
			setup_postdata( $post );
			get_template_part( 'template-parts/wizard/option' );
		}
		wp_reset_postdata();
	}
	?>

	</div>
</section>

