jQuery(document).ready(function($) {

// ==========================================================
$('.nav-btn').click(function(){
	$("body").addClass("modal-open");
  $('.mob-nav').addClass('visible');
});
$('.mob-nav-close').click(function(){
  $('.mob-nav').removeClass('visible');
  $("body").removeClass("modal-open");
});

// галерея товара 
$('.flexslider').flexslider({
  animation: "slide",
  controlNav: false,
  slideshow: false,
  directionNav: true,
  prevText: '',
  nextText: '',
  touch: true,
});


});