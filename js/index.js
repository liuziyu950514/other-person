$(function(){

		
	var owl = $("#skillSlider");
	owl.owlCarousel({
      items : 6,
      	itemsCustom: [
			[0, 3],
			[400, 4],
			[500, 5],
			[620, 6],
			[700, 8],
			[992, 5],
			[1200, 6]
		],
		pagination : false
  });
	
	$(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $('.l1').on('mouseover',function(){
		$('.f1').addClass('transition');
		$('.i1').addClass('hovimg');
	})
	$('.l1').on('mouseout',function(){
		$('.f1').removeClass('transition');
		$('.i1').removeClass('hovimg');
	})

	$('.l2').on('mouseover',function(){
		$('.f2').addClass('transition');
		$('.i2').addClass('hovimg');
	})
	$('.l2').on('mouseout',function(){
		$('.f2').removeClass('transition');
		$('.i2').removeClass('hovimg');
	})
	$('.l3').on('mouseover',function(){
		$('.f3').addClass('transition');
		$('.i3').addClass('hovimg');
	})
	$('.l3').on('mouseout',function(){
		$('.f3').removeClass('transition');
		$('.i3').removeClass('hovimg');
	})
	$('.l4').on('mouseover',function(){
		$('.f4').addClass('transition');
		$('.i4').addClass('hovimg');
	})
	$('.l4').on('mouseout',function(){
		$('.f4').removeClass('transition');
		$('.i4').removeClass('hovimg');
	})
	$('.l5').on('mouseover',function(){
		$('.f5').addClass('transition');
		$('.i5').addClass('hovimg');
	})
	$('.l5').on('mouseout',function(){
		$('.f5').removeClass('transition');
		$('.i5').removeClass('hovimg');
	})
	$('.l6').on('mouseover',function(){
		$('.f6').addClass('transition');
		$('.i6').addClass('hovimg');
	})
	$('.l6').on('mouseout',function(){
		$('.f6').removeClass('transition');
		$('.i6').removeClass('hovimg');
	})
	$('.l7').on('mouseover',function(){
		$('.f7').addClass('transition');
		$('.i7').addClass('hovimg');
	})
	$('.l7').on('mouseout',function(){
		$('.f7').removeClass('transition');
		$('.i7').removeClass('hovimg');
	})
	$('.l8').on('mouseover',function(){
		$('.f8').addClass('transition');
		$('.i8').addClass('hovimg');
	})
	$('.l8').on('mouseout',function(){
		$('.f8').removeClass('transition');
		$('.i8').removeClass('hovimg');
	})


	$('.input-box').on('focus',function(){
		$(this).addClass('active-b');
		
	})
	$('.input-box').on('blur',function(){
	
			$(this).removeClass('active-b');
			
		
		
	})

	$(window).on('scroll',function(){
		if($(window).scrollTop()>178){
			$('.sticky-header').addClass('now-visible');
		}else{
			$('.sticky-header').removeClass('now-visible');
		}
	})



	$('.navbar-toggle').click(function() {	
 	$('.navbar-collapse').slideToggle('slow');
});

	$('.btn-outer').on('click',function(){
		if($('.search-box').css('visibility')=='hidden'){
			$('.search-box').addClass('gtop');
		}else{
			$('.search-box').removeClass('gtop');
		}
	})

	$(window).scroll(function(){
		if ($(window).scrollTop()>($('.person-img').offset().top-$(window).height())){
			$('.person-img').addClass('appear');
		}
	})

	$(window).scroll(function(){
		if ($(window).scrollTop()>($('.owl-wrapper-outer').offset().top-$(window).height())){
			$('#skillSlider').find('.singel-hr-inner').each(function(){
				var height = $(this).data('height');
				$(this).css('height', height);
			});
		}
	})
	// console.log($('#skillSlider').find('.singel-hr-inner'))

	$(window).scroll(function(){
		if ($(window).scrollTop()>($('#blog-posts').offset().top-$(window).height())){
			$('.card').addClass('aa');

		}
	})


	$(".navigation li a[href^='#']").on('click',function(e){
		e.preventDefault();
		$('html,body').animate({
			scrollTop:$(this.hash).offset().top
		},500);
	});

	$('.hire-me-btn').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop: $("#contact").offset().top}, 500);
    });


























})