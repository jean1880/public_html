<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Various Projects</title>
<link href="../styles.css" rel="stylesheet" type="text/css"> 
</head>

<body>
	<nav>
		<ul>
			<li>Project Websites
				<ul>
					<?php
						$directory = "/home/200176338/public_html/WebProgrammingClass";
						$dh  = opendir($directory);
						while (false !== ($filename = readdir($dh))) {							
						   		$files[] = $filename;					   	
						}
						
						sort($files);
						$length = count($files);
						
						for($i = 0; $i < $length; $i++)
						{
							if($files[$i] != "." && $files[$i] != "index.php")  
							{
								if($files[$i] != "..")
								{
									echo "<li><a href='$files[$i]/'>$files[$i]<a></li>";
								}
								else
								{
									echo "<li><a href='$files[$i]/'>Home<a></li>";
								}
							}
							
						}
					?>
				</ul>
			</li>
		</ul>
	</nav>
</body>

</html>
