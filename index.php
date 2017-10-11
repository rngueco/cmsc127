<html>
<!--- INDEX (MAIN VIEW) DEFAULT CONTENT: SUMMARY OF RECORDS -->
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="backToIndex.js" type="text/javascript" ></script>
</head>
<body>
	<div class="header">
		<div class="handle">
			<h1><img src="images/LukeLogo.jpg" width="40px" style="float:left" onclick="back()" /></h1>
			<h1>Luke Foundation, Inc</h1>
		</div>
	</div>
	<div class="content">
		<center>
			<h1>Surgery Records</h1>
			<a href="add_rec.php" id="addrec"><img src="images/add.png">&nbsp; Add a new record</a>
			&nbsp; &nbsp; &nbsp; &nbsp;<a href="search.php" id="addrec"><img src="images/search.png">&nbsp; Search records</a>
			&nbsp; &nbsp; &nbsp; &nbsp;<a href="intake.php" id="addrec"><img src="images/file.png" id='file'>&nbsp; Pull up a new intake form</a><br />
			<table cellspacing="2px" valign="middle">
				<tr id="h">
					<th>Last name</th>
					<th>First Name</th>
					<th>Type of Operation</th>
					<th>Type of Repair</th>
					<th>Surgeon</th>
					<th>Action</th>
				</tr>
			<?php
				include 'link.php';
				$query = "SELECT patient.patient_id, patient.patient_fname, patient.patient_lname, surgery.Operation, surgery.Repair, surgery.Surgeon FROM patient RIGHT JOIN surgery ON patient.patient_id = surgery.patient_id ORDER BY patient.patient_lname";
				$result = mysqli_query($link, $query);

				while($open = mysqli_fetch_array($result)){
					$fname = $open['patient_fname'];
					$lname = $open['patient_lname'];
					$operation = $open['Operation'];
					$repair = $open['Repair'];
					$surgeon = $open['Surgeon'];
					$id = $open['patient_id'];

					echo "
					<tr>
						<td>".$lname."</td>
						<td>".$fname."</td>
						<td>".$operation."</td>
						<td>".$repair."</td>
						<td>".$surgeon."</td>
						<td>
							<form action='edit_info.php' method='post'>
								<input type='hidden' name='pid' value='".$id."'>
								<input type='submit' value='Edit info' id='edit'>
							</form>
							<form action='summary.php' method='post'>
								<input type='hidden' name='pid' value='".$id."'>
								<input type='submit' value='View full summary' id='summary'>
							</form>
						</td>
					</tr>
					";
				}
				mysqli_free_result($result);
			?>
			</table>
		</center>
	</div>
</body>
</html>
