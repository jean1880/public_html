<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Various Projects</title>
        <link rel="stylesheet" href="nivo-slider.css" type="text/css" />
		<script src="jquery.nivo.slider.pack.js" type="text/javascript"></script>
        <script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>   
        
        <?php
			include('GLOBALS.php');
			include('checkMobile.php');
			
			/*
			 Check if the browser accessing the page is mobile, if it is true, output
			 mobile css and appropriate jquery ui, else output desktop css 
			 */
			$mobile = mobileCheck::checkBrowser();
			
			if ($mobile) 
			{ 
				echo '<link href="'.URL.'DATA/Styles/mobileNavStyle.css" rel="stylesheet" type="text/css">';
				echo '<script src="'.URL.'DATA/NavMenu.js" type="text/javascript" language="javascript"></script>';
			}
			else
			{
				echo '<link href="'.URL.'DATA/Styles/mainStyles.css" rel="stylesheet" type="text/css">';
                echo '<link href="'.URL.'DATA/Styles/navStyle.css" rel="stylesheet" type="text/css">';
                
			}
		?>
       	
        
