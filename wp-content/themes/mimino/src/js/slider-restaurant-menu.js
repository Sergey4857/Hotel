$(document).ready(function () {
  $(".slider-restaurant-menu").slick({
    infinite: false,
    centerMode: true,
    speed: 300,
    centerPadding: "20%",
    slidesToScroll: 1,
    slidesToShow: 1,
    autoplaySpeed: 2000,
    variableWidth: true,
    prevArrow: $(".restaurant-slider-btn-prev"),
    nextArrow: $(".restaurant-slider-btn-next"),
    responsive: [
      {
        breakpoint: 768,
        settings: {
          variableWidth: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false,
          centerPadding: "0",
        },
      },

      {
        breakpoint: 1280,
        settings: {
          variableWidth: false,
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: false,
          centerPadding: "0",
        },
      },
      {
        breakpoint: 1440,
        settings: {
          variableWidth: false,
          slidesToShow: 2,
          slidesToScroll: 1,
          centerMode: false,
          centerPadding: "0",
        },
      },
    ],
  });
});

function handleWindowResize() {
  if ($(window).width() <= 1439) {
    if (!$(".slider-restaurant-menu").hasClass("slick-initialized")) {
      $(".slider-restaurant-menu").slick();
    }
  } else {
    if ($(".slider-restaurant-menu").hasClass("slick-initialized")) {
      $(".slider-restaurant-menu").slick("unslick");
    }
  }
}

$(document).ready(function () {
  $(window).resize(handleWindowResize);

  handleWindowResize();
});
