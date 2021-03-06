jQuery(document).ready(function($) {


var isSafari = Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0;

  if (isSafari){
    $('#logo-box').height($(window).height() * 0.4);
    $('.sg-item').height($(window).height() * 0.5);
    $('.my-gallery a').height($(window).height() * 0.5);
  } 

// галерея товара 
$('#slider').flexslider({
  animation: "slide",
  controlNav: false,
  slideshow: false,
  directionNav: true,
  prevText: '',
  nextText: '',
  start: function(slider){
    $('body').removeClass('loading');
  }
});

// слайдер на главной
(function () {
    if(!$('.js-home-slider').length ){
        return;
    }

    let totalSlides = $('.js-home-slider .slides > li').length;
    let slideImage = $('.slide-1 .background');

    function zeroFill(number, width) {
        width -= number.toString().length;
        if (width > 0) {
            return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
        }
        return number + ""; // always return a string
    }

    function updateBackground(){
        let bgUrl = $('.flex-active-slide').data('slide-bg');

        $(slideImage).css('background-image', 'url(' + bgUrl + ')');
    }

    $('.slide-1 .slider-couner').each(function(i) {
        $(this).html(`${zeroFill(i + 1, 2)} / <span> ${zeroFill(totalSlides, 2)} </span>`);
    });

    $('.js-home-slider').flexslider({
        animation: "slide",
        slideshowSpeed: 3000,
        // pauseOnHover: true,
        start: function(){
            updateBackground();
        },
        before: function(){
            $(slideImage).css('opacity', '0.4');
        },
        after: function(){
            updateBackground();
            $(slideImage).css('opacity', '1');
        },
    });
})();


//отзывы на главной
(function () {
    if(!$('.js-reviews').length ){
        return;
    }

    function zeroFill(number, width) {
        width -= number.toString().length;
        if (width > 0) {
            return new Array( width + (/\./.test( number ) ? 2 : 1) ).join( '0' ) + number;
        }
        return number + ""; // always return a string
    }

    $('.js-reviews').flexslider({
        animation: "fade",
        slideshowSpeed: 3000,
        pauseOnHover: true,
        start: function(){
        },
        before: function(){
        },
        after: function(){
        },
    });
})();



// ==========================================================
$(':input[type=number]').on('mousewheel', function(e){
    e.preventDefault();
});
$('#stv-form').submit(function(e){
	e.preventDefault();
});


// ==========================================================
$('#tov-quantity').bind("change keyup", function(event){
	var qu = $('#tov-quantity').val(),
			price = $('.shp-price').attr('data-price'),
			nPrice = qu * price;
			$('.shp-price').html(nPrice+'<span> грн.</span>');

});

var tt = $('#tov-name').text(),
    tq = $('#tov-quantity').val(),
    tz = $('#tov-size').val(),
    tc = $('#tov-color').val(),
    tp = ($('.shp-price').attr('data-price')) * tq;


$('input[name="text-487"]').val(tt);
$('input[name="text-488"]').val(tq);
$('input[name="text-489"]').val(tz);
$('input[name="text-490"]').val(tc);
$('input[name="text-491"]').val(tp);

$('#stv-form input, #stv-form select').bind("change", function(event){
  var tt = $('#tov-name').text(),
    tq = $('#tov-quantity').val(),
    tz = $('#tov-size').val(),
    tc = $('#tov-color').val(),
    tp = ($('.shp-price').attr('data-price')) * tq;
    
  $('input[name="text-487"]').val(tt);
  $('input[name="text-488"]').val(tq);
  $('input[name="text-489"]').val(tz);
  $('input[name="text-490"]').val(tc);
  $('input[name="text-491"]').val(tp);

});


// ==========================================================
$('#zakaz-tov-btn').click(function(){
  $('#zakaz-wrap').addClass('visible');
});
$('#zakaz-close').click(function(){
  $('#zakaz-wrap').removeClass('visible');
});


// =================== single tow zoom gallery =============================================
$('#open_tov_gal').click(function() {
    var pswpElement = document.querySelectorAll('.pswp')[0];
    // build items array
    var items = [];
    var $this, src, imgw, imgh, obj;
    $('.tov-gallery img').each(function() { 
       $this = $(this);
       src = $this.attr('src');
       imgw = $this.outerWidth();
       imgh = $this.outerHeight();
       obj = {};
       obj.src = src;
       obj.w = imgw;
       obj.h = imgh;
       items.push(obj);
    });
    
    var options = {      
        history: false,
        focus: false,
        showAnimationDuration: 350,
        hideAnimationDuration: 350
    };
    
    var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
    gallery.init();
});



});
