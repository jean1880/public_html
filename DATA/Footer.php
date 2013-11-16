        <footer>
            <p>&copy; 2013 Jean-Luc Desroches 
            	<a href="HTTP://ca.linkedin.com/pub/jean-luc-desroches/5a/461/3a1/" id="linkedin">
                	<img src="<?php echo URL ?>DATA/Logos/Linkedin.png" width="34" height="26" /></img>
                </a>                
				<a class="g-person" data-href="https://plus.google.com/u/0/117607326167866249817" href="https://plus.google.com/u/0/117607326167866249817?rel=author">
                	<img  src="<?php echo URL ?>DATA/Logos/gplus-32.png" width="26" height="26"></img>
                </a>
                <a data-ajax="false" href="<?php echo URL."contact-me.php" ?>">Contact Me</a>                
                <?php
				if(isset($_SESSION['username']) && (isset($_SESSION[KEYNAME]) && $_SESSION[KEYNAME] == KEY))
				{
					?>
                    	<a href="<?php echo $_SERVER['PHP_SELF'].'?logOut=true' ?>" id="logOut">Log Out</a>
                    <?php
				}
				?>
            </p>
        </footer>
	</body>
    <!-- This page, and all content and designs therein are property of Jean-Luc Desroches. If you wish to use any content from this page, you are free to do so, however please reference me in your code -->
</html>
