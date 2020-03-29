<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

if ( ! wp_rig()->is_primary_nav_menu_active() ) {
	return;
}

$themeUri = get_template_directory_uri();

?>

<nav id="site-footer-navigation" class="main-navigation nav--toggle-sub nav--toggle-small" aria-label="<?php esc_attr_e( 'Main menu', 'wp-rig' ); ?>">

  <a class="menu-icon" href="">
    <img src=<?php printf($themeUri . "/assets/images/Velox-Website-Icon-Mobile-Services.svg")?> alt="Services">
    Services
  </a>
  <a class="menu-icon" href="">
    <img src=<?php printf($themeUri . "/assets/images/Velox-Website-Icon-Mobile-Industries.svg")?> alt="Industries">
    Industries
  </a>
  <a class="menu-icon" href="">
    <img src=<?php printf($themeUri . "/assets/images/Velox-Website-Icon-Mobile-Resources.svg")?> alt="Resources">
    Resources
  </a>
  <a class="menu-icon" href="">
    <img src=<?php printf($themeUri . "/assets/images/Velox-Website-Icon-Mobile-About.svg")?> alt="Menu">
    About
  </a>

	<button class="menu-toggle menu-icon" aria-label="<?php esc_attr_e( 'Open menu', 'wp-rig' ); ?>" aria-controls="primary-menu" aria-expanded="false">
      <img src=<?php printf($themeUri . "/assets/images/Velox-Website-Icon-Mobile-Menu.svg")?> alt="Menu">
	</button>

	<div class="primary-menu-container">
		<?php wp_rig()->display_primary_nav_menu( [ 'menu_id' => 'primary-menu' ] ); ?>
	</div>
</nav><!-- #site-navigation -->
