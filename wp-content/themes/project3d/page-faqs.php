<?php get_header(); ?>
<?php  get_template_part('partials/nav'); ?>
<div class="wrapper container">
    <div>
        <h1 class="titulos cssanimation leFadeIn sequence " data-wow-iteration="2">Information</h1>
        <p>Here you can find a list of questions and answers we frequently get asked. If you don't see your question on the list, you can contact us by email or phone.</p>
    </div>

   
    <div class="row">
  <?php $args = array( 'post_type' => 'faq'); ?>   
          <?php $loop = new WP_Query( $args ); ?>
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
       <div class="col-md-6">
            <div class="tab">
              <input id="tab-one" type="checkbox" name="tabs">
              <label for="tab-one"><?php the_title(); ?></label>
              <div class="tab-content">
                  <p><?php the_content(); ?></p>
              </div>
          </div>
        
          </div>  
        <?php endwhile; ?>
            </div>
        </div>
    </div> 
</div>

   <video autoplay loop="" width="100%" muted=""
        style="min-width: 476px;   margin: 100px 0 0; min-height: 476px;;position: absolute; top: 0;width: 100%;left: 0;z-index: -1; "
        data-load-priority="0" src="<?php echo get_template_directory_uri();?>/assets/img/wl-waves-bottom-911.webm"></video>


<?php get_footer(); ?>