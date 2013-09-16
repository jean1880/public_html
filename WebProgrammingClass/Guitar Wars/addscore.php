<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Guitar Wars - Add Your High Score</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <h2>Guitar Wars - Add Your High Score</h2>

<?php
  if (isset($_POST['submit'])) {
    // Grab the score data from the POST
    $name = $_POST['name'];
    $score = $_POST['score'];
    $screenshot = $_FILES['screenshot']['name'];
    define("GW_UPLOADPATH","images/");
    require_once('../PHPAssignment2/DATA/DB_CONNECT.php');

    if (!empty($name) && !empty($score)) {
      // Connect to the database
        /*$dbc = mysqli_connect("webdesign4.georgianc.on.ca","db200176338",
            "99939","db200176338");*/
        $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
      // Write the data to the database
      $query = "INSERT INTO guitarwars VALUES (0, NOW(), '$name', '$score', '$screenshot')";
      mysqli_query($dbc, $query);
	  
	  // Move the file uploaded to where we want it to go
	  move_uploaded_file($_FILES['screenshot']['tmp_name'],GW_UPLOADPATH.$screenshot);
	  
      // Confirm success with the user
      echo '<p>Thanks for adding your new high score!</p>';
      echo '<p><strong>Name:</strong> ' . $name . '<br />';
      echo '<strong>Score:</strong> ' . $score . '</p>';
      echo '<p><a href="index.php">&lt;&lt; Back to high scores</a></p>';

      // Clear the score data to clear the form
      $name = "";
      $score = "";

      mysqli_close($dbc);
    }
    else {
      echo '<p class="error">Please enter all of the information to add your high score.</p>';
    }
  }
?>

  <hr />
  <form enctype="multipart/form-data" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" value="<?php if (!empty($name)) echo $name; ?>" /><br />
    <label for="score">Score:</label>
    <input type="text" id="score" name="score" value="<?php if (!empty($score)) echo $score; ?>" />
    <label for="screenshot">Screenshot
    	<input type="file" name="screenshot" />
    </label>
    <hr />
    <input type="submit" value="Add" name="submit" />
  </form>
</body> 
</html>
