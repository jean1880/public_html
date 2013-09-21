// JavaScript Document
$(document).ready(function() {
    $('li span').click(function(){
		if($(this).siblings('ul').css('display')== 'none')
		{
			$this = $(this);
			$(this).closest('nav').each('ul').not($this.siblings('ul'))fadeOut(250);
			$(this).siblings('ul').fadeIn(250);
		}
		else
		{
			$(this).siblings('ul').fadeOut(250);
		}
	});
});