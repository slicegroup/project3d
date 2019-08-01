// efecto 3d
"use strict";

// card product
(function ($) {
  "use strict";

  $(".card").tilt({
    maxTilt: 15,
    perspective: 1400,
    easing: "cubic-bezier(.03,.98,.52,.99)",
    speed: 1200,
    glare: true,
    maxGlare: 0.2,
    scale: 1.04
  });
})(jQuery);



// This does the filter by binding an event on the change of a select box
$("#grid-filter li").click(function () {
  var group = $(this).data('category');
  var group_class = "." + group;

  if (group == "*") {
    $(".grid-item").show();
    $('#masonry-grid').masonry('layout');
  } else if (group != "") {
    $(".grid-item").hide();
    $(group_class).show();
    $('#masonry-grid').masonry('layout');
  } else {
    $(".grid-item").show();
    $('#masonry-grid').masonry('layout');
  }
});
// carrousel banner

$(".titulo-banner").slick({
  centerMode: true,
  centerPadding: "60px",
  slidesToShow: 1,
  speed: 1000,
  autoplay: true,
  arrows: false,
  //centerMode: true,
  dots: false,
  fade: true,
  cssEase: "linear",
  mobileFirst: true,
  responsive: [{
    breakpoint: 768,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: "40px"
        // slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {

        centerMode: true,
        centerPadding: "40px",
        slidesToShow: 1
      }
    }
    ]
  });
// carrousel product

$(".slider-destacado").slick({
  // centerMode: true,
  centerPadding: "90px",
  slidesToShow: 3,
  speed: 1000,
  slidesToScroll: 1,
  autoplay: false,
  speed: 1000,
  dots: true,
  arrows: true,
  infinite: true,
  responsive: [
  {
   breakpoint: 1024,
   settings: {
    slidesToShow: 2,
  }
},
{
  breakpoint: 768,
  settings: {
    arrows: false,
    centerMode: true,
        // centerPadding: "40px",
        slidesToShow: 1
      }
    },
    
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1
      }
    }
    ]
  });


  $(".blog-slider").slick({

    slidesToShow: 3,
    speed: 1000,
    slidesToScroll: 1,
    autoplay: false,
    speed: 1000,
    infinite: true,
    responsive: [
    {
     breakpoint: 1024,
     settings: {
      slidesToShow: 2,
    }
  },
  {
    breakpoint: 768,
    settings: {
      arrows: false,
      centerMode: true,
          // centerPadding: "40px",
          slidesToShow: 1
        }
      },
      
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1
        }
      }
      ]
    });
  


// scroll
$(".down").click(function (event) {
  if (this.hash !== "") {
    event.preventDefault();
    var hash = this.hash;
    $('html, body').animate({
      scrollTop: $(hash).offset().top - 0
    }, 1200, function () {
      window.location.hash = hash
    })
  }
})

// asdfghjklñ
var bg = document.querySelector('.item-bg');
var items = document.querySelectorAll('.news__item');
var item = document.querySelector('.news__item');

function cLog(content) {
  console.log(content)
}

if ($(window).width() > 800) {
  $(document).on("mouseover", ".news__item", function (_event, _element) {

    var newsItem = document.querySelectorAll('.news__item');
    newsItem.forEach(function (element, index) {
      element.addEventListener('mouseover', function () {
        var x = this.getBoundingClientRect().left;
        var y = this.getBoundingClientRect().top;
        var width = this.getBoundingClientRect().width;
        var height = this.getBoundingClientRect().height;

        $('.item-bg').addClass('active');
        $('.news__item').removeClass('active');
        // $('.news__item').removeClass('active');


        bg.style.width = width + 'px';
        bg.style.height = height + 'px';
        bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
      });

      element.addEventListener('mouseleave', function () {
        $('.item-bg').removeClass('active');
        $('.news__item').removeClass('active');
      });

    });

  });
}
// if($(window).width() < 1024){ $('#fullpage').removeAttr('id'); }

var swiper = new Swiper('.news-slider', {
  effect: 'coverflow',
  grabCursor: true,
  loop: false,
  centeredSlides: true,
  keyboard: true,
  spaceBetween: 0,
  slidesPerView: 'auto',
  speed: 300,
  autoplay: true,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 0,
    modifier: 3,
    slideShadows: false
  },
  breakpoints: {
    480: {
      spaceBetween: 0,
      centeredSlides: true
    }
  },
  simulateTouch: true,
  navigation: {
    nextEl: '.news-slider-next',
    prevEl: '.news-slider-prev'
  },
  pagination: {
    el: '.news-slider__pagination',
    clickable: true
  },
  on: {
    init: function () {
      var activeItem = document.querySelector('.swiper-slide-active');

      var sliderItem = activeItem.querySelector('.news__item');

      $('.swiper-slide-active .news__item').addClass('active');

      var x = sliderItem.getBoundingClientRect().left;
      var y = sliderItem.getBoundingClientRect().top;
      var width = sliderItem.getBoundingClientRect().width;
      var height = sliderItem.getBoundingClientRect().height;


      $('.item-bg').addClass('active');

      bg.style.width = width + 'px';
      bg.style.height = height + 'px';
      bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
    }
  }
});

swiper.on('touchEnd', function () {
  $('.news__item').removeClass('active');
  $('.swiper-slide-active .news__item').addClass('active');
});

swiper.on('slideChange', function () {
  $('.news__item').removeClass('active');
});

swiper.on('slideChangeTransitionEnd', function () {
  $('.news__item').removeClass('active');
  var activeItem = document.querySelector('.swiper-slide-active');

  var sliderItem = activeItem.querySelector('.news__item');

  $('.swiper-slide-active .news__item').addClass('active');

  var x = sliderItem.getBoundingClientRect().left;
  var y = sliderItem.getBoundingClientRect().top;
  var width = sliderItem.getBoundingClientRect().width;
  var height = sliderItem.getBoundingClientRect().height;


  $('.item-bg').addClass('active');

  bg.style.width = width + 'px';
  bg.style.height = height + 'px';
  bg.style.transform = 'translateX(' + x + 'px ) translateY(' + y + 'px)';
});

$(window).scroll(function() {
  if ($(this).scrollTop() > 100) {
    $('a.scroll-top').fadeIn('slow');

  } else {
    $('a.scroll-top').fadeOut('slow');
  }
});
