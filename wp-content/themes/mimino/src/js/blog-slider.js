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
