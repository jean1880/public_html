<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>My Computer Is Dead!</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
		  
			<!-- turn gradient filter off in Internet Explorer 9 -->
			<!--[if gte IE 9]>
				<style type="text/css">
					.gradient 
					{
						filter: none;
					}
				</style>
			<![endif]-->
	</head>
	<body>
	
		<?php 
			//initialise variables
			$firstName 		= $_POST['firstname'];
			$lastName 		= $_POST['lastname'];
			$name 			= "$firstName $lastName";
			$whenItHappened = $_POST['whenithappened'];
			$happenedBefore = $_POST['happenedbefore'];
			$whatProgram 	= $_POST['whatprogram'];
			$description 	= $_POST['description'];
			$stillProblem 	= $_POST['stillproblem'];
			$crashed 		= $_POST['crashed'];
			$email 			= $_POST['email'];
			$other 			= $_POST['other'];
			
			//initialise error array with error messages
			$error	 	= array(
				"first name",
				"last name",
				"email",
				"when it happened",
				"it has happened before",
				"what program it happened in",
				"description of the problem",
				"it is still a problem",
				"it crashed"
				);
			
			
			$isValid = FALSE; // Assumes that validation has failed
			

			if(isset($_POST['submit']))
			{ //After the user has submitted the form at least once
				if(!empty($email) and !empty($firstName) and !empty($lastName) and !empty($whenItHappened) and !empty($happenedBefore) and !empty($description) and !empty($whatProgram) and !empty($stillProblem))
				{
					//set laidation pass to true
					$isValid=TRUE;
					
					//send email to personal student email
					$to = '200176338@student.georgianc.on.ca';
					$subject = "$name Has Experienced A Problem";
					$msg = "$name had a problem with $whatProgram at $whenItHappened\n" .
						"Description of problem:\n $description\n" . 
						"Has this problem occured before?: $happenedBefore\n" .
						"Is the problem still occuring?: $stillProblem\n" .
						"Did the system crash? $crashed\n" .
						"Other information: $other";
					mail($to,$subject,$msg, 'From:' . $email);	
					
					echo "<p>Thanks for submitting the form $name</p>";
					echo "<p>Your problem with: $whatProgram</p>";
					echo "<p>Occured: $whenItHappened</p>";
					echo "<p>Has the problem occured before?: $happenedBefore</p>";
					echo "<p>The problem description: $description</p>";
					echo "<p>Is the the problem still occuring: $stillProblem</p>";
					echo "<p>Did the system crash?: $crashed</p>";
					echo "<p>Other comments: $other</p>";
					echo "<p>Your email address is: $email</p>";

				}
				
				else
				{
				
					echo "<p id='warning'><strong>You did enter information for: ";
				
					//run through variables and check to see if they are empty,set error messages from error array
					if(empty($firstName))
					{
						echo "$error[0], ";
					}
					if(empty($lastName))
					{
						echo "$error[1], ";
					}
					if(empty($email))
					{
						echo "$error[2], ";
					}
					if(empty($whenItHappened))
					{
						echo "$error[3], ";
					}
					else
					{
						$test_arr  = explode('-', $test_date);
						if (count($test_arr) == 3) {
						    if (checkdate($test_arr[0], $test_arr[1], $test_arr[2])) {
						        // date is valid, set $isValid to true
						    } else {
						        // date is invalid
						        echo "error[3] is formatted incorrectly, please enter as yyyy-mm-dd";
						    }
						} else {
						    // input is incorrect
					}
					if(empty($happenedBefore))
					{
						echo "$error[4], ";
					}
					if(empty($whatProgram))
					{
						echo "$error[5], ";
					}
					if(empty($description))
					{
						echo "$error[6], ";
					}
					if(empty($stillProblem))
					{
						echo "$error[7], ";
					}
					if(empty($crashed))
					{
						echo "$error[8]";
					}
					echo "</strong></p>";
				}
			}
			}
			if(!$isValid)
			{ //First time the page loads or if information submitted was not valid, run this php script and display the contained HTML content
		?>
		<!--Header section of html-->
		<header>
			<h2>Computer Issues - Report The problem</h2>
			<p>Please fill out the details here:</p>
		</header>
		
		<!--Form content for user to input computer problem, form self submits for input validation through php-->
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	  	<fieldset>
	  		<!--Get input from user on personal information, if form was submitted before, set values to the content that was submitted-->
	  		<legend>Personal Information</legend>
		    <label for="firstname">First name:
			    <input type="text" id="firstname" name="firstname" placeholder="Enter you first name" value="<?php if (isset($firstName)){ echo "$firstName";} ?>" autofocus/>
			</label>
		    <label for="lastname">Last name:
			    <input type="text" id="lastname" name="lastname" placeholder="Enter your last name" value="<?php if (isset($lastName)){ echo "$lastName";} ?>"/>
		    </label>
		    <label for="email">What is your email address?
			    <input type="text" id="email" name="email" placeholder="enter your email" value="<?php if (isset($email)){ echo "$email";} ?>"/>
		    </label>
		</fieldset>
		
		<fieldset>
			<!--Get information on the problem they experiences, if form was submitted before, set values to the content that was submitted-->
			<legend>Information About the Problem</legend>
		    <label for="whenithappened">When did it happen?
			    <input type="date" id="whenithappened" name="whenithappened" placeholder="date (yyyy-mm-dd)"value="<?php if (isset($whenItHappened)){ echo "$whenItHappened";} ?>"/>
		    </label>
		    <label for="whatprogram">What program were you using at the time?
			    <input type="text" id="whatprogram" name="whatprogram" placeholder="Name of program" value="<?php if (isset($whatProgram)){ echo "$whatProgram";} ?>"/>
		    </label>
		    <label >Has this happened before?
		    	<label for="happenedbefore">Yes
				    <input id="happenedbefore" name="happenedbefore" type="radio" value="yes" />
			    </label>
			    <label for="happenedbefore">No
				    <input id="happenedbefore" name="happenedbefore" type="radio" value="no" />
			    </label>
			</label>
		    <label for="description">Describe what happened?:
			    <textarea id="description" name="description" placeholder="Write description here"><?php if (isset($description)){ echo "$description";} ?></textarea>
		    </label>
		    <label>Is it still doing this?
			    <label for="stillproblem">Yes
				    <input id="stillproblem" name="stillproblem" type="radio" value="yes" />
			    </label>
			    <label for="stillproblem">No
				    <input id="stillproblem" name="stillproblem" type="radio" value="no" />
			    </label>
			</label>
		    <label>Did the computer crash?
			    <label for="crashed">Yes
				    <input id="crashed" name="crashed" type="radio" value="yes" />
				</label>
			    <label for="crashed">No
				    <input id="crashed" name="crashed" type="radio" value="no" />
			    </label>
			</label>
		</fieldset>
		
		<fieldset>
			<!--Form submission area, text box included to get any additional information the user might feel is relevant or impoortant to know-->
			<legend>Final information and Submission</legend>
		    <img src="BSOD.png" alt="Windows 8: Blue Screen of Death" />
		    <label for="other">Anything else you want to add?
			    <textarea id="other" name="other" placeholder="Write other info here"><?php if (isset($_POST['other'])){ echo $_POST['other'];} ?></textarea>
		    </label>
		    <input type="submit" value="Report Problem" name="submit" />
	    </fieldset>
	  </form>
	<?php } ?>
	
	</body>
</html>