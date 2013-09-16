<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title></title>
    </head>
    <body>
        <?php  
        session_start();  //must call before accessing session
      
        if (isset($_SESSION['myvar'])){
            echo "A session variable called 'myvar' exists with a value ".$_SESSION['myvar'];
            session_destroy();
            //session destroyed, but variables still live as long
            //as the page
            //
            //kill the variables
            $_SESSION = array();
            //$_SESSION['myvar']="something else";
            echo "<br/>A destroyed session variable called 'myvar' exists with a value ".$_SESSION['myvar'];
            
        }
        else{  //not set, so set one
          
            $_SESSION['myvar']='Important Data';
            
            echo " Session was set  - refresh the page and see.";
        }
        ?>
    </body>
</html>
