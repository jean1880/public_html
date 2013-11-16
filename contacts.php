<?php
	include('DATA/HeaderOpen.php');
	include('DATA/HeaderClose.php');
	if(isset($_SESSION['username']) && (isset($_SESSION[KEYNAME]) && $_SESSION[KEYNAME] == KEY))
	{
		
		?>
        	<div id="section">
            	<?php
					global $db;
					$query = 'SELECT first_name, last_name, phone FROM contacts';
					$result = $db->query($query);
				?>
                <table style="margin-left:auto; margin-right:auto;">
                	<thead>
                    	<th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone</th>
                    </thead>
                    <tbody>
                    	<?php
							while($row = $result->fetch())
							{
								?>
                                	<tr>
                                    	<td><?php echo $row['first_name'] ?></td>
                                        <td><?php echo $row['last_name'] ?></td>
                                       	<td><?php echo $row['phone'] ?></td>
                                    </tr>
                                <?php
							}
						?>
                    </tbody>
                </table>
            </div>
        <?php
	}
	else
	{
		?>
        	<div id="section">
            	Access Denied
            </div>
        <?php
	}
	if($mobile)
	{
		echo '<link rel="stylesheet" href="DATA/Styles/mobileHomeStyle.css" type="text/css" >';
	}
	else
	{
		echo '<link href="'.URL.'DATA/Styles/homeStyles.css" rel="stylesheet" type="text/css">';
		echo '<link href="'.URL.'DATA/Styles/login.css" rel="stylesheet" type="text/css">';
	}
	include('DATA/Footer.php');
?>