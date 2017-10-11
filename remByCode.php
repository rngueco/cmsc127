<html>

<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="backToIndex.js" type="text/javascript" ></script>
</head>

<?php
include 'link.php';
$sCode = $_REQUEST["sCode"];
$query = "DELETE FROM SURGERY where sCode='$sCode'";
$result = mysqli_query($link, $query);
?>

<body>
	<div class="header">
		<div class="handle">
			<h1><img src="images/LukeLogo.jpg" width="40px" style="float:left" /></h1>
			<h1>Luke Foundation, Inc</h1>
		</div>
	</div>
	<div class="content">
		<center>
		<?php if($result){?>
			<h1>Deletion Successful</h1>
		<?php echo "<script>setTimeout(back, 3000);</script>";
			}else{ ?>
			<h1>Deletion Failed</h1>
		<?php } ?>
		</center>
	</div>
</body>

</html>