// JavaScript Document
$(document).load(function(){
	// detect if user is swiping left or right and display appropriate image
	$("#wrapper").bind("swipeleft","ui-link",function() {
		$('.nivo-nextNav').trigger('click');
		alert('test');
	});
	$("#wrapper").bind("swiperight",".ui-link",function() {
		$('.nivo-prevNav').trigger('click');
		alert('testtest');
	}); 
});