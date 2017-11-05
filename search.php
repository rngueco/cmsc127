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
			<?php include 'navigation.php' ?>
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
							<option value="None" selected="selected">None</option>
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
							<option value="None" selected="selected">None</option>
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
					<td>From: <input type='date' name='eval1' ></td>
						<td>To: <input type='date' name='eval2' ></td>

				</tr>
				<tr>
					<td>By admission date</td>
					<td>From: <input type='date' name='admi1' ></td>
						<td>To: <input type='date' name='admi2' ></td>

				</tr>
				<tr>
					<td>By surgery date</td>
					<td>From: <input type='date' name='sur1' ></td>
						<td>To: <input type='date' name='sur2' ></td>

				</tr>
				<tr>
					<td>By discharge date</td>
					<td>From: <input type='date' name='dis1' ></td>
						<td>To: <input type='date' name='dis2' ></td>

				</tr>
				<tr>
					<td>By follow-up date</td>
					<td>From: <input type='date' name='fup1' ></td>
						<td>To: <input type='date' name='fup2' ></td>

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