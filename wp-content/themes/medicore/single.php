<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package medicore
*/

get_header(); ?>
	<!-- Blog-Section -->
    <section class="ws-section-spacing blog-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mt-4 pt-2">
                    <div class="row">
                        <!-- item -->
                        <div class="col-lg-12 col-md-12">
                        	<?php
							while ( have_posts() ) : the_post();

								get_template_part( 'template-parts/content', 'single' );

								// If comments are open or we have at least one comment, load up the comment template.
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
			                endwhile; // End of the loop.
							?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar">
                       <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-Blog-Section -->
<?php get_footer(); ?>