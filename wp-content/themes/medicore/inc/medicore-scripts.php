<?php
defined( 'ABSPATH' ) or die();

function medicore_fonts_url() {
    $fonts_url = '';

    $font_families = array();

    $font_families[] = 'Open+Sans:300,400,600,700,800';
    $font_families[] = 'Poppins:400,500,600,700,800';

    $query_args = array(
        'family' => urlencode( implode( '|', $font_families ) ),
    );

    $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

    return esc_url_raw( $fonts_url );
}

/**
 * Enqueue scripts and styles.
*/
function medicore_scripts() {

    wp_enqueue_style( 'medicore-font', medicore_fonts_url(), array(), null );

    wp_enqueue_style( 'medicore-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');

    wp_enqueue_style( 'medicore-font-awesome', get_template_directory_uri(). '/assets/css/all.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri(). '/assets/css/animate.css' );
    wp_enqueue_style( 'slicknav',   get_template_directory_uri() . '/assets/css/slicknav.css' );
    wp_enqueue_style( 'magnific-popup',   get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'slick',   get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'slicktheme',   get_template_directory_uri() . '/assets/css/slick-theme.css' );

    wp_enqueue_style( 'medicore-custom-style', get_template_directory_uri() . '/assets/css/custom-style.css');
    wp_enqueue_style( 'medicore-skin-one', get_template_directory_uri() . '/assets/css/skin-one.css');

    wp_enqueue_style( 'medicore-style', get_stylesheet_uri() );

    wp_enqueue_style( 'medicore-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );

    wp_enqueue_script( 'medicore-bootstrap-js', get_template_directory_uri() .'/assets/js/bootstrap.js', array( 'jquery' ), true, true); 
    wp_enqueue_script( 'medicore-popper-js', get_template_directory_uri() .'/assets/js/popper.js', array( 'jquery' ), true, true);
    wp_enqueue_script( 'medicore-jquery.magnific-popup-js', get_template_directory_uri() .'/assets/js/jquery.magnific-popup.js', array( 'jquery' ), true, true); 
    wp_enqueue_script( 'medicore-isotope.pkgd-js', get_template_directory_uri() .'/assets/js/isotope.pkgd.js', array( 'jquery' ), true, true);   
    wp_enqueue_script( 'medicore-imagesloaded-js', get_template_directory_uri() .'/assets/js/imagesloaded.js', array( 'jquery' ), true, true); 
    wp_enqueue_script( 'jquery-slicknav',  get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array( 'jquery' ), true, true); 
    wp_enqueue_script( 'slick-js',         get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), true, true);
    wp_enqueue_script( 'medicore-custom-script', get_template_directory_uri() . '/assets/js/custom.js', array( 'jquery' ), true, true); 
    wp_enqueue_script( 'medicore-navigation', get_template_directory_uri() . '/assets/js/navigation.js',array( 'jquery' ), true, true);  
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'medicore_scripts' );