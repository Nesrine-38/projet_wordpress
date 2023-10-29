<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package medicore
 */

?>
	</div>
	<?php if( is_active_sidebar( 'footer-widget-area-1') || is_active_sidebar( 'footer-widget-area-2') || is_active_sidebar( 'footer-widget-area-3') || is_active_sidebar( 'footer-widget-area-4') ) { ?>
	<!-- Footer-Section -->
	    <footer class=" footer-bg footer-one">
	        <div class="container">
	            <div class="row">
	            	<?php if( is_active_sidebar( 'footer-widget-area-1') ) { ?>
		                <div class="col-lg-3 col-md-6">
		                    <?php dynamic_sidebar( 'footer-widget-area-1' ); ?>
		                </div>
		            <?php } if( is_active_sidebar( 'footer-widget-area-2') ) { ?>
		                <div class="col-lg-3 col-md-6">
		                    <?php dynamic_sidebar( 'footer-widget-area-2' ); ?>
		                </div>
		            <?php } if( is_active_sidebar( 'footer-widget-area-3') ) { ?>
		                <div class="col-lg-3 col-md-6">
		                    <?php dynamic_sidebar( 'footer-widget-area-3' ); ?>
		                </div>
		            <?php } if( is_active_sidebar( 'footer-widget-area-4') ) { ?>
		                <div class="col-lg-3 col-md-6">
		                    <?php dynamic_sidebar( 'footer-widget-area-4' ); ?>
		                </div>
		            <?php } ?>
	            </div>
	        </div>
	    </footer>
	<?php } ?>
    <!-- End-footer-Section -->
    <!-- Copyright-section -->
    <div class="copyright-section bg-blk">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p><?php esc_html_e('&copy; 2022. All Rights Reserved','medicore'); ?> </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End-copyright-section -->
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>