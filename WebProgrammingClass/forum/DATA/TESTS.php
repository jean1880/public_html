<?php
	// Define application constants
	define('REGEX_PATTERN_ALPHA_CHECK', "/([a-zA-Z])/");
	define('REGEX_PATTERN_DIGIT_CHECK', "/([0-9])/");
	define('REGEX_PATTERN_LENGTH_CHECK', "/(.{8})+/");
	// This checks the inputed date to verify it is in the correct format for the database to parse
	define('REGEX_DATE_CHECK', "/^(((0[13578]|10|12)([-./])(0[1-9]|[12][0-9]|3[01])([-./])(\d{4}))|((0[469]|11)([-./])([0][1-9]|[12][0-9]|30)([-./])(\d{4}))|((02)([-./])(0[1-9]|1[0-9]|2[0-8])([-./])(\d{4}))|((02)(\.|-|\/)(29)([-./])([02468][048]00))|((02)([-./])(29)([-./])([13579][26]00))|((02)([-./])(29)([-./])([0-9][0-9][0][48]))|((02)([-./])(29)([-./])([0-9][0-9][2468][048]))|((02)([-./])(29)([-./])([0-9][0-9][13579][26])))$/" );
	
	//checks the input password against the regular expressions to ensure input validity
	function REGEX_TEST_PASSWORD($checkPass)
	{
		//this statement checks the input variable against each regular expression
		if(preg_match(REGEX_PATTERN_LENGTH_CHECK,$checkPass) && preg_match(REGEX_PATTERN_DIGIT_CHECK,($checkPass)) && preg_match(REGEX_PATTERN_ALPHA_CHECK, $checkPass))
		{
			return true;
		}
		else
		{
			return false;  
		}
	}
	
	//checks the input password against the regular expressions to ensure input validity
	function REGEX_TEST_DATE($checkDate)
	{
		//this statement checks the input variable against each regular expression
		if(preg_match(REGEX_DATE_CHECK, $checkDate))
		{
			return true;
		}
		else
		{
			return false;	
		}
	}
	
	// Converts the country code to country name
	function COUNTRY_CONVERSION($country)
	{
		if($country == "")
		{
			return "Country Not Selected";
		}
		elseif($country =="AF")
		{
			return "Afghanistan";
		}
		elseif($country =="AL")
		{
			return "Albania";
		}
		elseif($country =="DZ")
		{
			return "Algeria";
		}
		elseif($country =="AS")
		{
			return "American Samoa";
		}
		elseif($country =="AD")
		{
			return "Andorra";
		}
		elseif($country =="AG")
		{
			return "Angola";
		}
		elseif($country =="AI")
		{
			return "Anguilla";
		}
		elseif($country =="AG")
		{
			return "Antigua &amp; Barbuda";
		}
		elseif($country =="AR")
		{
			return "Argentina";
		}
		elseif($country =="AA")
		{
			return "Armenia";
		}
		elseif($country =="AW")
		{
			return "Aruba";
		}
		elseif($country =="AU")
		{
			return "Australia";
		}
		elseif($country =="AT")
		{
			return "Austria";
		}
		elseif($country =="AZ")
		{
			return "Azerbaijan";
		}
		elseif($country =="BS")
		{
			return "Bahamas";
		}
		elseif($country =="BH")
		{
			return "Bahrain";
		}
		elseif($country =="BD")
		{
			return "Bangladesh";
		}
		elseif($country =="BB")
		{
			return "Barbados";
		}
		elseif($country =="BY")
		{
			return "Belarus";
		}
		elseif($country =="BE")
		{
			return "Belgium";
		}
		elseif($country =="BZ")
		{
			return "Belize";
		}
		elseif($country =="BJ")
		{
			return "Benin";
		}
		elseif($country =="BM")
		{
			return "Bermuda";
		}
		elseif($country =="BT")
		{
			return "Bhutan";
		}
		elseif($country =="BO")
		{
			return "Bolivia";
		}
		elseif($country =="BL")
		{
			return "Bonaire";
		}
		elseif($country =="BA")
		{
			return "Bosnia &amp; Herzegovina";
		}
		elseif($country =="BW")
		{
			return "Botswana";
		}
		elseif($country =="BR")
		{
			return "Brazil";
		}
		elseif($country =="BC")
		{
			return "British Indian Ocean Ter";
		}
		elseif($country =="BN")
		{
			return "Brunei";
		}
		elseif($country =="BG")
		{
			return "Bulgaria";
		}
		elseif($country =="BF")
		{
			return "Burkina Faso";
		}
		elseif($country =="BI")
		{
			return "Burundi";
		}
		elseif($country =="KH")
		{
			return "Cambodia";
		}
		elseif($country =="CM")
		{
			return "Cameroon";
		}
		elseif($country =="CA")
		{
			return "Canada";
		}
		elseif($country =="IC")
		{
			return "Canary Islands";
		}
		elseif($country =="CV")
		{
			return "Cape Verde";
		}
		elseif($country =="KY")
		{
			return "Cayman Islands";
		}
		elseif($country =="CF")
		{
			return "Central African Republic";
		}
		elseif($country =="CD")
		{
			return "Channel Islands";
		}
		elseif($country =="CL")
		{
			return "Chile";
		}
		elseif($country =="CN")
		{
			return "China";
		}
		elseif($country =="CI")
		{
			return "Christmas Island";
		}
		elseif($country =="CS")
		{
			return "Cocos Island";
		}
		elseif($country =="CO")
		{
			return "Colombia";
		}
		elseif($country =="CC")
		{
			return "Comoros";
		}
		elseif($country =="CG")
		{
			return "Congo";
		}
		elseif($country =="CK")
		{
			return "Cook Islands";
		}
		elseif($country =="CR")
		{
			return "Costa Rica";
		}
		elseif($country =="CT")
		{
			return "Cote D'Ivoire";
		}
		elseif($country =="HR")
		{
			return "Croatia";
		}
		elseif($country =="CU")
		{
			return "Cuba";
		}
		elseif($country =="CB")
		{
			return "Curacao";
		}
		elseif($country =="CY")
		{
			return "Cyprus";
		}
		elseif($country =="CZ")
		{
			return "Czech Republic";
		}
		elseif($country =="DK")
		{
			return "Denmark";
		}
		elseif($country =="DJ")
		{
			return "Djibouti";
		}
		elseif($country =="DM")
		{
			return "Dominica";
		}
		elseif($country =="DO")
		{
			return "Dominican Republic";
		}
		elseif($country =="TM")
		{
			return "East Timor";
		}
		elseif($country =="EC")
		{
			return "Ecuador";
		}
		elseif($country =="EG")
		{
			return "Egypt";
		}
		elseif($country =="SV")
		{
			return "El Salvador";
		}
		elseif($country =="GQ")
		{
			return "Equatorial Guinea";
		}
		elseif($country =="ER")
		{
			return "Eritrea";
		}
		elseif($country =="EE")
		{
			return "Estonia";
		}
		elseif($country =="ET")
		{
			return "Ethiopia";
		}
		elseif($country =="FA")
		{
			return "Falkland Islands";
		}
		elseif($country =="FO")
		{
			return "Faroe Islands";
		}
		elseif($country =="FJ")
		{
			return "Fiji";
		}
		elseif($country =="FI")
		{
			return "Finland";
		}
		elseif($country =="FR")
		{
			return "France";
		}
		elseif($country =="GF")
		{
			return "French Guiana";
		}
		elseif($country =="FS")
		{
			return "French Southern Ter";
		}
		elseif($country =="GA")
		{
			return "Gabon";
		}
		elseif($country =="GM")
		{
			return "Gambia";
		}
		elseif($country =="GE")
		{
			return "Georgia";
		}
		elseif($country =="DE")
		{
			return "Germany";
		}
		elseif($country =="GH")
		{
			return "Ghana";
		}
		elseif($country =="GI")
		{
			return "Gibraltar";
		}
		elseif($country =="GB")
		{
			return "Great Britain";
		}
		elseif($country =="GR")
		{
			return "Greece";
		}
		/* for the purpose of the assignment, didn't feel it was necessary to go through every one, dropped this and continued with website functionality, but this demonstrates the concept
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
		<option value="ZW">Zimbabwe</option>*/
	}
	
	// function checks user input against database to verify the correct captcha is selected
	function CAPTCHA($captchaID, $captchaname)
	{
		$dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = "SELECT * FROM forum_captcha WHERE img = SHA('" . $captchaID . "') AND id = SHA('" . $captchaname . "')";
		$data = mysqli_query($dbc, $query);
		if(mysqli_num_rows($data) == 0)
		{
			mysqli_close($dbc);
			return false;
		}
		else
		{
			mysqli_close($dbc);
			return true;
		}
		
	}
?>
