<!DOCTYPE html>
<?php
	include 'include/dbconnection.php';
	if(isset($_POST['reset'])){
		$admin=$_POST['admin'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];
		if($password==$cpassword){

		$sql="SELECT `password` FROM `admin_user` WHERE `username`='$admin'";
		$result=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($result);
		if($row>0){
			$update="UPDATE `admin_user` SET `password`='$password' WHERE `username`='$admin'";
			$udt=mysqli_query($con,$update);
			header("location:login.php");
		}
		else{
			echo "<script>alert('User not found');</script>";
		}
		}
		else{
			echo "<script>alert('Password mismatch');</script>";
		}
	}
?>
<html>
<head>
	<title>Forget Password !</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
</head>

<body><form class="card w-50 mx-auto my-4 px-4 py-4" method="post">
	<h2 class="card-title bg-danger text-light text-center py-3">Forget Password !</h2>
	<input class="form-control text-muted col-5 col-md-5 mx-auto" type="text" name="admin" placeholder="Admin"><br>
	<input class="form-control text-muted col-5 col-md-5 cols-sm-12 mx-auto"  type="password" name="password" placeholder="New Password"><br>

	<input class="form-control text-muted col-5 col-md-5 cols-sm-12 mx-auto"  type="password" name="cpassword" placeholder="Confirm Password"><br>
	<input class="btn btn-success col-2 mx-auto" type="submit" value="Submit" name="reset">
</form>
</body>
</html>