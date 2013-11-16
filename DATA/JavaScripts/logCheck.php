<?php
	function login($username, $password)
	{
		global $db;
		$query = 'SELECT user_name FROM profile_logins WHERE user_name = "'.$username.'" AND pass = 
		AES_ENCRYPT("'.$password.'",SHA("'.$username.$password."Omega13".'"))';
		$result = $db->query($query);

		if($result->rowCount() > 0)
		{
			return true;
		}
		return false;
	}
?>