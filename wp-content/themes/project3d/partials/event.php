
<div class="section" id="section3">
  <div class="portafolio">
    <div class="titles">
      <h1>We are proud to assist our clients</h1>
    </div>
    <div class="body-card">
      <div class="item-bg"></div>
      <div class="news-slider">
        <div class="news-slider__wrp swiper-wrapper">
         <?php $args = array( 'post_type' => 'events'); ?>   
         <?php $loop = new WP_Query( $args ); ?>
         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
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

</div>
<video class="video-n" autoplay loop="" width="100%" muted=""
  style="min-width: 476px;   margin: 100px 0 0; min-height: 476px;;position: absolute; top: 0;width: 100%;left: 0;z-index: -1;"
  data-load-priority="0" src="<?php echo get_template_directory_uri();?>/assets/img/wl-waves-top-922.webm"></video>
</div>