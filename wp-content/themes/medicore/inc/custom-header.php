<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package medicore
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses medicore_header_style()
 */
function medicore_custom_header_setup() {
	add_theme_support(
		'custom-header',
		apply_filters(
			'medicore_custom_header_args',
			array(
				'default-image'      => '',
				'default-text-color' => '000000',
				'width'              => 1000,
				'height'             => 250,
				'flex-height'        => true,
				'wp-head-callback'   => 'medicore_header_style',
			)
		)
	);
}
add_action( 'after_setup_theme', 'medicore_custom_header_setup' );

if ( ! function_exists( 'medicore_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see medicore_custom_header_setup().
	 */
	function medicore_header_style() {
		$header_text_color = get_header_textcolor();
        $header_image      = get_header_image();
        
        $custom_css = "";
        
        if ( ! display_header_text() ) {
            $custom_css .= "
                .navbar-brand .site-title,.navbar-brand .site-title:hover {
                color: rgba(241, 241, 241, 0);
                position:absolute;
                clip: rect(1px 1px 1px 1px);
                }
                .site-description{
                color: rgba(241, 241, 241, 0);
                position:absolute;
                clip: rect(1px 1px 1px 1px);
                }";
        } else {
            $custom_css .= ".navbar-brand .site-title,
            .site-description{
                color: #".esc_attr( $header_text_color ).";
            }";
        } 
        if ( has_header_image() ) { 
            $custom_css .= ".page-wapper {
                background-image: url(".$header_image.");
                background-size:cover;
                }
            ";
        } 

        // If we get this far, we have custom styles. Let's do this.
        wp_enqueue_style(
            'medicore-custom-header-style',
            get_template_directory_uri() . '/assets/css/custom-header-style.css'
        );
        wp_add_inline_style( 'medicore-custom-header-style', $custom_css ); 
        ?>
		<?php
	}
endif;