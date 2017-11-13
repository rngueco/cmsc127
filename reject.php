
<?php
include 'link.php';
$id = $_POST['iid'];
$query = "DELETE FROM intake where ID ='$id'";
$result = mysqli_query($link, $query);
?>
<html> 
<body>
<a href ="index.php"><h1> SUCCESS </h1></a>

</body>
</html>	
