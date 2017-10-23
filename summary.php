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
			<?php 
				include 'link.php';
				$id = $_POST['pid'];
				$query = "SELECT * FROM clsurgery WHERE patient_id = $id";
				$query2 = "SELECT * FROM patient WHERE patient_id = $id";
				$result = mysqli_query($link, $query);
				$result2 = mysqli_query($link, $query2);
				$open = mysqli_fetch_array($result);
				$open2 = mysqli_fetch_array($result2);
				if($open['Evaluation_Date']=='0000-00-00'){
					$eDate = "N/A";
				}else{
					$eDate = $open['Evaluation_Date'];
				}
				if($open['Admission_Date']=='0000-00-00'){
					$aDate = "N/A";
				}else{
					$aDate = $open['Admission_Date'];
				}
				if($open['Surgery_Date']=='0000-00-00'){
					$sDate = "N/A";
				}else{
					$sDate = $open['Surgery_Date'];
				}
				if($open['Discharge_Date']=='0000-00-00'){
					$dDate = "N/A";
				}else{
					$dDate = $open['Discharge_Date'];
				}
				if($open['Follow_Up_Date']=='0000-00-00'){
					$fDate = "N/A";
				}else{
					$fDate = $open['Follow_Up_Date'];
				}

				echo "
				<h1>".$open2['patient_fname']." ".$open2['patient_lname']."</h1>
				<table>
				<tr>
					<th colspan='2'>Details</th>
				</tr>
				<tr>
					<td><b>Type of cleft lip</b></td>
					<td>".$open['Cl_Lip']."</td>
				</tr>
				<tr>
					<td><b>Type of cleft palate</b></td>
					<td>".$open['Cl_Palate']."</td>
				</tr>
				<tr>
					<td><b>Type of operation</b></td>
					<td>".$open['Operation']."</td>
				</tr>
				<tr>
					<td><b>Type of repair</b></td>
					<td>".$open['Repair']."</td>
				</tr>
				<tr>
					<td><b>Surgeons</b></td>
					<td>".$open['Surgeon']."</td>
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
					<td>".$open['Hospital_Bill']."</td>
					<td><b>Evaluation Date</b></td>
					<td>".$eDate."</td>
				</tr>
				<tr>
					<td><b>Laboratory</b></td>
					<td>".$open['Lab_fee']."</td>
					<td><b>Admission Date</b></td>
					<td>".$aDate."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Surgery Date</b></td>
					<td>".$sDate."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Discharge Date</b></td>
					<td>".$dDate."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Follow-Up Date</b></td>
					<td>".$fDate."</td>
				</tr>
			</table>
			<br/>
			<form action='remove.php' action='post' style='margin-left:10%'>
				<input type='hidden' name='PID' value='".$open['patient_id']."'><br />
				<input type='submit' value='Delete Record'>
			</form>
		</center>"
		?>
		&nbsp;<br />&nbsp;
		</div>
	</div>
</body>
</html>
