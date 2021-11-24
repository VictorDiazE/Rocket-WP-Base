/* Custom JS for Mobile Menu behavior */

jQuery(document).ready(function ($) {

  /* Display Menu */
	$('.navbar-toggler-right').on('click', function (e) {
		e.preventDefault();
		$("#navbar").fadeIn(500, 'swing');
		$(".close-menu").fadeIn(1500);
	});

	/* Hide Menu */
	$('.close-menu').on('click', function (e) {
		e.preventDefault();
		$("#navbar").fadeOut(500);
		$(".close-menu").fadeOut(500);
		$('body').css('overflow', 'scroll');
	});
	

});
