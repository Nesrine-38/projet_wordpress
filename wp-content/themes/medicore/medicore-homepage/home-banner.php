<!-- Main-Section -->
<main class="bg-main">
  <div class="hero-slide">
      <div class="item">
          <div class="hero-slider__content-wrapper">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-8">
                          <div class="hero-slider__content">
                              <h2 class="hero-slider__title"><?php echo esc_html(get_theme_mod( "medicore_Banner_Section_Title_Name",'WE DO OUR BEST FOR YOU AND YOUR HEALTH' )); ?></h2>
                              <p class="hero-slider__text"><?php echo esc_html(get_theme_mod( "medicore_Banner_Section_Content_Textarea",'Lorem ipsum dolor sit amet, consectetur adipisicing
                                  elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.' )); ?></p>
                              <a class="hero-slider__btn mr-2" href="<?php echo esc_url(get_theme_mod( "medicore_Banner_Btn_URl_Path",'#' ));?>"> <?php echo esc_html(get_theme_mod( "medicore_Banner_Section_Button_Text",'Service' )); ?> <i class="fas fa-angle-double-right"></i></a>
                              <a class="hero-slider__btn active" href="<?php echo esc_url(get_theme_mod( "medicore_Banner_Btn2_URl_Path",'#' ));?>"> <?php echo esc_html(get_theme_mod( "medicore_Banner_Section_Button2_Text",'Contact Us' )); ?> <i
                                      class="fas fa-angle-double-right"></i></a>
                          </div>
                      </div>

                  </div>
                  <div class="hero-slide-img-wapper">
                      <img src="<?php if (get_theme_mod( "medicore_Banner_Section_Image_Upload" )) { echo esc_url(get_theme_mod( "medicore_Banner_Section_Image_Upload" )); } else{ echo esc_url(get_template_directory_uri(). '/assets/images/slide-1.png'); } ?>" alt="team">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="main-footer-shape">
      <img src="<?php echo esc_url(get_template_directory_uri(). '/assets/images/main-shape.png'); ?>" alt="bg-shape">
  </div>
</main>
<!-- End-Main-Section -->