<!-- Blog-Section -->
<section class="ws-section-spacing blog-area-one">
    <div class="container">
        <?php 
        $medicore_blog_title = get_theme_mod( "medicore_Blog_Section_Title",'Medical News');
        if ( ! empty ( $medicore_blog_title ) ) { ?>
          <div class="row">
              <div class="center-main-title">
                  <h2><?php echo esc_html(get_theme_mod( "medicore_Blog_Section_Title",'Medical News' )); ?></h2>
              </div>
          </div>
        <?php } ?> 
        <div class="row mt-4 pt-2">
            <?php 
            $post_data = array( 'post_type' => 'post', 'posts_per_page' => 3, 'post__not_in' => get_option( 'sticky_posts' ) ); 
            $post_data = new WP_Query( $post_data );
            if ( $post_data->have_posts() ) { 
                $count = 1;
                while ( $post_data->have_posts() ) : $post_data->the_post(); 
                ?>
                    <!-- item -->
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="blog-box">
                            <?php if ( has_post_thumbnail() ) { ?>
                              <div class="img-wapper">
                                  <?php the_post_thumbnail(); ?>
                              </div>
                            <?php } ?>
                            <div class="blog-box-content">
                                <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                <?php the_excerpt(); ?>
                                <ul class="meta-tag">
                                    <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><i class="fas fa-user-circle"></i> <?php echo esc_html( get_the_author() ) ?></a></li>
                                    <li><i class="fa fa-calendar"></i> <?php the_date(); ?></li>
                                    <li><a href="<?php comments_link(); ?>"><i class="fas fa-comment"></i> <?php comments_number(); ?></a></li>
                                </ul>
                                <a href="<?php the_permalink(); ?>" class="default-btn"><?php esc_html_e('Read More','medicore')?></a>
                            </div>
                        </div>
                    </div>
                <?php 
                endwhile; 
            } ?>
        </div>
    </div>
</section>
<!-- End-Blog-Section -->