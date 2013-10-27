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
	
	$.ajax({
		url: "Scripts/text_generation.xml",
		dataType: "xml",
		success:function(data) {
			var xmlDoc 	= $.parseXML(data),
			$xml 	= $(data),
			$cost 	= $xml.find("cost"),
			$lvl	= $xml.find("lvl"),
			$photo	= $xml.find("photo"),
			$text	= $xml.find("text");
			$("#cost").text($cost.text());
			$("#lvl").text($lvl.text());
			$("#photo").attr("src",$photo.text());
			$("#text").text($text.text());	
		}
	});

});