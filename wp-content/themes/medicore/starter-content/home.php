<?php
/**
 * Home starter content.
 *
 * @package medicore\starter_content
 */
return [
    'post_type'    => 'page',
    'post_title'   => _x( 'Home', 'Theme starter content', 'medicore' ),
    'post_content' => '<p style="margin:-1.5em;"></p><!-- Main-Section -->
<main class="bg-main"><div class="hero-slide"><div class="item"><div class="hero-slider__content-wrapper"><div class="container"><div class="row align-items-center"><div class="col-lg-8"><div class="hero-slider__content"><h2 class="hero-slider__title">WE DO OUR BEST FOR YOU AND YOUR HEALTH</h2><p class="hero-slider__text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                  elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a class="hero-slider__btn mr-2" href="#"> Service <i class="fas fa-angle-double-right"></i></a><a class="hero-slider__btn active" href="#"> Contact Us <i class="fas fa-angle-double-right"></i></a></div></div></div><div class="hero-slide-img-wapper"><img src="'.trailingslashit(get_template_directory_uri()).'/assets/images/slide-1.png" alt="team"></div></div></div></div></div><div class="main-footer-shape"><img src="'.trailingslashit(get_template_directory_uri()). '/assets/images/main-shape.png" alt="bg-shape"></div></main><!-- End-Main-Section -->
<!-- Blog-section -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"90px","bottom":"90px"}},"color":{"background":"#fff"}},"layout":{"inherit":true}} -->
<section class="ws-section-spacing blog-area-one">
<div class="container">

<!-- wp:heading -->
<div class="row"><div class="center-main-title"><h2>Medical News </h2></div></div>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":3}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"query-content"} -->
<!-- wp:post-featured-image /-->

<!-- wp:columns {"style":{"spacing":{"padding":{"top":"20px","bottom":"0px","right":"25px","left":"25px"}}}} -->
<div class="blog-box" style="display:inherit;"> <div class="blog-box-content">
<!-- wp:post-title {"level":4,"style":{"spacing":{"margin":{"left":"0","top":"18px","right":"25px"}}}} /-->
<ul class="wp-block-columns meta-tag" style="padding-top:20px;padding-right:25px;padding-bottom:0px;"><!-- wp:column -->
<li class="wp-block-column" style="display:flex;"> 
<!-- wp:post-date {"style":{"color":{"text":"#000"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /--></li>
<!-- /wp:column -->

<!-- wp:column -->
<li class="wp-block-column" style="display:flex;><!-- wp:comments-query-loop -->
<!-- wp:comments-title {"textAlign":"right","showPostTitle":false,"level":6,"style":{"color":{"text":"#000"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"normal"} /-->
<!-- /wp:comments-query-loop --></li>
<!-- /wp:column --></ul>
<!-- /wp:columns -->

<!-- wp:post-excerpt {"moreText":"Read More","fontSize":"normal"} /-->
<!-- /wp:post-template -->
</div></div>

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when the query returns no results."} -->
<p>No Post Found</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
</section>
<!-- /wp:group -->
    ',];