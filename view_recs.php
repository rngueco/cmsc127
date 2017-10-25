<!DOCTYPE html>
<html lang="en">
<head>
  <title>Luke Foundation, Inc.</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      padding-top: 10px;
    }
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
    body{
        padding-top: 50px;
    }
  </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <a href="index.php" class="navbar-brand">Luke Foundation, Inc.</a>
        </div>
    </div>
    </nav>
<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-2 sidenav"><!-- SIDE NAVIGATION -->
        <ul class="nav nav-pills nav-stacked">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
            <li class="active"><a href="view_recs.php"><span class="glyphicon glyphicon-list-alt"></span>  View Records</a></li>
            <li><a href="search.php"><span class="glyphicon glyphicon-search"></span> Search Records</a></li>
            <li><a href="intake.php"><span class="glyphicon glyphicon-plus"></span> New Intake Form</a></li>
        </ul>
    </div>
    <div class="col-sm-10">
        <center>
        <h1>Surgery Records</h1> 
        <input class="form-control" id="myInput" type="text" placeholder="Search anything from this page only">
        <br />
        <table class="table table-hover" cellspacing="2px" valign="middle">
        <tr id="h">
          <th>Last name</th>
          <th>First Name</th>
          <th>Type of Operation</th>
          <th>Type of Repair</th>
          <th>Surgeon</th>
          <th>Action</th>
        </tr>
        <tbody id="myTable">
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
        $rowsperpage = 20;
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
                        <input type='submit' value='Edit info' id='edit'>
                      </form>
                      <form action='summary.php' method='post'>
                        <input type='hidden' name='pid' value='".$id."'>
                        <input type='submit' value='View full summary' id='summary'>
                      </form>
                    </td>
                  </tr>
                  ";
        } // end while

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
    </tbody>
    </table>
    </center>
    </div>
  </div>
</div>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
