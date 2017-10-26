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
			<a href="index.php">&nbsp;&nbsp;<img src="images/home.png">&nbsp; Home</a>
			<a href="view_recs.php">&nbsp;&nbsp;<img src="images/folder.png">&nbsp; View Records</a>
			<a href="search.php">&nbsp;&nbsp;<img src="images/search.png">&nbsp; Search Records</a>
			<a href="add_rec.php">&nbsp;&nbsp;<img src="images/add.png">&nbsp; New Record</a>
			<a href="intake.php">&nbsp;&nbsp;<img src="images/file.png">&nbsp; New Intake Form</a>
		</div>
		<div class="right-panel">
		<center>
			<form action='update_info.php' method='post'>
			<?php 
				include 'link.php';
				$id = $_POST['pid'];
				$query = "SELECT * FROM clsurgery WHERE patient_id = $id";
				$query2 = "SELECT * FROM patient WHERE patient_id = $id";
				$result = mysqli_query($link, $query);
				$result2 = mysqli_query($link, $query2);
				$open = mysqli_fetch_array($result);
				$open2 = mysqli_fetch_array($result2);
			?>
				<h1>Edit Surgery Information for <?=$open2['patient_fname']?> <?=$open2['patient_lname']?></h1>
				<input type='submit' value='Save details' id='save'><input type='hidden' name='pid' value='<?=$id ?>'>
				<table>
				<tr>
					<th colspan='2'>Details</th>
				</tr>
				<tr>
					<td><b>Type of cleft lip</b></td>
					<td><select name='clip'>
  							<option value='Complete unilateral cleft lip - right' <?php if($open['Cl_Lip']=='Complete unilateral cleft lip - right') echo"selected='selected'"; ?>>Complete unilateral cleft lip - right</option>
  							<option value='Complete unilateral cleft lip - left' <?php if($open['Cl_Lip']=='Complete unilateral cleft lip - left') echo"selected='selected'"; ?> >Complete unilateral cleft lip - left</option>
  							<option value='Incomplete unilateral cleft lip - right' <?php if($open['Cl_Lip']=='Incomplete unilateral cleft lip - right') echo"selected='selected'"; ?> >Incomplete unilateral cleft lip - right</option>
  							<option value='Incomplete unilateral cleft lip - left' <?php if($open['Cl_Lip']=='Incomplete unilateral cleft lip - left') echo"selected='selected'"; ?> >Incomplete unilateral cleft lip - left</option>
							<option value='Complete bilateral cleft lip' <?php if($open['Cl_Lip']=='Complete bilateral cleft lip') echo"selected='selected'"; ?> >Complete bilateral cleft lip</option>
						</select></td>
				</tr>
				<tr>
					<td><b>Type of cleft palate</b></td>
					<td><select name="cpalate">
  							<option value="Complete unilateral cleft palate - right" <?php if($open['Cl_Palate']=='Complete unilateral cleft palate - right') echo"selected='selected'"; ?> >Complete unilateral cleft palate - right</option>
  							<option value="Complete unilateral cleft palate - left" <?php if($open['Cl_Palate']=='Complete unilateral cleft palate - left') echo"selected='selected'"; ?> >Complete unilateral cleft palate - left</option>
  							<option value="Incomplete unilateral cleft palate - right" <?php if($open['Cl_Palate']=='Incomplete unilateral cleft palate - right') echo"selected='selected'"; ?> >Incomplete unilateral cleft palate - right</option>
  							<option value="Incomplete unilateral cleft palate - left" <?php if($open['Cl_Palate']=='Incomplete unilateral cleft palate - left') echo"selected='selected'"; ?> >Incomplete unilateral cleft palate - left</option>
							<option value="Complete bilateral cleft palate" <?php if($open['Cl_Palate']=='Complete bilateral cleft palate') echo"selected='selected'"; ?> >Complete bilateral cleft palate</option>
							<option value="Incomplete bilateral cleft palate" <?php if($open['Cl_Palate']=='Incomplete bilateral cleft palate') echo"selected='selected'"; ?> >Incomplete bilateral cleft palate</option>
							<option value="Submucous cleft - right" <?php if($open['Cl_Palate']=='Submucous cleft - right') echo"selected='selected'"; ?> >Submucous cleft - right</option>
							<option value="Submucous cleft - left" <?php if($open['Cl_Palate']=='Submucous cleft - left') echo"selected='selected'"; ?> >Submucous cleft - left</option>
						</select></td>
				</tr>
				<tr>
					<td><b>Type of operation</b></td>
					<td><input type='text' name='operation' value='<?= $open['Operation']?>'></td>
				</tr>
				<tr>
					<td><b>Type of repair</b></td>
					<td><input type='text' name='repair' value='<?=$open['Repair']?>'></td>
				</tr>
				<tr>
					<td><b>Surgeons</b></td>
					<td><input type='text' name='surgeon' value='<?=$open['Surgeon']?>'></td>
				</tr>
			</table>
			<br />
			<table>
				<tr>
					<th colspan='2'>Fees</th>
					<th colspan='2'>Dates</th>
				</tr>
				<tr>
					<td><b>Hospital</b></td>
					<td><input type='number' step='any' name='hospital' value='<?=$open['Hospital_Bill']?>'></td>
					<td><b>Evaluation Date</b></td>
					<td><input type='date' name='eval' value='<?=$open['Evaluation_Date']?>'></td>
				</tr>
				<tr>
					<td><b>Laboratory</b></td>
					<td><input type='number' step='any' name='lab' value='<?=$open['Lab_fee']?>'></td>
					<td><b>Admission Date</b></td>
					<td><input type='date' name='admission' value='<?=$open['Admission_Date']?>'></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Surgery Date</b></td>
					<td><input type='date' name='surgery' value='<?=$open['Surgery_Date']?>'></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Discharge Date</b></td>
					<td><input type='date' name='discharge' value='<?=$open['Discharge_Date']?>'></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Follow-Up Date</b></td>
					<td><input type='date' name='follow' value='<?=$open['Follow_Up_Date']?>'></td>
				</tr>
			</table>
			</form>
		</center>
		&nbsp;<br />&nbsp;
		</div>
	</div>
</body>
</html>