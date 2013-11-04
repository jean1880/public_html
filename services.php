<?php
	include('DATA/HeaderOpen.php');
?>
	<title>Jean-Luc Desroches - Services</title>
	<link rel="stylesheet" href="DATA/Styles/services.css" type="text/css" /> 
    <style>
		.embeded-link:visited
		{
			color:blue;
		}
    </style>
<?php
	if($mobile)
	{
		echo '<link rel="stylesheet" href="DATA/Styles/mobileHomeStyle.css" type="text/css" >';
		echo '<script type="text/javascript" src="DATA/JavaScripts/mobile.nivo.js"></script>';
	}
	else
	{
		echo '<link href="'.URL.'DATA/Styles/homeStyles.css" rel="stylesheet" type="text/css">';
	}
	include(HOME_DIR.'DATA/HeaderClose.php');
?>
<div id="section" itemscope itemtype="http://data-vocabulary.org/Person" >
	<h1 class="header">Services</h1>
    <!-- Services offered by me -->
    <section>
    	<p>As a Junior Web Developer/ Programmer I can offer a wide range of services to advance your company. From web development, database management and design, to software development for a wide variety of mobile and desktop operating systems.</p>
        <p>Experienced with:
        	<ul>
            	<li>Web Languages
                	<ul>
                    	<li>PHP</li>
                        <li>HTML5</li>
                        <li>XHTML</li>
                        <li>Javascript</li>
                        <li>JQuery</li>
                        <li>JQuery UI</li>
                        <li>JQuery Mobile</li>
                        <li>Ajax</li>
                    </ul>
                </li>
                <li>Database Languages
                	<ul>
                    	<li>MySQL</li>
                        <li>DB2</li>
                    </ul>
                </li>
                <li>Software Languages
                	<ul>
                    	<li>C#</li>
                        <li>C++</li>
                        <li>Visual Basic</li>
                        <li>Java</li>
                        <li>Python</li>
                    </ul>
               </li>         
            </ul>
        </p>
        <p><a data-ajax="false" class="embeded-link" href="<?php echo URL."contact-me.php" ?>">Contact Me</a> to learn more. </p>
    </section>
</div>
<?php
	include(HOME_DIR.'DATA/Footer.php');
?>