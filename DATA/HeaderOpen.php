<!DOCTYPE html>
<html>
    <head>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
        <title>Various Projects</title>
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>   
        
        <?php
			include('GLOBALS.php');
			
			$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
			$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
			$palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
			$berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
			$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
			
			if ($iphone || $android || $palmpre || $ipod || $berry) 
			{ 
				
			}
			else
			{
				
                echo '<link href="'.URL.'DATA/Styles/navStyle.css" rel="stylesheet" type="text/css">';
                
			}
		?>
       	
        
