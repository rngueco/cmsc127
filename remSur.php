<html>
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="backToIndex.js" type="text/javascript" ></script>
</head>

<body>
	<div class="header">
		<div class="handle">
			<h1><img src="images/LukeLogo.jpg" width="40px" style="float:left" onclick="back()" /></h1>
			<h1>Luke Foundation, Inc</h1>
		</div>
	</div>
	
	<div class="content">
		<center>
			<h1>Delete Surgery Record</h1>
			<form action='remByCode.php' action='post'>
			<table>
				<tr>
					<th>By Surgery Code</th>
				</tr>
				<tr>
					<td> <input type='text' name='sCode' placeholder='Enter Surgery Code'><br /><br /><input type='submit' value='Search'> </td>
				</tr>
			</table>
			</form>
				<h3 style="display: inline-block; float: center;">OR</h3>
			<form action='remByName.php' action='post'>
			<table>
				<tr>
					<th>By Name</th>
				</tr>
				<tr>
					<td>
						<input type='text' name="lname" placeholder='Enter last name'><br /><br />
						<input type='text' name="fname" placeholder='Enter first name'><br /><br />
						<input type='submit' value='Search'>
					</td>
				</tr>
			<table>
			</form>
		</center>
	</div>
</body>
</html>