<?php
 include 'include/dbconnection.php';
 error_reporting(0);
 	$id=$_GET['id'];
 	$sql="DELETE FROM customer WHERE ID='$id'";
 	$result=mysqli_query($con,$sql);
 	if($result){
 		echo "<script>alert('Package has deleted..');</script>";
 		header('location:customer.php');
 	}
 ?>