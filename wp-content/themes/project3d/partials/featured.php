
<!-- 2 -->
<div class="section position" id="section1">
  <div class="intro">
    <!-- popular product -->
    <div class="product-home">
      <div class="">
       <h1 class="title-product">Featured </h1>
     </div>
     <div class="center">
      <div class="slider-destacado">
        <?php $args = array( 'post_type' => 'product', 'posts_per_page' => 4 ); ?>
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
          <div class="wrapper-product animated wow fadInDown" data-wow-duration="6s">
            <a href="<?php the_permalink() ?>">
              <div class="card-product" data-tilt>
                <h1 class="titl"><?php the_title(); ?>
              </h1>
              <p class="price"><?php echo $product->get_price_html(); ?></p>
              <div class="bg" style=" background: url('<?php echo get_the_post_thumbnail_url(); ?>');      background-size: cover;
              background-position: center;background-repeat: no-repeat;">
            </div>
          </div>
        </a>
      </div>
    <?php endwhile; ?>
  </div>
</div>

<!-- end popular product-->
</div>
<video class="quit" autoplay loop="" width="100%" muted=""
style="min-width: 476px; min-height: 476px;position: absolute; top: 0;width: 100%;left: 0;z-index: -1;"
data-load-priority="0" src="<?php echo get_template_directory_uri();?>/assets/img/wl-waves-top-922.webm"></video>
</div>
</div>
