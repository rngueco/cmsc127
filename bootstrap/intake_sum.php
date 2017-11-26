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
    <script src="script/new_intake.js" type="text/javascript"></script>
</head>

<?php 
			include 'link.php';
			$id = $_POST['iid'];
			$query = "SELECT * FROM intake WHERE id = $id";
			$result = mysqli_query($link, $query);
			$open = mysqli_fetch_array($result);
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
                    	echo "<h1>View Intake Summary for ".$open['FNAME']." ".$open['LNAME']."</h1>" 
                    ?>
                </div>
                <div class="col-lg-12 col-md-12" id="toRep">
                        <div>
                            <!-- IDENTIFYING INFORMATION -->
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Personal Information</h3>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-3 col-lg-3">
                                        <div class="form-group">
                                           <label for="lname">Last Name</label>
                                           <input type='text' class="form-control" name='lname' id="lname" value="<?=$open['LNAME']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input type='text' class="form-control" name='fname' id="fname" value="<?=$open['FNAME']?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="mi">Middle Initial</label>
											<input type='text' class="form-control" name='minitial' maxlength="1" id="mi" value="<?=$open['MI']?>" readonly>
										</div>
                                    </div>

									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="age">Age</label>
											<input type="number" class="form-control" name="age" id="age" min="0" value="<?=$open['AGE']?>" readonly>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="weight">Weight (in lbs)</label>
											<input type="number" class="form-control" name="weight" id="weight" min="0" value="<?=$open['WEIGHT']?>" readonly>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="cs">Civil Status</label>
											<select class="form-control" name = "cs" id="cs">
												<option value="Single" <?php if($open['CS']=="Single") echo "selected='selected'"; ?> >Single</option>
												<option value="Married" <?php if($open['CS']=="Married") echo "selected='selected'"; ?> >Married</option>
												<option value="Divorced" <?php if($open['CS']=="Divorced") echo "selected='selected'"; ?> >Divorced</option>
												<option value="Widowed" <?php if($open['CS']=="Widowed") echo "selected='selected'"; ?> >Widowed</option>
											</select>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="gender">Gender</label><br />
											<label class="radio-inline">
												<input type="radio" name="gender" value="M" <?php if($open['GENDER']=="M") echo "checked"; ?> >Male </label>
											<label class="radio-inline">
												<input type="radio" name="gender" value="F" <?php if($open['GENDER']=="F") echo "checked"; ?> >Female
											</label>
										</div>
									</div>

									<div class="col-md-4 col-lg-4">
										<div class="form-group">
											<label for="bday">Birthdate</label>
											<input type="date" class="form-control" name="birthDate" id="bday" value="<?=$open['BIRTHDATE']?>" readonly>
										</div>
									</div>
                                    <div class="col-md-8 col-lg-8">
                                        <div class="form-group">
                                            <label for="bplace">Birthplace</label>
											<input type="text" class="form-control" name="birthplace" id="bplace" value="<?=$open['BIRTHPLACE']?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
									<h3 class="panel-title">Housing Information</h3>
								</div>
								<div class="panel-body">
									<div class="col-md-9 col-lg-9">
										<div class="form-group">
											<label for="provadd">Provincial Address</label>
											<input type="text" class="form-control" name="provAddress" id="provadd" value="<?=$open['PROV_ADD']?>" readonly>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="provzip">ZIP Code</label>
											<input type="text" class="form-control" name="provZIP" id="provzip" maxlength="4" pattern="[01-9]{4,}" value="<?=$open['PROV_ZIP']?>" readonly>
										</div>
									</div>

									<div class="col-md-9 col-lg-9">
										<div class="form-group">
											<label for="presadd">Present Address</label>
											<input type="text" class="form-control" name="presentAddress" id="presadd" value="<?=$open['PRES_ADD']?>" readonly>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="preszip">ZIP Code</label>
											<input type="text" class="form-control" name="presZIP" id="preszip" maxlength="4" pattern="[01-9]{4,}" value="<?=$open['PRES_ZIP']?>" readonly>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Other Information</h3>
								</div>
								<div class="panel-body">
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="rel">Religion</label>
											<input type="text" class="form-control" name="religion" id="rel" value="<?=$open['RELIGION']?>" readonly>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="occu">Occupation</label>
											<input type="text" class="form-control" name="occupation" id="occu" value="<?=$open['OCCU']?>" readonly>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="minc">Monthly Income</label>
											<input type="number" class="form-control" name="monthlyIncome" id="minc" value="<?=$open['M_INCOME']?>" readonly>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="cpnum">Contact number</label>
											<div class="input-group input-group-md">
												<span class="input-group-addon">+639</span>
												<input type="text" class="form-control" name="contactNumber" id="cpnum" maxlength="9" pattern="[01-9]{9,}" value="<?=$open['CNUM']?>" readonly>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4">
										<div class="form-group">
											<label for="educbg">Educational Background</label>
											<select class="form-control" name = "educBack" id="educbg">
												<option value="None" <?php if($open['EDUC_BG']=="None") echo "selected='selected'";?> >No Schooling Attended</option>
												<option value="Elem" <?php if($open['EDUC_BG']=="Elem") echo "selected='selected'";?> >Elementary</option>
												<option value="HS" <?php if($open['EDUC_BG']=="HS") echo "selected='selected'";?> >High School</option>
												<option value="C_Under" <?php if($open['EDUC_BG']=="C_Under") echo "selected='selected'"?> >College Undergraduate</option>
												<option value="C_Grad" <?php if($open['EDUC_BG']=="C_Grad") echo "selected='selected'";?> >College Graduate</option>
												<option value="Voc" <?php if($open['EDUC_BG']=="Voc") echo "selected='selected'";?> >Vocational</option>
											</select>
										</div>
									</div>
								</div>
							</div>


                            <!-- DIAGNOSIS -->
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Diagnosis</h3>
								</div>
								<div class="panel-body">
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<label for="surgerynum">Did the patient have any lip or palate surgery before this evaluation?</label>
											<label class="radio-inline">
												<input type="radio" name="surgerynum" id="surgerynum" value="Y" <?php if($open['SURGERYNUM']=="Y") echo "checked"; ?>>Yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="surgerynum" id="surgerynum" value="N" <?php if($open['SURGERYNUM']=="N") echo "checked"; ?>>No
                                            </label>
										</div>
										<div class="form-group">
											<label for="surgerytype">If yes, pick the type of surgery the patient had</label><br />
											<label class="radio-inline">
												<input type="radio" name="surgerytype" id="surgerytype" value="1" <?php if($open['SURGERYTYPE']=="1") echo "checked"; ?>>Cleft Lip Surgery
											</label>
											<label class="radio-inline">
												<input type="radio" name="surgerytype" id="surgerytype" value="2" <?php if($open['SURGERYTYPE']=="2") echo "checked"; ?>>Cleft Palate Surgery
											</label>
											<label class="radio-inline">
												<input type="radio" name="surgerytype" id="surgerytype" value="3" <?php if($open['SURGERYTYPE']=="3") echo "checked"; ?>>Both Cleft Lip and Cleft Palate Surgery
											</label>
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<label for="clip">Cleft Lip</label>
											<select name="cLip" id="clip" class="form-control">
												<option value="Complete unilateral cleft lip - right" <?php if($open['CL_LIP']=="Complete unilateral cleft lip - right") echo "selected='selected'"; ?>>Complete unilateral cleft lip - right</option>
                                                <option value="Complete unilateral cleft lip - left" <?php if($open['CL_LIP']=="Complete unilateral cleft lip - left") echo "selected='selected'"; ?>>Complete unilateral cleft lip - left</option>
                                                <option value="Incomplete unilateral cleft lip - right" <?php if($open['CL_LIP']=="Incomplete unilateral cleft lip - right") echo "selected='selected'"; ?>>Incomplete unilateral cleft lip - right</option>
                                                <option value="Incomplete unilateral cleft lip - left" <?php if($open['CL_LIP']=="Incomplete unilateral cleft lip - left") echo "selected='selected'"; ?>>Incomplete unilateral cleft lip - left</option>
                                                <option value="Complete bilateral cleft lip" <?php if($open['CL_LIP']=="Complete bilateral cleft lip") echo "selected='selected'"; ?>>Complete bilateral cleft lip</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<label for="cpalate">Cleft Palate</label>
											<select name="cPalate" id="cpalate" class="form-control">
												<option value="Complete unilateral cleft palate - right" <?php if($open['CL_PALATE']=="Complete unilateral cleft palate - right") echo "selected='selected'"; ?>>Complete unilateral cleft palate - right</option>
												<option value="Complete unilateral cleft palate - left" <?php if($open['CL_PALATE']=="Complete unilateral cleft palate - left") echo "selected='selected'"; ?>>Complete unilateral cleft palate - left</option>
                                                <option value="Incomplete unilateral cleft palate - right" <?php if($open['CL_PALATE']=="Incomplete unilateral cleft palate - right") echo "selected='selected'"; ?>>Incomplete unilateral cleft palate - right</option>
                                                <option value="Incomplete unilateral cleft palate - left" <?php if($open['CL_PALATE']=="Incomplete unilateral cleft palate - left") echo "selected='selected'"; ?>>Incomplete unilateral cleft palate - left</option>
                                                <option value="Complete bilateral cleft palate" <?php if($open['CL_PALATE']=="Complete bilateral cleft palate") echo "selected='selected'"; ?>>Complete bilateral cleft palate</option>
                                                <option value="Incomplete bilateral cleft palate" <?php if($open['CL_PALATE']=="Incomplete bilateral cleft palate") echo "selected='selected'"; ?>>Incomplete bilateral cleft palate</option>
                                                <option value="Submucous cleft - right" <?php if($open['CL_PALATE']=="Submucous cleft - right") echo "selected='selected'"; ?>>Submucous cleft - right</option>
                                                <option value="Submucous cleft - left" <?php if($open['CL_PALATE']=="Submucous cleft - left") echo "selected='selected'"; ?>>Submucous cleft - left</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<label for="comment">Diagnosis</label>
											<textarea class="form-control" rows="5" name="diagnosis" id="comment" readonly><?=$open['DIAG']?></textarea>
                                        </div>
									</div>
									<div class="col-md-12 col-lg-12">
										<?php
										$abnorm = $open['ABNORM'];
										$heart = strpos($abnorm, "Heart");
										$urinary = strpos($abnorm, "Urinary");
										$eyes = strpos($abnorm, "Yes");
										$ears = strpos($abnorm, "Ears");
										$limbs = strpos($abnorm, "Limbs");
										$fAndT = strpos($abnorm, "Fingers and Toes");
										$tongue = strpos($abnorm, "Tongue");
										$skull = strpos($abnorm, "Skull");
										$mandible = strpos($abnorm, "Mandible");
										$rG = strpos($abnorm, "Retarded Growth");
										$mR = strpos($abnorm, "Mental Retardation");
										$nose = strpos($abnorm, "Nose");
										$skin = strpos($abnorm, "Skin");
										$speech = strpos($abnorm, "Speech");
										?>
										<div class="form-group">
											<label for="abrnorm">Please check all areas in which the patient has an abnormality</label><br />
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Heart" <?php if($heart!==false) echo "checked"; else echo "disabled"; ?>>Heart
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Urinary System" <?php if($urinary!==false) echo "checked"; else echo "disabled"; ?>>Urinary System
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Eyes" <?php if($eyes!==false) echo "checked"; else echo "disabled"; ?>>Eyes
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Ears" <?php if($ears!==false) echo "checked"; else echo "disabled"; ?>>Ears
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Limbs" <?php if($limbs!==false) echo "checked"; else echo "disabled"; ?>>Limbs
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Fingers and Toes" <?php if($fAndT!==false) echo "checked"; else echo "disabled"; ?>>Fingers and Toes
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Tongue" <?php if($tongue!==false) echo "checked"; else echo "disabled"; ?>>Tongue
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Skull" <?php if($skull!==false) echo "checked"; else echo "disabled"; ?>>Skull
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Mandible" <?php if($mandible!==false) echo "checked"; else echo "disabled"; ?>>Mandible
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Retarded Growth" <?php if($rG!==false) echo "checked"; else echo "disabled"; ?>>Retarded Growth
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Mental Retardation" <?php if($mR!==false) echo "checked"; else echo "disabled"; ?>>Mental Retardation
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Nose" <?php if($nose!==false) echo "checked"; else echo "disabled"; ?>>Nose
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Skin" <?php if($skin!==false) echo "checked"; else echo "disabled"; ?>>Skin
                                            </label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm[]" id="abrnorm" value="Speech" <?php if($speech!==false) echo "checked"; else echo "disabled"; ?>>Speech
											</label>
										</div>
									</div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="allergy">Does the patient have allergies?</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="allergy" id="allergy" value="Y" <?php if($open['ALLERGY']=="Y") echo "checked"; ?>>Yes
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="allergy" id="allergy" value="N" <?php if($open['ALLERGY']=="N") echo "checked"; ?>>No
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="allergy" id="allergy" value="U" <?php if($open['ALLERGY']=="U") echo "checked"; ?>>Unknown
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="medallergy">Medication Allergies</label>
                                                <input type="text" class="form-control" name="medallergy" id="medallergy" value="<?=$open['M_ALLERGY']?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="otherallergy">Other Allergies</label>
                                                <input type="text" class="form-control" name="otherallergy" id="otherallergy" value="<?=$open['O_ALLERGY']?>" readonly>
                                            </div>
                                        </div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<label for="healthprob">Other Health Problems</label>
											<textarea class="form-control" rows="3" name="healthprob" id="healthprob" readonly><?=$open['HEALTH_PROB']?></textarea>
										</div>
									</div>
								</div>
							</div>


                            <!-- FAMILY HISTORY -->
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Details</h3>
								</div>
								<div class="panel-body">
								<div class="col-md-4 col-lg-4">
									<div class="form-group">
										<label for="pregnancy">Length of Pregnancy (Months)</label>
										<input type="number" class="form-control" name="preg" id="pregnancy" value="<?=$open['PREG']?>" readonly>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="pcomplications">Did the mother have complications during pregnancy?</label>
										<label class="radio-inline">
											<input type="radio" name="pcomplications" id="pcomplications" value="Y" <?php if($open['PCOMP']=="Y") echo "checked"; ?>>Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="pcomplications" id="pcomplications" value="N" <?php if($open['PCOMP']=="N") echo "checked"; ?>>No
										</label>
										<label class="radio-inline">
											<input type="radio" name="pcomplications" id="pcomplications" value="U" <?php if($open['PCOMP']=="U") echo "checked"; ?>>Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="bcomplications">Were there any complications during birth?</label>
										<label class="radio-inline">
											<input type="radio" name="bcomplications" id="bcomplications" value="Y" <?php if($open['BCOMP']=="Y") echo "checked"; ?>>Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="bcomplications" id="bcomplications" value="N" <?php if($open['BCOMP']=="N") echo "checked"; ?>>No
										</label>
										<label class="radio-inline">
											<input type="radio" name="bcomplications" id="bcomplications" value="U" <?php if($open['BCOMP']=="U") echo "checked"; ?>>Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="smoke">Did the mother smoke during pregnancy?</label>
										<label class="radio-inline">
											<input type="radio" name="smoke" id="smoke" value="Y" <?php if($open['SMOKE']=="Y") echo "checked"; ?>>Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="smoke" id="smoke" value="N" <?php if($open['SMOKE']=="N") echo "checked"; ?>>No
										</label>
										<label class="radio-inline">
											<input type="radio" name="smoke" id="smoke" value="U" <?php if($open['SMOKE']=="U") echo "checked"; ?>>Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="alc">Did the mother consume alcohol during pregnancy?</label>
										<label class="radio-inline">
											<input type="radio" name="alc" id="alc" value="Y" <?php if($open['ALC']=="Y") echo "checked"; ?>>Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="alc" id="alc" value="N" <?php if($open['ALC']=="N") echo "checked"; ?>>No
										</label>
										<label class="radio-inline">
											<input type="radio" name="alc" id="alc" value="U" <?php if($open['ALC']=="U") echo "checked"; ?>>Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="immed">Do any of the patient's immediate relatives have a cleft lip, cleft palate, or cleft involving the face?</label>
										<label class="radio-inline">
											<input type="radio" name="immed" id="immed" value="Y" <?php if($open['IMMED']=="Y") echo "checked"; ?>>Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="immed" id="immed" value="N" <?php if($open['IMMED']=="N") echo "checked"; ?>>No
										</label>
										<label class="radio-inline">
											<input type="radio" name="immed" id="immed" value="U" <?php if($open['IMMED']=="U") echo "checked"; ?>>Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="distant">Do any of the patient's distant relatives have a cleft lip, cleft palate, or cleft involving the face?</label>
										<label class="radio-inline">
											<input type="radio" name="distant" id="distant" value="Y" <?php if($open['DISTANT']=="Y") echo "checked"; ?>>Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="distant" id="distant" value="N" <?php if($open['DISTANT']=="N") echo "checked"; ?>>No
										</label>
										<label class="radio-inline">
											<input type="radio" name="distant" id="distant" value="U" <?php if($open['DISTANT']=="U") echo "checked"; ?>>Unknown
										</label>
									</div>
								</div>
                                </div>
							</div>


                            <!-- ECONOMIC STATUS -->
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Type of Housing</h3>
								</div>
								<div class="panel-body">
									<div class="col-lg-6 col-md-6">
                                        <div class="form-group">
											<label for="hstat">House Status</label>
											<select class="form-control" name="houseStat" id="hstat">
												<option value="Old" <?php if($open['H_STAT']=="Old") echo "selected='selected'"; ?>>Old</option>
												<option value="New" <?php if($open['H_STAT']=="New") echo "selected='selected'"; ?>>New</option>
												<option value="Remodeled" <?php if($open['H_STAT']=="Remodeled") echo "selected='selected'"; ?>>Remodeled</option>
											</select>
										</div>
										<div class="form-group">
											<label for="ownship">House Ownership</label>
											<select class="form-control" name="houseOwn" id="ownship">
												<option value="Owned" <?php if($open['H_OWN']=="Owned") echo "selected='selected'"; ?>>Owned</option>
												<option value="Rented" <?php if($open['H_OWN']=="Rented") echo "selected='selected'"; ?>>Rented</option>
												<option value="Shared" <?php if($open['H_OWN']=="Shared") echo "selected='selected'"; ?>>Shared</option>
												<option value="Caretaker" <?php if($open['H_OWN']=="Caretaker") echo "selected='selected'"; ?>>Caretaker</option>
											</select>
										</div>
										<div class="form-group">
											<label for="toilet">Toilet Type</label>
											<select class="form-control" name = "toiletType" id="toilet">
												<option value="Flush" <?php if($open['TOILET']=="Flush") echo "selected='selected'"; ?>>Flush</option>
												<option value="Water Sealed" <?php if($open['TOILET']=="Water Sealed") echo "selected='selected'"; ?>>Water Sealed</option>
												<option value="Open Pit" <?php if($open['TOILET']=="Open Pit") echo "selected='selected'"; ?>>Open Pit</option>
											</select>
										</div>
                                        <div class="form-group">
											<label for="water">Water Source</label>
											<select class="form-control" name = "waterSource" id="water">
												<option value="Faucet" <?php if($open['WATER']=="Faucet") echo "selected='selected'"; ?>>Faucet</option>
												<option value="Spring" <?php if($open['WATER']=="Spring") echo "selected='selected'"; ?>>Spring</option>
												<option value="Well" <?php if($open['WATER']=="Well") echo "selected='selected'"; ?>>Well</option>
												<option value="Water Pump" <?php if($open['WATER']=="Water Pump") echo "selected='selected'"; ?>>Water Pump</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="occup">Number of Occupants</label>
											<input type="number" class="form-control" name="numOccupants" id="occup" min="1" value="<?=$open['H_OCCU']?>" readonly>
										</div>
										<div class="form-group">
											<label for="flrs">Number of Floors</label>
											<input type="number" class="form-control" name="numFloors" id="flrs" min="1" value="<?=$open['H_FLRS']?>" readonly>
										</div>
										<div class="form-group">
											<label for="rms">Number of Rooms</label>
											<input type="number" class="form-control" name="numRooms" id="rms" min="1" value="<?=$open['H_RMS']?>" readonly>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Monthly Expenses</h3>
								</div>
								<div class="panel-body">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="ebill">Electric Bill</label>
											<input type="number" class="form-control" name="elecExp" id="ebill" step = ".01" min="0" value="<?=$open['E_BILL']?>" readonly>
										</div>
										<div class="form-group">
											<label for="fuel">Fuel Expense</label>
											<input type="number" class="form-control" name="fuelExp" id="fuel" step = ".01" min="0" value="<?=$open['FUEL_EXP']?>" readonly>
										</div>
										<div class="form-group">
											<label for="wbill">Water Bill</label>
											<input type="number" class="form-control" name="waterExp" id="wbill" step = ".01" min="0" value="<?=$open['WATER_BILL']?>" readonly>
										</div>
										<div class="form-group">
											<label for="educexp">Educational Expense</label>
											<input type="number" class="form-control" name="educExp" id="educexp" step = ".01" min="0" value="<?=$open['EDUC_EXP']?>" readonly>
										</div>
										<div class="form-group">
											<label for="medexp">Medical Expense</label>
											<input type="number" class="form-control" name="medExp" id="medexp" step = ".01" min="0" value="<?=$open['MED_EXP']?>" readonly>
										</div>
										<div class="form-group">
											<label for="foodexp">Food Expense</label>
											<input type="number" class="form-control" name="foodExp" id="foodexp" step = ".01" min="0" value="<?=$open['FOOD_EXP']?>" readonly>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="rent">Rent Expense</label>
											<input type="number" class="form-control" name="rentExp" id="rent" step = ".01" min="0" value="<?=$open['RENT_EXP']?>" readonly>
										</div>
										<div class="form-group">
											<label for="transpo">Transportation Expense</label>
											<input type="number" class="form-control" name="transExp" id="transpo" step = ".01" min="0" value="<?=$open['TRANSPO']?>" readonly>
										</div>
										<div class="form-group">
											<label for="clothing">Clothing Expense</label>
											<input type="number" class="form-control" name="clothExp" id="clothing" step = ".01" min="0" value="<?=$open['CLOTH_EXP']?>" readonly>
										</div>
										<div class="form-group">
											<label for="cpload">Cellphone Load Expense</label>
											<input type="number" class="form-control" name="cLoadExp" id="cpload" step = ".01" min="0" value="<?=$open['CP_LOAD']?>" readonly>
										</div>
										<div class="form-group">
											<label for="misc">Miscellaneous</label>
											<input type="number" class="form-control" name="otherExp" id="misc" step = ".01" min="0" value="<?=$open['OTHER_EXP']?>" readonly>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Provider of Client's Needs</h3>
								</div>
								<div class="panel-body">
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="pfull">Provider's Full Name</label>
											<input type="text" class="form-control" name="pFullName" id="pfull" value="<?=$open['P_NAME']?>" readonly>
										</div>
										<div class="form-group">
											<label for="poccu">Provider's Occupation</label>
											<input type="text" class="form-control" name="pOccupation" id="poccu" value="<?=$open['P_OCCU']?>" readonly>
										</div>
										<div class="form-group">
											<label for="reltop">Relationship to Patient</label>
											<input type="text" class="form-control" name="rToPatient" id="reltop" value="<?=$open['P_REL']?>" readonly>
										</div>
										<div class="form-group">
											<label for="pminc">Provider's Monthly Income</label>
											<input type="number" class="form-control" name="pMonthInc" id="pminc" step = ".01" min="0" value="<?=$open['P_INC']?>" readonly>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="aname">Name of Agency</label>
											<input type="text" class="form-control" name="agencyName" id="aname" value="<?=$open['A_NAME']?>" readonly>
										</div>
                                        <div class="form-group">
											<label for="ngo">NGO</label>
                                            <input type="text" class="form-control" name="ngo" id="ngo" value="<?=$open['A_NGO']?>" readonly>
										</div>
                                        <div class="form-group">
											<label for="go">GO</label>
                                            <input type="text" class="form-control" name="go" id="go" value="<?=$open['A_GO']?>" readonly>
										</div>
                                        <div class="form-group">
											<?php
											$pNeeds=$open['P_NEEDS'];
											$food = strpos($pNeeds, "Food");
											$educ = strpos($pNeeds, "Education");
											$hous = strpos($pNeeds, "Housing");
											$med = strpos($pNeeds, "Medical Needs");
											$clo = strpos($pNeeds, "Clothing");
											$oth = strpos($pNeeds, "Others");
											?>
											<label for="needsp">Needs provided to patient (please check all that apply)</label><br />
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Food" <?php if($food!==false) echo "checked"; else echo "disabled"; ?>>Food
											</label>
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Education" <?php if($educ!==false) echo "checked"; else echo "disabled"; ?>>Education
											</label>
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Housing" <?php if($hous!==false) echo "checked"; else echo "disabled"; ?>>Housing
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Medical Needs" <?php if($med!==false) echo "checked"; else echo "disabled"; ?>>Medical Needs
											</label>
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Clothing" <?php if($clo!==false) echo "checked"; else echo "disabled"; ?>>Clothing
											</label>
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Others" <?php if($oth!==false) echo "checked"; else echo "disabled"; ?>>Others
											</label>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label for="svc">Services Provided</label>
                                            <textarea class="form-control" rows="3" name="servicesProvided" id="svc" readonly><?=$open['A_SERV']?></textarea>
										</div>
									</div>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Family Income Evaluation</h3>
								</div>
                                <div class="panel-body">
									<div class="form-group">
										<div class="radio">
											<label><input type="radio" name="incomeEval" value="None" <?php if($open['FAM_INC']=="None") echo "checked"; ?>>Yet to evaluate.</label>
										</div>
                                        <div class="radio">
											<label> <input type="radio" name="incomeEval" value="Less" <?php if($open['FAM_INC']=="Less") echo "checked"; ?>>Total family income is not enough to meet the daily basic needs(food, clothing, education, medical needs) of the family.</label>
										</div>
                                        <div class="radio">
											<label><input type="radio" name="incomeEval" value="Enou" <?php if($open['FAM_INC']=="Enou") echo "checked"; ?>>Total income is just enough to meet the daily basic needs of the family.</label>
										</div>
                                        <div class="radio">
											<label> <input type="radio" name="incomeEval" value="More" <?php if($open['FAM_INC']=="More") echo "checked"; ?>>Total family income is more than enough to meet the daily needs of the family.</label>
										</div>
									</div>
								</div>
							</div>


                            <!-- PLAN OF ACTION -->
                            <div class="col-lg-6 col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Dates</h3>
									</div>
								<div class="panel-body">
									<div class="form-group">
										<label for="meddate">Medical Consultation Date</label>
										<input type="date" class="form-control" name="medDate" id="meddate" value="<?=$open['MED_DATE']?>" readonly>
									</div>
                                    <div class="form-group">
										<label for="cpdate">CP Clearance Date</label>
                                        <input type="date" class="form-control" name="cpDate" id="cpdate" value="<?=$open['CP_CLEAR_DATE']?>" readonly>
									</div>
                                    <div class="form-group">
										<label for="adate">Admission Date</label>
                                        <input type="date" class="form-control" name="admDate" id="adate" value="<?=$open['AD_DATE']?>" readonly>
									</div>
									<div class="form-group">
										<label for="sdate">Surgery Date</label>
										<input type="date" class="form-control" name="surgeDate" id="sdate" value="<?=$open['SUR_DATE']?>" readonly>
									</div>
                                    <div class="form-group">
										<label for="ddate">Discharge Date</label>
                                        <input type="date" class="form-control" name="dsDate" id="ddate" value="<?=$open['DC_DATE']?>" readonly>
									</div>
									<div class="form-group">
										<label for="fdate">Follow-Up Date</label>
										<input type="date" class="form-control" name="fDate" id="fdate" value="<?=$open['FF_DATE']?>" readonly>
									</div>
								</div>
                                </div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Remarks</h3>
									</div>
									<div class="panel-body">
										<div class="form-group">
											<label for="medrem">Medical Consultation</label>
                                            <input type="text" class="form-control" name="medRemarks" id="medrem" value="<?=$open['MED_REM']?>" readonly>
										</div>
										<div class="form-group">
											<label for="cpclear">CP Clearance</label>
                                            <input type="text" class="form-control" name="cpRemarks" id="cpclear" value="<?=$open['CP_CLEAR_REM']?>" readonly>
										</div>
										<div class="form-group">
											<label for="adm">Admission</label>
											<input type="text" class="form-control" name="admRemarks" id="adm" value="<?=$open['AD_REM']?>" readonly>
										</div>
										<div class="form-group">
											<label for="srem">Surgery</label>
											<input type="text" class="form-control" name="surgeRemarks" id="srem" value="<?=$open['SUR_REM']?>" readonly>
										</div>
										<div class="form-group">
											<label for="drem">Discharge</label>
											<input type="text" class="form-control" name="dsRemarks" id="drem" value="<?=$open['DC_REM']?>" readonly>
										</div>
										<div class="form-group">
											<label for="frem">Follow-Up</label>
                                            <input type="text" class="form-control" name="fRemarks" id="frem" value="<?=$open['FF_REM']?>" readonly>
										</div>
									</div>
								</div>
							</div>

                            <br /><br />
                            <!-- REFERRAL STATUS -->
                            <div class="col-lg-12 col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h3 class="panel-title">Enclosure (Supporting Documents)</h3>
									</div>
                                    <div class="panel-body">
										<div class="form-group">
											<div class="checkbox">
                                                    <label><input type="checkbox" name="socialCS">Social Case Study (from MSWDO / DSWD)</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="indigency">Indigency Certificate</label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="referral1">Referral Letter
                                                    <input type="text" class="form-control" placeholder="from" name="referral2"></label>
                                                </div>
                                                <div class="checkbox">
                                                    <label><input type="checkbox" name="pertinent1">Other Pertinent Documents
                                                        <input type="text" class="form-control" placeholder="specify" name="pertinent2"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <!-- ASSESSMENT AND RECOMMENDATIONS -->
							<div class="form-group">
								<label for="frem">Worker's Assessment and Recommendations</label>
                                <textarea class="form-control" name="wARec" rows = "8" readonly><?=$open['W_A_R']?></textarea>
							</div>
							<div class="form-group">
								<?php
									$philhealth = $open["PHILHEALTH"];
								?>	
								<div class="checkbox">
                                    <label><input type="checkbox" name="philhealth" <?php if($philhealth!==false) echo "checked"; else echo "disabled"; ?>>This surgery is PhilHealth eligible</label>
                                </div>
							</div>
							<div class="col-md-12 col-lg-12">
								<center>
									<a href="pending.php" class="btn btn-primary">View more pending intakes</a>
								</center>
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

    $(':radio,:checkbox').click(function(){
    return false;
	});

	$('option:not(:selected)').prop('disabled', true);
    </script>

</body>

</html>