<div class="section" id="section4">
      <div class="blog container">
        <div class="titles">
          <h1>Blog </h1>
        </div>
        <div class="row">
            <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3); ?>   
          <?php $loop = new WP_Query( $args ); ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="col-md-6 col-lg-4">
            <div class="wrapper">
              <a href="#" class="card-blog">
                <div class="card__inner">
                  <img
                    data-src="<?php echo get_the_post_thumbnail_url(); ?>"
                    class="card_img">
                  <div class="card__content">
                    <h2 class="card__subtitle">Categoria</h2>
                    <h1 class="card__title">
                    <?php the_title(); ?>
                    </h1>
                    <div class="card__description">
                      <p>
                      <?php the_content(); ?>
                      </p>
                    </div>
                  </div>
                </div>
              </a>
            </div>
        
          </div>
          <?php endwhile; ?>
          <!-- <div class="col-md-6 col-lg-4">
            <div class="wrapper">
              <a href="#" class="card-blog">
                <div class="card__inner">
                  <img
                    data-src="https://www.prensa.com/fotogalerias/holograma-interactivo-sobreviviente-Adina-Sella_LPRIMA20171027_0118_35.jpg"
                    class="card_img">
                  <div class="card__content">
                    <h2 class="card__subtitle">Categoria</h2>
                    <h1 class="card__title">
                      Portable holographic projector
                    </h1>
                    <div class="card__description">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua...
                      </p>
                    </div>
                   

                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="wrapper">
              <a href="#" class="card-blog">
                <div class="card__inner">
                  <img
                    data-src="https://fotografias.antena3.com/clipping/cmsimages01/2018/11/26/62F3F9C1-97E8-4633-B7B1-B6C6F560BE6F/58.jpg"
                    class="card_img">
                  <div class="card__content">
                    <h2 class="card__subtitle">Categoria</h2>
                    <h1 class="card__title">
                      Portable holographic projector
                    </h1>
                    <div class="card__description">
                      <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua...
                      </p>
                    </div>
               

                  </div>
                </div>
              </a>
            </div>
          </div> -->

        </div>
      </div>
      <div class="blog-btn">
        <a href="#" class="cta">
          <span>See More</span>
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>