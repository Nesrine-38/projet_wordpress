<?php
/**
 * medicore Theme Customizer
 *
 * @package medicore
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function medicore_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'medicore_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'medicore_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'medicore_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function medicore_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function medicore_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function medicore_customize_preview_js() {
	wp_enqueue_script( 'medicore-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '', true );
}
add_action( 'customize_preview_init', 'medicore_customize_preview_js' );

/***
    *** Register Customizer Add Panel Function Code start Here
***/
function medicore_Customizer_Add_Panel_Function( $wp_customize ) {

	// Create Custom Aanel for Home Page.
	$wp_customize->add_panel( 'medicore_Panel_Function', array(
		'theme_supports' => '',
		'title'          => __( ' Medicore Theme Options ', 'medicore' ),
		'priority' => 1,
	) ); 
}
add_action( 'customize_register', 'medicore_Customizer_Add_Panel_Function' );
/***
    *** Register Customizer Add Panel Function Code END Here
***/

/***
    *** Register Customizer Home Banner Section Code start Here
***/
class medicore_Banner_Customizer {

	public static function medicore__Banner_Section( $wp_customize ) {

		// Add Home Banner Section Add Section for home page.
		$wp_customize->add_section( 'medicore_For_Home_Page_Banner_Section' , array(
			'title'    => __(' Home Banner Section ','medicore'),
			'panel'    => 'medicore_Panel_Function',
			'priority' => 1,
		) );

		//  ============================================================
	    //       Home Page Banner Section Image Upload         
	    //  ============================================================
	    $wp_customize->add_setting( 'medicore_Banner_Section_Image_Upload', array( 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
	    )); 
	        	   
	    $wp_customize->add_control( new WP_Customize_Image_Control( 
	    	$wp_customize, 'medicore_Home_Banner_Section_Image_Upload_Id', array(
	        'label'    => ' Banner Image ',
	        'priority' => 1,
	        'section'  => 'medicore_For_Home_Page_Banner_Section',
	        'settings' => 'medicore_Banner_Section_Image_Upload',
	        'button_labels' => array(
	                    // All These labels are optional
	                    'select' => __( 'Select Image', 'medicore' ),
	                    'remove' => __( 'Remove Image', 'medicore' ),
	                    'change' => __( 'Change Image', 'medicore' )
	                    )
	    )));

		//  ============================================================
	    //       Home Page Banner Section Section Title        
	    //  ============================================================
		$wp_customize->add_setting( 'medicore_Banner_Section_Title_Name', array(
			'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			
		) );

		// Add Banner Title Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'medicore_Home_Banner_Section_ID',
			    array(
			        'label'    => __( ' Banner Title ', 'medicore' ),
			        'section'  => 'medicore_For_Home_Page_Banner_Section',
			        'settings' => 'medicore_Banner_Section_Title_Name',
			        'type'     => 'text',
			        'priority' => 2,
			    )
		    )
		);

		//  ============================================================
	    //       Home Page Banner Section Content        
	    //  ============================================================
		$wp_customize->add_setting( 'medicore_Banner_Section_Content_Textarea', array(
			'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			
		) );

		// Add Banner Content Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'medicore_Banner_Section_Main_Content',
			    array(
			        'label'    => __( ' Banner Content ', 'medicore' ),
			        'section'  => 'medicore_For_Home_Page_Banner_Section',
			        'settings' => 'medicore_Banner_Section_Content_Textarea',
			        'type'     => 'textarea',
			        'priority' => 3,
			    )
		    )
		);

		//  ============================================================
	    //       Home Page Banner Section Button Text         
	    //  ============================================================
		$wp_customize->add_setting( 'medicore_Banner_Section_Button_Text', array(
			 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			 
		) );

		// Button Text Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'medicore_Home_Banner_Section_Button_Text',
			    array(
			        'label'    => __( ' Button Text ', 'medicore' ),
			        'section'  => 'medicore_For_Home_Page_Banner_Section',
			        'settings' => 'medicore_Banner_Section_Button_Text',
			        'type'     => 'text',
			        'priority' => 4,
			    )
		    )
		);

		//  ============================================================
	    //       Home Page Banner Section Button Url Path          
	    //  ============================================================
		$wp_customize->add_setting( 'medicore_Banner_Btn_URl_Path', array(
			 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			 
		) );

		// Add Button Url Path Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'medicore_Custom_Button_URl_Path',
			    array(
			        'label'    => __( ' Button Url ', 'medicore' ),
			        'section'  => 'medicore_For_Home_Page_Banner_Section',
			        'settings' => 'medicore_Banner_Btn_URl_Path',
			        'type'     => 'text',
			        'priority' => 4,
			    )
		    )
		);

		//  ============================================================
	    //       Home Page Banner Section Button 2 Text         
	    //  ============================================================
		$wp_customize->add_setting( 'medicore_Banner_Section_Button2_Text', array(
			 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			 
		) );

		// Button Text Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'medicore_Home_Banner_Section_Button2_Text',
			    array(
			        'label'    => __( ' Button 2 Text ', 'medicore' ),
			        'section'  => 'medicore_For_Home_Page_Banner_Section',
			        'settings' => 'medicore_Banner_Section_Button2_Text',
			        'type'     => 'text',
			        'priority' => 5,
			    )
		    )
		);

		//  ============================================================
	    //       Home Page Banner Section Button Url Path          
	    //  ============================================================
		$wp_customize->add_setting( 'medicore_Banner_Btn2_URl_Path', array(
			 'sanitize_callback' => 'Home_Banner_Section_Sanitize_Text_Function',
			 
		) );

		// Add Button Url Path Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'medicore_Custom_Button2_URl_Path',
			    array(
			        'label'    => __( ' Button 2 Url ', 'medicore' ),
			        'section'  => 'medicore_For_Home_Page_Banner_Section',
			        'settings' => 'medicore_Banner_Btn2_URl_Path',
			        'type'     => 'text',
			        'priority' => 5,
			    )
		    )
		); 

	    // Sanitize Text Function For Home Banner
		function Home_Banner_Section_Sanitize_Text_Function( $text ) {
		    return sanitize_text_field( $text );
		}
	}
}
add_action( 'customize_register', array('medicore_Banner_Customizer', 'medicore__Banner_Section') );


