<div id="fullpage">
  <div class="section " id="section0">

    <!-- navbar -->
    <?php  get_template_part('partials/nav'); ?>
    <!-- end navbar -->
    
    <div id="home" class="home">
      <canvas id="3D-background-three-canvas5"></canvas>
      <div class="titulo-banner">
        <?php $args = array( 'post_type' => 'banner', 'posts_per_page' => 5); ?>   
        <?php $loop = new WP_Query( $args ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
          <div class="content">
            <h1><?php the_title(); ?> </h1>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>