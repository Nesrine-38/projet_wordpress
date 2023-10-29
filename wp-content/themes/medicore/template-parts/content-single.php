<?php
/**
 * Template part for displaying results in single page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package medicore
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('blog-box'); ?>>
    <?php if( has_post_thumbnail() ){ ?>
        <div class="img-wapper">
            <?php the_post_thumbnail( ); ?>
        </div>
    <?php } ?>
    <div class="blog-box-content">
        <ul class="meta-tag">
            <li><a href="<?php echo  esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><i class="fas fa-user-circle"></i> <?php echo esc_html( get_the_author() ) ?></a></li>
            <li><i class="fa fa-calendar"></i> <?php the_date(); ?></li>
            <li><a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i> <?php comments_number(); ?></a></li>
        </ul>
        <?php the_content(); ?>
        <?php if(get_the_tag_list() != '') { ?>         
            <div class="taggs">
                <?php the_tags(); ?>
            </div>
        <?php } ?>
    </div>
</div>