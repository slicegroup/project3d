<?php get_header(); ?>
<?php  get_template_part('partials/nav'); ?>

 <div class="blog-content-detail container">
  <div class="row">
    <div class="col-md-8">
      
      <div class="">
        <img src="<?php echo get_the_post_thumbnail_url(); ?>" style="width: 100%;">
        <h1 class="title-product">
      <?php the_title(); ?></h1>
        <div class="" style="color: white;"><p><?php the_excerpt(); ?>  </p></div> 
      </div>
    </div>
    <div class="col-md-4">
      <h3>Featured Products</h3>
   
    </div>
  </div>
</div>
<div class="gradient-dark" ></div>
<?php get_footer(); ?>