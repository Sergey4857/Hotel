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
