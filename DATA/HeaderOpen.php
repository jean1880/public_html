<?php session_start(); // start session for mobile detection saving 
if(isset($_GET['logOut']))
{
	if(isset($_SESSION['username']))
	{
	  unset($_SESSION['username']);
	}
	if(isset($_SESSION[KEYNAME]))
	{
	  unset($_SESSION[KEYNAME]);
	}
}
?>
<!DOCTYPE html>
<html>
    <head profile="http://www.w3.org/2005/10/profile">
        <!-- This website was Designed, developed, and coded by Jean-Luc Desroches -->
        
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <!-- made by www.metatags.org -->
        <meta name="description" content="A personal profile page for Jean-Luc Desroches, come view, and experience." />
        <meta name="keywords" content="Jean-Luc, Desroches, Profile, Georgian, College, Student, Programmer, Developer, Web-Programming" />
        <meta name="author" content="metatags generator">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 month">
        <!-- Jean-Luc, Desroches, Profile -->          
        <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
        <?php
			/*
				@Author Jean-Luc Desroches
				
				This file opens the main header content and loads global files 
				for every page. Must be included with every page to allow for full functionality
			*/
			include('GLOBALS.php');
			include('checkMobile.php');
			/*
			 Check if the browser accessing the page is mobile, if it is true, output
			 mobile css and appropriate jquery ui, else output desktop css 
			 */
			$mobile = mobileCheck::checkBrowser();
			
			echo '<script src="'.URL.'DATA/JavaScripts/jquery-2.0.0.min.js"></script>';
			if(isset($_SESSION['username']) && (isset($_SESSION[KEYNAME]) && $_SESSION[KEYNAME] == KEY))
			{
				echo '<script src="'.URL.'DATA/JavaScripts/logOut.js"></script>';
			}
			echo '<link href="'.URL.'DATA/Styles/footerStyle.css" rel="stylesheet" type="text/css">';
			echo '<link rel="icon" href="'.URL.'DATA/Logos/logo_address.png" type="image/png">';
			echo '<script language="text/javascript">

					  $(document).bind("mobileinit", function () {
				
							$.mobile.ajaxEnabled = false;
				
					  });
				
				</script>';
			
			// check whether user has sent a request for the full site through the url
			if(isset($_GET["full"]))
			{
				if($_GET["full"] == 1)
				{				
					$_SESSION['fullSite'] = true;
				}
				elseif($_GET["full"] == 0)
				{				
					$_SESSION['fullSite'] = false;
				}
			}
			if ($mobile && !($_SESSION['fullSite'])) 
			{ 
				echo '<link href="'.URL.'DATA/Styles/jquery.mobile-1.3.2.min.css" rel="stylesheet" type="text/css">';
				echo '<script src="'.URL.'DATA/JavaScripts/jquery.mobile-1.3.2.min.js"></script>';
				echo '<link href="'.URL.'DATA/Styles/jquery-mobile-theme-190452-0/themes/Alpha-dark.min.css" rel="stylesheet" type="text/css">';				
				echo '<script src="'.URL.'DATA/TouchSwipe-Jquery-Plugin/jquery.touchSwipe.min.js" type="text/javascript" language="javascript"></script>';
				echo '<link href="'.URL.'DATA/Styles/mobileNavStyle.css" rel="stylesheet" type="text/css">';
				echo '<script src="'.URL.'DATA/JavaScripts/NavMenu.js" type="text/javascript" language="javascript"></script>';
			}
			else
			{
                echo '<link href="'.URL.'DATA/Styles/navStyle.css" rel="stylesheet" type="text/css">';
                
			}
		?>
       	
        
