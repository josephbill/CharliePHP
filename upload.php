<?php
$username = '';
//uploading details
//path to store uploads 
$target_dir = "uploads/";
$target = "images/";
//path of the file selected 
$target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
//variable to track the process 
$uploadOk = 1;
//variable to hold the file extension names
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//capturing our users input 
//using isset to check if upload button has been clicked 
if(isset($_POST["save"])) {
  $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
  $username = $_POST['name'];
  if($check !== false) {
  	move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target);
  	echo "Image has been moved. <br>";
    echo "File is an image - " . $check["mime"] . "<br>" . $username . "" ;
    $uploadOk = 1;
    // header("Location: fileUpload.php");
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
            // header("Location: fileUpload.php");

  }
}



?>