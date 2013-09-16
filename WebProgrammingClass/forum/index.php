<?php
	// Start the session
	require_once('DATA/startsession.php');
	
	// Insert the page header
	$page_title = 'Where Ideas Are Reality';

	require_once('DATA/header.php');
	
	require_once('DATA/TESTS.php');
	require_once('DATA/connectvars.php');
	
	// Show the navigation menu
	require_once('DATA/navmenu.php');
	
	// Connect to the database 
	$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
	
	// Retrieve the user data from MySQL
	$query = "SELECT title, user_id, title_id, topic_date FROM forum_titles ORDER BY topic_date";
	$data = mysqli_query($dbc, $query);
	
	// Loop through the array of data, formatting it as HTML
	echo '<div class="content">';
	echo '<h4>Topics</h4>';

	while ($row = mysqli_fetch_array($data)) 
	{
		echo '<div class="topic">';
			$query = "SELECT user_name FROM forum_users WHERE user_id = " . $row['user_id'];
			$user_data = mysqli_query($dbc, $query);
			$user_row = mysqli_fetch_array($user_data);
			echo '<a href="topic.php?topic=' . $row['title_id'] . '" >
				<div>
					<p class="title">Topic: ' . $row['title'] . '</p>
					<p class="topic_date">Created: ' . $row['topic_date'] . '</p>
				</div>
				<p class="user_id">Created By: ' . $user_row['user_name'] . '</p>
				<a href="topic.php?topic=' . $row['title_id'] . '" class="button">View Topic</a>
			</a>';
		echo '</div>';
	}
	
	mysqli_close($dbc);
	echo '</div>';
?>

<?php
  // Insert the page footer
  require_once('DATA/footer.php');
?>
