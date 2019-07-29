<?php get_header(); ?>
<?php  get_template_part('partials/nav'); ?>
<h1 class="title-product">
Latest blog articles</h1>
<div class="card-all container">
 <div class="row">
  <?php $args = array( 'post_type' => 'post', 'posts_per_page' => 3); ?>   
          <?php $loop = new WP_Query( $args ); ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
   <div class="col-md-6 col-lg-6 col-sm-12">
    <div class="blog-card spring-fever" style=" background: url('<?php echo get_the_post_thumbnail_url(); ?>');      background-size: cover;
                background-position: center;background-repeat: no-repeat;">
        <div class="title-content">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <div class="intro"> <?php the_category(); ?> </div>
        </div>
        <div class="card-info">
            <?php the_content(); ?>
            <a href="<?php the_permalink(); ?>" class="cta">
              <span>See More</span>
              <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>    
              </div>
        <div class="gradient-overlay"></div>
        <div class="color-overlay"></div>
    </div><!-- /.blog-card -->
   </div>
   <?php endwhile; ?>
 </div>
  
  
</div>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
	<div class="gradient-dark" ></div>
<?php get_footer(); ?>