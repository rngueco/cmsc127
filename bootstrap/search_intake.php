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
                  <h1>Search Intakes <small>Search your records by filter</small></h1>
                </div>
                <div class="col-md-10 col-lg-8">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Choose your filter</h3>
                    </div>
                    <div class="panel-body">
                      <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Tip:</strong> Leave a field blank if you do not intend to use the filter.
                      </div>
                      <form action='search_intakeRes.php' method='post'>
                      <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                          <label for="lname">By patient's last name</label>
                          <input type="text" class="form-control" name="lname" placeholder="Enter last name of patient">
                        </div>
                        <div class="form-group">
                          <label for="fname">By patient's first name</label>
                          <input type="text" class="form-control" name="fname" placeholder="Enter first name of patient">
                        </div>
                      </div>
                      <div class="col-lg-12 col-md-12">
                        <center><input type='submit' value='Search' class="btn btn-default"></center>
                      </div>
                    </form>
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