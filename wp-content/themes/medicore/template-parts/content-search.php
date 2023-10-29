<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicore
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<?php if( has_post_thumbnail() ){ ?>
		<!-- item -->
		<div class="col-lg-6 col-md-6 col-sm-12">
		    <div class="blog-box">
		        <div class="img-wapper view-sign">
		            <?php the_post_thumbnail(); ?>
		        </div>
		    </div>
		</div>
	<?php } ?>
	<!-- item -->
	<div class="<?php if( has_post_thumbnail() ){ ?> col-lg-6 col-md-6 <?php }else{ ?> col-lg-12 <?php } ?> col-sm-12">
		<div class="blog-box">
		    <div class="blog-box-content">
		        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
		        <?php the_excerpt(); ?>
		        <ul class="meta-tag">
		            <li><a href="<?php echo  esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><i class="fas fa-user-circle"></i> <?php echo esc_html( get_the_author() ) ?> </a></li>
		            <li><i class="fa fa-calendar"></i> <?php the_date(); ?></li>
		            <li><a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><?php comments_number(); ?></a></li>
		        </ul>
		        <a href="<?php the_permalink(); ?>" class="default-btn"><?php esc_html_e('Read More','medicore')?></a>
		    </div>
		</div>
	</div> 
</div>