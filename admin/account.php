<?php 
define('TITLE','Account');
define('PAGE','account');
include 'include/top.php';
include 'include/dbconnection.php';
if (isset($_POST['submit'])) {
	$user=mysqli_real_escape_string($con,$_POST['user']);
	$npass=mysqli_real_escape_string($con,$_POST['npass']);
	$cpass=mysqli_real_escape_string($con,$_POST['cpass']);
	$sql="SELECT  `username`, `password` FROM `admin_user`";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if ($user==$row['username'] && $npass==$cpass){
			# code...
			$sql1="UPDATE `admin_user` SET `password`='$npass'";
			if($update=mysqli_query($con,$sql1)){
				echo "<script>alert('New Password create');</script>";
			}
		}
	else{
		echo "<script>alert('Password are mismatch.....');</script>";
	}
}
?>
	<!--End Side bar 1st Column-->
		<div class="col-sm-9 col-md-10">
			<!--Start Dashboard 2nd Column-->
			<form class="w-50 mx-auto px-5 my-5 bg-dark py-4 text-white" method="post" action="?self.php">
				<h3 class="text-white">Change Password </h3>
				<div class="form-group ">
					<label>Username</label>
					<input type="text" name="user" class="form-control">
				</div>
				<div class="form-group">
					<label>New Password</label>
					<input type="text" name="npass" class="form-control">
				</div>
				<div class="form-group">
					<label>Confirm Password</label>
					<input type="text" name="cpass" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary">
				</div>
			</form>
	</div>
</body>
</html>