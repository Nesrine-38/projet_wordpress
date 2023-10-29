<?php 
/***
    *** Register Customizer Sidebar Layout Section Code start Here
***/
class Sidebar_Layout_Section_Customizer {

	public static function Customizer_For_Sidebar_Layout_Section( $wp_customize ) {

		// Add Blog Sidebar Layout Section for Theme...
		$wp_customize->add_section( 'blog-sidebar-section' , array(
			'title'    => __(' Sidebar Layout ','mederma'),
			'panel'    => 'medicore_Panel_Function',
		) );

		//  ============================================================
	    //      Blog Sidebar Layout Section         
	    //  ============================================================
		$wp_customize->add_setting('blog_page_sidebar_layout',
	        array(
	        	'sanitize_callback' => 'Sidebar_Layout_Sanitize_Text_Function',
	            'default'           => 'rightsidebar',
	        )
	    );
	    $wp_customize->add_control('blog_page_sidebar_layout',
	        array(
	            'type'        => 'select',
	            'label'       => esc_html__('Blog Page Sidebar Layout', 'mederma'),
	            'description' => esc_html__('This will be apply for Blog Page Sidebar Layout', 'mederma'),
	            'section'     => 'blog-sidebar-section',
	            'settings' => 'blog_page_sidebar_layout',
	            'choices'     => array(
	                'rightsidebar' => esc_html__('Right Sidebar', 'mederma'),
	                'leftsidebar'  => esc_html__('Left Sidebar', 'mederma'),
	                'nosidebar'    => esc_html__('No Sidebar', 'mederma'),
	            ),
	        )
	    );

	    //  ============================================================
	    //      Single Post Sidebar Layout Section         
	    //  ============================================================
		$wp_customize->add_setting('single_post_sidebar_layout',
	        array(
	        	'sanitize_callback' => 'Sidebar_Layout_Sanitize_Text_Function',
	            'default'           => 'singel_right_sidebar',
	        )
	    );
	    $wp_customize->add_control('single_post_sidebar_layout',
	        array(
	            'type'        => 'select',
	            'label'       => esc_html__(' Single Post Sidebar Layout', 'mederma'),
	            'description' => esc_html__('This will be apply for Single Post Sidebar Layout', 'mederma'),
	            'section'     => 'blog-sidebar-section',
	            'settings' => 'single_post_sidebar_layout',
	            'choices'     => array(
	                'singel_right_sidebar' => esc_html__('Right Sidebar', 'mederma'),
	                'singel_left_sidebar'  => esc_html__('Left Sidebar', 'mederma'),
	                'singel_no_sidebar'    => esc_html__('No Sidebar', 'mederma'),
	            ),
	        )
	    );

	   

	    // Sanitize Funcxtion
		function Sidebar_Layout_Sanitize_Text_Function( $text ) {
		    return sanitize_text_field( $text );
		}

	}
}

add_action( 'customize_register', array('Sidebar_Layout_Section_Customizer', 'Customizer_For_Sidebar_Layout_Section') );
/***
    *** Register Customizer Sidebar Layout 
***/