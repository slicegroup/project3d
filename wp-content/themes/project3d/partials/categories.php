<div class="section" id="section2">
  <div class="div">
    <div class="">
      <h1 class="title-product">What are you looking for?</h1>
    </div>
    <div class="center-j container">
      <div class="row">
        <?php $args = array(

          'orderby' => 'slug',
          'order' => 'ASC'
        );
        $product_categories = get_terms('product_cat', $args);
        foreach ($product_categories as $product_category):?>
         <?php $thumbnail_id = get_woocommerce_term_meta($product_category->term_id, 'thumbnail_id', true);
         $images = wp_get_attachment_image_src($thumbnail_id, 'medium'); ?>
         <div class="col-md-4 col-sm-12">
          <div class="body-category">
            <div class="category">
              <figure class="front"
              style="background:url(<?php echo $images[0]; ?>)">
              <span class="gradient"></span>
              <div class="">
                <div class="title"><?php echo $product_category->name; ?></div>
              </div>
            </figure>
            <figure class="back">
              <div class="">
                <div class="title"><?php echo $product_category->name; ?></div>
                <a href="<?php echo $url_category = get_term_link( $product_category ) ?>" class="cta">
                  <span>See More</span>
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>
              </div>
            </figure>
          </div>
        </div>
      </div>
      <?php

    endforeach;
    ?>
  </div>
  <div class="category-btn">
    <a href="#" class="cta">
      <span>See More</span>
      <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </a>
  </div>
</div>
</div>
<video class="video-n" autoplay loop="" width="100%" muted=""
style="min-width: 476px; min-height: 476px;position: absolute; top: 0;width: 100%;left: 0;z-index: -1;"
data-load-priority="0" data-src="<?php echo get_template_directory_uri();?>/assets/img/wl-waves-bottom-911.webm"></video>
</div>