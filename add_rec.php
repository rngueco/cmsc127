​<html>
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="add_rec.js" type="text/javascript" ></script>
	<script src="backToIndex.js" type="text/javascript" ></script>
	<link href="images/LukeLogo.jpg" type="image/gif" rel="shortcut icon" />
</head>
<body>
	<div class="header">
		<div class="handle">
			<span onclick="back()" ><h1><img src="images/LukeLogo.jpg" width="40px" style="float:left" /></h1>
			<h1>uke Foundation, Inc</h1></span>
		</div>
	</div>
	<div class="content">
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
						</select></td>
						<select name = "evalyear">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select>
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
							</select></td>
							<select name = "adyear">
			   	 				<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
			        				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">----</option>
							</select>
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
							</select></td>
							<select name = "suryear">
			   	 				<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
			        				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">----</option>
							</select>

					<tr/>
						<td>Type of cleft lip</td>
						<td><input type="text" name="clip"></td>
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
							</select></td>
							<select name = "disyear">
			   	 				<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
			        				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">----</option>
							</select>
					</tr>
					<tr>
						<td>Type of cleft palate</td>
						<td><input type="text" name="cpalate"></td>
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
							</select></td>
							<select name = "fupyear">
			   	 				<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
			        				<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
			    					<?php endfor; ?>
								<option value="00" selected="selected">----</option>
							</select>
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
</body>
</html>
