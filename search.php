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
		<center>
			<h1>Search Records</h1>
			<form action='search_result.php' action='post'>
			<table>
				<tr>
					<th colspan="3">Select filter</th>
				</tr>
				<tr>
					<td width="30%">By patient's last name</td>
					<td colspan="2"><input type='text' name="lname" placeholder='Enter last name'></td>
				</tr>
				<tr>
					<td>By patient's first name</td>
					<td colspan="2"><input type='text' name="fname" placeholder='Enter first name'></td>
				</tr>
				<tr>
					<td>By surgeon</td>
					<td colspan="2"><input type='text' name="surgeon" placeholder='Enter surgeon'></td>
				</tr>
				<tr>
					<td>By type of cleft lip </td>
					<td colspan = "2">
						<select name="clip">
  							<option value="Complete unilateral cleft lip - right">Complete unilateral cleft lip - right</option>
  							<option value="Complete unilateral cleft lip - left">Complete unilateral cleft lip - left</option>
  							<option value="Incomplete unilateral cleft lip - right">Incomplete unilateral cleft lip - right</option>
  							<option value="Incomplete unilateral cleft lip - left">Incomplete unilateral cleft lip - left</option>
							<option value="Complete bilateral cleft lip">Complete bilateral cleft lip</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>By type of cleft palate </td>
					<td colspan = "2">
						<select name="cpalate">
  							<option value="Complete unilateral cleft palate - right">Complete unilateral cleft palate - right</option>
  							<option value="Complete unilateral cleft palate - left">Complete unilateral cleft palate - left</option>
  							<option value="Incomplete unilateral cleft palate - right">Incomplete unilateral cleft palate - right</option>
  							<option value="Incomplete unilateral cleft palate - left">Incomplete unilateral cleft palate - left</option>
							<option value="Complete bilateral cleft palate">Complete bilateral cleft palate</option>
							<option value="Incomplete bilateral cleft palate">Incomplete bilateral cleft palate</option>
							<option value="Submucous cleft - right">Submucous cleft - right</option>
							<option value="Submucous cleft - left">Submucous cleft - left</option>
						</select>
					</td>	
				</tr>
				<tr>
					<td>By type of operation</td>
					<td colspan="2"><input type = 'text' name ="operation" placeholder = 'Enter type of operation'> </td>
				</tr>
				<tr>
					<td>By type of repair</td>
					<td colspan="2"><input type = 'text' name ="repair" placeholder = 'Enter type of repair'> </td>
				</tr>
				<tr>
					<td>By evaluation date</td>
					<td>From: <select name = "evalmonth1">
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
						<select name = "evalday1">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "evalyear1">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>
						<td>To: <select name = "evalmonth2">
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
						<select name = "evalday2">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "evalyear2">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>

				</tr>
				<tr>
					<td>By admission date</td>
					<td>From: <select name = "admonth1">
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
						<select name = "adday1">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "adyear1">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>
						<td>To: <select name = "admonth2">
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
						<select name = "adday2">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "adyear2">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>

				</tr>
				<tr>
					<td>By surgery date</td>
					<td>From: <select name = "surmonth1">
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
						<select name = "surday1">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "suryear1">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>
						<td>To: <select name = "surmonth2">
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
						<select name = "surday2">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "suryear2">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>

				</tr>
				<tr>
					<td>By discharge date</td>
					<td>From: <select name = "dismonth1">
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
						<select name = "disday1">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "disyear1">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>
						<td>To: <select name = "dismonth2">
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
						<select name = "disday2">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "disyear2">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>

				</tr>
				<tr>
					<td>By follow-up date</td>
					<td>From: <select name = "fupmonth1">
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
						<select name = "fupday1">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "fupyear1">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>
						<td>To: <select name = "fupmonth2">
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
						<select name = "fupday2">
			   	 				<?php for ($i = 1; $i <= 31; $i++) : ?>
			        			<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			    				<?php endfor; ?>
							<option value="00" selected="selected">--</option>
						</select>
						<select name = "fupyear2">
   	 						<?php for ($i = 1950; $i <= date("Y")+1; $i++) : ?>
        						<option value="<?php echo $i; ?>" ><?php echo $i; ?></option>
    							<?php endfor; ?>
							<option value="00" selected="selected">----</option>
						</select></td>

				</tr>
				<tr>
					<td colspan="3"><center><input type='submit' value='Search'></center></td>
				</tr>
			<table>
			</form>
			<br /> <br />
		</center>
		</div>
	</div>
</body>
</html>
