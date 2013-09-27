<?php
	include('DATA/HeaderOpen.php');	
?>    
	<title>Home</title>
	<link rel="stylesheet" href="<?php echo URL ?>DATA/nivo-slider/nivo-slider.css" type="text/css" />
	<script src="<?php echo URL ?>DATA/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script> 
    <!-- Include the theme stylesheet in the <head> section -->  
	<link rel="stylesheet" href="DATA/nivo-slider/themes/dark/dark.css" type="text/css" /> 
<?php
	if($mobile)
	{
		echo '<style rel="stylesheet" href="DATA/Styles/mobileHomeStyle.css" type="text/css" ></style>';
	}
	else
	{
		echo '<style rel="stylesheet" href="DATA/Styles/homeStyle.css" type="text/css" ></style>';
	}

	include('DATA/HeaderClose.php');
 ?>        
    <section id="section">
        <h1 id="header">Jean-Luc Desroches' Portfolio</h1>
        <div id="wrapper">
            <div class="slider-wrapper theme-dark">
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
        <div id="htmlcaption" class="nivo-html-caption">
        	test
        </div>
        </div>
        <div id="content">
            <h2>Welcome</h2>
            <p>This is my personal portfolio site, please feel free to peruse my work, as well you may also view my <a href="<?php echo URL.'Personal/Jean-Luc_Desroches_Resume_2013.pdf' ?>">Resume</a>, or contact me via email <a href="mailto:jean1880@hotmail.com">jean1880@hotmail.com</a>.</p>
        </div>
    </section>
    <script type="text/javascript">
    	$(window).load(function() {
			$('#slider').nivoSlider({
				effect: 'fade',               // Specify sets like: 'fold,fade,sliceDown'
				animSpeed: 500,                 // Slide transition speed
				pauseTime: 5000,                // Set starting Slide (0 index)
				directionNav: false,             // Next & Prev navigation
				controlNav: true,               // 1,2,3... navigation
				controlNavThumbs: false,        // Use thumbnails for Control Nav
				pauseOnHover: false,             // Stop animation while hovering
				manualAdvance: false,           // Force manual transitions
				prevText: 'Prev',               // Prev directionNav text
				nextText: 'Next',               // Next directionNav text
				randomStart: true,             // Start on a random slide
			});
		});
    </script>
<?php
	include('DATA/Footer.php');
?>