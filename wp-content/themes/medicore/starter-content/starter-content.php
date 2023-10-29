<?php
/**
 * medicore Starter Content
 *
 * @link https://make.wordpress.org/core/2016/11/30/starter-content-for-themes-in-4-7/
 *
 * @package Medicore
 * @subpackage medicore
 * @since medicore

/**
 * Function to return the array of starter content for the theme.
 *
 * Passes it through the `medicore_starter_content` filter before returning.
 *
 * @since medicore
 *
 * @return array A filtered array of args for the starter_content.
*/
function medicore_starter_content() {

	// Define and register starter content to showcase the theme on new sites.
	$starter_content = array(

		// Specify the core-defined pages to create and add custom thumbnails to some of them.
		'posts'     => array(
			'home' => require get_template_directory() . '/starter-content/home.php',
			'about',
			'contact',
			'blog',
		),

		// Default to a static front page and assign the front and posts pages.
		'options'   => array(
			'show_on_front'  => 'page',
			'page_on_front'  => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),

		// Set up nav menus for each of the two areas registered in the theme.
		'nav_menus' => array(
			// Assign a menu to the "primary" location.
			'primary' => array(
				'name'  => esc_html__( 'Primary menu', 'medicore' ),
				'items' => array(
					'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),

		'theme_mods'  => array(
			'custom_logo'                              => '{{featured-image-logo}}',
			'blogdescription'                          => '',
			'blogname'                                 => '',
			'blogname'                                 => '',

		),

		'attachments' => array(
			'featured-image-logo' => array(
				'post_title'   => 'Featured Logo',
				'post_content' => 'Attachment Description',
				'post_excerpt' => 'Attachment Caption',
				'file'         => '/starter-content/img/logo.png',
			),
		),

		'widgets'     => array(
			// Place one core-defined widgets in the first footer widget area.
			'footer-widget-area-1' => array(
				'text_about',
				
			),
			// Place one core-defined widgets in the second footer widget area.
			'footer-widget-area-2' => array(
				'search',
			),
			// Place one core-defined widgets in the second footer widget area.
			'footer-widget-area-3' => array(
				'calendar',
			),
			// Place one core-defined widgets in the second footer widget area.
			'footer-widget-area-4' => array(
				'text_business_info',
			),
		),

	);

	/**
	 * Filters the array of starter content.
	 *
	 * @since medicore
	 *
	 * @param array $starter_content Array of starter content.
	 */
	return apply_filters( 'medicore_starter_content', $starter_content );
}