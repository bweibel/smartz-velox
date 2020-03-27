<?php
/**
 * Template Name: Custom Post Template
 * Template Post Type: team_member
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-page-templates-for-specific-post-types
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main">
		<header class="entry-header fancy-background">
			<h1 class="entry-title">Meet the Team</h1>
		</header>
		<?php

		while ( have_posts() ) {
			printf('<article class="team-member wrap">');
				the_post();
				the_title('<h2 class="team-name">','</h2>');
				the_field( "team_job_title" );
				get_template_part( 'template-parts/content/entry_thumbnail', get_post_type() );
				printf('<div class="team-description">');
					the_content();
					printf('</div>');
			// get_template_part( 'template-parts/content/entry', get_post_type() );
			printf('<a href="/team" class="button"><span class="dashicons dashicons-arrow-left"></span>Meet the Team</a>');
			printf('</article>');
		}
		?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_footer();
