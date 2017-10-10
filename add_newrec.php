<html>
<body>
<?php
if($_POST){
	include 'link.php';
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$minitial = $_POST["minitial"];
	$query = "INSERT INTO PATIENT (patient_fname, patient_lname, patient_minitial) VALUES('$fname', '$lname', '$minitial');";
	$result = mysqli_query($link, $query);
	$query = "SELECT patient_id FROM patient WHERE patient_fname='$fname' AND patient_lname='$lname' AND patient_minitial='$minitial' ORDER BY patient_id DESC";
	$result = mysqli_query($link, $query);	
	$open = mysqli_fetch_array($result);
	
	$patient_id = $open['patient_id'];
	$clip = $_POST["clip"];
	$cpalate = $_POST["cpalate"];
	$top = $_POST["operation"];
	$trep = $_POST["repair"];
	$sur = $_POST["surgeon"];
	$edate = $_POST["evalyear"]."-".$_POST["evalmonth"]."-".$_POST["evalday"];
	$addate = $_POST["adyear"]."-".$_POST["admonth"]."-".$_POST["adday"];
	$surgdate = $_POST["suryear"]."-".$_POST["surmonth"]."-".$_POST["surday"];
	$disdate = $_POST["disyear"]."-".$_POST["dismonth"]."-".$_POST["disday"];
	$fupdate =$_POST["fupyear"]."-".$_POST["fupmonth"]."-".$_POST["fupday"];
	$hbill = $_POST["hbills"];
	$lfee = $_POST["lfees"];
	$query = "INSERT INTO SURGERY(patient_id, Cl_Lip, Cl_Palate, Operation, Repair, Surgeon, Evaluation_Date, Admission_Date, Surgery_Date, Discharge_Date, Follow_Up_Date, Hospital_Bill, Lab_fee)
	VALUES($patient_id, '$clip', '$cpalate', '$top', '$trep', '$sur', '$edate', '$addate', '$surgdate', '$disdate','$fupdate','$hbill','$lfee');";
	mysqli_query($link, $query);

}
?>
</body>
</html>
