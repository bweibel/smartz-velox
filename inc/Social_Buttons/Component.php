<?php
/**
 * WP_Rig\WP_Rig\Social_Buttons\Component class
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig\Social_Buttons;

use WP_Rig\WP_Rig\Component_Interface;
use WP_Rig\WP_Rig\Templating_Component_Interface;
use WP_Customize_Manager;
use function add_action;
use function __;
use function get_theme_mod;

/**
 * Class for allowing administrators to decide whether to display content or excerpt in archives.
 *
 * Exposes template tags:
 * * `wp_rig()->using_archive_excerpts()`
 */
class Component implements Component_Interface, Templating_Component_Interface {

	/**
	 * Gets the unique identifier for the theme component.
	 *
	 * @return string Component slug.
	 */
	public function get_slug() : string {
		return 'social_buttons';
	}

	/**
	 * Adds the action and filter hooks to integrate with WordPress.
	 */
	public function initialize() {
		add_action( 'customize_register', array( $this, 'action_register_customizer_control' ) );
	}

	/**
	 * Gets template tags to expose as methods on the Template_Tags class instance, accessible through `wp_rig()`.
	 *
	 * @return array Associative array of $method_name => $callback_info pairs. Each $callback_info must either be
	 *               a callable or an array with key 'callable'. This approach is used to reserve the possibility of
	 *               adding support for further arguments in the future.
	 */
	public function template_tags() : array {
		return array(
		);
	}

	/**
	 * Adds a Customizer setting and control for toggling usage of `the_content()` or `the_excerpt()` in archives.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer manager instance.
	 */
	public function action_register_customizer_control( WP_Customize_Manager $wp_customize ) {

		$wp_customize->add_setting(
			'social_facebook',
			array(
				'default'           => '',
			)
		);

		$wp_customize->add_control(
			'social_facebook',
			array(
				'label'   => __( 'Facebook link', 'wp-rig' ),
				'section' => 'contact_info',
				'type'    => 'text',
			)
		);

		$wp_customize->add_setting(
			'social_twitter',
			array(
				'default'           => '',
			)
		);

		$wp_customize->add_control(
			'social_twitter',
			array(
				'label'   => __( 'Twitter link', 'wp-rig' ),
				'section' => 'contact_info',
				'type'    => 'text',
			)
		);

		$wp_customize->add_setting(
			'social_linkedin',
			array(
				'default'           => '',
			)
		);

		$wp_customize->add_control(
			'social_linkedin',
			array(
				'label'   => __( 'LinkedIn link', 'wp-rig' ),
				'section' => 'contact_info',
				'type'    => 'text',
			)
		);
		
	}

	/**
	 * Determines whether archives should use excerpts instead of regular post content.
	 *
	 * @return bool Whether to use excerpts in archives.
	 */
	public function using_archive_excerpts() : bool {
		return (bool) get_theme_mod( 'archives_use_excerpt' );
	}
}