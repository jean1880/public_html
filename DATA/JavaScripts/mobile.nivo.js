// JavaScript Document
	$('#slider').on( "swipeleft",function() {
		$('.nivo-nextNav').trigger('click');
		alert('test');
	});  
	
	$('#slider').on( "swiperight",function() {
		$('.nivo-prevNav').trigger('click');
		alert('testtest');
	}); 