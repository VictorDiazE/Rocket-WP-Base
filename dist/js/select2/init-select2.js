/* Custom JS to initialize select2 */

jQuery(document).ready(function ($) {

  /* Initialize select2 and hide arrows*/
  $('.FormControlSelect2').select2({});
  $('b[role="presentation"]').hide();
  $('.select2-selection__arrow').addClass('select2-selection__arrow2');
  $('ul li:first-child').attr('disabled');

});
