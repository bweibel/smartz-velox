<?php
/**
 * Template Name: Wizard Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>

	<main id="primary" class="site-main">  
		<?php
    get_template_part( 'template-parts/wizard/wizard_header');

		while ( have_posts() ) {
      the_post();
      echo '<section class="wizard wrap-large">';
      get_template_part( 'template-parts/wizard/form_header');
      get_template_part( 'template-parts/content/entry_content', get_post_type() );
      
      echo do_shortcode( get_field('form_shortcode'));
      echo '</section>';
		}
    ?>
	</main><!-- #primary -->
<?php
get_footer();
