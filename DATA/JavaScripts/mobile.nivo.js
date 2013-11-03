// JavaScript Document
$(document).load(function(){
	$("#wrapper").bind("swipeleft","ui-link",function() {
		$('.nivo-nextNav').trigger('click');
		alert('test');
	});
	$("#wrapper").bind("swiperight",".ui-link",function() {
		$('.nivo-prevNav').trigger('click');
		alert('testtest');
	}); 
});