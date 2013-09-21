<?php
/**
check the browser user agent string for mobile browser keywords
 */
class mobileCheck
{
	public function __constructor()
	{
		
	}
	
	public static function checkBrowser()
	{
		$iphone 	= strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$android 	= strpos($_SERVER['HTTP_USER_AGENT'],"Android");
		$palmpre 	= strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
		$berry 		= strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
		$ipod 		= strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$mobile		= strpos($_SERVER['HTTP_USER_AGENT'],"mobile");
		
		if ($iphone || $android || $palmpre || $ipod || $berry || $mobile) 
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
?>