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
                <section>
                    <p id="cost">
                        <?php 
							$result = $db->query("SELECT cost FROM Card LIMIT 1");
							foreach($result as $row)
							{
								echo $row['cost'];
							}
						?>
                    </p>
                    <p id="lvl">
                         <?php 
							$result = $db->query("SELECT lvl FROM Card LIMIT 1");
							foreach($result as $row)
							{
								echo $row['lvl'];
							}
						?>
                    </p>
                    
                </section>
                <img id="photo" src="<?php 
							$result = $db->query("SELECT photo FROM Card LIMIT 1");
							foreach($result as $row)
							{
								echo $row['photo'];
							}
						?>">
                <div id="description">
                    <p id="text">
                        <?php 
							$result = $db->query("SELECT text FROM Card LIMIT 1");
							foreach($result as $row)
							{
								echo $row['text'];
							}
						?>
                    </p>                  
                </div>
                <span>
                    <p id="stats">
                       <?php 
							$result = $db->query("SELECT stats FROM Card LIMIT 1");
							foreach($result as $row)
							{
								echo $row['stats'];
							}
						?>
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