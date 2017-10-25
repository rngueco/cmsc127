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
				$clip = $_REQUEST["clip"];
				$cpalate = $_REQUEST["cpalate"];
				$operation = $_REQUEST["operation"];
				$repair = $_REQUEST["repair"];
				$evalmonth1 = $_REQUEST["evalmonth1"];
				$evalday1 = $_REQUEST["evalday1"];
				$evalyear1 = $_REQUEST["evalyear1"];
				$evalmonth2 = $_REQUEST["evalmonth2"];
				$evalyear2 = $_REQUEST["evalyear2"];
				$evalday2 = $_REQUEST["evalday2"];
				$admonth1 = $_REQUEST["admonth1"];
				$adday1 = $_REQUEST["adday1"];
				$adyear1 = $_REQUEST["adyear1"];
				$admonth2 = $_REQUEST["admonth2"];
				$adyear2 = $_REQUEST["adyear2"];
				$adday2 = $_REQUEST["adday2"];
				$surmonth1 = $_REQUEST["surmonth1"];
				$surday1 = $_REQUEST["surday1"];
				$suryear1 = $_REQUEST["suryear1"];
				$surmonth2 = $_REQUEST["surmonth2"];
				$suryear2 = $_REQUEST["suryear2"];
				$surday2 = $_REQUEST["surday2"];
				$dismonth1 = $_REQUEST["dismonth1"];
				$disday1 = $_REQUEST["disday1"];
				$disyear1 = $_REQUEST["disyear1"];
				$dismonth2 = $_REQUEST["dismonth2"];
				$disyear2 = $_REQUEST["disyear2"];
				$disday2 = $_REQUEST["disday2"];
				$fupmonth1 = $_REQUEST["fupmonth1"];
				$fupday1 = $_REQUEST["fupday1"];
				$fupyear1 = $_REQUEST["fupyear1"];
				$fupmonth2 = $_REQUEST["fupmonth2"];
				$fupyear2 = $_REQUEST["fupyear2"];
				$fupday2 = $_REQUEST["fupday2"];


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
			    if($clip != ""){
			      $conditions[] = "clsurgery.cl_lip='$clip'";
 			    }
 			    if($cpalate != ""){
 			      $conditions[] = "clsurgery.cl_palate='$cpalate'";
 			    }
 			    if($operation != ""){
 			      $conditions[] = "clsurgery.operation='$operation'";
 			    }
 			    if($repair != ""){
 			      $conditions[] = "clsurgery.repair='$repair'";
 			    }
 			    if(($evalyear1==0 || $evalmonth1==0 || $evalday1==0) || ($evalyear2==0 || $evalmonth2==0 || $evalday2==0)){
				}
				else{
				$edate1 = $evalyear1."-".$evalmonth1."-".$evalday1;
				$edate2 = $evalyear2."-".$evalmonth2."-".$evalday2;
					$conditions[] = "clsurgery.evaluation_date between '$edate1' and '$edate2';";
				}
				if(($adyear1==0 || $admonth1==0 || $adday1==0) || ($adyear2==0 || $admonth2==0 || $adday2==0)){
				}
				else{
				$edate1 = $adyear1."-".$admonth1."-".$adday1;
				$edate2 = $adyear2."-".$admonth2."-".$adday2;
					$conditions[] = "clsurgery.admission_date between '$edate1' and '$edate2';";
				}
				if(($suryear1==0 || $surmonth1==0 || $surday1==0) || ($suryear2==0 || $surmonth2==0 || $surday2==0)){
				}
				else{
				$edate1 = $suryear1."-".$surmonth1."-".$surday1;
				$edate2 = $suryear2."-".$surmonth2."-".$surday2;
				$conditions[] = "clsurgery.surgery_date between '$edate1' and '$edate2';";
				}
				if(($disyear1==0 || $dismonth1==0 || $disday1==0) || ($disyear2==0 || $dismonth2==0 || $disday2==0)){
				}
				else{
				$edate1 = $disyear1."-".$dismonth1."-".$disday1;
				$edate2 = $disyear2."-".$dismonth2."-".$disday2;
				$conditions[] = "clsurgery.discharge_date between '$edate1' and '$edate2';";
				}
				if(($fupyear1==0 || $fupmonth1==0 || $fupday1==0) || ($fupyear2==0 || $fupmonth2==0 || $fupday2==0)){
				}
				else{
				$edate1 = $fupyear1."-".$fupmonth1."-".$fupday1;
				$edate2 = $fupyear2."-".$fupmonth2."-".$fupday2;
				$conditions[] = "clsurgery.follow_up_date between '$edate1' and '$edate2';";
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
