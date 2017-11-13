<html>
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script/backToIndex.js" type="text/javascript" ></script>
	<script src="script/printDiv.js" type="text/javascript" ></script>
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
		<div id ="print-content">
		<center>
			<?php 
				include 'link.php';
				$id = $_POST['iid'];
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
					</div>
					</center>
					<center>
					<form action='remove.php' action='post' style='margin-left:10%' >
						<input type='hidden' name='PID' value='".$open['patient_id']."'><br />
						<input type='image' src = 'images/delete.png' width = '17px' height = '17px' onclick="return confirm('Are you sure you want to delete this record?');">
					</form>
					<span title = 'Print Record'>
						<input type='image' src = 'images/printer.png' onclick="printDiv('print-content')" width = "17px" height = "17px"/>
					</span>
		</center>
		&nbsp;<br />&nbsp;
		</div>
	</div>


			
</body>
</html>
