// var paddingHight();
function paddingHeight(){
	var height = $('.triggeredFooterPop').height();
	$('footer').css('padding-bottom',height+60);
}

$('.triggeredLeadFormHeader h5').click(function(){
	$('.triggeredLeadFormHeader').hide();
	$('.triggeredLeadForm').show();
	paddingHeight();
});

$('.goBackStatusIcon').click(function(){
	$('.triggeredLeadForm').hide();
	$('.triggeredLeadFormHeader').show();
	paddingHeight();
});

$('.triggeredLeadFormHeader .close').click(function(){
	$('.triggeredFooterPop').hide();
	paddingHeight();
});
