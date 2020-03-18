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
		<section class="call-to-action fancy-background">
				<h2>Work better.<br>Play more.</h2>
				<h3>I.T. support you can trust</h3>
				<p>We help you work better by providing integrated systems management and strategic forecasting to keep your time at work focused on, well, work! When you leave for the day, you can leave knowing your environment and data are secure and ready for your return. Who knew work-life-balance could be so sustainable?</p>
				<p>You can play more by becoming our strategic partner and letting us do the heavy lifting. Need a well-designed network? Smart applications? Cloud migration assistance? We’ll get those designs in place and provide a road-map of how to achieve those goals so you can enjoy life beyond planning.</p>
			<figure>
				<img src="wp-content/themes/velox-dev/assets/images/Velox-Caricatures-Jordan@2x.png" alt="">
			</figure>
		</section>
		<!-- #call to action -->
		
		<!-- #standard page content -->
		<?php
		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry_content', get_post_type() );		}
		?>
		<!-- #standard page content -->

		<!-- #services -->
		<section class="services">
			<div class="entry-content">
				<h2>Your IT Environment, Synchronized</h2>
				<p>Velox Systems has a wide variety of tools to create a secure business environment, tailored to your specific needs. These tools combined with our experience will provide a cohesive working experience for you and your team. </p>
			</div>
				
				<div class="container">
					<div class="service"></div>
					<div class="service"></div>
					<div class="service"></div>
					<div class="service"></div>
					<div class="service"></div>
					<div class="service"></div>
				</div>
		</section>
		<!-- #services -->
		
		<!-- #video -->
		<section class="entry-content">
				<h2>The Velox Advantage</h2>
				<p>Competitive markets require every advantage available to you with managed IT services, your business can outpace your competitors. Take advantage of the IT services that Velox Systems offers to put you ahead of the competition.</p>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/aIUQ7DsOCg0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<a href="#" class="button">Meet the Team</a>
		</section>
		<!-- #video -->
		<!-- #testimonials -->
		<section>
				<h2>What Our Customers Are Saying</h2>

		</section>
		<!-- #testimonials -->
		
		<!-- #testimonials -->
		<section class="blog">
				<h2>Latest News</h2>

		</section>
    <!-- #testimonials -->


	</main><!-- #primary -->
<?php
get_footer();
