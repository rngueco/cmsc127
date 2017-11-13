
<?php
	include 'link.php';
	$id = $_POST['iid'];
	$query = "SELECT * FROM intake WHERE id = $id";
	$result = mysqli_query($link, $query);
	$open = mysqli_fetch_array($result);
	
	$fname =  $open['FNAME'];
	$lname = $open['LNAME'];
	$minitial = $open['MI'];
	$age = $open['AGE'];
	$sex = $open['GENDER'];
	$present_add = $open['PRES_ADD'];
	$provincial_add = $open['PROV_ADD'];
	$cs = $open['CS'];
	$bdate = $open['BIRTHDATE'];
	$bplace = $open['BIRTHPLACE'];
	$religion = $open['RELIGION'];
	$occupation = $open['OCCU'];
	$m_income = $open['M_INCOME'];
	$c_num = $open['CNUM'];
	$educ = $open['EDUC_BG'];
	$query = "INSERT INTO patient (patient_fname, patient_lname, patient_minitial, age, sex, present_address, provincial_address, civil_status, birthdate, religion, occupation, monthly_income, contact_number, highest_educ_attainment)
		VALUES('$fname', '$lname', '$minitial', '$age', '$sex', '$present_add', '$provincial_add', '$cs', '$bdate', '$bplace','$religion','$occupation',$m_income,$c_num,'$educ');";
	mysqli_query($link, $query);


?>
<html> 
<body>
<a href ="index.php"><h1> SUCCESS </h1></a>

</body>
</html>	
