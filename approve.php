
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
	$clip = $open["CL_LIP"];
	$cpalate = $open["CL_PALATE"];
	$addate = $open["AD_DATE"];
	$surgdate = $open["SUR_DATE"];
	$disdate = $open["DC_DATE"];
	$fupdate = $open["FF_DATE"];

	$query1 = "INSERT INTO patient(patient_fname, patient_lname, patient_minitial, age, sex, present_address, provincial_address, civil_status, birthdate, religion, occupation, monthly_income, contact_number, highest_educ_attainment)
		VALUES('$fname', '$lname', '$minitial', '$age', '$sex', '$present_add', '$provincial_add', '$cs', '$bdate', '$religion','$occupation',$m_income,'$c_num','$educ')";
	mysqli_query($link, $query1);
	
	$query = "SELECT patient_id FROM patient WHERE patient_fname='$fname' AND patient_lname='$lname' AND patient_minitial='$minitial' ORDER BY patient_id DESC";
	$result = mysqli_query($link, $query);	
	$open = mysqli_fetch_array($result);
	$patient_id = $open['patient_id'];
	$query = "INSERT INTO CLSURGERY(patient_id, Cl_Lip, Cl_Palate, Admission_Date, Surgery_Date, Discharge_Date, Follow_Up_Date)
	VALUES($patient_id, '$clip', '$cpalate', '$addate', '$surgdate', '$disdate','$fupdate');";
	mysqli_query($link, $query);
	$query = "DELETE FROM intake WHERE id = $id";
	mysqli_query($link, $query);
	echo "<html><body><a href = 'index.php'> home </a></body></html>";
	
		

	


?>
