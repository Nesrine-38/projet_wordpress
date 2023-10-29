<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicore
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'medicore' ); ?></a>
	<div id="preloader"></div>
    <!-- Header-Sectio -->
    <header>
        <!-- header-one -->
        <div class="header-one header-fixed">
            <div class="container">
                <nav class="main-navbar navbar navbar-expand-lg navbar-light">
                    <?php
                    if ( has_custom_logo() ) { ?>
                        <!-- Brand -->
                        <?php the_custom_logo(); ?> 
                    <?php   
                    } else{
                    if (display_header_text()==true){ ?>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
                            <span class="site-title"><?php bloginfo('name'); ?></span>
                            <?php if ( get_bloginfo( 'description' ) ) { ?>
                            <p><span class="site-description"><?php  bloginfo('description'); ?></span></p>
                            <?php } ?>
                        </a>   
                    <?php 
                    }}
                    ?>
                    <div class="collapse navbar-collapse my-lg-0" id="navbarNav">
                        <?php
                        wp_nav_menu( 
                            array(
                                'theme_location' => 'primary',
                                'container'  => '',
                                'menu_class' => 'navbar-nav navbar__nav  nav justify-content-end menuon',
                                'menu_id'        => 'primary-menu',
                            ) 
                        );
                        ?>
                    </div>
                </nav>
                <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); 
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                if ( has_custom_logo() ) { 
                ?>
                    <div class="mobile-menu" data-type="logo" data-link="<?php echo esc_attr( home_url('/') ); ?>" data-logo="<?php echo esc_attr( $logo[0] ); ?>"> </div>
                <?php } else{ ?>
                    <div class="mobile-menu" data-type="text" data-link="<?php echo esc_attr( home_url('/') ); ?>" data-logo="<?php bloginfo( 'name' ); ?>"> </div>
                <?php } ?>

                
            </div>
        </div>
    </header>
    <!-- End-Header-Section -->
    <?php if(!(is_page_template( 'medicore-home.php' ) || is_home() || is_front_page())){ ?>
        <!-- Main-Section -->
        <main class="page-wapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page-wapper-box">
                            <?php if (is_home() || is_front_page()) { ?>
                                <h3 class="hero__title"><?php echo esc_html__('blog', 'medicore') ?></h3>
                            <?php } elseif(is_search()){?>
                                <h3 class="hero__title"><?php   
                                /* translators: %s: search term */             
                                printf( esc_html__( 'Search Results for: %s', 'medicore' ), '<span>' . get_search_query() . '</span>' ); ?>
                                </h3>
                            <?php }else if(is_archive()){ ?>
                                <h3 class="hero__title"><?php the_archive_title(); ?></h3>
                            <?php }elseif(is_404()){  ?>                      
                                <h3 class="hero__title"><?php echo esc_html__('Error', 'medicore') ?></h3>
                            <?php }else{ ?>
                                <h3 class="hero__title"><?php the_title(); ?></h3>
                            }
                            <?php } ?> 
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End-Main-Section -->
    <?php } ?>
    <div id="content" class="site-content">