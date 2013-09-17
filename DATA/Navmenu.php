<?php
	require_once('GLOBALS.php');
?>
<nav>
            <ul >
                <li class='first'>Project Websites
                    <ul class='second'>
                        <li class='secondList' id="IntrotoHTMLClass" ><a href='IntrotoHTMLClass/index.php'>Semester 1 - Intro to Html</a>
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
                                        	<li><a href="<?php echo URL.$url.$filename ?>"><?php echo $filename ?></a></li>
                                        <?php
										}
									}
								?>
                            </ul>
                        </li>
                    	<li class='secondList'><a href='WebProgrammingClass/index.php'>Semester 2 - Intro to Web Programming</a>
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
                                        	<li><a href="<?php echo URL.$url.$filename ?>"><?php echo $filename ?></a></li>
                                        <?php
										}
									}
								?>
                            </ul>
                        </li>
                    	<li class='secondList'><a href='AdvancedWebProgrammingClass/index.php'>Semester 4 - Advanced Web Programming</a>
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
                                        	<li><a href="<?php echo URL.$url.$filename ?>"><?php echo $filename ?></a></li>
                                        <?php
										}
									}
								?>
                            </ul>
                    	</li>
					</ul>
                </li>
                <li class='first'>Personal Documents
                    <ul class='second'>
                        <li class='secondList'><a>Resume</a>
                        	<ul class='third'>
                                <li><a href="Personal/Jean-Luc_Desroches_Resume_2013.pdf" target="_blank">Resume - 2013</a></li>
                            </ul>
                        </li>
                        <li class='secondList'><a>References</a></li>
                        <li class='secondList'><a>Course Outlines</a>
                            <ul class='third'>
                                <li><a>Fall 2012</a></li>
                                <li><a>Winter 2013</a></li>
                            </ul>
                        </li>
                        <li class='secondList'><a>Program Outline</a>
                            <ul class='third'>
                                <li><a href="Personal/COPA.PDF" target="_blank">Computer Programmer  Analyst(COPA)</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </nav>