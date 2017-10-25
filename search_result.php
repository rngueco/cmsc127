<html>
<!--- INDEX (MAIN VIEW) DEFAULT CONTENT: SUMMARY OF RECORDS -->
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
				$lname = $_REQUEST["lname"];
				$fname = $_REQUEST["fname"];
				$surgeon = $_REQUEST["surgeon"];

				$query = "SELECT patient.patient_id, patient.patient_fname, patient.patient_lname, clsurgery.Operation, clsurgery.Repair, clsurgery.Surgeon 
				FROM patient RIGHT JOIN clsurgery ON patient.patient_id = clsurgery.patient_id";
    			
    			$conditions = array();

    			if($lname != "") {
      			$conditions[] = "patient.patient_lname='$lname'";
			    }
			    if($fname != "") {
			      $conditions[] = "patient.patient_fname='$fname'";
			    }
			    if($surgeon != "") {
			      $conditions[] = "clsurgery.surgeon='$surgeon'";
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
	</div>
</body>
</html>
