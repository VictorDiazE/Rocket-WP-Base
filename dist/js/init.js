/* Custom JS for FC-Corporativa */

jQuery(document).ready(function ($) {

  /* Smooth scrolling */
  $('.smooth-link').on('click', function (e) {
    e.preventDefault();

    $('html, body').animate({
      scrollTop: $($(this).attr('href')).offset().top
    }, 1000, 'swing');
  });



});
