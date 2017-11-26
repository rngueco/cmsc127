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

</head>

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
                  <h1>Surgery <small>View and manage surgery records</small></h1>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="thumbnail">
                    <div class="caption">
                      <h3><span class="glyphicon glyphicon-eye-open"></span> View Records</h3>
                      <p>View all your surgery records.</p>
                      <p><a href="view_recs.php" class="btn btn-primary" role="button">Go</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="thumbnail">
                    <div class="caption">
                      <h3><span class="glyphicon glyphicon-search"></span> Search Records</h3>
                      <p>Search from your records.</p>
                      <p><a href="search.php" class="btn btn-primary" role="button">Go</a></p>
                    </div>
                  </div>
                </div>
                <div class="clearfix visible-lg visible-md"></div>
                <div class="page-header">
                  <h1>Intake <small>View and manage intake forms</small></h1>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="thumbnail">
                    <div class="caption">
                      <h3><span class="glyphicon glyphicon-eye-open"></span> View Pending Intakes</h3>
                      <p>View all pending applications.</p>
                      <p><a href="pending.php" class="btn btn-primary" role="button">Go</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="thumbnail">
                    <div class="caption">
                      <h3><span class="glyphicon glyphicon-search"></span> Search Intakes</h3>
                      <p>Search for pending applications.</p>
                      <p><a href="search_intake.php" class="btn btn-primary" role="button">Go</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-4">
                  <div class="thumbnail">
                    <div class="caption">
                      <h3><span class="glyphicon glyphicon-file"></span> Add New Intake</h3>
                      <p>Pull up a new intake form.</p>
                      <p><a href="intake.php" class="btn btn-primary" role="button">Go</a></p>
                    </div>
                  </div>
                </div>
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