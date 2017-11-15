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
                <br />
                <div class="page-header">
                  <h1>Surgery Records <small>Showing all records</small></h1>
                </div>
                <center>
                <table valign="middle" class="table-hover">
                  <tr id="h">
                    <th>Last name</th>
                    <th>First Name</th>
                    <th>Type of Operation</th>
                    <th>Type of Repair</th>
                    <th>Surgeon</th>
                    <th>Action</th>
                  </tr>
              <?php
                include 'link.php';
                $query = "SELECT patient.patient_id, patient.patient_fname, patient.patient_lname, clsurgery.Operation, clsurgery.Repair, clsurgery.Surgeon FROM patient RIGHT JOIN clsurgery ON patient.patient_id = clsurgery.patient_id ORDER BY patient.patient_lname";
                $result = mysqli_query($link, $query);

                // find out how many rows are in the table 
                $sql = "SELECT COUNT(*) FROM clsurgery";
                $result = mysqli_query($link, $sql) or trigger_error("SQL", E_USER_ERROR);
                $r = mysqli_fetch_row($result);
                $numrows = $r[0];

                // number of rows to show per page
                $rowsperpage = 30;
                // find out total pages
                $totalpages = ceil($numrows / $rowsperpage);

                // get the current page or set a default
                if (isset($_GET['currentpage']) && is_numeric($_GET['currentpage'])) {
                // cast var as int
                $currentpage = (int) $_GET['currentpage'];
                } else {
                   // default page num
                   $currentpage = 1;
                } // end if

                // if current page is greater than total pages...
                if ($currentpage > $totalpages) {
                   // set current page to last page
                   $currentpage = $totalpages;
                } // end if
                // if current page is less than first page...
                if ($currentpage < 1) {
                   // set current page to first page
                   $currentpage = 1;
                } // end if

                // the offset of the list, based on current page 
                $offset = ($currentpage - 1) * $rowsperpage;

                // get the info from the db 
                $sql = "SELECT patient.patient_id, patient.patient_fname, patient.patient_lname, clsurgery.Operation, clsurgery.Repair, clsurgery.Surgeon FROM patient RIGHT JOIN clsurgery ON patient.patient_id = clsurgery.patient_id ORDER BY patient.patient_lname LIMIT $offset, $rowsperpage";
                $result = mysqli_query($link, $sql) or trigger_error("SQL", E_USER_ERROR);

                // while there are rows to be fetched...
                while($open = mysqli_fetch_array($result)){
                          $fname = $open['patient_fname'];
                          $lname = $open['patient_lname'];
                          $operation = $open['Operation'];
                          $repair = $open['Repair'];
                          $surgeon = $open['Surgeon'];
                          $id = $open['patient_id'];

                          echo "
                          <tr>
                            <td>".$lname."</td>
                            <td>".$fname."</td>
                            <td>".$operation."</td>
                            <td>".$repair."</td>
                            <td>".$surgeon."</td>
                            <td>
                              <form action='edit_info.php' method='post'>
                                <input type='hidden' name='pid' value='".$id."'>
                                <span title='Edit this record'>
                                  <input type='image' src='images/edit.png' width='17px' height='17px' />
                                </span>
                              </form>
                              <form action='summary.php' method='post'>
                                <input type='hidden' name='pid' value='".$id."'>
                                <span title='View full summary'>
                                  <input type='image' src='images/view.png' width='17px' height='17px' />
                                </span>
                              </form>
                              <form action='remove.php' method='post' onsubmit='return confirm(\"Are you sure you want to delete this record?\");'>
                                <input type='hidden' name='PID' value='".$id."'>
                                <span title='Delete this record'>
                                  <input type='image' src='images/delete.png' width='17px' height='17px' />
                                </span>
                              </form>
                            </td>
                          </tr>
                          ";
                } // end while
                echo "</table>";
                /******  build the pagination links ******/
                // range of num links to show
                $range = 3;

                // if not on page 1, don't show back links
                if ($currentpage > 1) {
                   // show << link to go back to page 1
                   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=1'><< </a> ";
                   // get previous page num
                   $prevpage = $currentpage - 1;
                   // show < link to go back 1 page
                   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$prevpage'>< </a> ";
                } // end if 

                // loop to show links to range of pages around current page
                for ($x = ($currentpage - $range); $x < (($currentpage + $range) + 1); $x++) {
                   // if it's a valid page number...
                   if (($x > 0) && ($x <= $totalpages)) {
                      // if we're on current page...
                      if ($x == $currentpage) {
                         // 'highlight' it but don't make a link
                         echo " [<b>$x</b>] ";
                      // if not current page...
                      } else {
                         // make it a link
                         echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$x'>$x </a> ";
                      } // end else
                   } // end if 
                } // end for

                // if not on last page, show forward and last page links        
                if ($currentpage != $totalpages) {
                   // get next page
                   $nextpage = $currentpage + 1;
                    // echo forward link for next page 
                   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$nextpage'>> </a> ";
                   // echo forward link for lastpage
                   echo " <a href='{$_SERVER['PHP_SELF']}?currentpage=$totalpages'>>> </a> ";
                } // end if
                /****** end build pagination links ******/
                ?>
              
            </center>
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