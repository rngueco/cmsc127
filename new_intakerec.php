<?php

if($_POST){
	include 'link.php';
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$minitial = $_POST["minitial"];
	
	$age = $_POST["age"];
	$sexIdent = $_POST["gender"];
	
	$birth_Date = date('Y-m-d', strtotime($_POST['birthDate']));
	$placeOfBirth = $_POST["birthplace"];
	
	$presentAddress = $_POST["presentAddress"];
	$provinceAddress = $_POST["provAddress"];

	$rel = $_POST["religion"];
	$occup = $_POST["occupation"];
	$monthly_income = $_POST["monthlyIncome"];
	
	$contact_num = $_POST["contactNumber"];
	$educ_Background = $_POST["educBackground"];
	
	$cleft_Lip = $_POST["cLip"];
	$cleft_Palate = $_POST["cPalate"];
	
	$prob_Present = $_POST["probPresent"];
	$hist_Back = $_POST["histBack"];
	
	$num_Occupants = $_POST["numOccupants"];
	$elec_Exp = $_POST["elecExp"];
	
	$num_Floors = $_POST["numFloors"];
	$fuel_Exp = $_POST["fuelExp"];
	$num_Rooms = $_POST["numRooms"];
	$water_Exp = $_POST["waterExp"];
	
	$house_Stat = $_POST["houseStat"];
	$educ_Exp = $_POST["educExp"];
	$house_Own = $_POST["houseOwn"];
	$med_Exp = $_POST["medExp"];
	
	$toilet_Type = $_POST["toiletType"];
	$food_Exp = $_POST["foodExp"];
	$water_Source = $_POST["waterSource"];
	$rent_Exp = $_POST["rentExp"];
	
	$trans_Exp = $_POST["transExp"];
	$p_Full_Name = $_POST["pFullName"];
	$cloth_Exp = $_POST["clothExp"];
	$p_Occupation = $_POST["pOccupation"];
	$c_Load_Exp = $_POST["cLoadExp"];
	$r_To_Patient = $_POST["rToPatient"];
	$other_Exp = $_POST["otherExp"];
	$p_Month_Inc = $_POST["pMonthInc"];
	
	$needs_Provided = $_POST["needsProvided"];
	$agency_Name = $_POST["agencyName"];
	
	$n_Go = $_POST["ngo"];
	$g_O = $_POST["go"];
	$services_Provided = $_POST["servicesProvided"];
	$income_Eval = $_POST["incomeEval"];
	
	$med_Date = date('Y-m-d', strtotime($_POST['medDate']));
	$med_Remarks = $_POST["medRemarks"];
	$cp_Date = date('Y-m-d', strtotime($_POST['cpDate']));
	$cp_Remarks = $_POST["cpRemarks"];
	$adm_Date = date('Y-m-d', strtotime($_POST['admDate']));
	$adm_Remarks = $_POST["admRemarks"];
	$surge_Date = date('Y-m-d', strtotime($_POST['surgeDate']));
	$surge_Remarks = $_POST["surgeRemarks"];
	$ds_Date = date('Y-m-d', strtotime($_POST['dsDate']));
	$ds_Remarks = $_POST["dsRemarks"];
	$f_Date = date('Y-m-d', strtotime($_POST['fDate']));
	$f_Remarks = $_POST["fRemarks"];
	$oth_Date = date('Y-m-d', strtotime($_POST['othDate']));
	$oth_Remarks = $_POST["othRemarks"];
	
	$w_ARec = $_POST["wARec"];
	
	$query = "INSERT INTO INTAKE (fname, lname, mi, pes_add, age, gender, birthdate, birthplace, prov_add, religion, 
	occu, m_income, cnum, educ_bg, cl_lip, cl_palate, prob_pres, hist_bg, h_occu, e_bill, h_flrs, fuel_exp, h_rms, water_bill, 
	h_stat, educ_exp, h_own, med_exp, toilet, food_exp, water, rent_exp, transpo, p_name, cloth_exp, p_occu, cp_load, p_rel, other_exp, p_inc, 
	p_needs, a_name, a_ngo, a_go, a_serv, fam_inc, med_date, med_rem, cp_clear_date, cp_clear_rem, ad_date, ad_rem, sur_date, sur_rem, 
	dc_date, dc_rem, ff_date, ff_rem, o_date, o_rem, w_a_r) 
	VALUES('$fname', '$lname', '$minitial', '$presentAddress', '$age', '$sexIdent', '$birth_Date', 
	'$placeOfBirth', '$provinceAddress', '$rel', '$occup', '$monthly_income','$contact_num', '$educ_Background', 
	'$cleft_Lip', '$cleft_Palate', '$prob_Present', '$hist_Back', '$num_Occupants', '$elec_Exp', 
	'$num_Floors', '$fuel_Exp', '$num_Rooms', '$water_Exp', '$house_Stat', '$educ_Exp', '$house_Own', '$med_Exp', '$toilet_Type',
	'$food_Exp', '$water_Source', '$rent_Exp', '$trans_Exp', '$p_Full_Name', '$cloth_Exp', '$p_Occupation', '$c_Load_Exp', '$r_To_Patient', 
	'$other_Exp', '$p_Month_Inc', '$needs_Provided', '$agency_Name', '$n_Go', '$g_O', '$services_Provided', '$income_Eval', 
	'$med_Date', '$med_Remarks', '$cp_Date', '$cp_Remarks', '$adm_Date', '$adm_Remarks', '$surge_Date', '$surge_Remarks', 
	'$ds_Date', '$ds_Remarks', '$f_Date', '$f_Remarks', '$oth_Date', '$oth_Remarks' , '$w_ARec');";
	mysqli_query($link, $query);
	
	//$query = "INSERT INTO PATIENT (patient_fname, patient_lname, patient_minitial, age, sex, present_address, provincial_address, birthdate, birthplace, religion, occupation, monthly_income, contact_number, highest_educ_attainment) VALUES('$fname', '$lname', '$minitial', '$age', '$sex', '$presentAddress', '$provAddress', '$birthdate', '$birthplace', '$religion', '$occupation', '$monthlyIncome', '$contactNumber', '$educBackground');";
	//mysqli_query($link, $query);
}
?>