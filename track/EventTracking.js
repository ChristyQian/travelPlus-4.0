// WHO WROTE THIS???? YOU DESERVE TO BURN. SLOWLY.

function bs_getPageName(){
	var page = top.location.pathname.replace('/sp/', '').replace('.php', '');
	if(page==""){page="index";}	
	return page;
}
function bs_getEventCategory(){
	if(bs_getPageName()=="index"){return"Home Page";}
	if(bs_getPageName().indexOf("itinerary-")!=-1){return "Itinerary Page";}
	return "Sub Page";
}
function bs_isGaLoaded(){
    return ('function' === typeof ga);
}
function bs_trackClick(category, label){
	if(bs_isGaLoaded()){
		//console.log(category+", Click, "+label);
		ga('send', 'event', {
			eventCategory: category,
			eventAction: 'click',
			eventLabel: label
		});		
	}	
}

//Top Sticky Menu 
//$(document).on('click', ".home-ceil-bar div span a:eq(0)", function(){
//	bs_trackClick(bs_getEventCategory(), "Top Banner");
//});

//Bottom CTA
//$(document).on('click', ".cta-banner a", function(){
//	bs_trackClick(bs_getEventCategory(), "Bottom Text Link");
//});

//Slider CTAs
//$(document).on('click', ".home-visual .home-image ul li button", function(){
//	var slideIndex = $(this).parents('li').index()+1;
//	bs_trackClick(bs_getEventCategory(), "Slide"+slideIndex);
//});

//Form Age
//$(document).on('change', "select#age", function(){
//	bs_trackClick(bs_getEventCategory(), "Form Age");
//});

//Form City
//$(document).on('change', "select#city", function(){
//	bs_trackClick(bs_getEventCategory(), "Form City");
//});

//Form Departure City 
//$(document).on('change', "select#departure_from", function(){
//	bs_trackClick(bs_getEventCategory(), "Form Departure City");
//});

//Form Departure City 
//$(document).on('change', "select#departure_date", function(){
//	bs_trackClick(bs_getEventCategory(), "Form Departure Date");
//});

//Form Submit Button
//$(document).on('click', ".form-button button", function(){
//	bs_trackClick(bs_getEventCategory(), "Form Submit");
//});



/*** for new website 2017 ***/

//trip card with page-name
$(document).on('click', ".home-trip-box", function(){
	var tripCard = $(this).attr('id');
	bs_trackClick(bs_getEventCategory(), "Trip Card: " + tripCard);
});

//homepage billboard
$(document).on('click', ".swiper-slide .recommand a", function(){
	var slideIndex = $(this).attr('id');
	bs_trackClick(bs_getEventCategory(), slideIndex);
});

//all-trip page filter destination
$(document).on('change', "select#destination", function(){
	var selectedDest = $(this).find('option:selected').text();
	bs_trackClick(bs_getEventCategory(), "Trip Filter Destination: " + selectedDest);
});

//all-trip page filter destination
$(document).on('click', "div#trip-tag .checkbox", function(){
	var selectedTag = $(this).attr('data-tag');
	bs_trackClick(bs_getEventCategory(), "Trip Filter Tag: " + selectedTag);
});

//form departure city with page-name
$(document).on('change', "select#city", function(){
	bs_trackClick(bs_getEventCategory(), "Form Departure City");
});

//form departure date with page-name
$(document).on('change', "select#age", function(){
	bs_trackClick(bs_getEventCategory(), "Form Departure Date");
});

//right-top wechat with page-name
$(document).on('click', "div#top-wechat", function(){
	bs_trackClick(bs_getEventCategory(), "Right Top Wechat");
});

//right-top more-offer with page-name
$(document).on('click', "a#top-offer", function(){
	bs_trackClick(bs_getEventCategory(), "Right Top More Offer");
});

//right-top hotline with page-name
$(document).on('click', "div#top-hotline", function(){
	bs_trackClick(bs_getEventCategory(), "Right Top Hotline");
});

//right-top get-price with page-name
$(document).on('click', ".itineraryBasicInfo div a", function(){
	bs_trackClick(bs_getEventCategory(), "Get Price");
});

//sticky bar wechat with page-name
$(document).on('click', "div#sticky-wechat", function(){
	bs_trackClick(bs_getEventCategory(), "Sticky Bar Wechat");
});


//sticky bar hotline with page-name
$(document).on('click', "div#sticky-hotline", function(){
	bs_trackClick(bs_getEventCategory(), "Sticky Bar Hotline");
});

//sticky bar get-price with page-name
$(document).on('click', "a#sticky-get-price", function(){
	bs_trackClick(bs_getEventCategory(), "Sticky Bar Get Price");
});

//navigation with page-name
$(document).on('click', ".header-nav div ul li a", function(){
	var navLink = $(this).attr('id');
	bs_trackClick(bs_getEventCategory(), "Nav Link: " + navLink);
});


//全部行程 button in itinerary pages
$(document).on('click', "button.allItinerary", function(){
	bs_trackClick(bs_getEventCategory(), "查看完整行程 Button");
});

/* Edited By Christy */
//breadcrumb in SpainLanding_download 
$(document).on('click', ".breadcrumbs li a", function(){
	bs_trackClick(bs_getEventCategory(), "Breadcrumb Link");
});

//ask for bfr in SpainLanding_download mobile screen
$(document).on('click', ".rightWrapHead", function(){
	bs_trackClick(bs_getEventCategory(), "Open Form in Mobile");
});

//close the form in SpainLanding_download mobile screen
$(document).on('click', ".goBackStatusIcon", function(){
	bs_trackClick(bs_getEventCategory(), "Close Form in Mobile");
});

//download BFR form spainLanding-download-Thankyou page
$(document).on('click', ".button-download", function(){
	bs_trackClick(bs_getEventCategory(), "Download PDF");
});

//click tab in europeLanding page
$(document).on('click', ".blueRList li a", function(){
	var tabValue = $(this).attr('aria-controls');
	bs_trackClick(bs_getEventCategory(), "Seven Tabs: " + tabValue);
});
