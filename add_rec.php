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
			<form >
				<h3> Patient Information </h3>
				First Name: <input type="text" name="fname"> <br/>
				Last Name: <input type="text" name="lname"> <br/>
				Type of cleft lip: <input type="text" name="clip"> <br/>
				Type of cleft palate: <input type="text" name="cpalate"> <br/>
				Type of Operation: <input type="text" name="operation"> <br/>
				Type of Repair: <input type="text" name="repair"> <br/>	
				Surgeon: <input type="text" name="surgeon"> <br/>
				<h3> Fees </h3>
				Hospital Bills <input type="text" name="hbills"> <br/>
				Laboratory Fees <input type="text" name="lfees"> <br/>
				<h3> Dates </h3>
				Evaluation Date: 
				<select>
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
				</select><br/>
				Admission Date:
				<select>
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
				</select><br/>
				Surgery Date: 
				<select>
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
				</select><br/>	
				Discharge Date:
				<select>
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
				</select><br/>
				Follow-up Date:
				<select>
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
				</select><br />
			<input type="submit" value="Submit">
		</form>
	</center>
</div>
</body>
</html>
