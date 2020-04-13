<?php
/**
 * Template part for displaying the footer info
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$facebook = get_theme_mod('social_facebook');
$twitter = get_theme_mod('social_twitter');
$linkedin = get_theme_mod('social_linkedin');

if($facebook || $twitter || $linkedin) {
	echo '<div class="social-icons">';
	echo '<h3>Connect With Us</h3>';
	if($facebook) {
		printf('<a href="http://%s" class="facebook" target="_blank" aria-label="Visit us on Facebook"></a>', $facebook);
	}
	if($twitter) {
		printf('<a href="http://%s" class="twitter" target="_blank" aria-label="Visit us on Twitter"></a>', $twitter);
	}
	if($linkedin) {
		printf('<a href="http://%s" class="linkedin" target="_blank" aria-label="Visit us on LinkedIn"></a>', $linkedin);
	}
	
echo '</div>';
}
get_template_part( 'template-parts/header/phone' ); 
printf('<p class="address">%s</p>', get_theme_mod('address'));
?>