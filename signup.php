<!DOCTYPE html>
<html>
<?php
	include ("include/connection.php");
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$mob_no=$_POST['mob_no'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$cpass=$_POST['cpass'];
		if($pass==$cpass){
			$password=$pass;
		}
		$files=$_FILES['file'];
		$filename=$files['name'];
		$fileerror=$files['error'];
		$filetmp=$files['tmp_name'];
		$fileext=explode('.',$filename);
		$filecheck=strtolower(end($fileext));
		$fileextstored=array('png','jpg','jpeg');
		if(in_array($filecheck, $fileextstored)){
		$destinationfile='../image/'.$filename;
		move_uploaded_file($filename,$destinationfile);
		$result=mysqli_query($con,"INSERT INTO `customer`(`name`, `email`, `contact`, `password`,`Image`) VALUES ('$name','$email','$mob_no','$password','$destinationfile')");
		if ($result) {
			echo "<script>alert('Account created');</script>";
			header("location:signin.php");
		}
		
		
	}
}
	
?>

<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
html{
		width: 100%;	
}
body{
		background:linear-gradient(30deg,skyblue,orange,lightgreen);
		

}
.form-sign{
		margin:10px;
		border:1px solid white;
		background: #fff;
	}

	</style>
</head>
<body>
	<div class="container">
		<div class="login-content w-50 mx-auto">
	
	<form class="form-sign px-3 py-4 " method="post" enctype="multipart/form-data"><h3 class="text-white btn-success py-2 text-center"  >Registration</h3><hr class="bg-info">
	
		<label>Name
		</label><input type="text" name="name" class="form-control" required>
		<label>Mobile No
		</label><input type="text" name="mob_no" class="form-control" required>
		<label>Email
		</label><input type="email" name="email" class="form-control" required>
		<label>Add Image</label><input class="form-control" type="file" name="file">

		<label>Password
		</label><input type="password" name="pass" class="form-control" required>
		<label>Confirm Password
		</label><input type="password" name="cpass" class="form-control" required><br>
		<input type="submit" name="submit" value="Register" class="btn btn-success px-3">&nbsp;<input type="reset" name="reset" value="Reset" class="btn btn-danger px-4"><span class="text-muted ml-4 ">Already user account exists <a href="signin.php" class="text-success">Login</a>!</span>
	</form>
</div>
</div>
</body>
</html>
	