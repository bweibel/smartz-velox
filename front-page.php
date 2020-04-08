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

wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );

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
		<?php get_template_part( 'template-parts/content/chat_bubble' ); ?>
		<!-- #video -->

		<!-- #video -->
		<?php get_template_part( 'template-parts/content/video_element' ); ?>
		<!-- #video -->

		<!-- #testimonials -->
		<section class="testimonials wrap-large">
				<h1>What Our Customers Are Saying</h1>
				<div data-bid="28546" data-url="https://smartsolutions.reviewability.com" ><script src="https://widget.reviewability.com/js/widgetAdv.min.js" async></script></div><script class="json-ld-content" type="application/ld+json"></script>
		</section>
		<!-- #testimonials -->
		
		<!-- #Featured Post -->
		<?php get_template_part( 'template-parts/content/featured_post' ); ?>
    <!-- #Featured Post -->


	</main><!-- #primary -->
<?php
get_footer();
