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
		<section class="services sloped">
			<div class="wrap">
				<h1>Your IT Environment, Synchronized</h1>
				<p>Velox Systems has a wide variety of tools to create a secure business environment, tailored to your specific needs. These tools combined with our experience will provide a cohesive working experience for you and your team. </p>
			</div>
				
				<div class="container wrap-large">
					<div class="service" data-image-src="wp-content/uploads/2020/03/VeloxBranding-6-720x480.jpg">
						<img src=<?php printf( $theme . "/assets/images/Velox-Website-Icon-Cloud.svg") ?> alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src=<?php printf( $theme . "/assets/images/Velox-Website-Icon-Cloud.svg") ?> alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src=<?php printf( $theme . "/assets/images/Velox-Website-Icon-Cloud.svg") ?> alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src=<?php printf( $theme . "/assets/images/Velox-Website-Icon-Cloud.svg") ?> alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src=<?php printf( $theme . "/assets/images/Velox-Website-Icon-Cloud.svg") ?> alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
					<div class="service">
						<img src=<?php printf( $theme . "/assets/images/Velox-Website-Icon-Cloud.svg") ?> alt="Cloud Icon" class="icon-service">
						<h3 class="title ">IT Cost Engineering</h3>
						<div class="icon-arrow"></div>
						<a href="#" class="service-link"></a>
					</div>
				</div>
		</section>
		<!-- #services -->
		
		<!-- #video -->
		<section class="video-element sloped-top blue-background">
			<div class="wrap">
				<h1>The Velox Advantage</h1>
				<p>Competitive markets require every advantage available to you with managed IT services, your business can outpace your competitors. Take advantage of the IT services that Velox Systems offers to put you ahead of the competition.</p>
				<div class="video-container">
					<iframe width="100%" src="https://www.youtube.com/embed/aIUQ7DsOCg0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<a href="#" class="button">Meet the Team</a>
			</div>
				
		</section>
		<!-- #video -->
		<!-- #testimonials -->
		<section class="testimonials wrap">
				<h1>What Our Customers Are Saying</h1>
				<div id="popup-rating-widget"><script id="popup-rating-widget-script" src="https://widget.reviewability.com/js/popupWidget.min.js" data-gfspw="https://smartsolutions.reviewability.com/popup-pixel/get/83bf6561ba40f7e1c11c1c47c0b4bb4b6982726c?clientId=103501" async></script></div>
		</section>
		<!-- #testimonials -->
		
		<!-- #Featured Post -->
		<section class="featured-post fancy-background">
			<div class="wrap">
				<h1>Latest News</h1>
				[Blog Element]
					</div>
				
		</section>
    <!-- #Featured Post -->


	</main><!-- #primary -->
<?php
get_footer();
