<html>
<!--- INDEX (MAIN VIEW) DEFAULT CONTENT: SUMMARY OF RECORDS -->
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
			<h1>Search Results</h1>
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
				$lname = $_POST["lname"];
				$fname = $_POST["fname"];
				$surgeon = $_POST["surgeon"];

				$query = "SELECT patient.patient_id, patient.patient_fname, patient.patient_lname, surgery.Operation, surgery.Repair, surgery.Surgeon 
				FROM patient RIGHT JOIN surgery ON patient.patient_id = surgery.patient_id";
    			
    			$conditions = array();

    			if($lname != "Enter last name") {
      			$conditions[] = "patient.patient_lname='$lname'";
			    }
			    if($fname != "Enter first name") {
			      $conditions[] = "patient.patient_fname='$fname'";
			    }
			    if($surgeon != "Enter surgeon") {
			      $conditions[] = "surgery.surgeon='$surgeon'";
			    }

			    $sql = $query;
			    if (count($conditions) > 0) {
			      $sql .= " WHERE " . implode(' AND ', $conditions);
			    }

			    $result = mysqli_query($link, $sql);

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