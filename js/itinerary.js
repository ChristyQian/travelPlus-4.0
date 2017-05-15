		    var swiper1 = new Swiper('.itineraryPhoto .swiper-container', {
		    		autoplay: 5000,
		    		width:1160,
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        breakpoints: { 
		        		//当宽度小于等于1024
		        		1024:{
		        			width:980
		        		},
		        		//当宽度小于等于768
		        		768:{
		        			width:680
		        		},
				    //当宽度小于等于420
				    420: {
				    	  width:420,
				      slidesPerView: 1,
				      spaceBetweenSlides: 10
				    }
				}
		    });  
		    var swiper2 = new Swiper('.hotels .swiper-container', {
		    		autoplay: 5000,
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        loop:true,
//		        loopedSlides :7,
		        width:560,
		        slidePreview:2,
		        spaceBetween: 20,
		        breakpoints: { 
		        		//当宽度小于等于1024
		        		1024:{
		        			width:460,
		        			height:460
		        		},
				    //当宽度小于等于420
				    420: {
				    	  width:302,
				      slidesPerView: 1,
				      spaceBetweenSlides: 10,
				      slidesOffsetBefore : 10
				    }
				}
		    }); 
		    var swiper3 = new Swiper('.reviews .swiper-container', {
		    		autoplay: 5000,
		        pagination: '.swiper-pagination',
		        paginationClickable: true,
		        loop:true,
		        loopedSlides :6,
		        width:360,
		        slidePreview:3,
		        spaceBetween: 40,
		        breakpoints: { 
				    //当宽度小于等于420
				    420: {
				    	  width:295,
				      slidesPerView: 1,
				      spaceBetweenSlides: 10,
				      slidesOffsetBefore : 10
				    }
				}
		    }); 
		    var swiper4 = new Swiper('.flight .swiper-container',{
		    		autoplay: 5000,
		    		pagination: '.swiper-pagination',
		        paginationClickable: true,
		        width:560,
		        slidePreview:3,
		        spaceBetween: 38,
		        loop:true,
//		        loopedSlides :4,
		        slidesOffsetBefore : -280,
//		        slidesOffsetAfter : 280,
		        breakpoints: { 
		        		//当宽度小于等于1024
		        		1024:{
		        			width:460,
				      	slidesPerView: 1,
				      	spaceBetweenSlides: 10,
				      	slidesOffsetBefore : -250
//		        		  	slidesOffsetAfter : 250		        			
		        		},
		        		//当宽度小于等于420
				    768: {
				    	  width:460,
				      slidesPerView: 1,
				      spaceBetweenSlides: 10,
				      slidesOffsetBefore : -380
//		        		  slidesOffsetAfter : 380
				    },
				    //当宽度小于等于420
				    420: {
				    	  width:300,
				      slidesPerView: 1,
				      spaceBetweenSlides: 10,
				      slidesOffsetBefore : -280
//		        		  slidesOffsetAfter : 280
				    },
				    //当宽度小于等于375-Iphone6
				    375: {
				    	  width:300,
				      slidesPerView: 1,
				      spaceBetweenSlides: 10,
				      slidesOffsetBefore : -300
//		        		  slidesOffsetAfter : 300
				    },
				    //当宽度小于等于320-Iphone5
				    320: {
				    	  width:300,
				      slidesPerView: 1,
				      spaceBetweenSlides: 10,
				      slidesOffsetBefore : -328
//		        		  slidesOffsetAfter : 328
				    }
				  }
		    });
		    $('.allItinerary').click(function(){
			    	if($('.initialScreen').hasClass('expand')){
			    		$('.initialScreen').removeClass('expand');
			    		$('.allItinerary').html('全部行程');
			    	}
			    	else{
				    	$('.initialScreen').addClass('expand');
				    	$('.allItinerary').html('收起行程');
			    	}
		    });
			
				if(jQuery(window).width() >=1024){
					$(".itineraryMap").stick_in_parent();
				}
				else {
					$(".itineraryMap").css('position','static');
				}
						
			
			$('.closeIcon').click(function(){
				$(this).parentsUntil('.com_dialog').hide();
			});
			$('.quoBg .userInfo').click(function(){
				$('.salesWrap .dialogWrap').show();
			});
			
			$('.header .Oval-5').click(function(){
				if(jQuery(window).width() >=768){
					$('.header .dialogWrap').show();
					$('.header .com_dialog').show();
				}
				else if(jQuery(window).width() <768){
					$('.wechat.popup').show();	
					$('.popup .mask').show();
					$('.popupContainer').show();	
				}
			});

			$(".wechat.popup .closePopup").click(function(){
				$('.popup').hide();	
				$('.popup .mask').hide();
				$('.popupContainer').hide();	
			});
			
			
			$('.fixCAT .Oval-5').click(function(){
				if(jQuery(window).width() >=768){
					$('.fixCAT .dialogWrap').show();
					$('.fixCAT .com_dialog').show();
				}
				else if(jQuery(window).width() <768){
					$('.wechat.popup').show();	
					$('.popup .mask').show();
					$('.popupContainer').show();	
				}
			});
			
			$('.header-nav .Oval-5').click(function(){
				$('.header-nav.affix .com_dialog').show();
				$('.header-nav.affix .dialogWrap').show();
			});

/* The sticky-nav will show when scroll up and disappear when scroll down */		
	var $nav = $('#travelPlusNav');

  window.onscroll = function(e){
    scrollFunc();
  	if ($nav.hasClass('affix-top')) {
		return;
	}
    if(scrollDirection == 'down'){
      $nav.css({
			visibility:'hidden',
			opacity:0,
			height:0
		});
    }
    else if (scrollDirection == 'up') {
      $nav.css({
			visibility:'visible',
			opacity:1,
			height: 'auto'
		});
    }
  }

  var scrollAction = { y: 'undefined'}, scrollDirection;
  function scrollFunc() {
    var diffY = scrollAction.y - window.pageYOffset;
     if (diffY < 0) {
    // Scroll down
      scrollDirection = 'down';
    } else if (diffY > 0) {
    // Scroll up
      scrollDirection = 'up';
    } else {
    // First scroll event
    }
    scrollAction.y = window.pageYOffset;
  }
  
  var clientWidth = document.body.clientWidth;
  window.addEventListener('scroll',function(){
	if (clientWidth > 425) {
  		var rolledHeight = document.body.scrollTop;
	  	if (rolledHeight < 700) {
		  	$('.fixCAT').css({
				visibility:'hidden',
				opacity:0
			});
		} 
		else {
		  	$('.fixCAT').css({
				visibility:'visible',
				opacity:1
			});
		  	if (4000 < rolledHeight && rolledHeight < 5700) {
				$('.fixCAT').css({
					visibility:'hidden',
					opacity:0
				});
			}
		}
	}
	else {
		var rolledHeight = document.body.scrollTop;
	  	//console.log(rolledHeight);
	  	if  (rolledHeight < 500) {
		  	$('.fixCAT').css({
				visibility:'hidden',
				opacity:0
			});
		} 
		else {
			$('.fixCAT').css({
				visibility:'visible',
				opacity:1
			});
			if (3600 < rolledHeight && rolledHeight < 4500) {
				$('.fixCAT').css({
					visibility:'hidden',
					opacity:0
				});
			}
		}
	}
});
			