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
  
    $('#player').julienMP3Player({
      soundManagerSwfURL: './swf/',
      soundManagerFlashLoadTimeout: 4000,
      soundManagerDebug: false,
      autoplay: true
    });

    $(function () {
            //change the date formate
            var seconds = getCountDownTime('7/23/2017 07:00');

            //alert(seconds);  //add an alert to check the time span

            $('.clock').FlipClock( seconds, {
                clockFace: 'DailyCounter',
                countdown: true,
                language:'pt-br'
            });
        });

        function getCountDownTime(eventDate) {
            var date = new Date(eventDate);
            var now = new Date();
            var diff = (date - now) / 1000;
            return diff;
        }  
})(jQuery, window);