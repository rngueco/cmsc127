​<html>
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="header">
		<div class="handle">
			<h1>Luke Foundation, Inc</h1>
		</div>
	</div>
	<div class="content">
		<center>
			<h1>Add New Record</h1>
			<form action="" method="post">
				<table>
					<tr>
						<th colspan="2">Patient Information</th>
					</tr>
					<tr>
						<td>First Name</td>
						<td><input type="text" name="fname"> </td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><input type="text" name="lname"></td>
					</tr>
					<tr>
						<td>Type of cleft lip</td>
						<td><input type="text" name="clip"></td>
					</tr>
					<tr>
						<td>Type of cleft palate</td>
						<td><input type="text" name="cpalate"></td>
					</tr>
					<tr>
						<td>Type of Operation</td>
						<td><input type="text" name="operation"></td>
					</tr>
					<tr>
						<td>Type of Repair</td> 
						<td><input type="text" name="repair"></td>
					</tr>
					<tr>
						<td>Surgeon</td>
						<td><input type="text" name="surgeon"></td>
					</tr>
				</table><br />
				<table>
					<tr>
						<th colspan="2">Fees</th>
					</tr>
					<tr>
						<td>Hospital Bills</td>
						<td><input type="text" name="hbills"></td>
					</tr>
					<tr>
						<td>Laboratory Fees</td>
						<td><input type="text" name="lfees"></td>
					</tr>
				</table><br />
				<table>
					<tr>
						<th colspan="2">Dates</th>
					</tr>
					<tr>
						<td>Evaluation Date</td> 
						<td><select>
   	 						<?php for ($i = 1950; $i <= 2055; $i++) : ?>
        						<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    							<?php endfor; ?>
							</select>
				<select>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
				<select>
   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
							</select></td>
					</tr>
					<tr>
						<td>Admission Date</td>
						<td><select>
   	 				<?php for ($i = 1950; $i <= 2055; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
				</select>
				<select>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
				<select>
   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
							</select></td>
					</tr>
					<tr>
						<td>Surgery Date</td>
						<td><select>
   	 				<?php for ($i = 1950; $i <= 2055; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
				</select>
				<select>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
				<select>
   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
							</select></td>
						</tr>
					<tr>
						<td>Discharge Date</td>
						<td><select>
   	 				<?php for ($i = 1950; $i <= 2055; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
				</select>
				<select>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
				<select>
   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
							</select></td>
					</tr>
					<tr>
						<td>Follow-up Date</tr>
						<td><select>
   	 				<?php for ($i = 1950; $i <= 2055; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
				</select>
				<select>
					<option value="January">January</option>
					<option value="February">February</option>
					<option value="March">March</option>
					<option value="April">April</option>
					<option value="May">May</option>
					<option value="June">June</option>
					<option value="July">July</option>
					<option value="August">August</option>
					<option value="September">September</option>
					<option value="October">October</option>
					<option value="November">November</option>
					<option value="December">December</option>
				</select>
				<select>
   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
    				<?php endfor; ?>
							</select></td>
					</tr>
					<tr>
						<td colspan="2"><input type="submit" value="Submit"></td>
				</tr>
				</table>
		</form>
	</center>
</div>
</body>
</html>
