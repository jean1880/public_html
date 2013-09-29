<!DOCTYPE html>
<html>
    <head profile="http://www.w3.org/2005/10/profile">
        <!-- Designed, developed, and coded by Jean-Luc Desroches -->
        <?php
			include('GLOBALS.php');
			include('checkMobile.php');
			echo '<link rel="icon" href="'.URL.'DATA/Logos/logo_address.png" type="image/png">';
		?>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <!-- made by www.metatags.org -->
        <meta name="description" content="A personal profile page for Jean-Luc Desroches, come view, and experience." />
        <meta name="keywords" content="Jean-Luc, Desroches, Profile, Georgian, College, Student, Programmer, Developer, Web-Programming" />
        <meta name="author" content="metatags generator">
        <meta name="robots" content="index, follow">
        <meta name="revisit-after" content="1 month">
        <title>Jean-Luc Desroches Profile</title>
        <!-- Jean-Luc, Desroches, Profile -->

        <script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script></script> 
         <link href='http://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
        <?php
			/*
			 Check if the browser accessing the page is mobile, if it is true, output
			 mobile css and appropriate jquery ui, else output desktop css 
			 */
			$mobile = mobileCheck::checkBrowser();
			echo '<link href="'.URL.'DATA/Styles/footerStyle.css" rel="stylesheet" type="text/css">';
			
			
			if ($mobile) 
			{ 
				echo '<link href="'.URL.'DATA/Styles/mobileNavStyle.css" rel="stylesheet" type="text/css">';
				echo '<script src="'.URL.'DATA/JavaScripts/NavMenu.js" type="text/javascript" language="javascript"></script>';
			}
			else
			{
                echo '<link href="'.URL.'DATA/Styles/navStyle.css" rel="stylesheet" type="text/css">';
                
			}
		?>
       	
        
