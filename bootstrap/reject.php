<?php
	include 'link.php';
	$id = $_POST['iid'];
	$query = "DELETE FROM intake WHERE id = $id";
	$result = mysqli_query($link, $query);
	mysqli_fetch_array($result);
?>