<html>
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
			<?php 
				include 'link.php';
				$id = $_POST['pid'];
				$query = "SELECT * FROM surgery WHERE patient_id = $id";
				$query2 = "SELECT * FROM patient WHERE patient_id = $id";
				$result = mysqli_query($link, $query);
				$result2 = mysqli_query($link, $query2);
				$open = mysqli_fetch_array($result);
				$open2 = mysqli_fetch_array($result2);

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
					<td>".$open['Evaluation_Date']."</td>
				</tr>
				<tr>
					<td><b>Laboratory</b></td>
					<td>".$open['Lab_fee']."</td>
					<td><b>Admission Date</b></td>
					<td>".$open['Admission_Date']."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Surgery Date</b></td>
					<td>".$open['Surgery_Date']."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Discharge Date</b></td>
					<td>".$open['Discharge_Date']."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Follow-Up Date</b></td>
					<td>".$open['Follow_Up_Date']."</td>
				</tr>
			</table>"
			?>
	</center>
	</div>
</body>
</html>