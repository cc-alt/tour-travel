<?php
 include 'include/connection.php';
 session_start();
	$msg="";
	if (isset($_POST['submit'])) {
		$username=$_POST['user'];
		$password=$_POST['pass'];

		if(!empty($username) && !empty($password)){
		
		$sql="select * from customer where email='$username' and password='$password'";
		$res=mysqli_query($con,$sql);
		$count=mysqli_num_rows($res);
		if($count>0){
			$dis=mysqli_fetch_array($res);
			$_SESSION['user_name']=$dis['name'];
			$_SESSION['email']=$username;
			header('location:index.php');
			die();
		}
		else{
			$msg="Please enter correct login details";
		}
	}
	else{
		if (empty($username)) {
			# code...

				echo "script>alert('Please Enter Username...');</script>";
		}
		if(empty($password)){

			echo "Username or password incorrect...";
		}
	}
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
	*{
		margin:0px;
		padding:0px;
	}
	html{
		width: 100%;
		height:100%;
	}
	body{
		background:linear-gradient(30deg,skyblue,orange,lightgreen);
	}
	.form-sign{
		margin-top: 30%;
		border:1px solid white;
		background: #fff;

	}

	</style>
</head>
<script>
	function val(){
		var a=document.
	}
	</script>
<body>
<div class="container">
		<div class="login-content w-50 mx-auto">
				<form method="post" class="form-sign px-3 py-4" >
					<h2 class="text-center bg-danger text-light py-1">User Login</h2>
					<hr class="bg-danger">
					<div class="form-group">
						<label>Username</label>
						<input class="form-control" type="text" name="user" placeholder="xyz@mail.com" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input class="form-control" type="password" name="pass" placeholder="Password" required>
					</div>
					<div class="field-error"><?php
					$msg="";

					 echo $msg;?></div>
					<button class="btn btn-success btn-flat w-100" type="submit" name="submit">Sign in</button>
					
					
	
	<a href="signup.php" class="text-info">Create New One!</a>
	<a href="forgetpass.php" class="text-warning" style="float: right;">Forget Password!</a>

</form>

</body>
</html>


