
<div class="section" id="section3">
      <div class="portafolio">
        <div class="titles">
          <h1>We are proud to assist our clients</h1>
        </div>
        <div class="body-card">
          <div class="item-bg"></div>
          <div class="news-slider">
         <?php $args = array( 'post_type' => 'events'); ?>   
          <?php $loop = new WP_Query( $args ); ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="news-slider__wrp swiper-wrapper">
              <div class="news-slider__item swiper-slide">
                <a href="#" class="news__item">
                  <div class="news-date">
                    <span class="news-date__title">24</span>
                    <span class="news-date__txt">May</span>
                  </div>
                  <div class="news__title">
                    <?php the_title(); ?>
                  </div>

                  <p class="news__txt">
                    <?php the_content(); ?>
                  </p>

                  <div class="news__img">
                    <img
                      src="<?php echo get_the_post_thumbnail_url(); ?>"
                      alt="news">
                  </div>
                </a>
              </div>
              <?php endwhile; ?>
            
            </div>

            <div class="news-slider__ctr">

              <div class="news-slider__arrows">
                <button class="news-slider__arrow news-slider-prev">
                  <span class="icon-font">
                    <svg class="icon icon-arrow-left">
                      <use xlink:href="#icon-arrow-left"></use>
                    </svg>
                  </span>
                </button>
                <button class="news-slider__arrow news-slider-next">
                  <span class="icon-font">
                    <svg class="icon icon-arrow-right">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg>
                  </span>
                </button>
              </div>

              <div class="news-slider__pagination"></div>

            </div>

          </div>

        </div>
        <!-- 
                <svg hidden="hidden">
                    <defs>
                        <symbol id="icon-arrow-left" viewBox="0 0 32 32">
                            <title>arrow-left</title>
                            <path
                                d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z">
                            </path>
                        </symbol>
                        <symbol id="icon-arrow-right" viewBox="0 0 32 32">
                            <title>arrow-right</title>
                            <path
                                d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z">
                            </path>
                        </symbol>
                    </defs>
                </svg> -->

      </div>
      <video autoplay loop="" width="100%" muted=""
        style="min-width: 476px;   margin: 100px 0 0; min-height: 476px;;position: absolute; top: 0;width: 100%;left: 0;z-index: -1;"
        data-load-priority="0" src="<?php echo get_template_directory_uri();?>/assets/img/wl-waves-top-922.webm"></video>
    </div>