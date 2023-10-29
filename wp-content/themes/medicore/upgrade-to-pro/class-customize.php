<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Medicore_btn_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {
		require_once get_template_directory() . '/upgrade-to-pro/section-pro.php';


		wp_enqueue_script( 'medicore-customize-controls', trailingslashit( get_template_directory_uri() ) . '/upgrade-to-pro/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'medicore-customize-controls', trailingslashit( get_template_directory_uri() ) . '/upgrade-to-pro/customize-controls.css' );

	}
	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		require_once get_template_directory() . '/upgrade-to-pro/section-pro.php';

		// Register custom section types.
		$manager->register_section_type( 'Medicore_Customize_btn_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Medicore_Customize_btn_Section_Pro(
				$manager,
				'medicore',
				array(
					'title'    => esc_html__( 'Know More Medicore', 'medicore' ),
					'pro_text' => esc_html__( 'Upgrade To Pro',         'medicore' ),
					'pro_url'  => 'https://weblizar.com/themes/medicore-premium/',
					'priority' => 0
				)
			)
		);
		
	}

	
}

// Doing this customizer thang!
Medicore_btn_Customize::get_instance();