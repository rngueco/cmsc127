<html>

<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script/backToIndex.js" type="text/javascript" ></script>
	<script src="script/new_intake.js" type="text/javascript"></script>
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
							<td><select name = "educBackground" class = "box_size">
								<option value="No Schooling Attended" selected="selected">No Schooling Attended</option>
								<option value="Elementary">Elementary</option>
								<option value="High School">High School</option>
								<option value="College Undergraduate">College Undergraduate</option>
								<option value="College Graduate" >College Graduate</option>
								<option value="Vocational" >Vocational</option>
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
							<td><select name = "cLip" class = "box_size">
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
							<td><select name = "cPalate" class = "box_size">
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
								<input type="radio" name="gender" value="m" checked> Male<br>
								<input type="radio" name="gender" value="f"> Female<br>
							</td>
							
							<th colspan="2">Problems Presented</th>
							
							
						</tr>
						
						<tr>
							<td>CS</td>
							<td><input type="text" name="cs"></td>	
							
							
							<td colspan="2" rowspan = "5">
								<textarea class = "paragraph_size" name="probPresent" rows = "9"></textarea>
							</td>
						</tr>
						
						<tr>
							<td>Birthdate</td>
							<td><input type="date" name="birthDate"></td>	
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
								<textarea class = "paragraph_size" name="provAddress" rows = "4"></textarea>
							</td>		
							
							<th colspan="2">Historical Background</th>							
						</tr>
						
						<tr></tr>
						<tr></tr>
						<tr></tr>
						
						<tr>
							<td>Present Address</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="presentAddress" rows = "4"></textarea>
							</td>	
							
							<td colspan="2" rowspan = "6">
								<textarea class = "paragraph_size" name="histBack" rows = "9"></textarea>
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
							<td><input type="number" name="monthlyIncome" step = ".01"></td>	
							
						</tr>
						
						<tr>
							<td>Contact Number</td>
							<td><input type="text" name="contactNumber"></td>		
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
							<td><input type="number" name="numOccupants"></td>	
							
							<td>Electric Bill</td>
							<td><input type="number" name="elecExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>Number of Floors</td>
							<td><input type="number" name="numFloors"></td>	
							
							<td>Fuel Expense</td>
							<td><input type="number" name="fuelExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>Number of Rooms</td>
							<td><input type="number" name="numRooms"></td>	
							
							<td>Water Bill</td>
							<td><input type="number" name="waterExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>House Status</td>
							<td>
								<select name = "houseStat" style = "width: 55%">
									<option value="Old" selected="selected">Old</option>
									<option value="New">New</option>
									<option value="Remodeled">Remodeled</option>
								</select>
							</td>
							
							<td>Educational Expense</td>
							<td><input type="number" name="educExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>House Ownership</td>
							<td>
								<select name = "houseOwn" style = "width: 55%">
									<option value="Owned" selected="selected">Owned</option>
									<option value="Rented">Rented</option>
									<option value="Shared">Shared</option>
									<option value="Caretaker">Caretaker</option>
								</select>
							</td>
							
							<td>Medical Expense</td>
							<td><input type="number" name="medExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>Toilet Type</td>
							<td>
								<select name = "toiletType" style = "width: 55%">
									<option value="Flush" selected="selected">Flush</option>
									<option value="Water Sealed">Water Sealed</option>
									<option value="Open Pit">Open Pit</option>
								</select>
							</td>
							
							<td>Food Expense</td>
							<td><input type="number" name="foodExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>Water Source</td>
							<td>
								<select name = "waterSource" style = "width: 55%">
									<option value="Faucet" selected="selected">Faucet</option>
									<option value="Spring">Spring</option>
									<option value="Well">Well</option>
									<option value="Water Pump">Water Pump</option>
								</select>
							</td>
							
							<td>Rent Expense</td>
							<td><input type="number" name="rentExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<th colspan="2"><h4>3. Provider of Client's Needs</h4></th>
							
							<td>Transportation Expense</td>
							<td><input type="number" name="transExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>Provider's Full Name</td>
							<td><input type="text" name="pFullName"> </td>
							
							<td>Cloth Expense</td>
							<td><input type="number" name="clothExp" step = ".01"></td>	
						</tr>
					
						<tr>
							<td>Provider's Occupation</td>
							<td><input type="text" name="pOccupation"> </td>
							
							<td>Cellphone Load Expense</td>
							<td><input type="number" name="cLoadExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>Relationship To Patient</td>
							<td><input type="text" name="rToPatient"> </td>
							
							<td>Other Expense</td>
							<td><input type="number" name="otherExp" step = ".01"></td>	
						</tr>
						
						<tr>
							<td>Provider's Monthly Income</td>
							<td><input type="number" name="pMonthInc" step = ".01"> </td>
							
							
						</tr>
						
						<tr>
							<td rowspan = "6">Needs Provided to Patient</td>
							<td rowspan = "6">
								<input type="checkbox" name="needsProvided" value="Food">Food<br>
								<input type="checkbox" name="needsProvided" value="Education">Education<br>
								<input type="checkbox" name="needsProvided" value="Housing">Housing<br>
								<input type="checkbox" name="needsProvided" value="Medical Needs">Medical Needs<br>
								<input type="checkbox" name="needsProvided" value="Clothing">Clothing<br>
								<input type="checkbox" name="needsProvided" value="Others">Others<br>
							</td>
							
							<td>Name of Agency</td>
							<td><input type="text" name="agencyName"></td>	
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
								<textarea class = "paragraph_size" name="servicesProvided" rows = "4"></textarea>
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
								<input type="radio" name="incomeEval" value="Total family income is not enough to meet the daily basic needs(food, clothing, education, medical needs) of the family." checked>Total family income is not enough to meet the daily basic needs(food, clothing, education, medical needs) of the family.<br>
								<input type="radio" name="incomeEval" value="Total income is just enough to meet the daily basic needs of the family.">Total income is just enough to meet the daily basic needs of the family.<br>
								<input type="radio" name="incomeEval" value="Total family income is more than enough to meet the daily needs of the family.">Total family income is more than enough to meet the daily needs of the family.<br>
							</td>
						</tr>
						
						<tr>
							<th colspan="4"><center>6. Plan of Action</center></th>
						</tr>
						
						<tr>
							<td>Medical Consultation Date</td>
							<td>
								<input type="date" name="medDate">
							</td>	
							
							<td>Medical Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="medRemarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>CP Clearance Date</td>
							<td>
								<input type="date" name="cpDate">	
							</td>	
							
							<td>CP Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="cpRemarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Admission Date</td>
							<td>
								<input type="date" name="admDate">
							</td>	
							
							<td>Admission Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="admRemarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Surgery Date</td>
							<td>
								<input type="date" name="surgeDate">
							</td>	
							
							<td>Surgery Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="surgeRemarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Discharge Date</td>
							<td>
								<input type="date" name="dsDate">
							</td>	
							
							<td>Discharge Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="dsRemarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Follow-up Date</td>
							<td>
								<input type="date" name="fDate">
							</td>	
							
							<td>Follow-up Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="fRemarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<td>Others Date</td>
							<td>
								<input type="date" name="othDate">
							</td>	
							
							<td>Others Remarks</td>
							<td colspan="1" rowspan = "2">
								<textarea class = "paragraph_size" name="othRemarks" rows = "4"></textarea>
							</td>				
						</tr>
						
						<tr></tr>
						
						<tr>
							<th colspan="4"><center>7. Worker's Assessment And Recommendations</center></th>
						</tr>
						<tr>
							<td colspan="4" rowspan = "8">
								<textarea class = "paragraph_size" name="wARec" rows = "8"></textarea>
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
