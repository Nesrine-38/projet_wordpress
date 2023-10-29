<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicore
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('singlepage'); ?>>
	<?php if( has_post_thumbnail() ){ 
	    the_post_thumbnail();
	} 
    the_content(); 
    wp_link_pages( 
        array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'medicore' ),
            'after'  => '</div>',
        ) );
    ?>
</div>