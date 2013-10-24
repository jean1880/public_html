<?php
	require_once('/home/200176338/public_html/DATA/HeaderOpen.php');
	$mobile = mobileCheck::checkBrowser();
	?>
    <title>Advanced Web Programming - Lab 1</title>
    <script src="Scripts/cardScript.js" ></script>
    <?php
	
	// Output style sheets between header files, if mobile add the mobile modifying css
	echo '<link href="Styles/cardStyle.css" rel="stylesheet" type="text/css">';
	if($mobile)
	{
		echo '<link href="Styles/mobileCardStyle.css" rel="stylesheet" type="text/css">';
	}
	require_once('/home/200176338/public_html/DATA/HeaderClose.php');
?>
<div id="section">
	<h1 id="header">My Card</h1>
    <div id="padding">
    	<div class="javabutton" id="showHide" >
        	<p id="javatext">Hide Card</p>
        </div>
        <div id="card">
            <div id="border">
                <section">
                    <p id="cost">
                        Cost: &#8734;
                    </p>
                    <p id="lvl">
                        LVL:9000+
                    </p>
                    
                </section>
                <img src="photos/me.jpg">
                <div id="description">
                    <p id="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet, libero at blandit consequat, nisi turpis vestibulum eros, a porttitor nisi nulla id enim. Nullam sodales aliquam tortor, nec molestie purus adipiscing id. Nullam ut dui non ante egestas tristique id non ipsum. Proin in. I AM AWESOME!!!
                    </p>                  
                </div>
                <span>
                    <p id="stats">
                        &#8734; / *
                    </p>
                </span>             
            </div>
        </div>
    </div>
    <p id="center">This page demonstrates adaptive design, making use of a browsers user string to identify whether they are on a mobile device or desktop</p>
</div>
<?php
	require_once(HOME_DIR.'DATA/Footer.php');
?>