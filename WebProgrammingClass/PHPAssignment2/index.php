<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Big News</title>
        <link rel="stylesheet" type="text/css" href="styles/style.css" />
        <!--[if gte IE 9]>
          <style type="text/css">
            .gradient {
               filter: none;
            }
          </style>
        <![endif]-->
    </head>
    
    <body>
		<?php
			// get database connection variables
			require_once('DATA/DB_CONNECT.php');
			
			// set default timezone
			date_default_timezone_set('Canada/Eastern');
			
			// collect the current date and time from the server
			$tmp_date=getdate(); 
			
			// Check the minutes returned from the user, correct output to insert a 0 for minutes less than ten
			if($tmp_date["minutes"]<10)
			{
				$tmp_minute = "0".$tmp_date["minutes"];
			}
			
			else
			{
				$tmp_minute = $tmp_date["minutes"];
			}
			
			/* Concatenate the date into a string which will be returned to the browser for submission back 
			into php and saved into the database */
			$submitDate=$tmp_date["hours"] . ":" . $tmp_minute . " " . $tmp_date["weekday"] . " " . $tmp_date["month"] . " " . $tmp_date["mday"] . ", " . $tmp_date["year"]; 
			
			// Check main variables
			$loginSuccesful=$_POST['admin'];
			$editMode=$_POST['editmode'];
			$commentError=false;
			
			// if the login button is hit
			if(isset($_POST['login']))
			{
				$login = $_POST['user'];
				$password = $_POST['password'];
				
				// Get stored username and password
				require_once('DATA/LOGIN.php');
				
				// Check the login username and password to correct login name and password 
				if ($login === $loginCorrect && $password === $passwordCorrect)
				{
					$loginSuccesful=true;
				}
				else 
				{
					echo "<p class='error'";
					// if the user has not logged in move the error down to avoid login box
					if($loginSuccesful != true)
					{
						echo 'style="margin-top:30px;"';
					}
					echo ">Incorrect username/password</p>";	
				}
			}
			
			if(isset($_POST['delete']))
			{
				$index=$_POST['index'];
				// Connect to the database
				$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
				// Delete the data from the database
				$query = "DELETE FROM loremIpsum WHERE `index`=".$index;
				mysqli_query($dbc, $query);		
				
				// Close the connection to the database
				mysqli_close($dbc);
			}
			
			// If the edit button is hit
			if(isset($_POST['edit']))
			{
				$editMode=true;
				$index=$_POST['index'];
				
				// Connect to the database
				$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
				
				// Get the data from the database
				$query = "SELECT * FROM loremIpsum WHERE `index`=" . $index;
				$data = mysqli_query($dbc, $query);	
				
				// Pull the data out of the returned results from the database
				$row = mysqli_fetch_array($data);
				$name = $row['name'];
				$comment = $row['comment'];
				
				// Close the database connection
				mysqli_close($dbc);
				
			}
			
			// if the submit button is hit
        	if(isset($_POST['submit'])) 
		  	{
				// Grab the data from the POST
				$name = $_POST['name'];
				$comment = $_POST['comment'];
				$date = $_POST['date'];
				
				
				if(!empty($name) && !empty($comment)) 
				{
				  // Connect to the database
				  /*$dbc = mysqli_connect("webdesign4.georgianc.on.ca","db200176338",
				  "99939","db200176338");*/
				  $dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
				  if($editMode)
				  {
					  // Retrieve index number to be edited
					  $index = $_POST['index'];
					  
					  // Alter comment data left by the user
					  $query1 = "UPDATE loremIpsum SET `name` = '$name' WHERE `index`=$index;";
					  $query2 = "UPDATE loremIpsum SET `comment` = '$comment' WHERE `index`=$index;";
					  mysqli_query($dbc, $query1);
					  mysqli_query($dbc, $query2);
				  }
				  else
				  {
					  // Write the data to the database
					  $query = "INSERT INTO loremIpsum(name,comment,date) VALUES ('$name', '$comment', '$date')";
					  mysqli_query($dbc, $query);
				  }
				  
				  //close the database connection and turn the editmode off
				  mysqli_close($dbc);
				  $editMode=false;
            	}
				else 
				{
					// Output error statement as information is missing
					if(empty($name))
					{
				  		echo '<p class="error"';
						
						// if the user has not logged in move the error down to avoid login box
						if($loginSuccesful != true)
						{
							echo 'style="margin-top:30px;"';
						}
						
						echo '>Please enter your name to continue.</p>';
					}
					else
					{
						echo '<p class="error"';
						
						// if the user has not logged in move the error down to avoid login box
						if($loginSucessful != true)
						{
							echo 'style="margin-top:30px;"';
						}
						
						echo '>Please enter your comment to continue.</p>';
					}
					
					// Turn comment error on
					$commentError=true;
				}
			  }
        ?>
        
        <?php
		
			// if the user is not logged in, display login bar
			if($loginSuccesful != true)
			{
				?>
                
				<!-- login window to manage user comments -->
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="login">
					<label for="user">Username:</label>
					<input type="text" id="user" name="user" required />
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" required />
					
					<input type="submit" value="Login" name="login" />
				</form>
                
                <?php
			}
			?>
            
    	<h2>Life is Like a Box of Chocolates</h2>
        <!-- article for users to read -->
        <article>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut risus lorem, suscipit et vehicula a, dapibus lobortis elit. Donec egestas nunc ut libero aliquam sed ornare lorem porttitor. Suspendisse elit ante, pellentesque a convallis quis, ultrices vel lectus. Etiam odio lacus, luctus et pellentesque eget, accumsan ut dolor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed eget tempus ipsum. Vivamus fringilla odio quis erat pretium condimentum. Curabitur arcu mauris, aliquam vel tincidunt hendrerit, fringilla vel nunc. Aliquam pulvinar bibendum justo sit amet tincidunt. In et sagittis purus. In eget quam sem, sit amet tincidunt neque. Donec porta, mi at facilisis tempor, sapien nulla molestie nisl, id interdum odio urna vitae mauris. Suspendisse dignissim ultrices semper. Integer sed quam nec nibh vehicula ornare a at neque. Aenean pretium mi scelerisque ante imperdiet pellentesque.
            </p>
            <p>Quisque sit amet diam justo, vitae porttitor ipsum. Sed vitae sodales ligula. Aenean velit eros, eleifend ut faucibus a, posuere id mauris. Aenean vehicula vulputate ultricies. Integer non velit tellus. Aliquam venenatis ultricies enim in malesuada. Sed pulvinar est id eros mattis dictum facilisis magna aliquet. Etiam ornare mollis accumsan.
            </p>
            <p>Proin tristique suscipit leo, a gravida neque pretium nec. Nam et arcu varius turpis tristique gravida eget ac quam. Quisque pellentesque elementum adipiscing. Donec tellus augue, blandit et bibendum ut, convallis sit amet magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Pellentesque iaculis, urna et mattis commodo, enim eros vestibulum orci, vel hendrerit ipsum ipsum a nisi. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus vehicula magna non eros laoreet id convallis mi scelerisque. Nam id nulla lectus.
            </p>
            <p>Nullam mollis, mi molestie malesuada facilisis, tellus sem blandit est, eget scelerisque nulla turpis quis mi. Aliquam nisi nunc, posuere vitae cursus non, pulvinar id orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla id ligula at est auctor tincidunt. Sed vitae nisl nisl. Sed euismod nulla in arcu bibendum suscipit. Donec arcu nisl, vulputate adipiscing condimentum vitae, fringilla cursus augue. Curabitur erat nunc, tristique et interdum eu, imperdiet a dolor. Vestibulum felis tortor, accumsan eget dignissim a, tempus ac nunc.
            </p>
            <p>Mauris congue bibendum sapien, ornare tincidunt erat malesuada vitae. Pellentesque sagittis sagittis iaculis. Proin vel porta nulla. Vestibulum vel eleifend dui. Vivamus ac dui vitae diam lacinia gravida aliquet in massa. Vivamus elementum dignissim erat eu consequat. Nunc sit amet turpis leo, vulputate fermentum quam. Curabitur blandit mollis magna, non accumsan nisl congue nec. Duis vel dignissim erat. Donec et orci nec mauris consectetur adipiscing et vel nunc.
            </p>
        </article>
        <h3>Please leave comments below</h3>
        
		<!-- Form for individuals to make comments on the article -->
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="usercomment">
        	<fieldset>
            	<legend>Comments</legend>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Please enter your name here..." <?php
					// // If in edit mode or user has created an error, insert the name to be edited
					if($editMode || $commentError)
					{
						echo 'value="' . $name . '"';
					}
				?> />
                <label for="comment">Comment:</label>
                <textarea id="comment" name="comment" maxlength="5000" cols="100" rows="10" placeholder="Enter comment here..."><?php 
					// If in edit mode or user has created an error, insert the comment to be edited
					if($editMode || $commentError)
					{
						echo $comment;
					}
				?></textarea>
                <input type="hidden" name ="date" value="                	
					<?php 					
						// return the string into the browser
						echo "$submitDate"; 
					?>
                 "/>
                <?php 
				
				// If admin is logged in, insert additional data into the form
				if($loginSuccesful)
				{
					// if in edit mode, return editmode to true back through form
					if($editMode)
					{
						echo "<input type='hidden' name='editmode' value=true />";
					}
					echo "<input type='hidden' name='admin' value=true />";
					echo "<input type='hidden' name='index' value='" . $index . "'/>";
				}
				
                ?>
                
                <input type="submit" value="Submit" name="submit" />
            </fieldset>
            
            <?php
			
			// if the submit button is hit wipe content submited
			if(isset($_POST['submit']))
			{
				if(!empty($name) && !empty($comment))
				{
					// Confirm success with the user
				  echo '<p>Comment Posted</p>';
	
				  // Clear the score data to clear the form
				  $name = "";
				  $comment = "";
				}
			}
			
			?>
            
        </form>
		
        <?php
			require_once('DB_CONNECT.php');
			
			// Connect to the database 
			$dbc = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
			
			// Retrieve the comment data from MySQL
			$query = "SELECT * FROM loremIpsum ORDER BY `index`";
			$data = mysqli_query($dbc, $query);
			
			// Loop through the array of score data, formatting it as HTML 
			
			while ($row = mysqli_fetch_array($data)) 
			{ 
			// Display the score data
			
				echo '<div class="comments" style="border-radius:15px; border:thin black solid; margin:10px; background:white;">';
				echo 	'<p style="float:right;">Date: ' . $row['date'] . '<p>';
				echo 	'<p>Name: ' . $row['name'] . '</p>';
				echo 	'<p style="border-radius:15px; border:thin grey solid; margin-left:25px; margin-right:25px; padding-left:10px; padding-right:10px; ">' . $row['comment'] . '<p>';
				
				if($loginSuccesful)
				{?>
                
                	<!-- Form has single button which when pressed deletes the comment -->
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="admin">
                    	<input type="hidden" name="index" value="<?php echo $row['index'] ?>">
                        <input type="hidden" name="admin" value=true>
                        <input type="submit" id="delete" name="delete" value="delete">
                     </form>
                     
                     <!-- Form has single button which when pressed returns user to edit the comment -->
                     <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="admin">
                    	<input type="hidden" name="index" value="<?php echo $row['index'] ?>">
                        <input type="hidden" name="admin" value=true>
                        <input type="submit" id="edit" name="edit" value="edit">
                     </form>
                     
				<?php 
				
				}
				echo '</div>';
			}	
			
			// Close database connection
			mysqli_close($dbc);
		?>
        
    </body>
</html>