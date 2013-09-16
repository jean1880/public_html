<?php
	require_once('GLOBALS.php');
?>
<nav>
            <ul>
                <li class='first'>Project Websites
                    <ul>
                        <li id="IntrotoHTMLClass" class='second'><a href='IntrotoHTMLClass/index.php'>Semester 1 - Intro to Html</a></li>
                        	<ul>
                            	<?php
									$url		= 'IntrotoHTMLClass/';
									$dirName 	= HOME_DIR.$url;
									$dir 		= opendir($dirName);
									while(($filename = readdir($dir))!==FALSE)					
									{
										if(!in_array($filename,nonReturnList()))
										{
										?>
                                        	<li class="navHTMLButton"><a href="<?php echo $url.$filename ?>"><?php echo $filename ?></a></li>
                                        <?php
										}
									}
								?>
                            </ul>
                    	<li class='second'><a href='WebProgrammingClass/index.php'>Semester 2 - Intro to Web Programming</a></li>
                        	<ul>
                            	<?php
									$url		= 'WebProgrammingClass/';
									$dirName 	= HOME_DIR.$url;
									$dir 		= opendir($dirName);
									while(($filename = readdir($dir))!==FALSE)					
									{
										if(!in_array($filename,nonReturnList()))
										{
										?>
                                        	<li><a href="<?php echo $url.$filename ?>"><?php echo $filename ?></a></li>
                                        <?php
										}
									}
								?>
                            </ul>
                    	<li class='second'><a href='AdvancedWebProgrammingClass/index.php'>Semester 4 - Advanced Web Programming</a></li>
                        	<ul>
                            	<?php
									$url		= 'AdvancedWebProgrammingClass/';
									$dirName 	= HOME_DIR.$url;
									$dir 		= opendir($dirName);
									while(($filename = readdir($dir))!==FALSE)					
									{
										if(!in_array($filename,nonReturnList()))
										{
										?>
                                        	<li><a href="<?php echo $url.$filename ?>"><?php echo $filename ?></a></li>
                                        <?php
										}
									}
								?>
                            </ul>
					</ul>
                </li>
                <li class='first'>Personal Documents
                    <ul>
                        <li class='second'><a>Resume</a>
                        	<ul>
                                <li class='third'><a href="Personal/Jean-Luc_Desroches_Resume_2013.pdf" target="_blank">Resume - 2013</a></li>
                            </ul>
                        </li>
                        <li class='second'><a>References</a></li>
                        <li class='second'><a>Course Outlines</a>
                            <ul>
                                <li class='third'><a>Fall 2012</a></li>
                                <li class='third'><a>Winter 2013</a></li>
                            </ul>
                        </li>
                        <li class='second'><a>Program Outline</a>
                            <ul>
                                <li class='third'><a href="Personal/COPA.PDF" target="_blank">Computer Programmer  Analyst(COPA)</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                </li>
            </ul>
        </nav>