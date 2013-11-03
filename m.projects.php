<?php
	include('DATA/HeaderOpen.php');
?>
	<title>Projects</title>
    <style>
		nav
		{
			display:block;
		}
		#navIcon
		{
			display:none;
		}
		
    </style>
<?php
	include(HOME_DIR.'DATA/HeaderClose.php');
?>
<nav data-role="header">
    <ul>
        <li class='first' data-role="navbar">
        	<span class="subLink_1"><a>Semester 1 - Intro to Html</a></span>
            <ul class="third">
                <?php
                    /*
                        Set file variables and loop through each file in the folder and create a link to output to the menu
                    */
                    $url		= 'IntrotoHTMLClass/';
                    $dirName 	= HOME_DIR.$url;
                    $dir 		= opendir($dirName);
                    while(($filename = readdir($dir))!==FALSE)					
                    {
                        if(!in_array($filename,nonReturnList()))
                        {
                        ?>
                            <li><a data-ajax="false" href="<?php echo URL.$url.$filename ?>"><?php echo fileStripper($filename) ?></a></li>
                        <?php
                        }
                    }
                ?>
            </ul>
        </li>
        <li class='first' data-role="navbar">
        <span class="subLink_1"><a>Semester 2 - Intro to Web Programming</a></span>
            <ul class="third">
                <?php
                    /*
                        Set file variables and loop through each file in the folder and create a link to output to the menu
                    */
                    $url		= 'WebProgrammingClass/';
                    $dirName 	= HOME_DIR.$url;
                    $dir 		= opendir($dirName);
                    while(($filename = readdir($dir))!==FALSE)					
                    {
                        if(!in_array($filename,nonReturnList()))
                        {
                        ?>
                            <li><a data-ajax="false" href="<?php echo URL.$url.$filename ?>"><?php echo fileStripper($filename) ?></a></li>
                        <?php
                        }
                    }
                ?>
            </ul>
        </li>
        <li class='first' data-role="navbar">
        <span class="subLink_1"><a>Semester 4 - Advanced Web Programming</a></span>
            <ul class="third">
                <?php
                    /*
                        Set file variables and loop through each file in the folder and create a link to output to the menu
                    */
                    $url		= 'AdvancedWebProgrammingClass/';
                    $dirName 	= HOME_DIR.$url;
                    $dir 		= opendir($dirName);
                    while(($filename = readdir($dir))!==FALSE)					
                    {
                        if(!in_array($filename,nonReturnList()))
                        {
                        ?>
                            <li><a data-ajax="false" href="<?php echo URL.$url.$filename ?>"><?php echo fileStripper($filename) ?></a></li>
                        <?php
                        }
                    }
                ?>
            </ul>
        </li>
    </ul>
<?php
	include(HOME_DIR.'DATA/Footer.php');
?>