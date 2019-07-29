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
    <h3><?php echo _e('Related posts','apk'); ?></h3>
				<hr> 
        <?php $terms = get_the_terms( get_the_ID(), 'category'); $categ = array();
			$loop	= new WP_QUERY(array(
				'category__in'		=> $categ,
				'posts_per_page'	=> 4,
				'post__not_in'		=>array(get_the_ID()),
				'orderby'			=>'rand'
			));

      if ( $loop->have_posts() ){ while ( $loop->have_posts() ){ $loop->the_post();?>
      
      <a href="<?php the_permalink() ?>">
       <div class="related">
            <div class="card-product" data-tilt>   
            
<div class="card-shadow bg" style="background-image:url(<?php the_post_thumbnail_url();?>)"></div>
         
            </div>
            <span class="product_name"><h2> <?php the_title(); ?></h2></span> 
       <!-- <p><?php the_excerpt(); ?> </p> -->
        </div>

       

       </div>
      </a>    
        <?php	}}	wp_reset_query();?>
   
    </div>
  </div>
</div>
<div class="gradient-dark" ></div>
<?php get_footer(); ?>