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
        $clip = $_POST['clip'];
        $cpalate = $_POST['cpalate'];
        $operation = $_POST['operation'];
        $repair = $_POST['repair'];
        $surgeon = $_POST['surgeon'];
        $hospital = $_POST['hospital'];
        $lab = $_POST['lab'];
        $surgery = $_POST['surgery'];
        $eval = $_POST['eval'];
        $admission = $_POST['admission'];
        $discharge = $_POST['discharge'];
        $follow = $_POST['follow'];

        $query = "UPDATE clsurgery SET Cl_Lip = '$clip', Cl_Palate = '$cpalate', Operation = '$operation', 
        Repair = '$repair', Surgeon = '$surgeon', Hospital_Bill = '$hospital', Lab_fee = '$lab', Evaluation_Date = '$eval', 
        Admission_Date = '$admission', Surgery_Date = '$surgery', Discharge_Date = '$discharge', Follow_Up_Date = '$follow' WHERE patient_id = $id";
        $result = mysqli_query($link, $query);

        $query2 = "SELECT * FROM clsurgery WHERE patient_id = $id";
        $query3 = "SELECT * FROM patient WHERE patient_id = $id";
        $result2 = mysqli_query($link, $query2);
        $result3 = mysqli_query($link, $query3);
        $open2 = mysqli_fetch_array($result2);
        $open3 = mysqli_fetch_array($result3);

        if($open2['Evaluation_Date']=='0000-00-00'){
          $eDate = "N/A";
        }else{
          $eDate = $open2['Evaluation_Date'];
        }
        if($open2['Admission_Date']=='0000-00-00'){
          $aDate = "N/A";
        }else{
          $aDate = $open2['Admission_Date'];
        }
        if($open2['Surgery_Date']=='0000-00-00'){
          $sDate = "N/A";
        }else{
          $sDate = $open2['Surgery_Date'];
        }
        if($open2['Discharge_Date']=='0000-00-00'){
          $dDate = "N/A";
        }else{
          $dDate = $open2['Discharge_Date'];
        }
        if($open2['Follow_Up_Date']=='0000-00-00'){
          $fDate = "N/A";
        }else{
          $fDate = $open2['Follow_Up_Date'];
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
                  <h1><?=$open3['patient_fname']?> <?=$open3['patient_lname']?></h1>
                </div>
                <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <strong>Succes!</strong> Record successfully updated.
                </div>
                <div class="col-md-6 col-lg-6">

                <form action='update_info.php' method='post'>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Details</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-10 col-md-10">
                        <dl class="dl-horizontal">
                          <dt>Type of cleft lip</dt>
                          <dd><?=$open2['Cl_Lip'] ?></dd>

                          <dt>Type of cleft palate</dt>
                          <dd><?=$open2['Cl_Palate'] ?></dd>

                          <dt>Type of operation</dt>
                          <dd><?=$open2['Operation'] ?></dd>

                          <dt>Type of repair</dt>
                          <dd><?=$open2['Repair'] ?></dd>
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
                          <dd><?=$open2['Hospital_Bill'] ?></dd>

                          <dt>Laboratory</dt>
                          <dd><?=$open2['Lab_fee'] ?></dd>
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
                          <dd><?=$open2['Surgeon'] ?></dd>
                        </dl>
                      </div>
                    </div>
                  </div>
              </div>
              <center><a href="view_recs.php" class="btn btn-default">Go back to records</a></center>
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
