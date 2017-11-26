<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Luke Foundation | Cleft Lip and Palate</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>

<?php
        include 'link.php';
        $lname = $_REQUEST["lname"];
        $fname = $_REQUEST["fname"];
        $query = "SELECT lname, fname, id, defer FROM intake";
          
		$conditions = array();
		if($lname != "") {
			$conditions[] = "lname LIKE '%$lname%'";
		}
		if($fname != "") {
			$conditions[] = "fname LIKE '%$fname%'";
		}
        
		$sql = $query;
		if (count($conditions) > 0) {
			$sql .= " WHERE " . implode(' AND ', $conditions);
		}
		$result = mysqli_query($link, $sql);
		$length = mysqli_num_rows($result);
?>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-primary" id="menu-toggle">Menu</a>
                <div class="page-header">
                  <h1>Search Results <span class="badge"><?=$length?></span></h1>
                </div>
				<div class="alert alert-info alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Tip:</strong> A green row means the application is pending while a red row means the application is deferred.
				</div>
                <table class="table-hover" valign="middle">
                <tr id="h">
                  <th>Last name</th>
                  <th>First Name</th>
                  <th>Edit</th>
                  <th>View</th>
                  <th>Accept</th>
				  <th>Reject</th>
                </tr>
                  <?php
                    while($open = mysqli_fetch_array($result)){
                      $fname = $open['fname'];
                      $lname = $open['lname'];
                      $id = $open['id'];
					  $stat;
					  if($open['defer']=='N'){
						  $stat = 'success';
					  }else{
						  $stat = 'danger';
					  }
                      echo "
                      <tr class='alert alert-".$stat."'>
                        <td>".$lname."</td>
                        <td>".$fname."</td>
                        <td>
                      <form action='edit_intake.php' method='post'>
                        <input type='hidden' name='iid' value='".$id."'>
                        <span title='Edit this record'>
                          <input type='image' src='images/edit.png' width='17px' height='17px' />
                        </span>
                      </form>
                    </td>
                    <td>
                      <form action='intake_sum.php' method='post'>
                        <input type='hidden' name='iid' value='".$id."'>
                        <span title='View full summary'>
                          <input type='image' src='images/view.png' width='17px' height='17px' />
                        </span>
                      </form>
                    </td>
                    <td>
                      <form onsubmit='confirm(\"Are you sure you want to approve this patient?\"); approve(".$id.");'>
                        <span title='Approve this application'>
                          <input type='image' src='images/approve.png' width='17px' height='17px' />
                        </span>
                      </form>
                    </td>
                    <td>
                      <form onsubmit='confirm(\"Are you sure you want to reject this patient?\"); reject(".$id.");'>
                        <span title='Reject this application'>
                          <input type='image' src='images/reject.png' width='17px' height='17px' />
                        </span>
                      </form>
                    </td>
                      </tr>
                      ";
                    }
                    mysqli_free_result($result);
                  ?>
              </table><br />
              <center><a href="search_intake.php" role="button" class="btn btn-default">Search Again</a></center>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>