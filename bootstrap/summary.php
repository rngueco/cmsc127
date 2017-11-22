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

<?php 
                        include 'link.php';
                        $id = $_POST['pid'];
                        $query = "SELECT * FROM clsurgery WHERE patient_id = $id";
                        $query2 = "SELECT * FROM patient WHERE patient_id = $id";
                        $result = mysqli_query($link, $query);
                        $result2 = mysqli_query($link, $query2);
                        $open = mysqli_fetch_array($result);
                        $open2 = mysqli_fetch_array($result2);
                        if($open['Evaluation_Date']=='0000-00-00'){
                            $eDate = "N/A";
                        }else{
                            $eDate = $open['Evaluation_Date'];
                        }
                        if($open['Admission_Date']=='0000-00-00'){
                            $aDate = "N/A";
                        }else{
                            $aDate = $open['Admission_Date'];
                        }
                        if($open['Surgery_Date']=='0000-00-00'){
                            $sDate = "N/A";
                        }else{
                            $sDate = $open['Surgery_Date'];
                        }
                        if($open['Discharge_Date']=='0000-00-00'){
                            $dDate = "N/A";
                        }else{
                            $dDate = $open['Discharge_Date'];
                        }
                        if($open['Follow_Up_Date']=='0000-00-00'){
                            $fDate = "N/A";
                        }else{
                            $fDate = $open['Follow_Up_Date'];
                        }

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
                    <?php 
                    echo "<h1>".$open2['patient_fname']." ".$open2['patient_lname']."</h1>" 
                    ?>
                </div>
                <div class="col-md-6 col-lg-6">

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Details</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-10 col-md-10">
                        <dl class="dl-horizontal">
                          <dt>Type of cleft lip</dt>
                          <dd><?=$open['Cl_Lip'] ?></dd>

                          <dt>Type of cleft palate</dt>
                          <dd><?=$open['Cl_Palate'] ?></dd>

                          <dt>Type of operation</dt>
                          <dd><?=$open['Operation'] ?></dd>

                          <dt>Type of repair</dt>
                          <dd><?=$open['Repair'] ?></dd>
                        </dl>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Fees</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-10 col-md-10">
                        <dl class="dl-horizontal">
                          <dt>Hospital</dt>
                          <dd><?=$open['Hospital_Bill'] ?></dd>

                          <dt>Laboratory</dt>
                          <dd><?=$open['Lab_fee'] ?></dd>
                        </dl>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-6 col-lg-6">

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Dates</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-10 col-md-10">
                        <dl class="dl-horizontal">
                          <dt>Evaluation Date</dt>
                          <dd><?=$eDate ?></dd>

                          <dt>Admission Date</dt>
                          <dd><?=$aDate ?></dd>

                          <dt>Surgery Date</dt>
                          <dd><?=$sDate ?></dd>

                          <dt>Discharge Date</dt>
                          <dd><?=$dDate ?></dd>

                          <dt>Follow-Up Date</dt>
                          <dd><?=$fDate ?></dd>
                        </dl>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Doctors and Surgeons</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-10 col-md-10">
                        <dl class="dl-horizontal">
                          <dt>Surgeon</dt>
                          <dd><?=$open['Surgeon'] ?></dd>
                        </dl>
                      </div>
                    </div>
                  </div>

                </div>

                <div class="col-md-12 col-lg-12">
                    <?php
                    echo"
                    <center>
                        <form action='remove.php' action='post'>
                            <input type='hidden' name='PID' value='".$open['patient_id']."'>
                            <input type='image' src='images/delete.png' width='17px' height='17px' onclick=\"return confirm('Are you sure you want to delete this record?');\">
                        </form>
                        <span title='Print This Record'>
                            <input type='image' src='images/printer.png' onclick=\"printDiv('print-content')\" width = \"17px\" height = \"17px\"/>
                        </span>
                    </center>
                    ";
                    ?>
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
