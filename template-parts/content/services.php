<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
?>
<section class="services sloped">
			<div class="wrap">
				<h1><?php the_field( "services_title" ); ?></h1>
				<?php the_field( "services_copy" ); ?>
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
