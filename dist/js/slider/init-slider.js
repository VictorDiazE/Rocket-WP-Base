/* Custom JS to initialize carousels and sliders */

jQuery(document).ready(function ($) {

	/* Sample slider initialize */
  $('.slider-single-proyectos').slick({
    infinite: true,
    speed: 300,
    autoplaySpeed: 3500,
    autoplay: true,
    slidesToScroll: 1,
    slidesToShow: 1,
    arrows: false,
    fade: false,
    dots: true,
    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });


  $('.slider-servicios-single').slick({
    infinite: true,
    speed: 300,
    autoplaySpeed: 3500,
    autoplay: true,
    slidesToScroll: 1,
    slidesToShow: 2,
    arrows: false,
    fade: false,
    dots: true,
    responsive: [{
      breakpoint: 992,
      settings: {
        arrows: false,
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }]
  });

});
