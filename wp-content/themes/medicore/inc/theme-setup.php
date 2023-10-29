<?php
defined( 'ABSPATH' ) or die();

function medicore_theme_setup() {
	/*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     * If you're building a theme based on Theme Palace, use a find and replace
     * to change 'enigma' to the name of your theme in all the template files.
     */
    load_theme_textdomain( 'medicore' );

	/* Register custom menu. */
	register_nav_menu( 'primary', esc_html__( 'Primary Menu', 'medicore' ) );

	/* Gutenberg */
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'align-wide' );
	add_theme_support('responsive-embeds');
	add_theme_support( 'customize-selective-refresh-widgets' );	

	/* Add editor style. */
	add_theme_support( 'editor-styles' );
	add_theme_support( 'dark-editor-style' );
	/*
     * This theme styles the visual editor to resemble the theme style,
     * specifically font, colors, icons, and column width.
    */
    add_editor_style('/assets/css/editor-style.css');

	/* Load editor style. */
	add_editor_style();

	/* Add default posts and comments RSS feed links to head. */
	add_theme_support( 'automatic-feed-links' );

	/* Enable support for Post Thumbnails. */
	add_theme_support( 'post-thumbnails' );

	/* Add title tag support. */
	add_theme_support( 'title-tag' );


    /* Enable support for HTML5 */
    add_theme_support( 'html5', array(
	    'comment-form',
	    'comment-list',
	    'gallery',
	    'caption',
	  ) );

    /* Custom Logo */
    add_theme_support( 'custom-logo', array(    	
    	'header-text' => array( 'site-title', 'site-description' ),
    ) );

    add_theme_support( 'custom-background' );

    if ( ! isset( $content_width ) ) $content_width = 900;
}

/** Theme setup **/
add_action( 'after_setup_theme', 'medicore_theme_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function medicore_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'medicore_content_width', 640 );
}
add_action( 'after_setup_theme', 'medicore_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function medicore_widgets_init() {

    /*sidebar*/
    register_sidebar( array(
        'name' => esc_html__( 'Sidebar', 'medicore' ),
        'id' => 'sidebar-primary',
        'description' => esc_html__( 'The primary widget area', 'medicore' ),
        'before_widget' => '<div id="%1$s" class="widget side-box %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h3>',
	    'after_title' => '</h3>',
    ) );

	register_sidebar( array(
	    'name' => esc_html__( 'Footer Widgets 1', 'medicore' ),
	    'id' => 'footer-widget-area-1',
	    'description' => esc_html__( 'footer widget area', 'medicore' ),
	    'before_widget' => '<div id="%1$s" class="widget f-links %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="f-title">',
		'after_title' => '</h4>',
	) ); 

	register_sidebar( array(
	    'name' => esc_html__( 'Footer Widgets 2', 'medicore' ),
	    'id' => 'footer-widget-area-2',
	    'description' => esc_html__( 'footer widget area', 'medicore' ),
	    'before_widget' => '<div id="%1$s" class="widget f-links %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="f-title">',
		'after_title' => '</h4>',
	) ); 
	register_sidebar( array(
	    'name' => esc_html__( 'Footer Widgets 3', 'medicore' ),
	    'id' => 'footer-widget-area-3',
	    'description' => esc_html__( 'footer widget area', 'medicore' ),
	    'before_widget' => '<div id="%1$s" class="widget f-links %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="f-title">',
		'after_title' => '</h4>',
	) ); 
	register_sidebar( array(
	    'name' => esc_html__( 'Footer Widgets 4', 'medicore' ),
	    'id' => 'footer-widget-area-4',
	    'description' => esc_html__( 'footer widget area', 'medicore' ),
	    'before_widget' => '<div id="%1$s" class="widget f-links %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="f-title">',
		'after_title' => '</h4>',
	) ); 
}

/** Theme **/
add_action( 'widgets_init', 'medicore_widgets_init' );