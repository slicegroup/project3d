

<header class="header-sen">
  <div class="container">
    <nav class="navbar navbar-expand-lg static-top fix-top ">
      <a class="navbar-brand down d-logo" href="<?php bloginfo('url') ?>">
       <img class="logo-responsive mb-2" src="<?php echo get_template_directory_uri();?>/assets/img/Logo_project3d_11.svg" width="45" alt="" />
     </a>

     <ul class="icon-responsive ml-auto">

      <li class="">
        <a class="nav-link eigth before after down" data-toggle="modal" data-target="#exampleModalLong" href="#"><i class='bx bx-calendar-plus'></i></a>
      </li>
    </ul>
    <div class="navbar-toggler p-0 border-0 mb-2"   data-toggle="offcanvas">

      <div id="menuToggle">
        <input type="checkbox" />
        <span id="span1"></span>
        <span id="span2"></span>
        <span id="span3"></span>
      </div>
    </div>
    <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav m-auto ">
      <li class="nav-item box-i search-switch">
          <a class="nav-link  eigth before after down" href="#"><i class='bx bx-search box-i' ></i></a>
        </li>
      <li class="nav-item">
          <a class="nav-link eigth before after down" data-toggle="modal" data-target="#exampleModalLong" href="#"><i class='bx bx-calendar-plus'></i></a>
        </li>
      
        <li class="nav-item active">
          <a class="nav-link eigth before after down" href="<?php bloginfo('url') ?>">Home<i class='bx bx-home icons-menu-responsive '></i>
            <span class="sr-only"></span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link eigth before after down" href="<?php bloginfo('url') ?>/index.php/about/">About<i class='bx bx-info-circle icons-menu-responsive' ></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link eigth before after down" href="<?php bloginfo('url') ?>/index.php/shop/">Product<i class='bx bx-shopping-bag icons-menu-responsive' ></i></a>
        </li>
        <a class="navbar-brand down" href="<?php bloginfo('url') ?>">
          <img class="logo-r" src="<?php echo get_template_directory_uri();?>/assets/img/Logo.png" width="60" alt="" />
        </a>
        <li class="nav-item">
          <a class="nav-link eigth before after down" href="<?php bloginfo('url') ?>/index.php/blog/">Blog <i class='bx bx-align-left icons-menu-responsive' ></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link eigth before after down" href="<?php bloginfo('url') ?>/index.php/faqs/">FAQs<i class='bx bx-receipt icons-menu-responsive' ></i></a>
        </li>
        <li class="nav-item">
          <a class="nav-link eigth before after down" href="<?php bloginfo('url') ?>/index.php/contact/">Contact <i class='bx bxs-contact icons-menu-responsive' ></i></a>
        </li>
        <li class="nav-item nav-link nav-car">
                            <!-- <a class="nav-link" href="#"></a> -->
                            <div class="dropdown">
                                <a class=""  id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-cart'> <p class="notification" ><?php echo WC()->cart->get_cart_contents_count(); ?></p></i>
                                </a>
                                <div class="dropdown-menu car-home" aria-labelledby="dropdownMenuButton">
																									
                                <?php  get_template_part('partials/cart-hover'); ?>
                               </div>
                            </div>
                        </li>
  
        <li class="nav-item ">
          <a class="nav-link  eigth before after down" href="#" data-toggle="modal" data-target="#exampleModal" ><i class='bx bx-user'></i></a>
        </li>
      </ul>

    </div>
  </nav>
</div>
</header>

<!-- Header -->
