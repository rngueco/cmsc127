<html>

<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script/backToIndex.js" type="text/javascript" ></script>
	<link href="images/favi.png" type="image/png" rel="icon" />
</head>

<?php
include 'link.php';
$pID = $_REQUEST["PID"];
$query = "DELETE FROM CLSURGERY where patient_id='$pID'";
$result = mysqli_query($link, $query);
?>

<body>
	<div class="header">
		<div class="handle">
			<span onclick="back()" ><h1><img src="images/LukeLogo.png" width="40px" style="float:left" /></h1>
			<h1>uke Foundation, Inc</h1></span>
		</div>
	</div>
	<div class="content">
		<div class="left-panel">
			<?php include 'navigation.php' ?>
		</div>
		<div class="right-panel">
		<center>
		<?php if($result){?>
			<h1>Deletion Successful</h1>
		<?php echo "<script>setTimeout(back, 1500);</script>";
			}else{ ?>
			<h1>Deletion Failed</h1>
		<?php echo "<script>setTimeout(back, 1500);</script>"; } ?>
		</center>
		</div>
	</div>
</body>

</html>
