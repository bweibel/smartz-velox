<?php
/**
 * Template Name: Team Template
 *
 * Page Template for Meet the Team page
 * *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );

			get_template_part('template-parts/team-member/team_list');
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
