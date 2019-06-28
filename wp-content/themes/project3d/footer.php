    <!-- 5 -->
    <div class="section footer-bg" id="section5">
      <div class="f-title">
        <h1>Contact Us</h1>
      </div>
      <footer class="r">

        <div class="container footer">
          <div style="  ">
            <div class="row">
              <div class="col-md-4">
                <img src="img/logo.png" width="50%" alt="" class="logo-footer">
                <ul>
                  <li><a href="">Terms and Conditions </a></li>
                  <li><a href="">Privacy Policy</a></li>
                  <li><a href=""> Shipping Policy</a></li>
                  <li><a href=""> Help & Info</a></li>
                </ul>
              </div>
              <div class="col-md-4">
                <div class="container">
                  <form>
                    <div class="group">
                      <input type="text" required>
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label>Name</label>
                    </div>
                    <div class="group">
                      <input type="text" required>
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label>Email</label>
                    </div>
                    <div class="group">
                      <input type="text" required>
                      <span class="highlight"></span>
                      <span class="bar"></span>
                      <label>Mesaage</label>
                    </div>
                  </form>
                  <!-- <div class="blog-btn">
                    <a href="#" class="cta">
                      <span>Send</span>
                      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a>
                  </div> -->

                </div>
              </div>
              <div class="col-md-4">

                <h1 style="    font-size: 25px;">Follow us on Instagram</h1>
                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                <div class="elfsight-app-11f11be6-22d6-4f36-9c00-215724662142"></div>
              </div>
            </div>
            <p>Copyright © Project3D 2019 | Powered by Slice Group</p>
          </div>
      </footer>
      <video autoplay loop="" width="100%" muted=""
        style="min-width: 476px;   margin: 100px 0 0; min-height: 476px;;position: absolute; top: 0;width: 100%;left: 0;z-index: 1;    top: 200px;"
        data-load-priority="0" src="eimg/vv.webm"></video>
    </div>

  </div>




  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"></script>
  <script src="https://apps.elfsight.com/p/platform.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
  <script defer src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/prueb.js"></script>
  <script src="https://unpkg.com/tilt.js@1.1.19/dest/tilt.jquery.js"></script>
  <script>
    var containerEl = document.querySelector('.container');

    var mixer = mixitup(containerEl, {
      animation: {
        animateResizeContainer: false // required to prevent column algorithm bug
      }
    });

    new WOW().init();

    setTimeout(function () {
      $('#eapps-instagram-feed').find('a').last().css('display', 'none')
    }, 1500)

    // NB: See comments in stylesheet regarding fixes for chrome and safari "flickering"
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/103/three.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/simplex-noise/2.4.0/simplex-noise.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
  <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/fullpage.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/examples.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/snap.svg-min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/classie.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/responsive.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/hamburger.js"></script>


  <script type="text/javascript">
    var myFullpage = new fullpage("#fullpage", {
      anchors: ["firstPage", "secondPage", "3rdPage"],
      // sectionsColor: ["#C63D0F", "#1BBC9B", "#7E8F7C"],
      navigation: true,
      navigationPosition: "right",
      navigationTooltips: ["", "Product", "Categories", "Projects", "Blog", ""],
	

  //     responsiveWidth: 0,
	// responsiveHeight: 0,
	// responsiveSlides: false,

      // afterResponsive: function(isResponsive){
      //   responsiveHeight: 800,

      // },
    });
  </script>

<?php wp_footer(); ?>
</body>

</html>



   
  
