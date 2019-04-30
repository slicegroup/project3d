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

}(jQuery));

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
    slidesToScroll: 3,
    autoplay: true,
    speed: 1000,
    dots: true,
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

$(".blog-card").slick({
    // centerMode: true,
    // centerPadding: "90px",
    slidesToShow: 3,
    autoplay: false,
    speed: 1000,
    dots: true,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: "40px",
                slidesToShow: 3
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


// overview o portafolio
$(function () {
    // Create variable for selection and get the value from local storage, otherwise default the value to ".app"
    var initial_selection = localStorage.getItem('initial_selection') || '.app';

    // Whenever you click on a filter, save the clicked filter name in local storage
    document.querySelectorAll('#filters .filter').forEach((item) => {
        item.addEventListener('click', function () {
            initial_selection = this.dataset.filter;
            localStorage.setItem('initial_selection', initial_selection);
        })
    });

    // Set up the list like in demo		
    var filterList = {
        init: function () {
            $('#portfoliolist').mixItUp({
                selectors: {
                    target: '.portfolio',
                    filter: '.filter'
                },
                load: {
                    // Use the variable we get from local storage as initial filter value
                    filter: initial_selection
                }
            });
        }
    };

    // Run the show!
    filterList.init();
});
