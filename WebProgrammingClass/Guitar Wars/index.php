<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - High Scores</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - High Scores</h2>
  <p>Welcome, Guitar Warrior, do you have what it takes to crack the high score list? If so, just <a href="addscore.php">add your own score</a>.</p>
  <hr />

	<?php
	require_once('DB_CONNECT.php');

	  // Connect to the database 
	  /*$dbc = mysqli_connect("webdesign4.georgianc.on.ca","db200176338",
	            "99939","db200176338");*/
	  $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

	  // Retrieve the score data from MySQL
	  $query = "SELECT * FROM guitarwars";
	  $data = mysqli_query($dbc, $query);
	
	  // Loop through the array of score data, formatting it as HTML 
	  echo '<table>';
	  while ($row = mysqli_fetch_array($data)) { 
	    // Display the score data
	    
	    echo '<tr><td class="scoreinfo">';
	    echo '<p class="score">' . $row['score'] . '</p>';
	    echo '<p><strong>Name:</strong> ' . $row['name'] . '<p>';
	    echo '<img src="images/'. $row['screenshot'] .'" />';
	    echo '<p><strong>Date:</strong> ' . $row['date'] . '<p></td></tr>';
	  }
	  echo '</table>';
	
	  mysqli_close($dbc);
?>

</body> 
</html>
