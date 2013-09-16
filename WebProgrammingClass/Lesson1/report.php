<!DOCTYPE html>
<html>

	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title></title>
	</head>
	
	<body>
		<h1>Computer Program Report</h1>
		<?php
			// Email mask
			
			$firstName = $_POST['firstname'];
			$lastName = $_POST['lastname'];
			$name = "$firstName $lastName";
			$whenItHappened = $_POST['whenithappened'];
			$happenedBefore = $_POST['happenedbefore'];
			$whatProgram = $_POST['whatprogram'];
			$description = $_POST['description'];
			$stillProblem = $_POST['stillproblem'];
			$crashed = $_POST['crashed'];
			$email = $_POST['email'];
			$other = $_POST['other'];
			
			if(empty($email)){
				echo "<p>You forgot your email<p>";
			};
			
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
		?>
	</body>

</html>
