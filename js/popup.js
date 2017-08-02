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
$('.closeIcon').click(function(){
	$(this).parentsUntil('.com_dialog').hide();
});