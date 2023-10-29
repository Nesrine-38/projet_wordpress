<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package medicore
 */

get_header();
?>

<!-- Error-Area -->
<section class="error-page">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12">
                <div class="error-box">
                    <h1><?php echo esc_html__('Sorry !', 'medicore') ?> <br> <?php echo esc_html__('Error 404', 'medicore') ?></h1>
                    <h3><?php echo esc_html__('Oops.... Sorry Page Not Found !', 'medicore') ?></h3>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="default-btn"><?php echo esc_html__('Go Back Home', 'medicore') ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End-Error-Area -->	
<?php get_footer(); ?>