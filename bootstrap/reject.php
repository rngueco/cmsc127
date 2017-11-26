<?php
	include 'link.php';
	$id = $_POST['iid'];
	$query = "UPDATE INTAKE SET DEFER='Y' WHERE ID='$id' ";
	$result = mysqli_query($link, $query);
	mysqli_fetch_array($result);
?>