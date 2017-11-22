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

    <script src="script/backToIndex.js" type="text/javascript" ></script>

</head>

<?php
include 'link.php';
$pID = $_REQUEST["PID"];
$query = "DELETE FROM CLSURGERY where patient_id='$pID'";
$result = mysqli_query($link, $query);
?>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
              <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a>
              <div class="page-header">
                <h1>Remove Record</h1>
              </div>
                <?php if($result){?>
                    <h1>Deletion Successful</h1>
                <?php echo "<script>setTimeout(backToHome, 1500);</script>";
                    }else{ ?>
                    <h1>Deletion Failed</h1>
                <?php echo "<script>setTimeout(backToHome, 1500);</script>"; } ?>
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
