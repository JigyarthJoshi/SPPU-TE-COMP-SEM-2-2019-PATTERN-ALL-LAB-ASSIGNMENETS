
<!DOCTYPE unspecified PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
	<div class="container">
	<div class="col-lg-12">
	<br><br>
	<h1 class="text-warning text-center">PHP & MySql CRUD Operations</h1>
	<br>
	<table class="table table-striped table hover table-bordered">
		<tr class="bg-dark text-white text-center" >
			<th>Student ID</th>
			<th>Student Name</th>
			<th>Student Class</th>
			<th>Student Division</th>
			<th>Student City</th>
			<th>Update</th>
			<th>Delete</th>
	</tr>
	
<?php 
    include 'conn.php';

    $q="select * from crud_php";
    $query=mysqli_query($con, $q);
    
    while ($res=mysqli_fetch_array($query)) {
        ;
?>
	<tr class="text-center">
	
			<td><?php echo $res['student_id'] ?></td>
			<td><?php echo $res['student_name'] ?></td>
			<td><?php echo $res['class'] ?></td>
			<td><?php echo $res['division'] ?></td>
			<td><?php echo $res['city'] ?></td>
			<td><button class="btn-primary btn"><a href="update.php?id=<?php echo $res['student_id']; ?>" class="text-white">Update </a></button></td>
			<td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $res['student_id']; ?>" class="text-white">Delete </a></button></td>
	
	</tr>
	<?php 
    }
	
	?>
	
	</table>

	</div>
	
	</div>

</body>
</html>