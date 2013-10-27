<nav data-role="header">
    <ul >
        <li class='first' data-role="navbar">
            <span><a data-ajax="false" href="<?php echo URL.'index.php' ?>" itemprop="url">Home</a></span>
        </li>
        
        <li class='first' data-role="navbar">
            <span><a data-ajax="false" href="<?php echo URL.'services.php' ?>" itemprop="url">Services</a></span>
        </li>
        
        <li class='first' data-role="navbar"><span class="span"><a>Project Websites</a></span>
            <ul class='second'>
                <li class='secondList' id="IntrotoHTMLClass" ><span class="subLink_1"><a>Semester 1 - Intro to Html</a></span>
                    <ul class="third">
                        <?php
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
        </li>
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
        if($mobile && !$_SESSION['fullSite'])
        {
			?>
            <li class='first' data-role="navbar">
                <a  data-ajax="false" href="<?php echo  URL.'?full=1' ?>">Full Site</a>
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