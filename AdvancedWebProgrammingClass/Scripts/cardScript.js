// JavaScript Document
$(document).ready(function(){
	var $toggle = false;
	$("#showHide").click(function() {
		if($toggle)
		{
			$("#card").slideDown(500);
			$(this).children("#javatext").text("Hide Card");;
		}
		else
		{
			$("#card").slideUp(500);
			$(this).children("#javatext").text("Show Card")
		}
		$toggle = !$toggle;
	});
});