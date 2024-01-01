$(".slider-container").slick({
  infinite: false, //* безкінечний скрол
  speed: 300, //* швидкість анімації скролу
  slidesToScroll: 1, //* кількість карнинок при скролі
  // slidesToShow: 4,      //* кількість елементів
  // autoplay: true, //* автоскрол
  autoplaySpeed: 2000, //* період автоскролу
  variableWidth: true, //* своя ширина

  prevArrow: $(".slider-btn-prev"),
  nextArrow: $(".slider-btn-next"),
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        variableWidth: true,
        // slidesToShow: 2,
      },
    },
    {
      breakpoint: 768,
      settings: {
        variableWidth: true,
        // slidesToShow: 2,
      },
    },
  ],
});

//slider-restaurant

$(".slider-container-main-restaurant").slick({
  infinite: false, //* безкінечний скрол
  speed: 300, //* швидкість анімації скролу
  slidesToShow: 4,
  slidesToScroll: 1,
  // autoplay: true, //* автоскрол
  autoplaySpeed: 2000, //* період автоскролу
  variableWidth: true, //* своя ширина

  prevArrow: $(".slider-btn-prev"),
  nextArrow: $(".slider-btn-next"),
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        variableWidth: false,
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 768,
      settings: {
        variableWidth: false,
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 375,
      settings: {
        variableWidth: true,
      },
    },
  ],
});

//slider-restaurant-menu

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

//slider-hotel

$(".slider-hotel").slick({
  infinite: false, //* безкінечний скрол
  speed: 300, //* швидкість анімації скролу
  slidesToShow: 1,
  slidesToScroll: 1,
  // autoplay: true, //* автоскрол
  autoplaySpeed: 2000, //* період автоскролу
  variableWidth: true, //* своя ширина

  prevArrow: $(".slider-btn-prev"),
  nextArrow: $(".slider-btn-next"),
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        variableWidth: false,
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 768,
      settings: {
        variableWidth: false,
        slidesToShow: 1,
      },
    },
    {
      breakpoint: 375,
      settings: {
        variableWidth: true,
      },
    },
  ],
});

//slider-blog

$(".slider-blog").slick({
  infinite: false, //* безкінечний скрол
  speed: 300, //* швидкість анімації скролу
  slidesToShow: 3,
  slidesToScroll: 1,
  // autoplay: true, //* автоскрол
  autoplaySpeed: 2000, //* період автоскролу
  variableWidth: false, //* своя ширина

  prevArrow: $(".slider-btn-prev"),
  nextArrow: $(".slider-btn-next"),
  responsive: [
    {
      breakpoint: 1440,
      settings: {
        variableWidth: false,
        slidesToShow: 3,
      },
    },
    {
      breakpoint: 1024,
      settings: {
        variableWidth: false,
        slidesToShow: 2,
      },
    },
    {
      breakpoint: 680,
      settings: {
        variableWidth: false,
        slidesToShow: 1,
      },
    },

    {
      breakpoint: 375,
      settings: {
        variableWidth: false,
        slidesToShow: 1,
      },
    },
  ],
});
