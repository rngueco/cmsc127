<?php
$servername = "localhost";
$username = "mtnolasco";
$password = "password";
$dbname ="upcmscdb";

//create connection

$conn = mysql_connect($servername, $username, $password, $dbname);

//check connection
if(!$conn) die("connection failed: ".mysql_connect_error());
// surgical history
$sql = "Select concat(patient_lname, ',', patient_fname, ' ', patient_minitial) as patientname, cl_lip, cl_palate, operation, repair, surgeon, evaluation_date, admission_date, surgery_date, discharge_date, follow-up_date, hospitalbill, labfee from surgery, patient where patient.patient_id = surgery.patient_id";
$result = mysql_query($conn, $sql);

		if(mysql_num_rows($result) > 0){
			// output data of each row
				echo "<table><tr><th>Patient Name</th>
				<th>Cleft Lip</th>
				<th>Cleft Palate</th>
				<th>Operation</th>
				<th>Repair</th>
				<th>Surgeon</th>
				<th> Evaluation date </th>
				<th> Admission date </th>
				<th> Surgery date </th>
				<th> Discharge date </th>
				<th> Follow-up date</th>
				<th> Hospital Bill </th>
				<th> Lab fee </th>
				</tr>";
				while($row = mysql_fetch_assoc($result)) {
					echo "<tr><th>".$row["patientname"]."</th><th>".$row["cl_lip"]."</th><th>".$row["cl_palate"]."</th><th>".$row["operation"]."</th><th>".$row["repair"]."</th><th>".$row["surgeon"]."</th><th>".$row["evaluation_date"]."</th><th>".$row["admission_date"]."</th><th>".$row["surgery_date"]."</th><th>".$row["discharge_date"]."</th><th>".$row["follow-up_date"]."</th><th>".$row["hospitalbill"]."</th><th>".$row["labfee"]."</th></tr>";
				}
				echo"</table>";
			} else {
				echo "<p>0 results</p>";
			}
mysql_close($conn);


?>
