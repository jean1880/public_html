<?php
  // Insert the page header
  $page_title = 'Sign Up';
  require_once('DATA/header.php');

  require_once('DATA/TESTS.php');
  require_once('DATA/connectvars.php');
  require_once('DATA/navmenu.php');
  
  echo '<div class="content">';	
  // Connect to the database
  $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

  if (isset($_POST['submit'])) {
    // Grab the data from the POST
    $username = mysqli_real_escape_string($dbc, trim($_POST['username']));
    $password1 = mysqli_real_escape_string($dbc, trim($_POST['password1']));
    $password2 = mysqli_real_escape_string($dbc, trim($_POST['password2']));
    $first_name = mysqli_real_escape_string($dbc, trim($_POST['firstname']));
    $last_name = mysqli_real_escape_string($dbc, trim($_POST['lastname']));
    $gender = mysqli_real_escape_string($dbc, trim($_POST['gender']));
    $birthday = mysqli_real_escape_string($dbc, trim($_POST['birthday']));
    $country = mysqli_real_escape_string($dbc, trim($_POST['country']));
	$id = mysqli_real_escape_string($dbc, trim($_POST['id']));
	$captcha = mysqli_real_escape_string($dbc, trim($_POST['words']));
	
	// Verify fields are not empty
    if (!empty($username) && !empty($password1) && !empty($password2) && !empty($first_name) && !empty($last_name) && !empty($birthday) && !empty($country) && !empty($captcha))
	{
		// Check CAPTCHA info
		if(CAPTCHA($id,$captcha))
		{
			// Verify passwords match
			if($password1 == $password2)
			{
				// check password for proper formatting
				if((REGEX_TEST_PASSWORD($password1))) 
				{
					// Check date for proper format
					if(REGEX_TEST_DATE)
					{
						
						// Check to make sure counrty is not empty
						if($country == "")
						{
							echo "<p class='error'>You must Select a country to continue</p>";
						}
						
						// If country is not empty, continue
						else
						{
							//Alter the form date from formate mm/dd/yyyy to mm-dd-yyyy for proper MySQL DATE type format
							str_replace("/" , "-" , $birthday);
							//Make sure someone isn't already registered using this username
							$query = "SELECT * FROM forum_users WHERE user_name = '$username'";
							$data = mysqli_query($dbc, $query);
							if (mysqli_num_rows($data) == 0) 
							{
								
								// The username is unique, so insert the data into the database
								$query = "INSERT INTO forum_users (user_name, user_password, first_name, last_name, birthdate, Gender, country) VALUES ('$username', SHA('$password1'), '$first_name', '$last_name', '$birthday', '$gender', '$country')";
								mysqli_query($dbc, $query);
						
								// Confirm success with the user
								echo '<p>Your new account has been successfully created. You\'re now ready to <a href="login.php">log in</a>.</p>';
						
								// Close database connection
								mysqli_close($dbc);
								
								// Insert the page footer
								require_once('DATA/footer.php');
								exit();
								
							}
				
							else 
							{
								// An account already exists for this username, so display an error message
								echo '<p class="error">An account already exists for this username. Please use a different username.</p>';
								$username = "";
							}
						}
					}
					
					// echo error to user that date is in wrong format
					else
					{
						echo '<p class="error">Date is formatted incorrectly, please input date as mm/dd/yyyy</p>';	
					}
					
				}
				
				// echo error to user that password is formatted incorrect
				else 
				{
					echo '<p class="error">Password must be:</p>';
					echo '<li class="error">At least eight (8) characters in length</li>';
					echo '<li class="error">Contain least one (1) lowercase letter</li>';
					echo '<li class="error">Contain least one (1) uppercase letter</li>';
					echo '<li class="error">Contain least one (1) number</li>';
				}
				
			}
			
			// echo error to user that the passwords in field 1 and 2 do not match
			else 
			{
				'<p class="error">Passwords do not match</p>';
			}
		}
		else
		{
			echo '<p class="error">CAPTCHA data does not match</p>';
		}
	  	
	}
	
	
	// echo error to user that not all required fields have been filled out
    else 
	{
      echo '<p class="error">You must enter all required fields</p>';
    }
  }

  // close database connection
  mysqli_close($dbc);