/***
    *** Register Customizer Blog Section Code start Here
***/
class medicore_Blog_Customizer {

	public static function medicore_Blog_section( $wp_customize ) {

		// Add Blog Section
		$wp_customize->add_section( 'medicore__for_Blog_section' , array(
			'title'    => __(' Blog Section ','medicore'),
			'panel' => 'medicore_Panel_Function',
		) );

		/*******************************************************************************
		                    Blog Section Title Text Code 
		********************************************************************************/
		$wp_customize->add_setting( 'medicore_Blog_Section_Title', array(
	       'sanitize_callback' => 'medicore_Blog_Section_Page_Sanitize_Text',
		) );

		// Add Blog Section Title Add control
		$wp_customize->add_control( new WP_Customize_Control(
		    $wp_customize,
			'medicore_Blog_Section_ID',
			    array(
			        'label'    => __( ' Blog Section Title ', 'medicore' ),
			        'section'  => 'medicore__for_Blog_section',
			        'settings' => 'medicore_Blog_Section_Title',
			        'type'     => 'text',
			        'priority' => 1,
			    )
		    )
		);	  

		// Sanitize Text Function For Home Blog  Section
		function medicore_Blog_Section_Page_Sanitize_Text( $text ) {
		    return sanitize_text_field( $text );
		}	
	}
}
add_action( 'customize_register', array('medicore_Blog_Customizer', 'medicore_Blog_section') );
/***
    *** Register Customizer Blog Section Code End Here
***/