<html>
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script/add_rec.js" type="text/javascript"></script>
	<script src="script/backToIndex.js" type="text/javascript"></script>
	<link href="images/favi.png" type="image/png" rel="icon" />
</head>
<body>
	<div class="header">
		<div class="handle">
			<span onclick="back()"><h1><img src="images/LukeLogo.png" width="40px" style="float:left" /></h1>
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
			<h1>Add New Record</h1>
			<form onsubmit="add_rec()" method="post">
				<table>
					<tr>
						<th colspan="2">Patient Information</th>
						<th colspan="2">Dates</th>
					</tr>
					<tr>
						<td>First Name</td>
						<td><input type="text" name="fname"> </td>
						<td>Evaluation Date</td> 
						<td><select name = "evalmonth">
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
						<select name = "evalday">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "evalyear">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>
					</tr>
					<tr>
						<td>Last Name</td>
						<td><input type="text" name="lname"></td>
						<td>Admission Date</td>
						<td><select name = "admonth">
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
							<select name ="adday">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">--</option>
							</select>
							<select name = "adyear">
			   	 				<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
			        				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">----</option>
							</select></td>
					</tr>
					<tr>
						<td> Middle Initial </td>
						<td><input type="text" name="minitial"></td>
						<td>Surgery Date</td>
						<td><select name = "surmonth">
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
							<select name = "surday">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">--</option>
							</select>
							<select name = "suryear">
			   	 				<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
			        				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">----</option>
							</select></td>
					</tr>
					<tr>
						<td>Type of cleft lip</td>
						<td><select name="clip">
  							<option value="Complete unilateral cleft lip - right">Complete unilateral cleft lip - right</option>
  							<option value="Complete unilateral cleft lip - left">Complete unilateral cleft lip - left</option>
  							<option value="Incomplete unilateral cleft lip - right">Incomplete unilateral cleft lip - right</option>
  							<option value="Incomplete unilateral cleft lip - left">Incomplete unilateral cleft lip - left</option>
							<option value="Complete bilateral cleft lip">Complete bilateral cleft lip</option>
							</select>
						</td>
						<td>Discharge Date</td>
						<td><select name = "dismonth">
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
							<select name = "disday">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">--</option>
							</select>
							<select name = "disyear">
			   	 				<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
			        				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">----</option>
							</select></td>
					</tr>
					<tr>
						<td>Type of cleft palate</td>
						<td><select name="cpalate">
  							<option value="Complete unilateral cleft palate - right">Complete unilateral cleft palate - right</option>
  							<option value="Complete unilateral cleft palate - left">Complete unilateral cleft palate - left</option>
  							<option value="Incomplete unilateral cleft palate - right">Incomplete unilateral cleft palate - right</option>
  							<option value="Incomplete unilateral cleft palate - left">Incomplete unilateral cleft palate - left</option>
							<option value="Complete bilateral cleft palate">Complete bilateral cleft palate</option>
							<option value="Incomplete bilateral cleft palate">Incomplete bilateral cleft palate</option>
							<option value="Submucous cleft - right">Submucous cleft - right</option>
							<option value="Submucous cleft - left">Submucous cleft - left</option>
							</select></td>
						<td>Follow-up Date</td>
						<td><select name = "fupmonth">
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
							<select name = "fupday">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        				<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">--</option>
							</select>
							<select name = "fupyear">
			   	 				<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
			        				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">----</option>
							</select></td>
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
					<tr>
						<th colspan="4">Fees</th>
					</tr>
					<tr>
						<td>Hospital Bills</td>
						<td><input type="text" name="hbills"></td>
						<td>Laboratory Fees</td>
						<td><input type="text" name="lfees"></td>
					</tr>

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
