<?php
	include('DATA/HeaderOpen.php');	
	if(!empty($_POST['password']) && !empty($_POST['username']))
	{
		$loginFail = true; // initialise login success
		include('DATA/JavaScripts/logCheck.php'); // script to manage login
		
		if(login($_POST['username'],$_POST['password']))
		{
			$_SESSION['username'] = $_POST['username']; // user logged in successfully set username session
			$_SESSION[KEYNAME] = KEY;
			$loginFail = false; // login failed set fail notice
		}
	}	
?>    
	<title>Jean-Luc Desroches - Login</title>
<?php
	if($mobile)
	{
		echo '<link rel="stylesheet" href="DATA/Styles/mobileHomeStyle.css" type="text/css" >';
	}
	else
	{
		echo '<link href="'.URL.'DATA/Styles/homeStyles.css" rel="stylesheet" type="text/css">';
		echo '<link href="'.URL.'DATA/Styles/login.css" rel="stylesheet" type="text/css">';
	}

	include('DATA/HeaderClose.php');
?>
    <section id="section"> 
<?php	
	if(!isset($loginFail) || $loginFail)
	{
?>    
    	<form action="<?php echo $_SERVER['PHP_SELF'] ?>" id="login" method="post">
        	<div>
            	<?php if($loginFail){ echo '<p style="color:red">Login Failed</p>';} ?>
                <label for="username">Username:</label>
                <input type="text" autofocus autocomplete="on" name="username"><br>
                <label for="password">Password:</label>
                <input type="password" autocomplete="on" name="password"><br>
                <input type="submit" name="submit" />
            </div>
        </form>
    
<?php
	}
	if(isset($loginFail) && !$loginFail)
	{
?>
	<p style="color:green; display:block; text-align:center;">Logged In Successfully</p>
<?php
	}
?>
	</section>    
<?php
	include('DATA/Footer.php');
?>