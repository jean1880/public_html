<?php
	include('/home/200176338/public_html/DATA/HeaderOpen.php');	
?>    
	<title>Midterm</title>
	<script type="text/javascript" src="Scripts/stopwatch.js"></script>
	<link href="Styles/midterm.css" rel="stylesheet" type="text/css">
<?php
	include('/home/200176338/public_html/DATA/HeaderClose.php');
 ?> 
 <div id="section">
 	<select id="direction">
		  <option value="0" >Count Up</option>
		  <option value="1">Count Down</option>
	</select>
 	<stopwatch>
 		<input type="number" value="00" id="hr" min="00" max="24">:
 		<input type="number" value="00" id="min" min="00" max="60">:
 		<input type="number" value="00" id="sec" min="00" max="60">.
 		<input type="number" value="0000" id="msec" min="00" max="1000"> 
 		<button id="start">Start</button>
	 	<button id="pause">Pause</button>
	 	<button id="reset">Reset</button>		
 	</stopwatch> 	 	
 	<button id="fiveMin">5 Minutes</button>
 	<button id="tenMin">10 Minutes</button>
 	<button id="fifteenMin">15 Minutes</button>
 </div>
 <?php
	include(HOME_DIR.'DATA/Footer.php');
?>