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
                  <h1>Search Records <small>Search your records by filter</small></h1>
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
                      <form action='search_result.php' method='post'>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="lname">By patient's last name</label>
                          <input type="text" class="form-control" name="lname" placeholder="Enter last name of patient">
                        </div>
                        <div class="form-group">
                          <label for="fname">By patient's first name</label>
                          <input type="text" class="form-control" name="fname" placeholder="Enter first name of patient">
                        </div>
                        <div class="form-group">
                          <label for="surgeon">By name of surgeon</label>
                          <input type="text" class="form-control" name="surgeon" placeholder="Enter name of surgeon">
                        </div>
                        <div class="form-group">
                          <label for="surgeon">By name of anesthesiologist</label>
                          <input type="text" class="form-control" name="anesthesia" placeholder="Enter name of anesthesiologist">
                        </div>
                        <div class="form-group">
                          <label for="surgeon">By name of pediatrician</label>
                          <input type="text" class="form-control" name="pedia" placeholder="Enter name of pediatrician">
                        </div>
                        <div class="form-group">
                          <label for="operation">By type of operation</label>
                          <input type="text" class="form-control" name="operation" placeholder="Enter description of operation">
                        </div>
                        <div class="form-group">
                          <label for="repair">By type of repair</label>
                          <input type="text" class="form-control" name="repair" placeholder="Enter description of repair">
                        </div>
                        <div class="form-group">
                          <label for="sel1">By type of cleft lip</label>
                          <select class="form-control" id="sel1" name="clip">
                            <option value="Complete unilateral cleft lip - right">Complete unilateral cleft lip - right</option>
                            <option value="Complete unilateral cleft lip - left">Complete unilateral cleft lip - left</option>
                            <option value="Incomplete unilateral cleft lip - right">Incomplete unilateral cleft lip - right</option>
                            <option value="Incomplete unilateral cleft lip - left">Incomplete unilateral cleft lip - left</option>
                            <option value="Complete bilateral cleft lip">Complete bilateral cleft lip</option>
                            <option value="None" selected="selected">None</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="sel2">By type of cleft palate</label>
                          <select class="form-control" id="sel2" name="cpalate">
                            <option value="Complete unilateral cleft palate - right">Complete unilateral cleft palate - right</option>
                            <option value="Complete unilateral cleft palate - left">Complete unilateral cleft palate - left</option>
                            <option value="Incomplete unilateral cleft palate - right">Incomplete unilateral cleft palate - right</option>
                            <option value="Incomplete unilateral cleft palate - left">Incomplete unilateral cleft palate - left</option>
                            <option value="Complete bilateral cleft palate">Complete bilateral cleft palate</option>
                            <option value="Incomplete bilateral cleft palate">Incomplete bilateral cleft palate</option>
                            <option value="Submucous cleft - right">Submucous cleft - right</option>
                            <option value="Submucous cleft - left">Submucous cleft - left</option>
                            <option value="None" selected="selected">None</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="form-group">
                          <label for="sel2">By evaluation date</label>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">From</span>
                            <input type='date' class='form-control 'name='eval1' >
                          </div>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">To</span>
                            <input type='date' class='form-control 'name='eval2' >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="sel2">By admission date</label>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">From</span>
                            <input type='date' class='form-control 'name='admi1' >
                          </div>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">To</span>
                            <input type='date' class='form-control 'name='admi2' >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="sel2">By surgery date</label>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">From</span>
                            <input type='date' class='form-control 'name='sur1' >
                          </div>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">To</span>
                            <input type='date' class='form-control 'name='sur2' >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="sel2">By discharge date</label>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">From</span>
                            <input type='date' class='form-control 'name='dis1' >
                          </div>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">To</span>
                            <input type='date' class='form-control 'name='dis2' >
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="sel2">By follow-up date</label>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">From</span>
                            <input type='date' class='form-control 'name='fup1' >
                          </div>
                          <div class="input-group input-group-md">
                            <span class="input-group-addon">To</span>
                            <input type='date' class='form-control 'name='fup2' >
                          </div>
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
