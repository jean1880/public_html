<?php
	include('DATA/HeaderOpen.php');
?>
	<title>Services</title>
	<link rel="stylesheet" href="DATA/Styles/about.css" type="text/css" /> 
    <style>
		.embeded-link:visited
		{
			color:blue;
		}
    </style>
<?php
	include(HOME_DIR.'DATA/HeaderClose.php');
?>
<div itemscope itemtype="http://data-vocabulary.org/Person" id="section">
	<h1 id="header">Services</h1>
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
        <p><a class="embeded-link" href="<?php echo URL."contact-me.php" ?>">Contact Me</a> to learn more. </p>
    </section>
</div>
<?php
	include(HOME_DIR.'DATA/Footer.php');
?>