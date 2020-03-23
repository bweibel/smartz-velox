<?php
/**
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}

?>
	<main id="primary" class="site-main">

	<!-- #call to action -->
		<?php get_template_part( 'template-parts/content/call_to_action' ); ?>
		<!-- #call to action -->
		
		<!-- #standard page content -->
		<?php
		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry_content', get_post_type() );		}
		?>
		<!-- #standard page content -->

		<!-- #services -->
		<?php get_template_part( 'template-parts/content/services' ); ?>
		<!-- #services -->
		
		<!-- #video -->
		<?php get_template_part( 'template-parts/content/video_element' ); ?>
		<!-- #video -->

		<!-- #testimonials -->
		<section class="testimonials wrap">
				<h1>What Our Customers Are Saying</h1>
				<div id="popup-rating-widget"><script id="popup-rating-widget-script" src="https://widget.reviewability.com/js/popupWidget.min.js" data-gfspw="https://smartsolutions.reviewability.com/popup-pixel/get/83bf6561ba40f7e1c11c1c47c0b4bb4b6982726c?clientId=103501" async></script></div>
		</section>
		<!-- #testimonials -->
		
		<!-- #Featured Post -->
		<?php get_template_part( 'template-parts/content/featured_post' ); ?>
    <!-- #Featured Post -->


	</main><!-- #primary -->
<?php
get_footer();
