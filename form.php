<?php
  
  // define variables that will hold the user input 
  $studentName = '';
  $studentAdm = '';
  $guardian = '';
  $gender = '';
  //define variables that will hold validation errors 
  $studentNameErr = '';
  $studentAdmErr = '';
  $guardianErr = '';
  $genderErr = '';


  //isset function to check when the button submit has been click
  //if condition to write logic 
  if (isset($_POST['save'])) {
  	# code...
  	//capture users input 
  	if (empty($_POST['studentName'])) {
  		# code...
  		$studentNameErr = "Name input is missing";
  	} else {
  		$studentName = $_POST['studentName'];

  	}
  	if (empty($_POST['admissionNumber'])) {
  		# code...
  		$studentAdmErr = "Adm number missing";
  	} else {
  	  	$studentAdm = $_POST['admissionNumber'];
	
  	}
  	if (empty($_POST['gender'])) {
  		# code...
  		$genderErr = "Gender value is required";
  	} else {
  		$gender = $_POST['gender'];

  	}
  	if (empty($_POST['guardianName'])) {
  		# code...
  		$guardianErr = "Guardian name is required";
  	} else {
  		$guardian = $_POST['guardianName'];

  	}

  	//error handling
  	if (empty($studentNameErr) || empty($studentAdmErr) || empty($genderErr) || empty($guardian)) {
  		# code...
  		# if the error variables are empty is submit data / output data 
  		echo "Student Name : <br>" . $studentName;
  		echo "student Admission: <br>" . $studentAdm;
  		echo "Student Gender : <br>" . $gender;
  		echo "Student Guardian Name : <br>" . $guardian;

  	} else {
  		#if the error variables are not empty
  		echo "<br><p style='text-align:center'>Fill in empty details</p>";

  	}
  }

?>












<!DOCTYPE html>
<html>
<head>
	<title>PHP FORM HANDLING</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
<br>
<br>
<div class="container">
	<h3 class="page-header" style="text-align: center;">FORM HANDLING</h3>
    <hr style="margin-left: 26px; margin-right: 26px;">

    <div class="container">
    	<form action="form.php" method="post">
    	<div class="row form-group">
    		<div class="col">
    			<input type="text" name="studentName" id="studentName" class="form-control" placeholder="Enter Student Name" >
    			<span class="alert alert-red"><?php echo $studentNameErr ?></span>

    		</div>
    		<div class="col">
    			<input type="number" name="admissionNumber" id="admissionNumber" class="form-control" placeholder="Enter Student Admission Number">
    		    		<span class="alert alert-red"><?php echo $studentAdmErr ?></span>

    		</div>

    	</div> 

    	  	<div class="row form-group">
    		<div class="col">
    			 <select name="gender" id="gender" class="form-control">
    			 	<option>Select Gender</option>
    			 	<option value="male">Male</option>
    			 	<option value="female">Female</option>
    			 </select>
    			     		    		<span class="error"><p class="alert alert-red" style="color: red;"><?php echo $genderErr ?><p></span>

    		</div>

    		<div class="col">
    			<input type="text" name="guardianName" id="guardianName" class="form-control" placeholder="Enter Guardian Name">
    			    		<span class="alert alert-red"><?php echo $guardianErr ?></span>

    		</div>
    	</div>

    	  	<div class="row form-group">
    		<div class="col">
    			<input type="submit" name="save" id="save" value="Upload Student Details" class="btn btn-success btn-block">
    		</div>
    		<div class="col">
    			<input value="Reset Form" type="reset" name="reset" id="reset" class="btn btn-danger btn-block">
    		</div>
    	</div>
    		 
    	</form>
    	
    </div>
</div>



<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/style.js"></script>

</body>
</html>



