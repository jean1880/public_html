// JavaScript Document
$(document).load(function(){
	$("#wrapper").on("swipeleft",".ui-link",function() {
		$('.nivo-nextNav').trigger('click');
		alert('test');
	});
	$("#wrapper").on("swiperight",".ui-link",function() {
		$('.nivo-prevNav').trigger('click');
		alert('testtest');
	}); 
});