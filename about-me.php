<?php
	include('DATA/HeaderOpen.php');
?>
	<title>Jean-Luc Desroches - About Me</title>
	<link rel="stylesheet" href="DATA/Styles/about.css" type="text/css" /> 
<?php
	include(HOME_DIR.'DATA/HeaderClose.php');
?>
<div itemscope itemtype="http://data-vocabulary.org/Person" id="section">
	<h1 id="header">About Me</h1>
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