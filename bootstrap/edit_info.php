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
                <h1><?=$open2['patient_fname']?> <?=$open2['patient_lname']?> <small>Edit surgery information</small></h1>
              </div>
              <div class="col-md-6 col-lg-6">

                <form action='update_info.php' method='post' onsubmit='return confirm("Are you sure you want to save these changes?");'>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Details</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-10 col-md-10">
                        <div class="form-group">
                          <label for="cleft">Type of cleft lip</label>
                          <select class='form-control' id='cleft' name='clip'>
                            <option value='Complete unilateral cleft lip - right' <?php if($open['Cl_Lip']=='Complete unilateral cleft lip - right') echo"selected='selected'"; ?>>Complete unilateral cleft lip - right</option>
                            <option value='Complete unilateral cleft lip - left' <?php if($open['Cl_Lip']=='Complete unilateral cleft lip - left') echo"selected='selected'"; ?> >Complete unilateral cleft lip - left</option>
                            <option value='Incomplete unilateral cleft lip - right' <?php if($open['Cl_Lip']=='Incomplete unilateral cleft lip - right') echo"selected='selected'"; ?> >Incomplete unilateral cleft lip - right</option>
                            <option value='Incomplete unilateral cleft lip - left' <?php if($open['Cl_Lip']=='Incomplete unilateral cleft lip - left') echo"selected='selected'"; ?> >Incomplete unilateral cleft lip - left</option>
                            <option value='Complete bilateral cleft lip' <?php if($open['Cl_Lip']=='Complete bilateral cleft lip') echo"selected='selected'"; ?> >Complete bilateral cleft lip</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="palate">Type of cleft palate</label>
                          <select class="form-control" id="palate" name="cpalate">
                            <option value="Complete unilateral cleft palate - right" <?php if($open['Cl_Palate']=='Complete unilateral cleft palate - right') echo"selected='selected'"; ?> >Complete unilateral cleft palate - right</option>
                            <option value="Complete unilateral cleft palate - left" <?php if($open['Cl_Palate']=='Complete unilateral cleft palate - left') echo"selected='selected'"; ?> >Complete unilateral cleft palate - left</option>
                            <option value="Incomplete unilateral cleft palate - right" <?php if($open['Cl_Palate']=='Incomplete unilateral cleft palate - right') echo"selected='selected'"; ?> >Incomplete unilateral cleft palate - right</option>
                            <option value="Incomplete unilateral cleft palate - left" <?php if($open['Cl_Palate']=='Incomplete unilateral cleft palate - left') echo"selected='selected'"; ?> >Incomplete unilateral cleft palate - left</option>
                            <option value="Complete bilateral cleft palate" <?php if($open['Cl_Palate']=='Complete bilateral cleft palate') echo"selected='selected'"; ?> >Complete bilateral cleft palate</option>
                            <option value="Incomplete bilateral cleft palate" <?php if($open['Cl_Palate']=='Incomplete bilateral cleft palate') echo"selected='selected'"; ?> >Incomplete bilateral cleft palate</option>
                            <option value="Submucous cleft - right" <?php if($open['Cl_Palate']=='Submucous cleft - right') echo"selected='selected'"; ?> >Submucous cleft - right</option>
                            <option value="Submucous cleft - left" <?php if($open['Cl_Palate']=='Submucous cleft - left') echo"selected='selected'"; ?> >Submucous cleft - left</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="operation">Type of operation</label>
                          <input type='text' class="form-control" name='operation' id="operation" value='<?= $open['Operation']?>'>
                        </div>
                        <div class="form-group">
                          <label for="repair">Type of repair</label>
                          <input type='text' class="form-control" name='repair' id="repair" value='<?=$open['Repair']?>'>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Fees</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-10 col-md-10">
                        <div class="form-group">
                          <label for="hos">Hospital</label>
                          <input type='number' class="form-control" step='any' name='hospital' id="hos" value='<?=$open['Hospital_Bill']?>'>
                        </div>
                        <div class="form-group">
                          <label for="lab">Laboratory</label>
                          <input type='number' class="form-control" step='any' name='lab' id="lab" value='<?=$open['Lab_fee']?>'>
                        </div>
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
                        <div class="form-group">
                          <label for="eval">Evaluation Date</label>
                          <input type='date' class="form-control" name='eval' id="eval" value='<?=$open['Evaluation_Date']?>'>
                        </div>
                        <div class="form-group">
                          <label for="admi">Admission Date</label>
                          <input type='date' class="form-control" name='admission' id="admi" value='<?=$open['Admission_Date']?>'>
                        </div>
                        <div class="form-group">
                          <label for="sur">Surgery Date</label>
                          <input type='date' class="form-control" name='surgery' id="sur" value='<?=$open['Surgery_Date']?>'>
                        </div>
                        <div class="form-group">
                          <label for="dis">Discharge Date</label>
                          <input type='date' class="form-control" name='discharge' id="dis" value='<?=$open['Discharge_Date']?>'>
                        </div>
                        <div class="form-group">
                          <label for="fup">Follow-Up Date</label>
                          <input type='date' class="form-control" name='follow' id="fup" value='<?=$open['Follow_Up_Date']?>'>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Doctors and Surgeons</h3>
                    </div>
                    <div class="panel-body">
                      <div class="col-lg-10 col-md-10">
                        <div class="form-group">
                          <label for="surgeon">Surgeon</label>
                          <input type='text' class="form-control" name='surgeon' id="surgeon" value='<?=$open['Surgeon']?>'>
                        </div>
                        <div class="form-group">
                          <label for="surgeon">Anesthesiologist</label>
                          <input type='text' class="form-control" name='anesthesiologist' id="anesthesiologist" value='<?=$open['Anesthesiologist']?>'>
                        </div>
                        <div class="form-group">
                          <label for="surgeon">Pediatrician</label>
                          <input type='text' class="form-control" name='pedia' id="pedia" value='<?=$open['Pediatrician']?>'>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>

              <div class="col-lg-12 col-md-12">
                <center><input type='submit' value='Save details' id='save' class="btn btn-primary"><input type='hidden' name='pid' value='<?=$id ?>'></center>
              </div>

              </form>
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
