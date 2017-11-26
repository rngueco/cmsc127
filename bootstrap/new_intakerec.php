<?php
if($_POST){
	include 'link.php';
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$minitial = $_POST["minitial"];
	
	$age = $_POST["age"];
	$weight = $_POST["weight"];
	$cs = $_POST["cs"];
	
	$birth_Date = $_POST['birthDate'];
	$placeOfBirth = $_POST["birthplace"];
	$sexIdent = $_POST["gender"];
	
	$presentAddress = $_POST["presentAddress"];
	$provinceAddress = $_POST["provAddress"];
	$presZIP = $_POST["presZIP"];
	$provZIP = $_POST["provZIP"];
	$rel = $_POST["religion"];
	$occup = $_POST["occupation"];
	$monthly_income = $_POST["monthlyIncome"];
	$contact_num = $_POST["contactNumber"];
	$educ_Background = $_POST["educBack"];
	
	$surgerynum = $_POST["surgerynum"];
	$surgerytype = $_POST["surgerytype"];
	$cleft_Lip = $_POST["cLip"];
	$cleft_Palate = $_POST["cPalate"];
	$diag = $_POST["diagnosis"];
	
	$abnorm = $_POST["abnorm"];
	$allergy = $_POST["allergy"];
	$medallergy = $_POST["medallergy"];
	$otherallergy = $_POST["otherallergy"];
	$healthprob = $_POST["healthprob"];
	
	$preg = $_POST["preg"];
	$pcomp = $_POST["pcomplications"];
	$bcomp = $_POST["bcomplications"];
	$smoke = $_POST["smoke"];
	$alc = $_POST["alc"];
	$immed = $_POST["immed"];
	$distant = $_POST["distant"];
	
	$house_Stat = $_POST["houseStat"];
	$house_Own = $_POST["houseOwn"];
	$toilet_Type = $_POST["toiletType"];
	$water_Source = $_POST["waterSource"];
	$num_Occupants = $_POST["numOccupants"];
	$num_Floors = $_POST["numFloors"];
	$num_Rooms = $_POST["numRooms"];
	
	$elec_Exp = $_POST["elecExp"];
	$fuel_Exp = $_POST["fuelExp"];
	$water_Exp = $_POST["waterExp"];
	$educ_Exp = $_POST["educExp"];
	$med_Exp = $_POST["medExp"];
	$food_Exp = $_POST["foodExp"];
	$rent_Exp = $_POST["rentExp"];
	$trans_Exp = $_POST["transExp"];
	$cloth_Exp = $_POST["clothExp"];
	$c_Load_Exp = $_POST["cLoadExp"];
	$other_Exp = $_POST["otherExp"];
	
	$p_Full_Name = $_POST["pFullName"];
	$p_Occupation = $_POST["pOccupation"];
	$r_To_Patient = $_POST["rToPatient"];
	$p_Month_Inc = $_POST["pMonthInc"];
	$agency_Name = $_POST["agencyName"];
	$n_Go = $_POST["ngo"];
	$g_O = $_POST["go"];
	$needs_Provided = $_POST["needsProvided"];
	$services_Provided = $_POST["servicesProvided"];
	$income_Eval = $_POST["incomeEval"];
	
	$med_Date = $_POST['medDate'];
	$cp_Date = $_POST['cpDate'];
	$adm_Date = $_POST['admDate'];
	$surge_Date = $_POST['surgeDate'];
	$ds_Date = $_POST['dsDate'];
	$f_Date = $_POST['fDate'];
	
	$med_Remarks = $_POST["medRemarks"];
	$cp_Remarks = $_POST["cpRemarks"];
	$adm_Remarks = $_POST["admRemarks"];
	$surge_Remarks = $_POST["surgeRemarks"];
	$ds_Remarks = $_POST["dsRemarks"];
	$f_Remarks = $_POST["fRemarks"];
	
	$socialCS = $_POST["socialCS"];
	$indigency = $_POST["indigency"];
	$referral = $_POST["referral"];
	$pertinent = $_POST["pertinent"];
	
	$w_ARec = $_POST["wARec"];
	$philhealth = $_POST["philhealth"];
	
	$query = "INSERT INTO INTAKE (fname, lname, mi, age, weight, cs, birthdate, birthplace, gender, prov_add, pres_add, prov_zip, pres_zip, 
	religion, occu, m_income, cnum, educ_bg, surgerynum, surgerytype, cl_lip, cl_palate, diag, abnorm, allergy, m_allergy, o_allergy, health_prob, preg, 
	pcomp, bcomp, smoke, alc, immed, distant, h_stat, h_own, toilet, water, h_occu, h_flrs, h_rms, e_bill, fuel_exp, water_bill, educ_exp, 
	med_exp, food_exp, rent_exp, transpo, cloth_exp, cp_load, other_exp, p_name, p_occu, p_rel, p_inc, a_name, a_ngo, a_go, p_needs, a_serv, 
	fam_inc, med_date, cp_clear_date, ad_date, sur_date, dc_date, ff_date, med_rem, cp_clear_rem, ad_rem, sur_rem, dc_rem, ff_rem, social_cs, indigency, referral, pertinent, w_a_r, philhealth) 
	VALUES('$fname', '$lname', '$minitial', '$age', '$weight', '$cs', '$birth_Date', '$placeOfBirth', '$sexIdent', '$provinceAddress', 
	'$presentAddress', '$provZIP', '$presZIP', '$rel', '$occup', '$monthly_income','$contact_num', '$educ_Background', '$surgerynum', '$surgerytype', 
	'$cleft_Lip', '$cleft_Palate', '$diag', '$abnorm', '$allergy', '$medallergy', '$otherallergy', '$healthprob', '$preg', '$pcomp', '$bcomp', 
	'$smoke', '$alc', '$immed', '$distant', '$house_Stat', '$house_Own', '$toilet_Type', '$water_Source', '$num_Occupants', '$num_Floors', 
	'$num_Rooms', '$elec_Exp', '$fuel_Exp', '$water_Exp', '$educ_Exp', '$med_Exp', '$food_Exp', '$rent_Exp', '$trans_Exp', '$cloth_Exp', 
	'$c_Load_Exp', '$other_Exp', '$p_Full_Name', '$p_Occupation', '$r_To_Patient', '$p_Month_Inc', '$agency_Name', '$n_Go', '$g_O', 
	'$needs_Provided', '$services_Provided', '$income_Eval', '$med_Date', '$cp_Date', '$adm_Date', '$surge_Date', '$ds_Date', '$f_Date', '$med_Remarks', 
	'$cp_Remarks', '$adm_Remarks', '$surge_Remarks', '$ds_Remarks', '$f_Remarks', '$socialCS', '$indigency', '$referral', '$pertinent', '$w_ARec', '$philhealth');";
	mysqli_query($link, $query);
}
?>