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

	 // var SM2_DEFER = true;
  
  //   $('#player').julienMP3Player({
  //     soundManagerSwfURL: './swf/',
  //     soundManagerFlashLoadTimeout: 4000,
  //     soundManagerDebug: false,
  //     flashVersion: 9,
  //   useHTML5Audio: false,
  //   debugMode: true,
  //   debugFlash: true,
  //   useFlashBlock: false,
  //     autoplay: true
  //   });

    $(function () {
        //change the date formate
        var seconds = getCountDownTime('11/18/2019 17:00');

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

    $('#carousel-generic').carousel({
		interval: 2000
	});
	$('a[data-slide="prev"]').click(function() {
	  $('#carousel-generic').carousel('prev');
	});

	$('a[data-slide="next"]').click(function() {
	  $('#carousel-generic').carousel('next');
	});

	jQuery("document").ready(function($){
		var nav = $('.nav-fixo');

		$(window).scroll(function () {
			if ($(this).scrollTop() > 136) {
				nav.addClass("fixo");
			} else {
				nav.removeClass("fixo");
			}
		});
	});

	// $(".suave").click(function(event){
	//     event.preventDefault();
	//     $('html, body').animate({
	//         scrollTop: $( $.attr(this, 'href') ).offset().top
	//     }, 1500);
	// });

	jQuery(document).ready(function($) { 
	    $(".scroll").click(function(event){        
	        event.preventDefault();
	        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 1500);
	   });
	});

	var myDiv1 = document.getElementById('esquerda');
	var myDiv2 = document.getElementById('direita');

    myDiv1.onmouseover = function() {
        $('#carousel-generic').carousel('prev');
    }
    myDiv2.onmouseover = function() {
        $('#carousel-generic').carousel('next');
    }

    $(document).ready(function(){
        $('.musicas').ttwMusicPlayer(myPlaylist, {
            autoplay:true, 
            jPlayer:{
                swfPath:'plugin/jquery-jplayer' //You need to override the default swf path any time the directory structure changes
            }
        });
    });

 //    $('.nav a').on('click', function(){
	//     $('.navbar-toggle').click() //bootstrap 3.x by Richard
	// });
})(jQuery, window);