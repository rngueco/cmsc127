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
                    <h1>Intake Form</h1>
                </div>
                <div class="col-lg-12 col-md-12" id="toRep">
                    <form onsubmit="new_intake()" method="post">
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
                                           <input type='text' class="form-control" name='lname' id="lname" placeholder="Enter patient's surname" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="fname">First Name</label>
                                            <input type='text' class="form-control" name='fname' id="fname" placeholder="Enter patient's first name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="mi">Middle Initial</label>
											<input type='text' class="form-control" name='minitial' maxlength="1" id="mi" placeholder="Enter patient's middle initial">
										</div>
                                    </div>

									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="age">Age</label>
											<input type="number" class="form-control" name="age" id="age" min="0" placeholder="Enter patient's age">
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="weight">Weight (in lbs)</label>
											<input type="number" class="form-control" name="weight" id="weight" min="0" required>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="cs">Civil Status</label>
											<select class="form-control" name = "cs" id="cs">
												<option value="Single" selected="selected">Single</option>
												<option value="Married">Married</option>
												<option value="Divorced">Divorced</option>
												<option value="Widowed">Widowed</option>
											</select>
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="gender">Gender</label><br />
											<label class="radio-inline">
											<input type="radio" name="gender" value="M" checked>Male </label>
											<label class="radio-inline">
												<input type="radio" name="gender" value="F">Female
											</label>
										</div>
									</div>

									<div class="col-md-4 col-lg-4">
										<div class="form-group">
											<label for="bday">Birthdate</label>
											<input type="date" class="form-control" name="birthDate" id="bday" placeholder="mm/dd/yyyy">
										</div>
									</div>
                                    <div class="col-md-8 col-lg-8">
                                        <div class="form-group">
                                            <label for="bplace">Birthplace</label>
											<input type="text" class="form-control" name="birthplace" id="bplace">
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
											<input type="text" class="form-control" name="provAddress" id="provadd">
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="provzip">ZIP Code</label>
											<input type="text" class="form-control" name="provZIP" id="provzip" maxlength="4" pattern="[01-9]{4,}">
										</div>
									</div>

									<div class="col-md-9 col-lg-9">
										<div class="form-group">
											<label for="presadd">Present Address</label>
											<input type="text" class="form-control" name="presentAddress" id="presadd">
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="preszip">ZIP Code</label>
											<input type="text" class="form-control" name="presZIP" id="preszip" maxlength="4" pattern="[01-9]{4,}">
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
											<input type="text" class="form-control" name="religion" id="rel">
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="occu">Occupation</label>
											<input type="text" class="form-control" name="occupation" id="occu">
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="minc">Monthly Income</label>
											<input type="number" class="form-control" name="monthlyIncome" id="minc">
										</div>
									</div>
									<div class="col-md-3 col-lg-3">
										<div class="form-group">
											<label for="cpnum">Contact number</label>
											<div class="input-group input-group-md">
												<span class="input-group-addon">+639</span>
												<input type="text" class="form-control" name="contactNumber" id="cpnum" maxlength="9" pattern="[01-9]{9,}" >
											</div>
										</div>
									</div>
									<div class="col-md-4 col-lg-4">
										<div class="form-group">
											<label for="educbg">Educational Background</label>
											<select class="form-control" name = "educBack" id="educbg">
												<option value="None" selected="selected">No Schooling Attended</option>
												<option value="Elementary">Elementary</option>
												<option value="High School">High School</option>
												<option value="College Undergraduate">College Undergraduate</option>
												<option value="College Graduate" >College Graduate</option>
												<option value="Vocational" >Vocational</option>
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
												<input type="radio" name="surgerynum" id="surgerynum" value="Y">Yes
											</label>
											<label class="radio-inline">
												<input type="radio" name="surgerynum" id="surgerynum" value="N" checked>No
                                            </label>
										</div>
										<div class="form-group">
											<label for="surgerytype">If yes, pick the type of surgery the patient had</label><br />
											<label class="radio-inline">
												<input type="radio" name="surgerytype" id="surgerytype" value="1">Cleft Lip Surgery
											</label>
											<label class="radio-inline">
												<input type="radio" name="surgerytype" id="surgerytype" value="2">Cleft Palate Surgery
											</label>
											<label class="radio-inline">
												<input type="radio" name="surgerytype" id="surgerytype" value="3">Both Cleft Lip and Cleft Palate Surgery
											</label>
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<label for="clip">Cleft Lip</label>
											<select name="cLip" id="clip" class="form-control">
												<option value="Complete unilateral cleft lip - right">Complete unilateral cleft lip - right</option>
                                                <option value="Complete unilateral cleft lip - left">Complete unilateral cleft lip - left</option>
                                                <option value="Incomplete unilateral cleft lip - right">Incomplete unilateral cleft lip - right</option>
                                                <option value="Incomplete unilateral cleft lip - left">Incomplete unilateral cleft lip - left</option>
                                                <option value="Complete bilateral cleft lip">Complete bilateral cleft lip</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<label for="cpalate">Cleft Palate</label>
											<select name="cPalate" id="cpalate" class="form-control">
												<option value="Complete unilateral cleft palate - right">Complete unilateral cleft palate - right</option>
												<option value="Complete unilateral cleft palate - left">Complete unilateral cleft palate - left</option>
                                                <option value="Incomplete unilateral cleft palate - right">Incomplete unilateral cleft palate - right</option>
                                                <option value="Incomplete unilateral cleft palate - left">Incomplete unilateral cleft palate - left</option>
                                                <option value="Complete bilateral cleft palate">Complete bilateral cleft palate</option>
                                                <option value="Incomplete bilateral cleft palate">Incomplete bilateral cleft palate</option>
                                                <option value="Submucous cleft - right">Submucous cleft - right</option>
                                                <option value="Submucous cleft - left">Submucous cleft - left</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<label for="comment">Diagnosis</label>
											<textarea class="form-control" rows="5" name="diagnosis" id="comment" placeholder="Additional comments and description of diagnosis"></textarea>
                                        </div>
									</div>
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<label for="abrnorm">Please check all areas in which the patient has an abnormality</label><br />
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Heart">Heart
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Urinary System">Urinary System
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Eyes">Eyes
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Ears">Ears
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Limbs">Limbs
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Fingers and Toes">Fingers and Toes
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Tongue">Tongue
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Skull">Skull
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Mandible">Mandible
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Retarded Growth">Retarded Growth
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Mental Retardation">Mental Retardation
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Nose">Nose
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Skin">Skin
                                            </label>
											<label class="checkbox-inline">
												<input type="checkbox" name="abnorm" id="abrnorm" value="Speech">Speech
											</label>
										</div>
									</div>
                                        <div class="col-md-12 col-lg-12">
                                            <div class="form-group">
                                                <label for="allergy">Does the patient have allergies?</label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="allergy" id="allergy" value="Y">Yes
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="allergy" id="allergy" value="N">No
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="allergy" id="allergy" value="U">Unknown
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="medallergy">Medication Allergies</label>
                                                <input type="text" class="form-control" name="medallergy" id="medallergy">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <div class="form-group">
                                                <label for="otherallergy">Other Allergies</label>
                                                <input type="text" class="form-control" name="otherallergy" id="otherallergy">
                                            </div>
                                        </div>
									<div class="col-md-6 col-lg-6">
										<div class="form-group">
											<label for="healthprob">Other Health Problems</label>
											<textarea class="form-control" rows="3" name="healthprob" id="healthprob"></textarea>
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
										<input type="number" class="form-control" name="preg" id="pregnancy">
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="pcomplications">Did the mother have complications during pregnancy?</label>
										<label class="radio-inline">
											<input type="radio" name="pcomplications" id="pcomplications" value="Y">Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="pcomplications" id="pcomplications" value="N">No
										</label>
										<label class="radio-inline">
											<input type="radio" name="pcomplications" id="pcomplications" value="U">Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="bcomplications">Were there any complications during birth?</label>
										<label class="radio-inline">
											<input type="radio" name="bcomplications" id="bcomplications" value="Y">Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="bcomplications" id="bcomplications" value="N">No
										</label>
										<label class="radio-inline">
											<input type="radio" name="bcomplications" id="bcomplications" value="U">Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="smoke">Did the mother smoke during pregnancy?</label>
										<label class="radio-inline">
											<input type="radio" name="smoke" id="smoke" value="Y">Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="smoke" id="smoke" value="N">No
										</label>
										<label class="radio-inline">
											<input type="radio" name="smoke" id="smoke" value="U">Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="alc">Did the mother consume alcohol during pregnancy?</label>
										<label class="radio-inline">
											<input type="radio" name="alc" id="alc" value="Y">Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="alc" id="alc" value="N">No
										</label>
										<label class="radio-inline">
											<input type="radio" name="alc" id="alc" value="U">Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="immed">Do any of the patient's immediate relatives have a cleft lip, cleft palate, or cleft involving the face?</label>
										<label class="radio-inline">
											<input type="radio" name="immed" id="immed" value="Y">Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="immed" id="immed" value="N">No
										</label>
										<label class="radio-inline">
											<input type="radio" name="immed" id="immed" value="U">Unknown
										</label>
									</div>
								</div>
								<div class="col-md-12 col-lg-12">
									<div class="form-group">
										<label for="distant">Do any of the patient's distant relatives have a cleft lip, cleft palate, or cleft involving the face?</label>
										<label class="radio-inline">
											<input type="radio" name="distant" id="distant" value="Y">Yes
										</label>
										<label class="radio-inline">
											<input type="radio" name="distant" id="distant" value="N">No
										</label>
										<label class="radio-inline">
											<input type="radio" name="distant" id="distant" value="U">Unknown
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
												<option value="Old" selected="selected">Old</option>
												<option value="New">New</option>
												<option value="Remodeled">Remodeled</option>
											</select>
										</div>
										<div class="form-group">
											<label for="ownship">House Ownership</label>
											<select class="form-control" name="houseOwn" id="ownship">
												<option value="Owned" selected="selected">Owned</option>
												<option value="Rented">Rented</option>
												<option value="Shared">Shared</option>
												<option value="Caretaker">Caretaker</option>
											</select>
										</div>
										<div class="form-group">
											<label for="toilet">Toilet Type</label>
											<select class="form-control" name = "toiletType" id="toilet">
												<option value="Flush" selected="selected">Flush</option>
												<option value="Water Sealed">Water Sealed</option>
												<option value="Open Pit">Open Pit</option>
											</select>
										</div>
                                        <div class="form-group">
											<label for="water">Water Source</label>
											<select class="form-control" name = "waterSource" id="water">
												<option value="Faucet" selected="selected">Faucet</option>
												<option value="Spring">Spring</option>
												<option value="Well">Well</option>
												<option value="Water Pump">Water Pump</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="occup">Number of Occupants</label>
											<input type="number" class="form-control" name="numOccupants" id="occup" min="1">
										</div>
										<div class="form-group">
											<label for="flrs">Number of Floors</label>
											<input type="number" class="form-control" name="numFloors" id="flrs" min="1">
										</div>
										<div class="form-group">
											<label for="rms">Number of Rooms</label>
											<input type="number" class="form-control" name="numRooms" id="rms" min="1">
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
											<input type="number" class="form-control" name="elecExp" id="ebill" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="fuel">Fuel Expense</label>
											<input type="number" class="form-control" name="fuelExp" id="fuel" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="wbill">Water Bill</label>
											<input type="number" class="form-control" name="waterExp" id="wbill" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="educexp">Educational Expense</label>
											<input type="number" class="form-control" name="educExp" id="educexp" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="medexp">Medical Expense</label>
											<input type="number" class="form-control" name="medExp" id="medexp" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="foodexp">Food Expense</label>
											<input type="number" class="form-control" name="foodExp" id="foodexp" step = ".01" min="0">
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="rent">Rent Expense</label>
											<input type="number" class="form-control" name="rentExp" id="rent" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="transpo">Transportation Expense</label>
											<input type="number" class="form-control" name="transExp" id="transpo" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="clothing">Clothing Expense</label>
											<input type="number" class="form-control" name="clothExp" id="clothing" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="cpload">Cellphone Load Expense</label>
											<input type="number" class="form-control" name="cLoadExp" id="cpload" step = ".01" min="0">
										</div>
										<div class="form-group">
											<label for="misc">Miscellaneous</label>
											<input type="number" class="form-control" name="otherExp" id="misc" step = ".01" min="0">
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
											<input type="text" class="form-control" name="pFullName" id="pfull">
										</div>
										<div class="form-group">
											<label for="poccu">Provider's Occupation</label>
											<input type="text" class="form-control" name="pOccupation" id="poccu">
										</div>
										<div class="form-group">
											<label for="reltop">Relationship to Patient</label>
											<input type="text" class="form-control" name="rToPatient" id="reltop">
										</div>
										<div class="form-group">
											<label for="pminc">Provider's Monthly Income</label>
											<input type="number" class="form-control" name="pMonthInc" id="pminc" step = ".01" min="0">
										</div>
									</div>
									<div class="col-lg-6 col-md-6">
										<div class="form-group">
											<label for="aname">Name of Agency</label>
											<input type="text" class="form-control" name="agencyName" id="aname">
										</div>
                                        <div class="form-group">
											<label for="ngo">NGO</label>
                                            <input type="text" class="form-control" name="ngo" id="ngo">
										</div>
                                        <div class="form-group">
											<label for="go">GO</label>
                                            <input type="text" class="form-control" name="go" id="go">
										</div>
                                        <div class="form-group">
											<label for="needsp">Needs provided to patient (please check all that apply)</label><br />
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Food">Food
											</label>
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Education">Education
											</label>
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Housing">Housing
											</label>
											<label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Medical Needs">Medical Needs
											</label>
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Clothing">Clothing
											</label>
                                            <label class="checkbox-inline">
												<input type="checkbox" name="needsProvided" id="needsp" value="Others">Others
											</label>
										</div>
									</div>
									<div class="col-lg-12 col-md-12">
										<div class="form-group">
											<label for="svc">Services Provided</label>
                                            <textarea class="form-control" rows="3" name="servicesProvided" id="svc"></textarea>
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
											<label><input type="radio" name="incomeEval" value="None" checked>Yet to evaluate.</label>
										</div>
                                        <div class="radio">
											<label> <input type="radio" name="incomeEval" value="Less">Total family income is not enough to meet the daily basic needs(food, clothing, education, medical needs) of the family.</label>
										</div>
                                        <div class="radio">
											<label><input type="radio" name="incomeEval" value="Enou">Total income is just enough to meet the daily basic needs of the family.</label>
										</div>
                                        <div class="radio">
											<label> <input type="radio" name="incomeEval" value="More">Total family income is more than enough to meet the daily needs of the family.</label>
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
										<input type="date" class="form-control" name="medDate" id="meddate">
									</div>
                                    <div class="form-group">
										<label for="cpdate">CP Clearance Date</label>
                                        <input type="date" class="form-control" name="cpDate" id="cpdate">
									</div>
                                    <div class="form-group">
										<label for="adate">Admission Date</label>
                                        <input type="date" class="form-control" name="admDate" id="adate">
									</div>
									<div class="form-group">
										<label for="sdate">Surgery Date</label>
										<input type="date" class="form-control" name="surgeDate" id="sdate">
									</div>
                                    <div class="form-group">
										<label for="ddate">Discharge Date</label>
                                        <input type="date" class="form-control" name="dsDate" id="ddate">
									</div>
									<div class="form-group">
										<label for="fdate">Follow-Up Date</label>
										<input type="date" class="form-control" name="fDate" id="fdate">
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
                                            <input type="text" class="form-control" name="medRemarks" id="medrem" placeholder="Additional comments for medical consultation">
										</div>
										<div class="form-group">
											<label for="cpclear">CP Clearance</label>
                                            <input type="text" class="form-control" name="cpRemarks" id="cpclear" placeholder="Additional comments for CP clearance">
										</div>
										<div class="form-group">
											<label for="adm">Admission</label>
											<input type="text" class="form-control" name="admRemarks" id="adm" placeholder="Additional comments for admission">
										</div>
										<div class="form-group">
											<label for="srem">Surgery</label>
											<input type="text" class="form-control" name="surgeRemarks" id="srem" placeholder="Additional comments for surgery">
										</div>
										<div class="form-group">
											<label for="drem">Discharge</label>
											<input type="text" class="form-control" name="dsRemarks" id="drem" placeholder="Additional comments for discharge">
										</div>
										<div class="form-group">
											<label for="frem">Follow-Up</label>
                                            <input type="text" class="form-control" name="fRemarks" id="frem" placeholder="Additional comments for follow-up">
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
                                <textarea class="form-control" name="wARec" rows = "8"></textarea>
							</div>
                            <div class="form-group">
								<center>
									<input type="submit" value="Submit" class="btn btn-primary">
								</center>
							</div>
                        </div>
                    </form>
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