<?php
	include('DATA/HeaderOpen.php');
?>
	<title>Jean-Luc Desroches - About Me</title>
    <link rel="stylesheet" href="<?php echo URL ?>DATA/nivo-slider/nivo-slider.css" type="text/css" />
	<script src="<?php echo URL ?>DATA/nivo-slider/jquery.nivo.slider.pack.js" type="text/javascript"></script> 
    <!-- Include the theme stylesheet in the <head> section -->  
	<link rel="stylesheet" href="DATA/nivo-slider/themes/dark/dark.css" type="text/css" /> 
    <script type="text/javascript" src="DATA/JavaScripts/nivo.js"></script>
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
<div itemscope itemtype="http://data-vocabulary.org/Person" id="section">
	<h1 classes="header">About Me</h1>
    <div id="wrapper">
    	<div class="slider-wrapper theme-dark">
        	<div id="slider" class="nivoSlider">
    			<img id="self" src="<?PHP echo URL."DATA/images/me.jpg" ?>" alt="Picture of me"/>
            </div>
        </div>
    </div>
    <section>
    	<p>Through knowledge we gain power, through wisdom we gain the ability to yield our strengths. This concept has guided me through my life, and has driven me to learn all that I can, and contemplate, life, and the values most dear to it. </p>
        <blockquote>Vir sapit qui pauca loquitur – Unknown</blockquote>
        <p>This quote is a personal favourite, it translates to “That man is wise who talks little.”</p>
        <h3>Mission Statement</h3>
        <p>To offer the best quality service, and workmanship, and to provide top value to any employer, whether directly or indirectly.</p>
    	<p>My name is <span itemprop="name">Jean-Luc Desroches</span>, I was born January 22, 1989 in  <span itemprop="locality">Penetanguishene</span>, <span itemprop="region">Ontario</span>, I have grown up in Barrie, Ontario since 1996. I have been an avid Star Trek fan, since my early youth, particularly the TNG series (GO PICARD!!). Currently enrolled at Georgian College in their three year diploma program, <span itemprop="title">Computer Programmer Analyst</span>. I enjoy developing, testing,and releasing software that people can use efectively, and intuitively.</p>
    </section>
</div>
<?php
	include(HOME_DIR.'DATA/Footer.php');
?>