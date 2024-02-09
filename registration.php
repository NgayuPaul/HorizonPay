<?php
$pagetitle = "REGISTRATION PAGE";
require_once "assets/header.html";
?>

<div class="registration">
  <div class='registrationheader'>
          <h1>logo</h1>
          <h2>Get Started</h2>
          <p>Let's get to know you</p>
  </div>
          
	
	<form action="login.php" method="post">
		<input type="text" id="name" name="name" required><br>
		<label for="countries">Country of Residence:</label><br>
		<select id="countries" name="countries[]" >
      <option value="Algeria">Algeria</option>
      <option value="Angola">Angola</option>
      <option value="Benin">Benin</option>
  <option value="Botswana">Botswana</option>
  <option value="Burkina Faso">Burkina Faso</option>
  <option value="Burundi">Burundi</option>
  <option value="Cabo Verde">Cabo Verde</option>
  <option value="Cameroon">Cameroon</option>
  <option value="Central African Republic">Central African Republic</option>
  <option value="Chad">Chad</option>
  <option value="Comoros">Comoros</option>
  <option value="Congo">Congo</option>
  <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
  <option value="Djibouti">Djibouti</option>
  <option value="Egypt">Egypt</option>
  <option value="Eritrea">Eritrea</option>
  <option value="Eswatini">Eswatini</option>
  <option value="Ethiopia">Ethiopia</option>
  <option value="Gabon">Gabon</option>
  <option value="Gambia">Gambia</option>
  <option value="Ghana">Ghana</option>
  <option value="Guinea">Guinea</option>
  <option value="Guinea-Bissau">Guinea-Bissau</option>
  <option value="Ivory Coast">Ivory Coast</option>
  <option value="Kenya">Kenya</option>
  <option value="Lesotho">Lesotho</option>
  <option value="Liberia">Liberia</option>
  <option value="Libya">Libya</option>
  <option value="Madagascar">Madagascar</option>
  <option value="Malawi">Malawi</option>
  <option value="Mali">Mali</option>
  <option value="Mauritania">Mauritania</option>
  <option value="Mauritius">Mauritius</option>
  <option value="Morocco">Morocco</option>
  <option value="Mozambique">Mozambique</option>
  <option value="Namibia">Namibia</option>
  <option value="Niger">Niger</option>
  <option value="Nigeria">Nigeria</option>
  <option value="Rwanda">Rwanda</option>
  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
  <option value="Senegal">Senegal</option>
  <option value="Seychelles">Seychelles</option>
  <option value="Sierra Leone">Sierra Leone</option>
  <option value="Somalia">Somalia</option>
  <option value="South Africa">South Africa</option>
  <option value="South Sudan">South Sudan</option>
  <option value="Sudan">Sudan</option>
  <option value="Tanzania">Tanzania</option>
  <option value="Togo">Togo</option>
  <option value="Tunisia">Tunisia</option>
  <option value="Uganda">Uganda</option>
  <option value="Zambia">Zambia</option>
  <option value="Zimbabwe">Zimbabwe</option>
  <select name="country">
</select>
    </select> <br>
  </form>

    
    <form action="login.php" method="post">
		<label for="countries">Phone Number</label><br>
		<select id="countries" name="countries[]" required>
        <option value="+213">Algeria (+213)</option>
        <option value="+244">Angola (+244)</option>
    <option value="+229">Benin (+229)</option>
    <option value="+267">Botswana (+267)</option>
    <option value="+226">Burkina Faso (+226)</option>
    <option value="+238">Cabo Verde (+238)</option>
    <option value="+237">Cameroon (+237)</option>
    <option value="+236">Central African Republic (+236)</option>
    <option value="+235">Chad (+235)</option>
    <option value="+269">Comoros (+269)</option>
    <option value="+243">Democratic Republic of the Congo (+243)</option>
    <option value="+242">Republic of the Congo (+242)</option>
    <option value="+253">Djibouti (+253)</option>
    <option value="+20">Egypt (+20)</option>
    <option value="+240">Equatorial Guinea (+240)</option>
    <option value="+291">Eritrea (+291)</option>
    <option value="+268">Eswatini (+268)</option>
    <option value="+251">Ethiopia (+251)</option>
    <option value="+241">Gabon (+241)</option>
    <option value="+220">Gambia (+220)</option>
    <option value="+233">Ghana (+233)</option>
    <option value="+224">Guinea (+224)</option>
    <option value="+245">Guinea-Bissau (+245)</option>
    <option value="+225">Ivory Coast (+225)</option>
    <option value="+254">Kenya (+254)</option>
    <option value="+266">Lesotho (+266)</option>
    <option value="+231">Liberia (+231)</option>
    <option value="+218">Libya (+218)</option>
    <option value="+261">Madagascar (+261)</option>
    <option value="+265">Malawi (+265)</option>
    <option value="+223">Mali (+223)</option>
    <option value="+222">Mauritania (+222)</option>
    <option value="+230">Mauritius (+230)</option>
    <option value="+212">Morocco (+212)</option>
    <option value="+258">Mozambique (+258)</option>
    <option value="+264">Namibia (+264)</option>
    <option value="+227">Niger (+227)</option>
    <option value="+234" selected>Nigeria (+234)</option>
    <option value="+250">Rwanda (+250)</option>
    <option value="+239">Sao Tome and Principe (+239)</option>
    <option value="+221">Senegal (+221)</option>
    <option value="+248">Seychelles (+248)</option>
    <option value="+232">Sierra Leone (+232)</option>
    <option value="+252">Somalia (+252)</option>
    <option value="+27">South Africa (+27)</option>
    <option value="+211">South Sudan (+211)</option>
    <option value="+249">Sudan (+249)</option>
    <option value="+255">Tanzania (+255)</option>
    <select name="country_code">
    
  </select>
		<input type="tel" id="phone_number" name="phone_number" required><br>

    <label for="email">Email Address</label> <br>
    <input type="text" name="Email" id=""> <br>

    <a href=""><button>Proceed</button></a><br><br><br>
    <a href="index.php"><p>Go back</p></a>

    </div>
    

