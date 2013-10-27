<?php
	include('DATA/HeaderOpen.php');	
?>    
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo URL ?>DATA/nivo-slider/nivo-slider.css" type="text/css" />
	<script src="<?php echo URL ?>DATA/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script> 
    <!-- Include the theme stylesheet in the <head> section -->  
	<link rel="stylesheet" href="DATA/nivo-slider/themes/dark/dark.css" type="text/css" /> 
    <script type="text/javascript" src="DATA/JavaScripts/nivo.js"></script>
<?php
	if($mobile && !($_SESSION['fullSite']))
	{
		echo '<style rel="stylesheet" href="DATA/Styles/mobileHomeStyle.css" type="text/css" ></style>';
		echo '<script type="text/javascript" src="DATA/JavaScripts/mobile.nivo.js"></script>';
	}
	else
	{
		echo '<link href="'.URL.'DATA/Styles/homeStyles.css" rel="stylesheet" type="text/css">';
	}

	include('DATA/HeaderClose.php');
 ?>        
    <section id="section">
        <h1 id="header">Jean-Luc Desroches's Portfolio</h1>
        <div id="wrapper">
            <div class="slider-wrapper theme-dark">
            	<h1 id="header">Previous Projects</h1>
                <div id="slider" class="nivoSlider">
                    <?php
                        $url		= 'DATA/images/';
                        $dirName 	= HOME_DIR.$url;
                        $dir 		= opendir($dirName);
                        while(($filename = readdir($dir))!==FALSE)					
                        {
                            if(!in_array($filename,nonReturnList()))
                            {
                            ?>
                                <a href="<?php echo sliderURLS(fileStripper($filename)) ?>"> <img src="<?php echo URL.$url.$filename ?>" alt="<?php echo fileStripper($filename) ?>" /></a>
                            <?php
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        </div>
        <div id="content">
            <h2>Welcome</h2>
            
            <p>This is my personal portfolio site, please feel free to peruse my work, as well you may also view my <a href="<?php echo URL.'Personal/Jean-Luc_Desroches_Resume_2013.pdf' ?>">Resume</a>, or contact me via email <a href="mailto:jean1880@hotmail.com">jean1880@hotmail.com</a>. I specialize in PHP scripting, and integration with HTML and Javascript/JQuery through AJAX data requests or PHP server POST, and Get communication. I am also experienced with development in JAVA, C++, C# and Python.</p>
            <blockquote>Vir sapit qui pauca loquitur – Unknown</blockquote>
        </div>
    </section>    
<?php
	include('DATA/Footer.php');
?>