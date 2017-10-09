<html>
<body>
<?php
if($_POST){
	include 'link.php';
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$minital = $_POST["minitial"];
	$query = "INSERT INTO PATIENT (patient_fname, patient_lname, patient_minital) VALUES('$fname', '$lname', '$minital');";
	$result = mysqli_query($link, $query);
	$query = "SELECT patient.patient_id, patient.patient_fname, patient.patient_lname, surgery.Operation, surgery.Repair, surgery.Surgeon FROM patient RIGHT JOIN surgery ON patient.patient_id = surgery.patient_id ORDER BY patient.patient_lname";
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
