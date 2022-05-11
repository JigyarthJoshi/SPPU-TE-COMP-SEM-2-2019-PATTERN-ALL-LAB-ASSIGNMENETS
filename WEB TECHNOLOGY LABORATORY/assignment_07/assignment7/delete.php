<?php 
include 'conn.php';

$id=$_GET['id'];

$q=" DELETE FROM `crud_php` WHERE student_id=$id ";

mysqli_query($con,$q);

header('location:display.php');

?>