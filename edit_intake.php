<html>
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script/backToIndex.js" type="text/javascript" ></script>
	<link href="images/favi.png" type="image/png" rel="icon" />
</head>
<body>
	<div class="header">
		<div class="handle">
			<span onclick="back()"><h1><img src="images/LukeLogo.png" width="40px" style="float:left" /></h1>
			<h1>uke Foundation, Inc</h1></span>
		</div>
	</div>
	<div class="content"><div class="left-panel">
			<?php include 'navigation.php' ?>
		</div>
		<div class="right-panel">
		<center>
			<form action='update_intake.php' method='post'>
			<?php 
				include 'link.php';
				$id = $_POST['iid'];
				$query = "SELECT * FROM intake WHERE id = $id";
				$result = mysqli_query($link, $query);
				$open = mysqli_fetch_array($result);
				
			?>
				<h1>Edit Surgery Information for <?=$open['FNAME']?> <?=$open['LNAME']?></h1>
				
				<table>
						<tr>
							<th colspan='2'>Identifying Information</th>
							<th colspan='2'>Educational Background</th>
						</tr>
						
						<tr>
							<td>First Name</td>
							<td><input type='text' name='fname' value='<?=$open['FNAME']?>'></td>
							
							<td>Educational Background</td>
							<td><select name = "educBack" class = "box_size">
								<option value="No Schooling Attended" <?php if($open['EDUC_BG']=='No Schooling Attended') echo"selected='selected'"; ?>>No Schooling Attended</option>
								<option value="Elementary" <?php if($open['EDUC_BG']=='Elementary') echo"selected='selected'"; ?>>Elementary</option>
								<option value="High School" <?php if($open['EDUC_BG']=='High School') echo"selected='selected'"; ?>>High School</option>
								<option value="College Undergraduate" <?php if($open['EDUC_BG']=='College Undergraduate') echo"selected='selected'"; ?>>College Undergraduate</option>
								<option value="College Graduate" <?php if($open['EDUC_BG']=='College Graduate') echo"selected='selected'"; ?>>College Graduate</option>
								<option value="Vocational" <?php if($open['EDUC_BG']=='Vocational') echo"selected='selected'"; ?>>Vocational</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Last Name</td>
							<td><input type="text" name="lname" value='<?=$open['LNAME']?>'> </td>
							
							<th colspan="2">Type of Cleft</th>
						</tr>
						
						<tr>
							<td> Middle Initial </td>
							<td><input type="text" name="minitial" value='<?=$open['MI']?>' maxlength="1">  </td>
							
							<td>Cleft Lip</td>
							<td><select name = "cl_lip" class = "box_size">
								<option value="None" <?php if($open['CL_LIP']=='None') echo"selected='selected'"; ?>>None</option>
								<option value="Incomplete Unilateral Right" <?php if($open['CL_LIP']=='Incomplete Unilateral Right') echo"selected='selected'"; ?> >Incomplete Unilateral Right</option>
								<option value="Incomplete Unilateral Left" <?php if($open['CL_LIP']=='Incomplete Unilateral Left') echo"selected='selected'"; ?>>Incomplete Unilateral Left</option>
								<option value="Complete Unilateral Right" <?php if($open['CL_LIP']=='Complete Unilateral Right') echo"selected='selected'"; ?>>Complete Unilateral Right</option>
								<option value="Complete Unilateral Left" <?php if($open['CL_LIP']=='Complete Unilateral Left') echo"selected='selected'"; ?>>Complete Unilateral Left</option>
								<option value="Complete Bilateral" <?php if($open['CL_LIP']=='Complete Bilateral') echo"selected='selected'"; ?>>Complete Bilateral</option>
								<option value="Incomplete Bilateral" <?php if($open['CL_LIP']=='Incomplete Bilateral') echo"selected='selected'"; ?>>Incomplete Bilateral</option>
								</select>
							</td>
							
						</tr>
						
						<tr>
							<td>Age</td>
							<td><input type="number" name="age" value='<?= $open['AGE'] ?>'></td>	
							
							<td>Cleft Palate</td>
							<td><select name = "cl_palate" class = "box_size">
								<option value="None" <?php if($open['CL_PALATE']=='None') echo"selected='selected'"; ?>>None</option>
								<option value="Complete Unilateral Right" <?php if($open['CL_PALATE']=='Complete Unilateral Right') echo"selected='selected'"; ?>>Complete Unilateral Right</option>
								<option value="Complete Unilateral Left" <?php if($open['CL_PALATE']=='Complete Unilateral Left') echo"selected='selected'"; ?>>Complete Unilateral Left</option>
								<option value="Incomplete Unilateral Right" <?php if($open['CL_PALATE']=='Incomplete Unilateral Right') echo"selected='selected'"; ?>>Incomplete Unilateral Right</option>
								<option value="Incomplete Unilateral Left" <?php if($open['CL_PALATE']=='Incomplete Unilateral Left') echo"selected='selected'"; ?>>Incomplete Unilateral Left</option>
								<option value="Complete Bilateral" <?php if($open['CL_PALATE']=='Complete Bilateral') echo"selected='selected'"; ?>>Complete Bilateral</option>
								<option value="Incomplete Bilateral" <?php if($open['CL_PALATE']=='Incomplete Bilateral') echo"selected='selected'"; ?>>Incomplete Bilateral</option>
								<option value="Submucous - left" <?php if($open['CL_PALATE']=='Submucous - left') echo"selected='selected'"; ?>>Submucous - left</option>
								<option value="Submucous - right" <?php if($open['CL_PALATE']=='Submucous - right') echo"selected='selected'"; ?>>Submucous - right</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Gender</td>
							<td>
								<input type="radio" name="gender" value="M" <?php if($open['GENDER']=='M') echo"checked"; ?>> Male<br>
								<input type="radio" name="gender" value="F" <?php if($open['GENDER']=='F') echo"checked"; ?>> Female<br>
							</td>
							
							<th colspan="2">Problems Presented</th>
						</tr>
						
						<tr>
							<td>CS</td>
							<td><input type="text" name="cs" value='<?=$open['CS']?>'> </td>	
							
							
							<td colspan="2" rowspan = "5">
								<textarea class = "paragraph_size" name="prob_present" rows = "9"><?= $open['PROB_PRES'] ?></textarea>
							</td>
						</tr>
						
						<tr>
							<td>Birthdate</td>
							<td>
								<input type='date' name='bday' value='<?= $open['BIRTHDATE'] ?>'>
							</td>	
						</tr>
						
						<tr>
							<td>Birthplace</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="birthplace" rows = "4" ><?= $open['BIRTHPLACE'] ?></textarea>
							</td>						
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Provincial Address</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="prov_address" rows = "4"><?= $open['PROV_ADD'] ?></textarea>
							</td>		
							
							<th colspan="2">Historical Background</th>							
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Present Address</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="present_address" rows = "4"><?= $open['PRES_ADD'] ?></textarea>
							</td>	
							
							<td colspan="2" rowspan = "6">
								<textarea class = "paragraph_size" name="hist_back" rows = "9"><?= $open['HIST_BG'] ?></textarea>
							</td>
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Religion</td>
							<td><input type="text" name="religion" value='<?= $open['RELIGION'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>Occupation</td>
							<td><input type="text" name="occupation" value='<?= $open['OCCU'] ?>' > </td>	
						</tr>
						
						
						<tr>
							<td>Monthly Income</td>
							<td><input type="number" name="monthly_income" value='<?= $open['M_INCOME'] ?>' > </td>	
							
						</tr>
						
						<tr>
							<td>Contact Number</td>
							<td>+639 <input type="text" name="contactNumber" maxlength="9" size="15" pattern="[01-9]{9,}" value='<?= $open['CNUM'] ?>' ></td>
						</tr>
						
						<tr>
							<th colspan="4"><center><h2>Economic Status</h2></center></th>
						</tr>
						
						<tr>
							<th colspan="2"><h4>1. Type of Housing</h4></th>
							<th colspan="2"><h4>2. Monthly Expenses</h4></th>
						</tr>
						
						<tr>
							<td>Number of Occupants</td>
							<td><input type="number" name="num_occpuants" value='<?= $open['H_OCCU'] ?>' > </td>	
							
							<td>Electric Bill</td>
							<td><input type="number" name="elec_exp" value='<?= $open['E_BILL'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>Number of Floors</td>
							<td><input type="number" name="num_floors" value='<?= $open['H_FLRS'] ?>' > </td>	
							
							<td>Fuel Expense</td>
							<td><input type="number" name="fuel_exp" value='<?= $open['FUEL_EXP'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>Number of Rooms</td>
							<td><input type="number" name="num_rooms" value='<?= $open['H_RMS'] ?>' > </td>
							
							<td>Water Bill</td>
							<td><input type="number" name="water_exp" value='<?= $open['WATER_BILL'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>House Status</td>
							<td>
								<select name = "house_stat" style = "width: 51.3%">
									<option value="Old" <?php if($open['H_STAT']=='Old') echo"selected='selected'"; ?>>Old</option>
									<option value="New" <?php if($open['H_STAT']=='New') echo"selected='selected'"; ?>>New</option>
									<option value="Remodeled" <?php if($open['H_STAT']=='Remodeled') echo"selected='selected'"; ?>>Remodeled</option>
								</select>
							</td>
							
							<td>Educational Expense</td>
							<td><input type="number" name="educ_exp" value='<?= $open['EDUC_EXP'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>House Ownership</td>
							<td>
								<select name = "house_owner" style = "width: 51.3%">
									<option value="Owned" <?php if($open['H_OWN']=='Owned') echo"selected='selected'"; ?>>Owned</option>
									<option value="Rented" <?php if($open['H_OWN']=='Rented') echo"selected='selected'"; ?>>Rented</option>
									<option value="Shared" <?php if($open['H_OWN']=='Shared') echo"selected='selected'"; ?>>Shared</option>
									<option value="Caretaker" <?php if($open['H_OWN']=='Caretaker') echo"selected='selected'"; ?>>Caretaker</option>
								</select>
							</td>
							
							<td>Medical Expense</td>
							<td><input type="number" name="med_exp" value='<?= $open['MED_EXP'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>Toilet Type</td>
							<td>
								<select name = "toilet_type" style = "width: 51.3%">
									<option value="Flush" <?php if($open['TOILET']=='Flush') echo"selected='selected'"; ?>>Flush</option>
									<option value="Water Sealed" <?php if($open['TOILET']=='Water Sealed') echo"selected='selected'"; ?>>Water Sealed</option>
									<option value="Open Pit" <?php if($open['TOILET']=='Open Pit') echo"selected='selected'"; ?>>Open Pit</option>
								</select>
							</td>
							
							<td>Food Expense</td>
							<td><input type="number" name="food_exp" value='<?= $open['FOOD_EXP'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>Water Source</td>
							<td>
								<select name = "water_source" style = "width: 51.3%">
									<option value="Faucet" <?php if($open['WATER']=='Faucet') echo"selected='selected'"; ?>>Faucet</option>
									<option value="Spring" <?php if($open['WATER']=='Spring') echo"selected='selected'"; ?>>Spring</option>
									<option value="Well" <?php if($open['WATER']=='Well') echo"selected='selected'"; ?>>Well</option>
									<option value="Water Pump" <?php if($open['WATER']=='Water Pump') echo"selected='selected'"; ?>>Water Pump</option>
								</select>
							</td>
							
							<td>Rent Expense</td>
							<td><input type="number" name="rent_exp" value='<?= $open['RENT_EXP'] ?>' > </td>	
						</tr>
						
						<tr>
							<th colspan="2"><h4>3. Provider of Client's Needs</h4></th>
							
							<td>Transportation Expense</td>
							<td><input type="number" name="trans_exp" value='<?= $open['TRANSPO'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>Provider's Full Name</td>
							<td><input type="text" name="p_fullName" value='<?= $open['P_NAME'] ?>' > </td>
							
							<td>Cloth Expense</td>
							<td><input type="number" name="cloth_exp" value='<?= $open['CLOTH_EXP'] ?>' > </td>	
						</tr>
					
						<tr>
							<td>Provider's Occupation</td>
							<td><input type="text" name="p_occupation" value='<?= $open['P_OCCU'] ?>' > </td>
							
							<td>Cellphone Load Expense</td>
							<td><input type="number" name="cLoad_exp" value='<?= $open['CP_LOAD'] ?>' > </td>	
						</tr>
						
						<tr>
							<td>Relationship To Patient</td>
							<td><input type="text" name="r_toPatient" value='<?= $open['P_REL'] ?>' > </td>
							
							<td>Other Expense</td>
							<td><input type="number" name="other_exp" value='<?= $open['OTHER_EXP'] ?>' ></td>	
						</tr>
						
						<tr>
							<td>Provider's Monthly Income</td>
							<td><input type="number" name="p_monthInc" value='<?= $open['P_INC'] ?>' > </td>
							
							<th colspan="2"><h4>4. Other Services Recieved</h4></th>
						</tr>
						
						<tr><!-- May Somethng pa dito -->
							<?php
							$pNeeds=$open['P_NEEDS'];
							$food = strpos($pNeeds, "Food");
							$educ = strpos($pNeeds, "Education");
							$hous = strpos($pNeeds, "Housing");
							$med = strpos($pNeeds, "Medical Needs");
							$clo = strpos($pNeeds, "Clothing");
							$oth = strpos($pNeeds, "Others");
							?>
							<td rowspan = "6">Need Provided to Patient</td>
							<td rowspan = "6">
								<input type="checkbox" name="needsProvided[]" value="Food" <?php if($food!==false) echo "checked"; ?>>Food<br>
								<input type="checkbox" name="needsProvided[]" value="Education" <?php if($educ!==false) echo "checked"; ?>>Education<br>
								<input type="checkbox" name="needsProvided[]" value="Housing" <?php if($hous!==false) echo "checked"; ?>>Housing<br>
								<input type="checkbox" name="needsProvided[]" value="Medical Needs" <?php if($med!==false) echo "checked"; ?>>Medical Needs<br>
								<input type="checkbox" name="needsProvided[]" value="Clothing" <?php if($clo!==false) echo "checked"; ?>>Clothing<br>
								<input type="checkbox" name="needsProvided[]" value="Others" <?php if($oth!==false) echo "checked"; ?>>Others<br>
							</td>
							
							<td>Name of Agency</td>
							<td><input type="text" name="agency_name" value='<?= $open['A_NAME'] ?>' ></td>	
						</tr>
						
						<tr>
							<td>NGO</td>
							<td><input type="text" name="ngo" value='<?= $open['A_NGO'] ?>' > </td>
							
						</tr>
						<tr>
							<td>GO</td>
							<td><input type="text" name="go" value='<?= $open['A_GO'] ?>' > </td>
							
						</tr>	
						
						<tr>
							<td rowspan = "4">Services Provided</td>
							<td colspan="1" rowspan = "3">
								<textarea class = "paragraph_size" name="services_provided" rows = "4"><?= $open['A_SERV'] ?></textarea>
							</td>	
						</tr>	
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
					
						<tr>
							<th colspan="4"><center>5. Family Income Evaluation</center></th>
						</tr>	

						<tr>
							<td colspan = "4">
								<input type="radio" name="incomeEval" value="None" <?php if($open['FAM_INC']=='None') echo"checked"; ?> >Yet to evaluate.<br>
								<input type="radio" name="incomeEval" value="Food" <?php if($open['FAM_INC']=='Food') echo"checked"; ?> >Total family income is not enough to meet the daily basic needs(food, clothing, education, medical needs) of the family.<br>
								<input type="radio" name="incomeEval" value="Education" <?php if($open['FAM_INC']=='Education') echo"checked"; ?> >Total income is just enough to meet the daily basic needs of the family.<br>
								<input type="radio" name="incomeEval" value="Housing" <?php if($open['FAM_INC']=='Housing') echo"checked"; ?> >Total family income is more than enough to meet the daily needs of the family.<br>
							</td>
						</tr>
						
						
						
						<tr>
							<th colspan="4"><center>6. Plan of Action</center></th>
						</tr>
						<tr>
							<td>Medical Consultation Date</td>
							<td>
								<input type='date' name='med_consul' value='<?= $open['MED_DATE'] ?>'>
							</td>	
							
							<td>Medical Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="med_remarks" rows = "4"><?= $open['MED_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>CP Clearance Date</td>
							<td>
								<input type='date' name='cp_clear' value='<?= $open['CP_CLEAR_DATE'] ?>'>
							</td>	
							
							<td>CP Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="cp_remarks" rows = "4"><?= $open['CP_CLEAR_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Admission Date</td>
							<td>
								<input type='date' name='adm_date' value='<?= $open['AD_DATE'] ?>'>
							</td>	
							
							<td>Admission Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="adm_remarks" rows = "4"><?= $open['AD_REM'] ?></textarea>
							</td>
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Surgery Date</td>
							<td>
								<input type='date' name='surge_date' value='<?= $open['SUR_DATE'] ?>'>
							</td>	
							
							<td>Surgery Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="surge_remarks" rows = "4"><?= $open['SUR_REM'] ?></textarea>
							</td>
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Discharge Date</td>
							<td>
								<input type='date' name='ds_date' value='<?= $open['DC_DATE'] ?>'>
							</td>
							
							<td>Discharge Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="ds_remarks" rows = "4"><?= $open['DC_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Follow-up Date</td>
							<td>
								<input type='date' name='f_date' value='<?= $open['FF_DATE'] ?>'>
							</td>	
							
							<td>Follow-up Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="f_remarks" rows = "4"><?= $open['FF_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Others Date</td>
							<td>
								<input type='date' name='oth_date' value='<?= $open['O_DATE'] ?>'>
							</td>	
							
							<td>Others Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="oth_remarks" rows = "4"><?= $open['O_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<th colspan="4"><center>7. Worker's Assessment And Recommendations</center></th>
						</tr>
						<tr>
							<td colspan="4" rowspan = "8">
								<textarea class = "paragraph_size" name="w_AssRec" rows = "8"><?= $open['W_A_R'] ?></textarea>
							</td>	
						</tr>
						
						<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						
						<tr>
							<td colspan="4" align="center"><input type="submit" value="Submit"><input type='hidden' name='iid' value='<?=$id?>'></td>
						</tr>
					</table>
			</form>
		</center>
		&nbsp;<br />&nbsp;
		</div>
	</div>
</body>
</html>