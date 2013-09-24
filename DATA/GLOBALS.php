<?php
	define('HOME_DIR',"/home/200176338/public_html/");
	define('URL','http://webdesign4.georgianc.on.ca/~200176338/');
	
	// strips file names
	function fileStripper($file)
	{
		$pregArray = array(
			"/.php$/",
			"/.css$/",
			"/.html$/"
		);
		
		$fileNames = array(
			"index" => 'Home',
			"Lab1" 	=> 'Lab 1',
			"AdvancedWebProgramming" => 'Semester 4 - Advanced Web Programming'
		);
		$name = preg_replace($pregArray,'',$file);
		
		return array_key_exists($name,$fileNames) ? $fileNames[$name]:$name;		
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