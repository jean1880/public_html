<?php
  // Generate the navigation menu
  	echo '<nav>';
	  	echo '<ul>';
			  if (isset($_SESSION['user_name'])) 
			  {
	 			echo '<li><a href="index.php">Home</a></li>';
				echo '<li><a href="topic.php?topic=0">New Topic</a></li>';
				echo '<li><a href="viewprofile.php">View Profile</a></li>';
				echo '<li><a href="editprofile.php">Edit Profile</a></li>';
				echo '<li><a href="logout.php">Log Out (' . $_SESSION['user_name'] . ')</a></li>';
			  }
			  else 
			  {
				echo '<li><a href="index.php">Home</a></li>';
				echo '<li><a href="login.php">Log In</a></li>';
				echo '<li><a href="signup.php">Sign Up</a></li>';
			  }
		echo '</ul>';
	echo '</nav>'
?>
