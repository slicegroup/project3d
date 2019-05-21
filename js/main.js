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



$('#masonry-grid').masonry({
  columnWidth: 200,
  itemSelector: '.grid-item'
});


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
  arrows: true,
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
        arrows: false,
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
  autoplay: true,
  speed: 1000,
  dots: true,
  arrows: true,
  infinite: true,
  responsive: [{
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        // centerPadding: "40px",
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        // centerPadding: "40px",
        slidesToShow: 1
      }
    }
  ]
});