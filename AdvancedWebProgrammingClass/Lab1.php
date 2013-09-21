<?php
	require_once('/home/200176338/public_html/DATA/HeaderOpen.php');
	$mobile = mobileCheck::checkBrowser();
	
	// Output style sheets between header files, if mobile add the mobile modifying css
	echo '<link href="Styles/cardStyle.css" rel="stylesheet" type="text/css">';
	if($mobile)
	{
		echo '<link href="Styles/mobileCardStyle.css" rel="stylesheet" type="text/css">';
	}
	require_once('/home/200176338/public_html/DATA/HeaderClose.php');
?>
<div id="card">
	<div id="border">
    	<section id="cost">
        	<p>
            	Cost: &#8734;
            </p>
            <span>
                <p id="lvl">
                    LVL:9000+
                </p>
            </span>
        </section>
		<img src="photos/me.jpg">
        <section id="description">
        	<p id="text">
            	Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus imperdiet, libero at blandit consequat, nisi turpis vestibulum eros, a porttitor nisi nulla id enim. Nullam sodales aliquam tortor, nec molestie purus adipiscing id. Nullam ut dui non ante egestas tristique id non ipsum. Proin in. I AM AWESOME!!!
            </p>                  
        </section>
        <span>
            <p id="stats">
                &#8734; / *
            </p>
        </span>  
        
    <div>
</div>
<?php
	require_once('/home/200176338/public_html/DATA/Footer.php');
?>