?>

  <p>Please enter your username and desired password to sign up to Forum.</p>
  
  <p>Please note: Password must be:</p>
  <ul>      
      <li>At least eight (8) characters in length</li>
      <li>Contain least one (1) lowercase letter</li>
      <li>Contain least one (1) uppercase letter</li>
      <li>Contain least one (1) number</li>
  </ul>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="on">
    <fieldset>
      <legend>Registration Info</legend>
      <label for="username"><p class="required">*</p>Username:</label>
      	<input type="text" id="username" name="username" value="<?php if (!empty($username)) echo $username; ?>" required/>
      
      <label for="password1"><p class="required">*</p>Password:</label>
      	<input type="password" id="password1" name="password1" required/>

      <label for="password2"><p class="required">*</p>Password (retype):</label>
      	<input type="password" id="password2" name="password2" required/>
	</fieldset>
    <fieldset>
      <legend>Personal Info</legend>
      <label for="firstname"><p class="required">*</p>First Name:</label>
      	<input type="text" name="firstname" required />
        
      <label for="lastname"><p class="required">*</p>Last Name:</label>
      	<input type="text" name="lastname" required />
        
      <label for="gender">Gender:</label>
      	<select name="gender">
        	<option value="">Gender...</option>
        	<option value="M">Male</option>
            <option value="F">Female</option>
        </select>
        
      <label for="birthday">Birthdate</label>
      	<input type="date" name="birthday" required />
        
      <label for="country"><p class="required">*</p>Select Country</label>
      	<select name="country" required="required">
            <option value="">Country...</option>
            <option value="AF">Afghanistan</option>
            <option value="AL">Albania</option>
            <option value="DZ">Algeria</option>
            <option value="AS">American Samoa</option>
            <option value="AD">Andorra</option>
            <option value="AG">Angola</option>
            <option value="AI">Anguilla</option>
            <option value="AG">Antigua &amp; Barbuda</option>
            <option value="AR">Argentina</option>
            <option value="AA">Armenia</option>
            <option value="AW">Aruba</option>
            <option value="AU">Australia</option>
            <option value="AT">Austria</option>
            <option value="AZ">Azerbaijan</option>
            <option value="BS">Bahamas</option>
            <option value="BH">Bahrain</option>
            <option value="BD">Bangladesh</option>
            <option value="BB">Barbados</option>
            <option value="BY">Belarus</option>
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia</option>
            <option value="BL">Bonaire</option>
            <option value="BA">Bosnia &amp; Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BR">Brazil</option>
            <option value="BC">British Indian Ocean Ter</option>
            <option value="BN">Brunei</option>
            <option value="BG">Bulgaria</option>
            <option value="BF">Burkina Faso</option>
            <option value="BI">Burundi</option>
            <option value="KH">Cambodia</option>
            <option value="CM">Cameroon</option>
            <option value="CA">Canada</option>
            <option value="IC">Canary Islands</option>
            <option value="CV">Cape Verde</option>
            <option value="KY">Cayman Islands</option>
            <option value="CF">Central African Republic</option>
            <option value="TD">Chad</option>
            <option value="CD">Channel Islands</option>
            <option value="CL">Chile</option>
            <option value="CN">China</option>
            <option value="CI">Christmas Island</option>
            <option value="CS">Cocos Island</option>
            <option value="CO">Colombia</option>
            <option value="CC">Comoros</option>
            <option value="CG">Congo</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CT">Cote D'Ivoire</option>
            <option value="HR">Croatia</option>
            <option value="CU">Cuba</option>
            <option value="CB">Curacao</option>
            <option value="CY">Cyprus</option>
            <option value="CZ">Czech Republic</option>
            <option value="DK">Denmark</option>
            <option value="DJ">Djibouti</option>
            <option value="DM">Dominica</option>
            <option value="DO">Dominican Republic</option>
            <option value="TM">East Timor</option>
            <option value="EC">Ecuador</option>
            <option value="EG">Egypt</option>
            <option value="SV">El Salvador</option>
            <option value="GQ">Equatorial Guinea</option>
            <option value="ER">Eritrea</option>
            <option value="EE">Estonia</option>
            <option value="ET">Ethiopia</option>
            <option value="FA">Falkland Islands</option>
            <option value="FO">Faroe Islands</option>
            <option value="FJ">Fiji</option>
            <option value="FI">Finland</option>
            <option value="FR">France</option>
            <option value="GF">French Guiana</option>
            <option value="PF">French Polynesia</option>
            <option value="FS">French Southern Ter</option>
            <option value="GA">Gabon</option>
            <option value="GM">Gambia</option>
            <option value="GE">Georgia</option>
            <option value="DE">Germany</option>
            <option value="GH">Ghana</option>
            <option value="GI">Gibraltar</option>
            <option value="GB">Great Britain</option>
            <option value="GR">Greece</option>
            <option value="GL">Greenland</option>
            <option value="GD">Grenada</option>
            <option value="GP">Guadeloupe</option>
            <option value="GU">Guam</option>
            <option value="GT">Guatemala</option>
            <option value="GN">Guinea</option>
            <option value="GY">Guyana</option>
            <option value="HT">Haiti</option>
            <option value="HW">Hawaii</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IA">Iran</option>
            <option value="IQ">Iraq</option>
            <option value="IR">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="NK">Korea North</option>
            <option value="KS">Korea South</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Laos</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macau</option>
            <option value="MK">Macedonia</option>
            <option value="MG">Madagascar</option>
            <option value="MY">Malaysia</option>
            <option value="MW">Malawi</option>
            <option value="MV">Maldives</option>
            <option value="ML">Mali</option>
            <option value="MT">Malta</option>
            <option value="MH">Marshall Islands</option>
            <option value="MQ">Martinique</option>
            <option value="MR">Mauritania</option>
            <option value="MU">Mauritius</option>
            <option value="ME">Mayotte</option>
            <option value="MX">Mexico</option>
            <option value="MI">Midway Islands</option>
            <option value="MD">Moldova</option>
            <option value="MC">Monaco</option>
            <option value="MN">Mongolia</option>
            <option value="MS">Montserrat</option>
            <option value="MA">Morocco</option>
            <option value="MZ">Mozambique</option>
            <option value="MM">Myanmar</option>
            <option value="NA">Nambia</option>
            <option value="NU">Nauru</option>
            <option value="NP">Nepal</option>
            <option value="AN">Netherland Antilles</option>
            <option value="NL">Netherlands (Holland, Europe)</option>
            <option value="NV">Nevis</option>
            <option value="NC">New Caledonia</option>
            <option value="NZ">New Zealand</option>
            <option value="NI">Nicaragua</option>
            <option value="NE">Niger</option>
            <option value="NG">Nigeria</option>
            <option value="NW">Niue</option>
            <option value="NF">Norfolk Island</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau Island</option>
            <option value="PS">Palestine</option>
            <option value="PA">Panama</option>
            <option value="PG">Papua New Guinea</option>
            <option value="PY">Paraguay</option>
            <option value="PE">Peru</option>
            <option value="PH">Philippines</option>
            <option value="PO">Pitcairn Island</option>
            <option value="PL">Poland</option>
            <option value="PT">Portugal</option>
            <option value="PR">Puerto Rico</option>
            <option value="QA">Qatar</option>
            <option value="ME">Republic of Montenegro</option>
            <option value="RS">Republic of Serbia</option>
            <option value="RE">Reunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russia</option>
            <option value="RW">Rwanda</option>
            <option value="NT">St Barthelemy</option>
            <option value="EU">St Eustatius</option>
            <option value="HE">St Helena</option>
            <option value="KN">St Kitts-Nevis</option>
            <option value="LC">St Lucia</option>
            <option value="MB">St Maarten</option>
            <option value="PM">St Pierre &amp; Miquelon</option>
            <option value="VC">St Vincent &amp; Grenadines</option>
            <option value="SP">Saipan</option>
            <option value="SO">Samoa</option>
            <option value="AS">Samoa American</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome &amp; Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="OI">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syria</option>
            <option value="TA">Tahiti</option>
            <option value="TW">Taiwan</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania</option>
            <option value="TH">Thailand</option>
            <option value="TG">Togo</option>
            <option value="TK">Tokelau</option>
            <option value="TO">Tonga</option>
            <option value="TT">Trinidad &amp; Tobago</option>
            <option value="TN">Tunisia</option>
            <option value="TR">Turkey</option>
            <option value="TU">Turkmenistan</option>
            <option value="TC">Turks &amp; Caicos Is</option>
            <option value="TV">Tuvalu</option>
            <option value="UG">Uganda</option>
            <option value="UA">Ukraine</option>
            <option value="AE">United Arab Emirates</option>
            <option value="GB">United Kingdom</option>
            <option value="US">United States of America</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VS">Vatican City State</option>
            <option value="VE">Venezuela</option>
            <option value="VN">Vietnam</option>
            <option value="VB">Virgin Islands (Brit)</option>
            <option value="VA">Virgin Islands (USA)</option>
            <option value="WK">Wake Island</option>
            <option value="WF">Wallis &amp; Futana Is</option>
            <option value="YE">Yemen</option>
            <option value="ZR">Zaire</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
        </select>
	  	
     
    </fieldset>
    <fieldset>
    	<legend>Submit</legend>
        <?php
			  require_once('DATA/verify.php');
		?>
        <input class="button" type="submit" value="Sign Up" name="submit" />
    </fieldset>
  </form>

<?php
  echo '</div>';
  // Insert the page footer
  require_once('DATA/footer.php');
?>
