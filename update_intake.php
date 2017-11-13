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
			<?php 
				include 'link.php';
				$id = $_POST['iid'];
				$FNAME = $_POST['fname'];
				$LNAME = $_POST['lname'];
				$EDUC_BG = $_POST['educBack'];
				$MI = $_POST['minitial'];
				$CL_LIP = $_POST['cl_lip'];
				$AGE = $_POST['age'];
				$CL_PALATE = $_POST['cl_palate'];
				$GENDER = $_POST['gender'];
				$CS = $_POST['cs'];
				$PROB_PRES = $_POST['prob_present'];
				$BIRTHDATE = $_POST['bday'];
				$BIRTHPLACE = $_POST['birthplace'];
				$PROV_ADD = $_POST['prov_address'];
				$PRES_ADD = $_POST['present_address'];
				$HIST_BG = $_POST['hist_back'];
				$RELIGION = $_POST['religion'];
				$OCCU = $_POST['occupation'];
				$M_INCOME = $_POST['monthly_income'];
				$CNUM = $_POST['contactNumber'];
				$H_OCCU = $_POST['num_occpuants'];
				$E_BILL = $_POST['elec_exp'];
				$H_FLRS = $_POST['num_floors'];
				$FUEL_EXP = $_POST['fuel_exp'];
				$H_RMS = $_POST['num_rooms'];
				$WATER_BILL = $_POST['water_exp'];
				$H_STAT = $_POST['house_stat'];
				$EDUC_EXP = $_POST['educ_exp'];
				$H_OWN = $_POST['house_owner'];
				$MED_EXP = $_POST['med_exp'];
				$TOILET = $_POST['toilet_type'];
				$FOOD_EXP = $_POST['food_exp'];
				$WATER = $_POST['water_source'];
				$RENT_EXP = $_POST['rent_exp'];
				$TRANSPO = $_POST['trans_exp'];
				$P_NAME = $_POST['p_fullName'];
				$CLOTH_EXP = $_POST['cloth_exp'];
				$P_OCCU = $_POST['p_occupation'];
				$CP_LOAD = $_POST['cLoad_exp'];
				$P_REL = $_POST['r_toPatient'];
				$OTHER_EXP = $_POST['other_exp'];
				$P_INC = $_POST['p_monthInc'];
				$A_NAME = $_POST['agency_name'];
				$A_NGO = $_POST['ngo'];
				$A_GO = $_POST['go'];
				$A_SERV = $_POST['services_provided'];
				$FAM_INC = $_POST['incomeEval'];
				$MED_DATE = $_POST['med_consul'];
				$MED_REM = $_POST['med_remarks'];
				$CP_CLEAR_DATE = $_POST['cp_clear'];
				$CP_CLEAR_REM = $_POST['cp_remarks'];
				$AD_DATE = $_POST['adm_date'];
				$AD_REM = $_POST['adm_remarks'];
				$SUR_DATE = $_POST['surge_date'];
				$SUR_REM = $_POST['surge_remarks'];
				$DC_DATE = $_POST['ds_date'];
				$DC_REM = $_POST['ds_remarks'];
				$FF_DATE = $_POST['f_date'];
				$FF_REM = $_POST['f_remarks'];
				$O_DATE = $_POST['oth_date'];
				$O_REM = $_POST['oth_remarks'];
				$W_A_R = $_POST['w_AssRec'];
				$P_NEEDS = "";
				if(!empty($_POST['needsProvided'])){
					foreach($_POST['needsProvided'] as $selected){
						$P_NEEDS = $P_NEEDS . $selected . ",";
					}
				}
				
				$query2 = "UPDATE INTAKE SET FNAME = '$FNAME', LNAME = '$LNAME', EDUC_BG = '$EDUC_BG', MI = '$MI', CL_LIP = '$CL_LIP', AGE = '$AGE', CL_PALATE = '$CL_PALATE', GENDER = '$GENDER', CS = '$CS', PROB_PRES = '$PROB_PRES', BIRTHDATE = '$BIRTHDATE', BIRTHPLACE = '$BIRTHPLACE', PROV_ADD = '$PROV_ADD', PRES_ADD = '$PRES_ADD', HIST_BG = '$HIST_BG', RELIGION = '$RELIGION', OCCU = '$OCCU', M_INCOME = '$M_INCOME', CNUM = '$CNUM', H_OCCU = '$H_OCCU', E_BILL = '$E_BILL', H_FLRS = '$H_FLRS', FUEL_EXP = '$FUEL_EXP', H_RMS = '$H_RMS', WATER_BILL = '$WATER_BILL', H_STAT = '$H_STAT', H_STAT = '$H_STAT', EDUC_EXP = '$EDUC_EXP', H_OWN = '$H_OWN', MED_EXP = '$MED_EXP', TOILET = '$TOILET', FOOD_EXP = '$FOOD_EXP', WATER = '$WATER', RENT_EXP = '$RENT_EXP', TRANSPO = '$TRANSPO', P_NAME = '$P_NAME', P_NAME = '$P_NAME', CLOTH_EXP = '$CLOTH_EXP', P_OCCU = '$P_OCCU', CP_LOAD = '$CP_LOAD', P_REL = '$P_REL', OTHER_EXP = '$OTHER_EXP', P_INC = '$P_INC', A_NAME = '$A_NAME', A_NGO = '$A_NGO', A_GO = '$A_GO', A_SERV = '$A_SERV', FAM_INC = '$FAM_INC', MED_DATE = '$MED_DATE', MED_REM = '$MED_REM', CP_CLEAR_DATE = '$CP_CLEAR_DATE', CP_CLEAR_REM = '$CP_CLEAR_REM', AD_DATE = '$AD_DATE', AD_REM = '$AD_REM', SUR_DATE = '$SUR_DATE', SUR_REM = '$SUR_REM', DC_DATE = '$DC_DATE', DC_REM = '$DC_REM', FF_DATE = '$FF_DATE', FF_REM = '$FF_REM', O_DATE = '$O_DATE', O_REM = '$O_REM', W_A_R = '$W_A_R', P_NEEDS = '$P_NEEDS' WHERE ID = '$id' ";
				$result2 = mysqli_query($link, $query2);
				
				$query = "SELECT * FROM intake WHERE id = $id";
				$result = mysqli_query($link, $query);
				$open = mysqli_fetch_array($result);
			?>
				<h1><?=$open['FNAME']?> <?=$open['LNAME']?></h1>
				
				<table>
						<tr>
							<th colspan='2'>Identifying Information</th>
							<th colspan='2'>Educational Background</th>
						</tr>
						
						<tr>
							<td>First Name</td>
							<td><?=$open['FNAME']?></td>
							
							<td>Educational Background</td>
							<td><?=$open['EDUC_BG']?></td>
						</tr>
						
						<tr>
							<td>Last Name</td>
							<td><?=$open['LNAME']?></td>
							
							<th colspan="2">Type of Cleft</th>				
						</tr>
						
						<tr>
							<td> Middle Initial </td>
							<td><?=$open['MI']?></td>
							
							<td>Cleft Lip</td>
							<td><?=$open['CL_LIP']?></td>
							
						</tr>
						
						<tr>
							<td>Age</td>
							<td><?= $open['AGE'] ?></td>	
							
							<td>Cleft Palate</td>
							<td><?=$open['CL_PALATE']?></td>
						</tr>
						
						<tr>
							<td>Gender</td>
							<td><?php if($open['GENDER']=='M') echo"Male"; if($open['GENDER']=='F') echo"Female"; ?></td>
							
							<th colspan="2">Problems Presented</th>
						</tr>
						
						<tr>
							<td>CS</td>
							<td><?=$open['CS']?></td>	
							
							
							<td colspan="2" rowspan = "5">
								<textarea class = "paragraph_size" name="prob_present" rows = "9" readonly><?= $open['PROB_PRES'] ?></textarea>
							</td>
						</tr>
						
						<tr>
							<td>Birthdate</td>
							<td><?php
							if($open['BIRTHDATE']=="0000-00-00"){
								echo "N/A";
							}else{
								echo $open['BIRTHDATE'];
							}
							?></td>	
						</tr>
						
						<tr>
							<td>Birthplace</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="birthplace" rows = "4" readonly><?= $open['BIRTHPLACE'] ?></textarea>
							</td>						
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Provincial Address</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="prov_address" rows = "4" readonly><?= $open['PROV_ADD'] ?></textarea>
							</td>		
							
							<th colspan="2">Historical Background</th>							
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Present Address</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="present_address" rows = "4" readonly><?= $open['PRES_ADD'] ?></textarea>
							</td>	
							
							<td colspan="2" rowspan = "6">
								<textarea class = "paragraph_size" name="hist_back" rows = "9" readonly><?= $open['HIST_BG'] ?></textarea>
							</td>
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Religion</td>
							<td><?= $open['RELIGION'] ?></td>	
						</tr>
						
						<tr>
							<td>Occupation</td>
							<td><?= $open['OCCU'] ?></td>	
						</tr>
						
						
						<tr>
							<td>Monthly Income</td>
							<td><?= $open['M_INCOME'] ?></td>
							
						</tr>
						
						<tr>
							<td>Contact Number</td>
							<td><?php if(!empty($open['CNUM'])) echo "+639".$open['CNUM'] ?></td>
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
							<td><?= $open['H_OCCU'] ?></td>	
							
							<td>Electric Bill</td>
							<td><?= $open['E_BILL'] ?></td>
						</tr>
						
						<tr>
							<td>Number of Floors</td>
							<td><?= $open['H_FLRS'] ?></td>
							
							<td>Fuel Expense</td>
							<td><?= $open['FUEL_EXP'] ?></td>	
						</tr>
						
						<tr>
							<td>Number of Rooms</td>
							<td><?= $open['H_RMS'] ?></td>
							
							<td>Water Bill</td>
							<td><?= $open['WATER_BILL'] ?></td>
						</tr>
						
						<tr>
							<td>House Status</td>
							<td><?=$open['H_STAT']?></td>
							
							<td>Educational Expense</td>
							<td><?= $open['EDUC_EXP'] ?></td>
						</tr>
						
						<tr>
							<td>House Ownership</td>
							<td><?=$open['H_OWN']?></td>
							
							<td>Medical Expense</td>
							<td><?= $open['MED_EXP'] ?></td>	
						</tr>
						
						<tr>
							<td>Toilet Type</td>
							<td><?= $open['TOILET']?></td>
							
							<td>Food Expense</td>
							<td><?= $open['FOOD_EXP']?></td>	
						</tr>
						
						<tr>
							<td>Water Source</td>
							<td><?= $open['WATER']?></td>
							
							<td>Rent Expense</td>
							<td><?= $open['RENT_EXP'] ?></td>
						</tr>
						
						<tr>
							<th colspan="2"><h4>3. Provider of Client's Needs</h4></th>
							
							<td>Transportation Expense</td>
							<td><?= $open['TRANSPO'] ?></td>
						</tr>
						
						<tr>
							<td>Provider's Full Name</td>
							<td><?= $open['P_NAME'] ?></td>
							
							<td>Cloth Expense</td>
							<td><?= $open['CLOTH_EXP'] ?></td>	
						</tr>
					
						<tr>
							<td>Provider's Occupation</td>
							<td><?= $open['P_OCCU'] ?></td>
							
							<td>Cellphone Load Expense</td>
							<td><?= $open['CP_LOAD'] ?></td>	
						</tr>
						
						<tr>
							<td>Relationship To Patient</td>
							<td><?= $open['P_REL'] ?></td>
							
							<td>Other Expense</td>
							<td><?= $open['OTHER_EXP'] ?></td>
						</tr>
						
						<tr>
							<td>Provider's Monthly Income</td>
							<td><?= $open['P_INC'] ?></td>
							
							<th colspan="2"><h4>4. Other Services Recieved</h4></th>
						</tr>
						
						<?php
						$tmp = explode(",", $open['P_NEEDS']);
						$provided = "";
						foreach($tmp as $given){
							if($given!=""){
								if($provided!=""){
									$provided = $provided.", ";
								}
								$provided = $provided.$given;
							}
						}
						?>
						
						<tr><!-- May Somethng pa dito -->
							<td rowspan = "6">Need Provided to Patient</td>
							<td rowspan = "6"><?=$provided?></td>
							
							<td>Name of Agency</td>
							<td><?= $open['A_NAME'] ?></td>
						</tr>
						
						<tr>
							<td>NGO</td>
							<td><?= $open['A_NGO'] ?></td>
							
						</tr>
						<tr>
							<td>GO</td>
							<td><?= $open['A_GO'] ?></td>
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
							<td colspan = "4"><center>
								<?php
								if($open['FAM_INC']=='None') echo "Yet to evaluate.";
								if($open['FAM_INC']=='Food') echo"Total family income is not enough to meet the daily basic needs(food, clothing, education, medical needs) of the family.";
								if($open['FAM_INC']=='Education') echo"Total income is just enough to meet the daily basic needs of the family.";
								if($open['FAM_INC']=='Housing') echo"Total family income is more than enough to meet the daily needs of the family.";?>
							</center></td>
						</tr>
						
						<tr>
							<th colspan="4"><center>6. Plan of Action</center></th>
						</tr>
						<tr>
							<td>Medical Consultation Date</td>
							<td><?php
								if($open['MED_DATE']=="0000-00-00"){
									echo "N/A";
								}else{
									echo $open['MED_DATE'];
								}
							?></td>
							
							<td>Medical Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="med_remarks" rows = "4" readonly> <?= $open['MED_REM'] ?> </textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>CP Clearance Date</td>
							<td><?php
								if($open['CP_CLEAR_DATE']=="0000-00-00"){
									echo "N/A";
								}else{
									echo $open['CP_CLEAR_DATE'];
								}
							?></td>
							
							<td>CP Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="cp_remarks" rows = "4" readonly><?= $open['CP_CLEAR_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Admission Date</td>
							<td><?php
								if($open['AD_DATE']=="0000-00-00"){
									echo "N/A";
								}else{
									echo $open['AD_DATE'];
								}
							?></td>
							
							<td>Admission Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="adm_remarks" rows = "4" readonly><?= $open['AD_REM'] ?></textarea>
							</td>
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Surgery Date</td>
							<td><?php
								if($open['SUR_DATE']=="0000-00-00"){
									echo "N/A";
								}else{
									echo $open['SUR_DATE'];
								}
							?></td>
							
							<td>Surgery Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="surge_remarks" rows = "4" readonly><?= $open['SUR_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Discharge Date</td>
							<td><?php
								if($open['DC_DATE']=="0000-00-00"){
									echo "N/A";
								}else{
									echo $open['DC_DATE'];
								}
							?></td>
							
							<td>Discharge Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="ds_remarks" rows = "4" readonly><?= $open['DC_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Follow-up Date</td>
							<td><?php
								if($open['FF_DATE']=="0000-00-00"){
									echo "N/A";
								}else{
									echo $open['FF_DATE'];
								}
							?></td>
							
							<td>Follow-up Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="f_remarks" rows = "4" readonly><?= $open['FF_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Others Date</td>
							<td><?php
								if($open['O_DATE']=="0000-00-00"){
									echo "N/A";
								}else{
									echo $open['O_DATE'];
								}
							?></td>
							
							<td>Others Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="oth_remarks" rows = "4" readonly><?= $open['O_REM'] ?></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<th colspan="4"><center>7. Worker's Assessment And Recommendations</center></th>
						</tr>
						<tr>
							<td colspan="4" rowspan = "8">
								<textarea class = "paragraph_size" name="w_AssRec" rows = "8" readonly><?= $open['W_A_R'] ?></textarea>
							</td>	
						</tr>
						
						<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						
					</table>
		</center>
		&nbsp;<br />&nbsp;
		</div>
	</div>
</body>
</html>
