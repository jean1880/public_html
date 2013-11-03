// JavaScript Document
$(document).ready(function() {
	$('#navIcon').click(function(){
		if($('nav').css('display') == 'none')
		{
			$('nav').slideDown(500);
		}
		else
		{
			$('nav').slideUp(500);
		}
	});
    $('nav span').click(function(){
		var nextUl = $(this).next('ul');
		$(this).siblings().each(function(){
			$(this).not(nextUl).fadeOut(250);
		});
		if($(this).next('ul').css('display') == 'none')
		{
			$(this).next('ul').fadeIn(250);
		}
		else
		{
			$(this).next('ul').fadeOut(250);
		}
	});
});