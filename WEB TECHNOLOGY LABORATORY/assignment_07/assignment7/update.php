<?php 
include 'conn.php';


if (isset($_POST['done']))
{
    
    $studentid=$_GET['id'];
    $studentname=$_POST['studentname'];
    $studentclass=$_POST['studentclass'];
    $studentdiv=$_POST['studentdiv'];
    $studentcity=$_POST['studentcity'];
    
    $q="update crud_php set student_id=$studentid, student_name='$studentname', class='$studentclass', division='$studentdiv', city='$studentcity' where student_id=$studentid "
    ;
    $query=mysqli_query($con,$q);
    
    header('location:display.php');
}



?>


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
				<h1 class="text-white text-center"> Update Operations </h1>
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