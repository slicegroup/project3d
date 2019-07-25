<?php get_header(); ?>
<?php  get_template_part('partials/nav'); ?>

<div class="f-title">
    <h1>Contact Us</h1>
</div>
<div class="contact-footer">
    <div class="row">
        <div class="col-md-6">
            <ul class="ubication">
                <li><i class='bx bx-map'></i>Ubication Lorem psu</li>
                <li><i class='bx bx-envelope' ></i>projet3d@project3.com</li>
                <div class="redes">
                <li><i class='bx bxl-facebook' ></i></li>
                <li><i class='bx bxl-twitter' ></i></li>
                <li><i class='bx bxl-instagram-alt' ></i></li>
                </div>
            </ul>
        </div>
          <div class="col-md-6">
              <div class="container">
                 <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 2, 'title' => false, 'description' => false ) ); ?>
                  <!-- <div class="blog-btn">
                    <a href="#" class="cta">
                      <span>Send</span>
                      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                  </div> -->

                </div>
                    
        </div>
    </div>

<video autoplay loop="" width="100%" muted=""
        style="min-width: 476px; min-height: 476px;position: absolute; top: 15rem;width: 100%;left: 0;z-index: -1;"
        data-load-priority="0" src="<?php echo get_template_directory_uri();?>/assets/img/v.webm"></video>
</div>






<?php get_footer(); ?>