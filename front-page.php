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
		<section class="call-to-action fancy-background sloped">
			<div class="wrap wrap-large">
				<section class="pitch">
					<h2 class="title">Work better.<br>Play more.</h2>
					<h3 class="subtitle">I.T. support you can trust</h3>
					<p>We help you work better by providing integrated systems management and strategic forecasting to keep your time at work focused on, well, work! When you leave for the day, you can leave knowing your environment and data are secure and ready for your return. Who knew work-life-balance could be so sustainable?</p>
					<p>You can play more by becoming our strategic partner and letting us do the heavy lifting. Need a well-designed network? Smart applications? Cloud migration assistance? We’ll get those designs in place and provide a road-map of how to achieve those goals so you can enjoy life beyond planning.</p>
					<p>Not sure where to go?</p>
				</section>
				<figure>
					<img src="wp-content/themes/velox-dev/assets/images/Velox-Caricatures-Jordan@2x.png" alt="Caricature" role="presentation">
				</figure>
				<a href="#" class="button button--big">Let's Figure it Out Together</a>
			</div>
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
		<section class="services sloped">
			<div class="wrap">
				<h2>Your IT Environment, Synchronized</h2>
				<p>Velox Systems has a wide variety of tools to create a secure business environment, tailored to your specific needs. These tools combined with our experience will provide a cohesive working experience for you and your team. </p>
			</div>
				
				<div class="container wrap-large">
					<div class="service" data-image-src="wp-content/uploads/2020/03/VeloxBranding-6-720x480.jpg">
						<img src="wp-content/themes/velox-dev/assets/images/Velox-Website-Icon-Cloud.svg" alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src="wp-content/themes/velox-dev/assets/images/Velox-Website-Icon-Cloud.svg" alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src="wp-content/themes/velox-dev/assets/images/Velox-Website-Icon-Cloud.svg" alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src="wp-content/themes/velox-dev/assets/images/Velox-Website-Icon-Cloud.svg" alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src="wp-content/themes/velox-dev/assets/images/Velox-Website-Icon-Cloud.svg" alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src="wp-content/themes/velox-dev/assets/images/Velox-Website-Icon-Cloud.svg" alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
				</div>
		</section>
		<!-- #services -->
		
		<!-- #video -->
		<section class="video-element sloped-top">
			<div class="wrap">
				<h2>The Velox Advantage</h2>
				<p>Competitive markets require every advantage available to you with managed IT services, your business can outpace your competitors. Take advantage of the IT services that Velox Systems offers to put you ahead of the competition.</p>
				<div class="video-container">
					<iframe width="100%" src="https://www.youtube.com/embed/aIUQ7DsOCg0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<a href="#" class="button">Meet the Team</a>
			</div>
				
		</section>
		<!-- #video -->
		<!-- #testimonials -->
		<section class="wrap">
				<h2>What Our Customers Are Saying</h2>
				<p>Velox Systems offers a wide variety of business IT services. No matter what your business needs, Velox Systems possesses the tools and experience to meet them. These services include:</p>
		</section>
		<!-- #testimonials -->
		
		<!-- #testimonials -->
		<section class="blog wrap">
				<h2>Latest News</h2>
						[Blog Element]
		</section>
    <!-- #testimonials -->


	</main><!-- #primary -->
<?php
get_footer();
