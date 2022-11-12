jQuery(document).ready(function($){
	AOS.init();

	$('#videoModal').on('hidden.bs.modal', function (e) {
	  $("#videoModal iframe").attr("src", $("#videoModal iframe").attr("src"));
	});

	$(window).scroll(function (event) {
	    var scroll = $(window).scrollTop();
		if(scroll > 200){
      $(".navbar .navbar-brand").addClass("perma-hide");
      $(".navbar .navbar-brand").removeClass("perma-show");
			$(".navbar .primary-menu").addClass("perma-hide");
			$(".navbar .primary-menu").removeClass("perma-show");
		} else{
			$(".navbar .primary-menu").removeClass("perma-hide");
			$(".navbar .primary-menu").addClass("perma-show");
      $(".navbar .navbar-brand").removeClass("perma-hide");
      $(".navbar .navbar-brand").addClass("perma-show");
		}
	});

	var a = 0;
	$(window).scroll(function() {
	    var oTop = $('#counter').offset().top - window.innerHeight;
	    if (a == 0 && $(window).scrollTop() > oTop) {
	      $('.counter-value').each(function() {
	        var $this = $(this),
	          countTo = $this.attr('data-count');
	        $({
	          countNum: $this.text()
	        }).animate({
	            countNum: countTo
	          },
	          {
	            duration: 2000,
	            easing: 'swing',
	            step: function() {
	              $this.text(Math.floor(this.countNum));
	            },
	            complete: function() {
	              $this.text(this.countNum);
	              //alert('finished');
	            }
	          });
	      });
	      a = 1;
	    }
	});

  	//Home page news slider
  	// $('.news-section .news-slider').slick({
   // 	  infinite: true,
  	//   slidesToShow: 2,
  	//   slidesToScroll: 1,
  	//   arrows: false,
  	//   dots: false,
  	//   prevArrow: '<button type="button" class="slick-prev"></button>',
  	//   nextArrow: '<button type="button" class="slick-next"></button>',
  	//   responsive: [
  	//   	{
  	//       breakpoint: 991,
  	//       settings: {
  	//         slidesToShow: 3
  	//       }
  	//     },
  	//     {
  	//       breakpoint: 768,
  	//       settings: {
  	//         slidesToShow: 2
  	//       }
  	//     },
  	//     {
  	//       breakpoint: 575,
  	//       settings: {
  	//         slidesToShow: 1
  	//       }
  	//     },
  	//     {
  	//       breakpoint: 420,
  	//       settings: {
  	//         slidesToShow: 1
  	//       }
  	//     }
  	//     // You can unslick at a given breakpoint now by adding:
  	//     // settings: "unslick"
  	//     // instead of a settings object
  	//   ]
  	// });
	

	$('#footer').waypoint(function(up) {
		var $window = $(window);
	    function checkWidth() {
	        var windowsize = $window.width();
	        if (windowsize > 768) {
	        	console.log('working up');
	            $('.single-insight-banner-section .section-img img').removeClass('position-absolute');
				$('.single-insight-banner-section .section-img img').removeClass('bottom');
				$('.single-insight-banner-section .section-img img').addClass('from-top');
	        }
	    }
	    checkWidth();
	}, { offset: '91%' });
});