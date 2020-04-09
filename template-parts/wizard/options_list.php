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

$args = array( 
	'post_type' => 'form_option',
);
$the_query = new WP_Query( $args ); 
?>

<section class="management-options">
	<div class="container wrap-large">

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
<?php 

echo do_shortcode( get_field('form_shortcode'));
?>

