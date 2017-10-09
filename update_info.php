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
				$clip = $_POST['clip'];
				$cpalate = $_POST['cpalate'];
				$operation = $_POST['operation'];
				$repair = $_POST['repair'];
				$surgeon = $_POST['surgeon'];
				$hospital = $_POST['hospital'];
				$lab = $_POST['lab'];
				$surgery = $_POST['surgery'];
				$eval = $_POST['eval'];
				$admission = $_POST['admission'];
				$discharge = $_POST['discharge'];
				$follow = $_POST['follow'];

				$query = "UPDATE surgery SET Cl_Lip = '$clip', Cl_Palate = '$cpalate', Operation = '$operation', 
				Repair = '$repair', Surgeon = '$surgeon', Hospital_Bill = '$hospital', Lab_fee = '$lab', Evaluation_Date = '$eval', 
				Admission_Date = '$admission', Surgery_Date = '$surgery', Discharge_Date = '$discharge', Follow_Up_Date = '$follow' WHERE patient_id = $id";
				$result = mysqli_query($link, $query);

				$query2 = "SELECT * FROM surgery WHERE patient_id = $id";
				$query3 = "SELECT * FROM patient WHERE patient_id = $id";
				$result2 = mysqli_query($link, $query2);
				$result3 = mysqli_query($link, $query3);
				$open2 = mysqli_fetch_array($result2);
				$open3 = mysqli_fetch_array($result3);

				echo "
				<h1>".$open3['patient_fname']." ".$open3['patient_lname']."</h1>
				<table>
				<tr>
					<th colspan='2'>Details</th>
				</tr>
				<tr>
					<td><b>Type of cleft lip</b></td>
					<td>".$open2['Cl_Lip']."</td>
				</tr>
				<tr>
					<td><b>Type of cleft palate</b></td>
					<td>".$open2['Cl_Palate']."</td>
				</tr>
				<tr>
					<td><b>Type of operation</b></td>
					<td>".$open2['Operation']."</td>
				</tr>
				<tr>
					<td><b>Type of repair</b></td>
					<td>".$open2['Repair']."</td>
				</tr>
				<tr>
					<td><b>Surgeons</b></td>
					<td>".$open2['Surgeon']."</td>
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
					<td>".$open2['Hospital_Bill']."</td>
					<td><b>Evaluation Date</b></td>
					<td>".$open2['Evaluation_Date']."</td>
				</tr>
				<tr>
					<td><b>Laboratory</b></td>
					<td>".$open2['Lab_fee']."</td>
					<td><b>Admission Date</b></td>
					<td>".$open2['Admission_Date']."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Surgery Date</b></td>
					<td>".$open2['Surgery_Date']."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Discharge Date</b></td>
					<td>".$open2['Discharge_Date']."</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Follow-Up Date</b></td>
					<td>".$open2['Follow_Up_Date']."</td>
				</tr>
			</table>";
			?>
		</center>
	</div>
</body>
</html>