<?php
  $page_title = 'Log In';
  require_once('DATA/header.php');
  require_once('DATA/connectvars.php');  
  require_once('DATA/navmenu.php');
  
  echo '<div class="content">';
  // Start the session
  session_start();


  // If the user isn't logged in, try to log them in
  if (!isset($_SESSION['user_id'])) 
  {
    if (isset($_POST['submit'])) 
	{
      // Connect to the database
      $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

      // Grab the user-entered log-in data
      $user_username = mysqli_real_escape_string($dbc, trim($_POST['username']));
      $user_password = mysqli_real_escape_string($dbc, trim($_POST['password']));

      
        // Look up the username and password in the database
        $query = "SELECT user_id, user_name FROM forum_users WHERE user_name = '$user_username' AND user_password = SHA('$user_password')";
        $data = mysqli_query($dbc, $query);
		echo $row['user_id'];
		
        if (mysqli_num_rows($data) == 1) 
		{
          // The log-in is OK so set the user ID session variables and cookies, and redirect to the home page
          $row = mysqli_fetch_array($data);
          $_SESSION['user_id'] = $row['user_id'];
		  $_SESSION['user_name'] = $row['user_name'];
		  setcookie('user_id', $row['user_id'], time() + (60 * 30));    // expires in thirty minutes
          $home_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
          header('Location: ' . $home_url);
        }
        else 
		{
          // The username/password are incorrect so set an error message
          echo '<p class = "error" >Sorry, invalid username, or password entered, please enter a valid username and password to continue</p>';
        }
      
    }
  
?>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <fieldset>
      <legend>Log In</legend>
      <label for="username">Username:</label>
      <input type="text" name="username" value="<?php if (!empty($user_username)) echo $user_username; ?>" /><br />
      <label for="password">Password:</label>
      <input type="password" name="password" />
    </fieldset>
    <input type="submit" value="Log In" name="submit" class="submit"/>
  </form>

<?php
  }
  else 
  {
	if($_SESSION['user_id']=="")
	{
		echo "<p class='error'>Error, reseting session info. Please refresh the page and try agian</p>";
		session_unset($_SESSION['user_id']);
		session_unset($_SESSION['user_name']);
		session_destroy();		
	}
  }
  echo '</div>';
?>

<?php
  // Insert the page footer
  require_once('DATA/footer.php');
?>
