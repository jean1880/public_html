<!-- Navigation menu -->
<?php 
		/*
			If viewer is on mobile, display additional buttons for mobile menu
		*/
        if($mobile && !$_SESSION['fullSite'])
        {
			?>
            <div id="navIcon">
				<img  src="<?php  echo URL.'DATA/Logos/menuIcon.png' ?>" />
            </div>
            <?php
		}
?>
<nav data-role="header" id="navbar">
    <ul>
    <?php
    if($mobile && !$_SESSION['fullSite'])
	{
		echo '<div id="mobilenavgrouper">';
	}
	?>
        <li class='first' data-role="navbar" id="home">
            <span><a data-ajax="false" href="<?php echo URL.'index.php' ?>" itemprop="url">
				<?php 
                /*
                    If viewer is on mobile, image for home button else display text
                */
                if($mobile && !$_SESSION['fullSite'])
                {
                    ?>
                    <img src="<?php  echo URL.'DATA/Logos/Home-icon.png' ?>" alt="Home" width="100" height="100" />
                    <?php
                }
                else
                {
                    ?>
                    Home
                    <?php
                }
                ?>
                </a>
            </span>
        </li>
        
        <li class='first' data-role="navbar" id="services">
            <span><a data-ajax="false" href="<?php echo URL.'services.php' ?>" itemprop="url">
            <?php 
                /*
                    If viewer is on mobile, image for home button else display text
                */
                if($mobile && !$_SESSION['fullSite'])
                {
                    ?>
                    <img src="<?php  echo URL.'DATA/Logos/services.png' ?>" alt="Home" width="100" height="120" />
                    <?php
				}
                    else
                {
                    ?>
                    Services
                <?php
				}
                ?>
                </a>
            </span>
        </li>
        
        <li class='first' data-role="navbar" id="projects">
        <span class="span"><a <?php if($mobile && !$_SESSION['fullSite']){echo 'data-ajax="false" href="'.URL.'m.projects.php"'; }?> >
        	<?php
				// if on main site display link as text, else display as image
				 if(!$mobile || $_SESSION['fullSite'])
				 {
			?>
            	Project Websites
            <?php
				 }
				 else
				 {
			?>
            	<img src="<?php  echo URL.'DATA/Logos/Portfolio.png' ?>" alt="Home" width="100" height="100" />
            <?php
				 }
			?>
                </a></span>
        	<?php
				
				 if(!$mobile && !$_SESSION['fullSite'])
				 {
			?>
            <ul class='second'>
                <li class='secondList' id="IntrotoHTMLClass" ><span class="subLink_1"><a>Semester 1 - Intro to Html</a></span>
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
                <li class='secondList'><span class="subLink_1"><a>Semester 2 - Intro to Web Programming</a></span>
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
                <li class='secondList'><span class="subLink_1"><a>Semester 4 - Advanced Web Programming</a></span>
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
				 }
			?>
        </li>
        <?php
		if(!$mobile && !$_SESSION['fullSite'])
		{
			echo '</div>';
		}
		?>
        <li class='first' data-role="navbar"><span class="span"><a>Personal Documents</a></span>
            <ul class='second'>
                <li class='secondList'><span class="subLink_1"><a>Resume</a></span>
                    <ul class='third'>
                        <li><a href="<?php echo URL.'Personal/Jean-Luc_Desroches_Resume_2013.pdf' ?>" target="_blank">Resume - 2013</a></li>
                    </ul>
                </li>
                <li class='secondList'><span class="subLink_1"><a>Course Outlines</a></span>
                    <ul class='third'>
                        <li><a>Fall 2012</a></li>
                        <li><a>Winter 2013</a></li>
                    </ul>
                </li>
                <li class='secondList'><span class="subLink_1"><a>Program Outline</a></span>
                    <ul class='third'>
                        <li><a href="<?php echo URL.'Personal/COPA.PDF' ?>" target="_blank">Computer Programmer  Analyst(COPA)</a></li>
                    </ul>
                </li>
                
            </ul>
        </li>  
        <?php 
		/*
			If viewer is on mobile, display additional buttons for mobile menu
		*/
        if($mobile && !$_SESSION['fullSite'])
        {
			?>
            <li class='first' data-role="navbar">
                <a  data-ajax="false" href="<?php echo  $_SERVER['PHP_SELF'].'?full=1' ?>">Full Site</a>
            </li>
            <li class='first' data-role="navbar">
                <a data-ajax="false" data-rel="back" >Back</a>
            </li>
            <?php
        }
		?>
        
        <li class='first' data-role="navbar">
        	<a data-ajax="false" href="<?php echo URL.'about-me.php' ?>">About Me</a>
        </li>
        
        <img id="myLogo" src="<?php echo URL.'DATA/Logos/logoThumb.png' ?>" alt="My Logo"/>
        <div id="currentLocation">
        	<?php 
				/*
					Create breadcrumb system to display to the user
				*/
				$location 	= str_replace(HOME_DIR, '', $_SERVER["SCRIPT_FILENAME"]); 
				$breadCrumb = explode('/',$location);
				foreach($breadCrumb as $key => $file)
				{					
					echo '<a href="'.URL.$location.'" class="breadCrumb" >'.fileStripper($file).'</a>';
					if(!empty($breadCrumb[$key+1]))
					{
						echo '<p class="breadCrumb"> > </p>';
					}
				}
			?>
        </div>
    </ul>
    
</nav>