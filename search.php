<html>
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
		<div class="left-panel">
			<a href="index.php">&nbsp;&nbsp;<img src="images/home.png">&nbsp; Home</a>
			<a href="view_recs.php">&nbsp;&nbsp;<img src="images/folder.png">&nbsp; View Records</a>
			<a href="search.php">&nbsp;&nbsp;<img src="images/search.png">&nbsp; Search Records</a>
			<a href="add_rec.php">&nbsp;&nbsp;<img src="images/add.png">&nbsp; New Record</a>
			<a href="intake.php">&nbsp;&nbsp;<img src="images/file.png">&nbsp; New Intake Form</a>
		</div>
		<div class="right-panel">
		<center>
			<h1>Search Records</h1>
			<form action='search_result.php' action='post'>
			<table>
				<tr>
					<th colspan="2">Select filter</th>
				</tr>
				<tr>
					<td width="30%">By patient's last name</td>
					<td><input type='text' name="lname" placeholder='Enter last name'></td>
				</tr>
				<tr>
					<td>By patient's first name</td>
					<td><input type='text' name="fname" placeholder='Enter first name'></td>
				</tr>
				<tr>
					<td>By surgeon</td>
					<td><input type='text' name="surgeon" placeholder='Enter surgeon'></td>
				</tr>
				<tr>
					<td colspan="2"><input type='submit' value='Search'></td>
				</tr>
			<table>
			</form>
		</center>
		</div>
	</div>
</body>
</html>
