<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicore
*/

get_header(); 
if(is_home() || is_front_page()){the_content(); }else{ ?>
	<section class="ws-section-spacing ">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
	                <?php
					while ( have_posts() ) : the_post();
	                    get_template_part( 'template-parts/content', 'page' );
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
	                endwhile; // End of the loop.
					?>
	            </div>
	            <!-- Side-bar -->
	            <div class="col-lg-4 col-md-12">
	            	<div class="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
	            </div>
            </div>
        </div>
    </section>
<?php }
get_footer(); ?>