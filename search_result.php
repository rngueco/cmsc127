<html>
<!--- INDEX (MAIN VIEW) DEFAULT CONTENT: SUMMARY OF RECORDS -->
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script/backToIndex.js" type="text/javascript" ></script>
	<link href="images/favi.png" type="image/png" rel="icon" />
</head>

<?php
				include 'link.php';
				$lname = $_REQUEST["lname"];
				$fname = $_REQUEST["fname"];
				$surgeon = $_REQUEST["surgeon"];
				$clip = $_REQUEST["clip"];
				$cpalate = $_REQUEST["cpalate"];
				$operation = $_REQUEST["operation"];
				$repair = $_REQUEST["repair"];
				
				$eval1 = $_REQUEST["eval1"];
				$eval2 = $_REQUEST["eval2"];
				$admi1 = $_REQUEST["admi1"];
				$admi2 = $_REQUEST["admi2"];
				$sur1 = $_REQUEST["sur1"];
				$sur2 = $_REQUEST["sur2"];
				$dis1 = $_REQUEST["dis1"];
				$dis2 = $_REQUEST["dis2"];
				$fup1 = $_REQUEST["fup1"];
				$fup2 = $_REQUEST["fup2"];
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
			    if($clip != "None"){
			      $conditions[] = "clsurgery.cl_lip='$clip'";
 			    }
 			    if($cpalate != "None"){
 			      $conditions[] = "clsurgery.cl_palate='$cpalate'";
 			    }
 			    if($operation != ""){
 			      $conditions[] = "clsurgery.operation='$operation'";
 			    }
 			    if($repair != ""){
 			      $conditions[] = "clsurgery.repair='$repair'";
 			    }
 			    if($eval1){
					$conditions[] = "'$eval1'<=clsurgery.evaluation_date";
				}
				if($eval2){
					$conditions[] = "'$eval2'>=clsurgery.evaluation_date";
				}
				if($admi1){
					$conditions[] = "'$admi1'<=clsurgery.admission_date";
				}
				if($admi2){
					$conditions[] = "'$admi2'>=clsurgery.admission_date";
				}
				if($sur1){
					$conditions[] = "'$sur1'<=clsurgery.surgery_date";
				}
				if($sur2){
					$conditions[] = "'$sur2'>=clsurgery.surgery_date";
				}
				if($dis1){
					$conditions[] = "'$dis1'<=clsurgery.discharge_date";
				}
				if($dis2){
					$conditions[] = "'$dis2'>=clsurgery.discharge_date";
				}
				if($fup1){
					$conditions[] = "'$fup1'<=clsurgery.follow_up_date";
				}
				if($fup2){
					$conditions[] = "'$fup2'>=clsurgery.follow_up_date";
				}
				
			    $sql = $query;
			    if (count($conditions) > 0) {
			      $sql .= " WHERE " . implode(' AND ', $conditions);
			    }
			    $result = mysqli_query($link, $sql);
				$length = mysqli_num_rows($result);
?>

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
			<?php include 'navigation.php' ?>
		</div>
		<div class="right-panel">
		<center>
			<h1><?=$length?> Search Results</h1>
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
                       			<span title='Edit this record'>
                          			<input type='image' src='images/edit.png' width='17px' height='17px' />
                        		</span>
                      		</form>&nbsp;&nbsp;
                     	 	<form action='summary.php' method='post'>
		                        <input type='hidden' name='pid' value='".$id."'>
		                        <span title='View full summary'>
		                          <input type='image' src='images/view.png' width='17px' height='17px' />
		                        </span>
		                    </form>
		                    <form action='remove.php' action='post' style='margin-left:10%' onsubmit='return confirm(\"Are you sure you want to delete this record?\");'>
		                        <input type='hidden' name='PID' value='".$id."'>
		                        <span title='Delete this record'>
		                          <input type='image' src='images/delete.png' width='17px' height='17px' />
		                       	</span>
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