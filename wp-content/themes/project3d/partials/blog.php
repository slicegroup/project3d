<div class="section" id="section4">
      <div class="blog container">
        <div class="titles">
          <h1>Blog </h1>
        </div>
        <div class="blog-slider">
            <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3); ?>   
          <?php $loop = new WP_Query( $args ); ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
      
            <div class="wrapper">
              <a href="<?php the_permalink() ?>" class="card-blog">
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
        
        
          <?php endwhile; ?>
        </div>
      </div>
      <div class="blog-btn">
        <a href="#" class="cta">
          <span>See More</span>
          <i class="fa fa-arrow-right" aria-hidden="true"></i>
        </a>
      </div>
    </div>