$(function(){
	paddingHeight();
});

function paddingHeight(){
	var height = $('.triggeredFooterPop').height();
	$('footer').css('padding-bottom',height+50);
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

$('.close').click(function(){
	$('.triggeredFooterPop').hide();
	paddingHeight();
});

$('#lead-submit-button').click(
function()
{
 if(Lead_Validation("sp-form"))
 {
  $('.triggeredLeadForm').hide();
  $('.triggeredLeadFormFeedback').show();
  paddingHeight();
 }
} 
);
