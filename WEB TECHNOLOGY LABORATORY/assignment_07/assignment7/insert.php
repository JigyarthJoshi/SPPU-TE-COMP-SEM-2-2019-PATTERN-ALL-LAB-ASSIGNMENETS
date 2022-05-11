<?php 
include 'conn.php';

if (isset($_POST['done'])) 
{
    
    $studentid=$_POST['studentid'];
    $studentname=$_POST['studentname'];
    $studentclass=$_POST['studentclass'];
    $studentdiv=$_POST['studentdiv'];
    $studentcity=$_POST['studentcity'];
    
    $q="INSERT INTO `crud_php`(`student_id`, `student_name`, `class`, `division`, `city`) VALUES ('$studentid','$studentname','$studentclass','$studentdiv','$studentcity')"
;    
    $query=mysqli_query($con, $q);
}





?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>
	<title> </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
<div class="col-lg-6 m-auto">
	<form method="post">
		<br><br><div class="card">
			<div class="card-header bg-dark">
				<h1 class="text-white text-center"> Insert Operations </h1>
			</div>		
			<br><label>Student Id </label>
			<input type="text" name="studentid" class="form-control"> <br> 
			
			<label>Student Name </label>
			<input type="text" name="studentname" class="form-control"> <br> 
			
			<label>Student Class </label>
			<input type="text" name="studentclass" class="form-control"> <br> 
			
			<label>Student Division </label>
			<input type="text" name="studentdiv" class="form-control"> <br> 
			
			<label>Student City </label>
			<input type="text" name="studentcity" class="form-control"> <br> 
			
			<button class="btn btn-success" type="submit" name="done">Submit </button><br>
		</div>
	</form>
</div>

</body>


</html>