<?php
	/**
		This page stores some main functions used throughout the site, particularly the headers, as well
		it also stores some of the main constants for the website
	**/
	define('HOME_DIR',"/home/200176338/public_html/");
	define('URL','http://webdesign4.georgianc.on.ca/~200176338/');
	
	// define MySQL login info
	define('MYSQLUSERNAME','db200176338');
	define('MYSQLPASSWORD','99939');
	define('MYSQLDSN',"webdesign4.georgianc.on.ca");
	define('DBNAME','db200176338');
	define('KEY','KX;5Lz=nc4(.xz?h:xEW=?|]-WKU.');
	define('KEYNAME','4b583b354c7a3d6e6334282e787a3f683a7845573d3f7c5d2d574b552e');
	$db = new PDO('mysql:host='.MYSQLDSN.';dbname='.DBNAME, MYSQLUSERNAME, MYSQLPASSWORD);
	
	// strips file identifiers from the names of the files and formats them to be more human readable
	function fileStripper($file)
	{
		// list of identifiers to remove from file names
		$pregArray = array(
			"/.php$/",
			"/.css$/",
			"/.html$/",
			"/.jpg$/"
		);
		
		// list of files to convert to a human readable format
		$fileNames = array(
			"index" 					=> 'Home',
			"Lab1" 						=> 'Lab 1',
			"AdvancedWebProgramming" 	=> 'Semester 4 - Advanced Web Programming',
			"about-me"					=> 'About Me',
			"contact-me"				=> 'Contact Me'
		);
		$name = preg_replace($pregArray,'',$file);
		
		return array_key_exists($name,$fileNames) ? $fileNames[$name]:$name;		
	}
	
	// sets the place to that a tags should reference for each picture
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
				return URL."about-me.php";
			case "comments":
				return URL."WebProgrammingClass/PHPAssignment2/";
			default:
				// return filename if file not recognised for error catching
				return "$fileName";
		}
	}
	
	// list of items to not return when parsing through folders and files
	function nonReturnList()
	{
		return array(
				'.',
				'..',
				'Styles',
				'Scripts',
				'DATA',
				'images',
				'photos',
				'index.php'
			);
	}
?>