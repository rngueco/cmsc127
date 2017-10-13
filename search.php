<html>
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="backToIndex.js" type="text/javascript" ></script>
	<link href="images/LukeLogo.jpg" type="image/gif" rel="shortcut icon" />
</head>
<body>
	<div class="header">
		<div class="handle">
			<span onclick="back()" ><h1><img src="images/LukeLogo.jpg" width="40px" style="float:left" /></h1>
			<h1>uke Foundation, Inc</h1></span>
		</div>
	</div>
	<div class="content">
		<center>
			<h1>Search Records</h1>
			<form action='search_result.php' action='post'>
			<table>
				<tr>
					<th>Select filter</th>
				</tr>
				<tr>
					<td>
						By patient's last name <input type='text' name="lname" placeholder='Enter last name'><br /><br />
						By patient's first name <input type='text' name="fname" placeholder='Enter first name'><br /><br />
						By surgeon <input type='text' name="surgeon" placeholder='Enter surgeon'><br /><br />
						<input type='submit' value='Search'>
					</td>
				</tr>
			<table>
			</form>
		</center>
	</div>
</body>
</html>
