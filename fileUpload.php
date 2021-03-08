<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

   <div class="container" style="margin-top: 20px;">
   	  <form action="upload.php" method="post" enctype="multipart/form-data">

   	  	  <label style="padding: 10px">Enter Name</label>
   	  	  <input type="text" name="name" id="name" class="form-control">


   	  	  <label style="padding: 10px">Upload Image</label>
   	  	  <input type="file" name="imageUpload" id="imageUpload" class="form-control"> 


   	  	  <label style="padding: 10px">Upload Data</label>
   	  	  <input type="submit" name="save" id="save" value="Upload"  class="btn btn-success form-control">  	  	


   	  </form>
   	
   </div>



</body>
</html>