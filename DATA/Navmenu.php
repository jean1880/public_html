<?php
	require_once('GLOBALS.php');
?>
<nav>
    <ul >
        <li class='first' >
            <span><a href="<?php echo URL.'index.php' ?>">Home</a></span>
        </li>
        <li class='first'><span>Project Websites</span>
            <ul class='second'>
                <li class='secondList' id="IntrotoHTMLClass" ><span class="subLink_1">Semester 1 - Intro to Html</span>
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
                                    <li><a href="<?php echo URL.$url.$filename ?>"><?php echo fileStripper($filename) ?></a></li>
                                <?php
                                }
                            }
                        ?>
                    </ul>
                </li>
                <li class='secondList'><span class="subLink_1">Semester 2 - Intro to Web Programming</span>
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
                                    <li><a href="<?php echo URL.$url.$filename ?>"><?php echo fileStripper($filename) ?></a></li>
                                <?php
                                }
                            }
                        ?>
                    </ul>
                </li>
                <li class='secondList'><span class="subLink_1">Semester 4 - Advanced Web Programming</span>
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
                                    <li><a href="<?php echo URL.$url.$filename ?>"><?php echo fileStripper($filename) ?></a></li>
                                <?php
                                }
                            }
                        ?>
                    </ul>
                </li>
            </ul>
        </li>
        <li class='first'><span>Personal Documents</span>
            <ul class='second'>
                <li class='secondList'><span class="subLink_1">Resume</span>
                    <ul class='third'>
                        <li><a href="<?php echo URL.'Personal/Jean-Luc_Desroches_Resume_2013.pdf' ?>" target="_blank">Resume - 2013</a></li>
                    </ul>
                </li>
                <li class='secondList'><span class="subLink_1">Course Outlines</span>
                    <ul class='third'>
                        <li><a>Fall 2012</a></li>
                        <li><a>Winter 2013</a></li>
                    </ul>
                </li>
                <li class='secondList'><span class="subLink_1">Program Outline</span>
                    <ul class='third'>
                        <li><a href="<?php echo URL.'Personal/COPA.PDF' ?>" target="_blank">Computer Programmer  Analyst(COPA)</a></li>
                    </ul>
                </li>
                
            </ul>
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