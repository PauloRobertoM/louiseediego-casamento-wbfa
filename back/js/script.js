(function($, window) {
	$('#owl-eventos').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	});
	$('#owl-associados').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:false,
	    dots:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:3
	        },
	        1000:{
	            items:5
	        }
	    }
	});

	var SM2_DEFER = true;
  $(function(){
    $('#player').julienMP3Player({
      soundManagerSwfURL: './swf/',
      soundManagerFlashLoadTimeout: 4000,
      soundManagerDebug: false,
      autoplay: true
    });
  });
})(jQuery, window);