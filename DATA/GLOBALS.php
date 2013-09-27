<?php
	define('HOME_DIR',"/home/200176338/public_html/");
	define('URL','http://webdesign4.georgianc.on.ca/~200176338/');
	
	// strips file names
	function fileStripper($file)
	{
		$pregArray = array(
			"/.php$/",
			"/.css$/",
			"/.html$/",
			"/.jpg$/"
		);
		
		$fileNames = array(
			"index" => 'Home',
			"Lab1" 	=> 'Lab 1',
			"AdvancedWebProgramming" => 'Semester 4 - Advanced Web Programming'
		);
		$name = preg_replace($pregArray,'',$file);
		
		return array_key_exists($name,$fileNames) ? $fileNames[$name]:$name;		
	}
	
	function sliderURLS($fileName)
	{
		switch ($fileName)
		{
			case "forum":
				return URL."WebProgrammingClass/forum/";
			case "Live Weather":
				return URL."IntrotoHTMLClass/Assignment%203/";
			case "trolls":
				return URL."IntrotoHTMLClass/trolls/";
			case "me":
				return URL."index.php";
			case "comments":
				return URL."WebProgrammingClass/PHPAssignment2/";
			default:
				return "$fileName";
		}
	}
	
	
	function nonReturnList()
	{
		return array(
				'.',
				'..',
				'Styles',
				'DATA',
				'images',
				'photos',
				'index.php'
			);
	}
?>