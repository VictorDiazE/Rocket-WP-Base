/* Custom JS for Header behavior */

jQuery(document).ready(function ($) {


  /* Fix for scrolling modal Safari Mobile */

  $(function () {
    var $window = $(window),
      $body = $("body"),
      $modal = $(".modal"),
      scrollDistance = 0;

    $modal.on("show.bs.modal", function () {
      scrollDistance = $window.scrollTop();
      $body.css("top", scrollDistance * -1);
    });

    $modal.on("hidden.bs.modal", function () {
      $body.css("top", "");
      $window.scrollTop(scrollDistance);
    });
  });

  /* Header scroll effect */

	if ($(window).scrollTop() > 0) {
		$(".navbar-transition").addClass('scrolled');
		$(".scrolled-items").addClass('scrolled');
    $(".initial-header").addClass('scrolled');
	}

  $(window).scroll(function () {
    var $nav = $(".navbar-transition");
    var $nav1 = $(".scrolled-items");
    var $nav2 = $(".initial-header");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    $nav1.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    $nav2.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });


});
