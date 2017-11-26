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
        $surgeon = $_REQUEST["surgeon"];
        $anesthesia = $_REQUEST["anesthesia"];
        $pedia = $_REQUEST["pedia"];
        $clip = $_REQUEST["clip"];
        $cpalate = $_REQUEST["cpalate"];
        $operation = $_REQUEST["operation"];
        $repair = $_REQUEST["repair"];
        
        $eval1 = $_REQUEST["eval1"];
        $eval2 = $_REQUEST["eval2"];
        $admi1 = $_REQUEST["admi1"];
        $admi2 = $_REQUEST["admi2"];
        $sur1 = $_REQUEST["sur1"];
        $sur2 = $_REQUEST["sur2"];
        $dis1 = $_REQUEST["dis1"];
        $dis2 = $_REQUEST["dis2"];
        $fup1 = $_REQUEST["fup1"];
        $fup2 = $_REQUEST["fup2"];
        $query = "SELECT patient.patient_id, patient.patient_fname, patient.patient_lname, clsurgery.Operation, clsurgery.Repair, clsurgery.Surgeon, clsurgery.Anesthesiologist, clsurgery.Pediatrician 
        FROM patient RIGHT JOIN clsurgery ON patient.patient_id = clsurgery.patient_id";
          
          $conditions = array();
          if($lname != "") {
            $conditions[] = "patient.patient_lname LIKE '%$lname%'";
          }
          if($fname != "") {
            $conditions[] = "patient.patient_fname LIKE '%$fname%'";
          }
          if($surgeon != "") {
            $conditions[] = "clsurgery.surgeon LIKE '%$surgeon%'";
          }
          if($anesthesia != "") {
            $conditions[] = "clsurgery.anesthesiologist LIKE '%$anesthesia%'";
          }
          if($pedia != "") {
            $conditions[] = "clsurgery.pediatrician LIKE '%$pedia%'";
          }
          if($clip != "None"){
            $conditions[] = "clsurgery.cl_lip LIKE '%$clip%'";
          }
          if($cpalate != "None"){
            $conditions[] = "clsurgery.cl_palate LIKE '%$cpalate%'";
          }
          if($operation != ""){
            $conditions[] = "clsurgery.operation LIKE '%$operation%'";
          }
          if($repair != ""){
            $conditions[] = "clsurgery.repair LIKE '%$repair%'";
          }
          if($eval1){
          $conditions[] = "'$eval1'<=clsurgery.evaluation_date";
        }
        if($eval2){
          $conditions[] = "'$eval2'>=clsurgery.evaluation_date";
        }
        if($admi1){
          $conditions[] = "'$admi1'<=clsurgery.admission_date";
        }
        if($admi2){
          $conditions[] = "'$admi2'>=clsurgery.admission_date";
        }
        if($sur1){
          $conditions[] = "'$sur1'<=clsurgery.surgery_date";
        }
        if($sur2){
          $conditions[] = "'$sur2'>=clsurgery.surgery_date";
        }
        if($dis1){
          $conditions[] = "'$dis1'<=clsurgery.discharge_date";
        }
        if($dis2){
          $conditions[] = "'$dis2'>=clsurgery.discharge_date";
        }
        if($fup1){
          $conditions[] = "'$fup1'<=clsurgery.follow_up_date";
        }
        if($fup2){
          $conditions[] = "'$fup2'>=clsurgery.follow_up_date";
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
                <table class="table-hover" valign="middle">
                <tr id="h">
                  <th>Last name</th>
                  <th>First Name</th>
                  <th>Type of Operation</th>
                  <th>Type of Repair</th>
                  <th>Surgeon</th>
                  <th>Edit</th>
                  <th>View</th>
                  <th>Delete</th>
                </tr>
                  <?php
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
                        </td>
                        <td>
                          <form action='summary.php' method='post'>
                            <input type='hidden' name='pid' value='".$id."'>
                              <span title='View full summary'>
                                <input type='image' src='images/view.png' width='17px' height='17px' />
                              </span>
                          </form>
                        </td>
                        <td>
                          <form action='remove.php' action='post' onsubmit='return confirm(\"Are you sure you want to delete this record?\");'>
                            <input type='hidden' name='PID' value='".$id."'>
                              <span title='Delete this record'>
                                <input type='image' src='images/delete.png' width='17px' height='17px' />
                              </span>
                          </form>
                        </td>
                      </tr>
                      ";
                    }
                    mysqli_free_result($result);
                  ?>
              </table><br />
              <center><a href="search.php" role="button" class="btn btn-default">Search Again</a></center>
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
