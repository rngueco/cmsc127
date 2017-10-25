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
			<span onclick="back()" ><h1><img src="images/LukeLogo.png" width="40px" style="float:left" /></h1>
			<h1>uke Foundation, Inc</h1></span>
		</div>
	</div>
	<div class="content">
		
		<div class="left-panel">
			<a href="index.php">&nbsp;&nbsp;<img src="images/home.png">&nbsp; Home</a>
			<a href="view_recs.php">&nbsp;&nbsp;<img src="images/folder.png">&nbsp; View Records</a>
			<a href="search.php">&nbsp;&nbsp;<img src="images/search.png">&nbsp; Search Records</a>
			<a href="add_rec.php">&nbsp;&nbsp;<img src="images/add.png">&nbsp; New Record</a>
			<a href="intake.php">&nbsp;&nbsp;<img src="images/file.png">&nbsp; New Intake Form</a>
		</div>
	
	
	
	
		<div class="right-panel">
			<center id="toRep">
				<h1>New Intake Form</h1>
				
				<form onsubmit="new_intake()" method="post">
					<table>
						<tr>
							<th colspan="2">Identifying Information</th>
							<th colspan="2">Educational Background</th>
						</tr>
						
						<tr>
							<td>First Name</td>
							<td><input type="text" name="fname"> </td>
							
							<td>Educational Background</td>
							<td><select name = "educBack" class = "box_size">
								<option value="None" selected="selected">None</option>
								<option value="Primary">Primary</option>
								<option value="Secondary">Secondary</option>
								<option value="Tertiary">Tertiary</option>
								<option value="Others" >Others</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Last Name</td>
							<td><input type="text" name="lname"></td>	
							
							<th colspan="2">Type of Cleft</th>				
						</tr>
						
						<tr>
							<td> Middle Initial </td>
							<td><input type="text" name="minitial"></td>
							
							<td>Cleft Lip</td>
							<td><select name = "cl_lip" class = "box_size">
								<option value="None" selected="selected">None</option>
								<option value="Incomplete Unilateral Right">Incomplete Unilateral Right</option>
								<option value="Incomplete Unilateral Left">Incomplete Unilateral Left</option>
								<option value="Complete Unilateral Right">Complete Unilateral Right</option>
								<option value="Complete Unilateral Left">Complete Unilateral Left</option>
								<option value="Complete Bilateral">Complete Bilateral</option>
								<option value="Incomplete Bilateral">Incomplete Bilateral</option>
								</select>
							</td>
							
							
						</tr>
						
						<tr>
							<td>Age</td>
							<td><input type="number" name="age"></td>	
							
							<td>Cleft Palate</td>
							<td><select name = "cl_palate" class = "box_size">
								<option value="None" selected="selected">None</option>
								<option value="Complete Unilateral Right">Complete Unilateral Right</option>
								<option value="Complete Unilateral Left">Complete Unilateral Left</option>
								<option value="Incomplete Unilateral Right">Incomplete Unilateral Right</option>
								<option value="Incomplete Unilateral Left">Incomplete Unilateral Left</option>
								<option value="Complete Bilateral">Complete Bilateral</option>
								<option value="Incomplete Bilateral">Incomplete Bilateral</option>
								<option value="Incomplete Bilateral">Submuccous</option>
								</select>
							</td>
						</tr>
						
						<tr>
							<td>Gender</td>
							<td>
								<input type="radio" name="gender" value="M" checked> Male<br>
								<input type="radio" name="gender" value="F"> Female<br>
							</td>
							
							<th colspan="2">Problems Presented</th>
						</tr>
						
						<tr>
							<td>CS</td>
							<td><input type="text" name="cs"></td>	
							
							
							<td colspan="2" rowspan = "5">
								<textarea class = "paragraph_size" name="prob_present" rows = "9"></textarea>
							</td>
						</tr>
						
						<tr>
							<td>Birthdate</td>
							<td>
								<select name = "birthmonth">
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									<option value="00" selected="selected">--------</option>
								</select>
								<select name = "birthday">
									<?php for ($i = 1; $i <= 31; $i++) : ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">--</option>
								</select>
								<select name = "birthyear">
									<?php for ($i = 1940; $i <= date("Y")+1; $i++) : ?>
										<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">----</option>
								</select>
							</td>	
						</tr>
						
						<tr>
							<td>Birthplace</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="birthplace" rows = "4"></textarea>
							</td>						
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Provincial Address</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="prov_address" rows = "4"></textarea>
							</td>		
							
							<th colspan="2">Historical Background</th>							
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Present Address</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="present_address" rows = "4"></textarea>
							</td>	
							
							<td colspan="2" rowspan = "6">
								<textarea class = "paragraph_size" name="hist_back" rows = "9"></textarea>
							</td>
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Religion</td>
							<td><input type="text" name="religion"></td>	
						</tr>
						
						<tr>
							<td>Occupation</td>
							<td><input type="text" name="occupation"></td>	
						</tr>
						
						
						<tr>
							<td>Monthly Income</td>
							<td><input type="number" name="monthly_income"></td>	
							
						</tr>
						
						<tr>
							<td>Contact Number</td>
							<td><input type="text" name="contact_number"></td>		
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
							<td><input type="number" name="num_occpuants"></td>	
							
							<td>Electric Bill</td>
							<td><input type="number" name="elec_exp"></td>	
						</tr>
						
						<tr>
							<td>Number of Floors</td>
							<td><input type="number" name="num_floors"></td>	
							
							<td>Fuel Expense</td>
							<td><input type="number" name="fuel_exp"></td>	
						</tr>
						
						<tr>
							<td>Number of Rooms</td>
							<td><input type="number" name="num_rooms"></td>	
							
							<td>Water Bill</td>
							<td><input type="number" name="water_exp"></td>	
						</tr>
						
						<tr>
							<td>House Status</td>
							<td>
								<select name = "house_stat" style = "width: 51.3%">
									<option value="Old" selected="selected">Old</option>
									<option value="New">New</option>
									<option value="Remodeled">Remodeled</option>
								</select>
							</td>
							
							<td>Educational Expense</td>
							<td><input type="number" name="educ_exp"></td>	
						</tr>
						
						<tr>
							<td>House Ownership</td>
							<td>
								<select name = "house_owner" style = "width: 51.3%">
									<option value="Owned" selected="selected">Owned</option>
									<option value="Rented">Rented</option>
									<option value="Shared">Shared</option>
									<option value="Caretaker">Caretaker</option>
								</select>
							</td>
							
							<td>Medical Expense</td>
							<td><input type="number" name="med_exp"></td>	
						</tr>
						
						<tr>
							<td>Toilet Type</td>
							<td>
								<select name = "toilet_type" style = "width: 51.3%">
									<option value="Flush" selected="selected">Flush</option>
									<option value="Water Sealed">Water Sealed</option>
									<option value="Open Pit">Open Pit</option>
								</select>
							</td>
							
							<td>Food Expense</td>
							<td><input type="number" name="food_exp"></td>	
						</tr>
						
						<tr>
							<td>Water Source</td>
							<td>
								<select name = "water_source" style = "width: 51.3%">
									<option value="Faucet" selected="selected">Faucet</option>
									<option value="Spring">Spring</option>
									<option value="Well">Well</option>
									<option value="Water Pump">Water Pump</option>
								</select>
							</td>
							
							<td>Rent Expense</td>
							<td><input type="number" name="rent_exp"></td>	
						</tr>
						
						<tr>
							<th colspan="2"><h4>3. Provider of Client's Needs</h4></th>
							
							<td>Transportation Expense</td>
							<td><input type="number" name="trans_exp"></td>	
						</tr>
						
						<tr>
							<td>Provider's Full Name</td>
							<td><input type="text" name="p_fullName"> </td>
							
							<td>Cloth Expense</td>
							<td><input type="number" name="cloth_exp"></td>	
						</tr>
					
						<tr>
							<td>Provider's Occupation</td>
							<td><input type="text" name="p_occupation"> </td>
							
							<td>Cellphone Load Expense</td>
							<td><input type="number" name="cLoad_exp"></td>	
						</tr>
						
						<tr>
							<td>Relationship To Patient</td>
							<td><input type="text" name="r_toPatient"> </td>
							
							<td>Other Expense</td>
							<td><input type="number" name="other_exp"></td>	
						</tr>
						
						<tr>
							<td>Provider's Monthly Income</td>
							<td><input type="number" name="p_monthInc"> </td>
							
							<th colspan="2"><h4>4. Other Services Recieved</h4></th>
						</tr>
						
						<tr>
							<td rowspan = "6">Need Provided to Patient</td>
							<td rowspan = "6">
								<input type="checkbox" name="needsProvided" value="Food">Food<br>
								<input type="checkbox" name="needsProvided" value="Education">Education<br>
								<input type="checkbox" name="needsProvided" value="Housing">Housing<br>
								<input type="checkbox" name="needsProvided" value="Medical Needs">Medical Needs<br>
								<input type="checkbox" name="needsProvided" value="Clothing">Clothing<br>
								<input type="checkbox" name="needsProvided" value="Others">Others<br>
							</td>
							
							<td>Name of Agency</td>
							<td><input type="text" name="agency_name"></td>	
						</tr>
						
					
						<tr>
							<td>NGO</td>
							<td><input type="text" name="ngo"> </td>
							
						</tr>
						<tr>
							<td>GO</td>
							<td><input type="text" name="go"> </td>
							
						</tr>	
						
						<tr>
							<td rowspan = "4">Services Provided</td>
							<td colspan="1" rowspan = "3">
								<textarea class = "paragraph_size" name="services_provided" rows = "4"></textarea>
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
								<input type="radio" name="incomeEval" value="Food" checked>Total family ncome is not enough to meet the daily basic needs(food, clothing, education, medical needs) of the family.<br>
								<input type="radio" name="incomeEval" value="Education">Total income is just enough to meet the daily basic needs of the family.<br>
								<input type="radio" name="incomeEval" value="Housing">Total family income is more than enough to meet the daily needs of the family.<br>
							</td>
						</tr>
						
						
						
						<tr>
							<th colspan="4"><center>6. Plan of Action</center></th>
						</tr>
						<tr>
							<td>Medical Consultatio Date</td>
							<td>
								<select name = "conMonth">
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									<option value="00" selected="selected">--------</option>
								</select>
								<select name = "conDay">
									<?php for ($i = 1; $i <= 31; $i++) : ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">--</option>
								</select>
								<select name = "conYear">
									<?php for ($i = 1940; $i <= date("Y")+1; $i++) : ?>
										<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">----</option>
								</select>
							</td>	
							
							<td>Medical Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="med_remarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>CP Clearance Date</td>
							<td>
								<select name = "cpMonth">
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									<option value="00" selected="selected">--------</option>
								</select>
								<select name = "cpDay">
									<?php for ($i = 1; $i <= 31; $i++) : ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">--</option>
								</select>
								<select name = "cpYear">
									<?php for ($i = 1940; $i <= date("Y")+1; $i++) : ?>
										<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">----</option>
								</select>
							</td>	
							
							<td>CP Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="cp_remarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Admission Date</td>
							<td>
								<select name = "admMonth">
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									<option value="00" selected="selected">--------</option>
								</select>
								<select name = "admDay">
									<?php for ($i = 1; $i <= 31; $i++) : ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">--</option>
								</select>
								<select name = "admYear">
									<?php for ($i = 1940; $i <= date("Y")+1; $i++) : ?>
										<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">----</option>
								</select>
							</td>	
							
							<td>Admission Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="adm_remarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Surgery Date</td>
							<td>
								<select name = "surgeMonth">
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									<option value="00" selected="selected">--------</option>
								</select>
								<select name = "surgeDay">
									<?php for ($i = 1; $i <= 31; $i++) : ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">--</option>
								</select>
								<select name = "surgeYear">
									<?php for ($i = 1940; $i <= date("Y")+1; $i++) : ?>
										<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">----</option>
								</select>
							</td>	
							
							<td>Surgery Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="surge_remarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Discharge Date</td>
							<td>
								<select name = "dsMonth">
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									<option value="00" selected="selected">--------</option>
								</select>
								<select name = "dsDay">
									<?php for ($i = 1; $i <= 31; $i++) : ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">--</option>
								</select>
								<select name = "dsYear">
									<?php for ($i = 1940; $i <= date("Y")+1; $i++) : ?>
										<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">----</option>
								</select>
							</td>	
							
							<td>Discharge Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="ds_remarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Follow-up Date</td>
							<td>
								<select name = "fMonth">
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									<option value="00" selected="selected">--------</option>
								</select>
								<select name = "fDay">
									<?php for ($i = 1; $i <= 31; $i++) : ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">--</option>
								</select>
								<select name = "fYear">
									<?php for ($i = 1940; $i <= date("Y")+1; $i++) : ?>
										<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">----</option>
								</select>
							</td>	
							
							<td>Follow-up Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="f_remarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Others Date</td>
							<td>
								<select name = "othMonth">
									<option value="01">January</option>
									<option value="02">February</option>
									<option value="03">March</option>
									<option value="04">April</option>
									<option value="05">May</option>
									<option value="06">June</option>
									<option value="07">July</option>
									<option value="08">August</option>
									<option value="09">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
									<option value="00" selected="selected">--------</option>
								</select>
								<select name = "othDay">
									<?php for ($i = 1; $i <= 31; $i++) : ?>
										<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">--</option>
								</select>
								<select name = "othYear">
									<?php for ($i = 1940; $i <= date("Y")+1; $i++) : ?>
										<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
										<?php endfor; ?>
									<option value="00" selected="selected">----</option>
								</select>
							</td>	
							
							<td>Others Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="oth_remarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<th colspan="4"><center>7. Worker's Assessment And Recommendations</center></th>
						</tr>
						<tr>
							<td colspan="4" rowspan = "8">
								<textarea class = "paragraph_size" name="w_AssRec" rows = "8"></textarea>
							</td>	
						</tr>
						
						<tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr><tr></tr>
						
						<tr>
							<td colspan="4" align="center"><input type="submit" value="Submit"></td>
						</tr>
					</table>
				</form>
		
			</center>
		</div>
	</div>
	

</body>

</html>