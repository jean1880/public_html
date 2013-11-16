// JavaScript Document
$(document).load(function(){
	$(".nivo-imagelink").bind("swipeleft",function(e) {
		$('.nivo-nextNav').trigger('click');
		e.stopImmediatePropagation();
		return false;		
	});
	$(".nivo-imagelink").bind("swiperight",function(e) {
		$('.nivo-prevNav').trigger('click');
		e.stopImmediatePropagation();
		return false;
	}); 
});