// JavaScript Document
$(document).ready(function() {
	$(document).on('click','#navIcon',function(){
		if($('nav').css('display') == 'none')
		{
			$('nav').slideDown(500);
		}
		else
		{
			$('nav').slideUp(500);
		}
	});
    $(document).on('click','nav span',function(){
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