<?php
	include('DATA/HeaderOpen.php');
?>
	<link rel="stylesheet" href="DATA/Styles/about.css" type="text/css" /> 
<?php
	include(HOME_DIR.'DATA/HeaderClose.php');
?>
<div itemscope itemtype="http://data-vocabulary.org/Person" id="section">
	<h1 id="header">About Me</h1>
    <div id="wrapper">
    	<img id="self" src="<?PHP echo URL."DATA/images/me.jpg" ?>" alt="Picture of me"/>
    </div>
    <section>
    	<p > my name is <span itemprop="name">Jean-Luc Desroches</span>, I was born January 22, 1989 in  <span itemprop="locality">Penetanguishene</span>, <span itemprop="region">Ontario</span>, I have grown up in Barrie, Ontario since 1996. I have been an avid Star Trek fan, since my early youth, particularly the TNG series (GO PICARD!!). Currently enrolled at Georgian College in their three year diploma program, <span itemprop="title">Computer Programmer Analyst</span>. I enjoy developing, testing,and releasing software that people can use efectively, and intuitively.</p>
    </section>
</div>
<?php
	include(HOME_DIR.'DATA/Footer.php');
?>