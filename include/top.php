<style >
	.navbar-nav .nav-item .nav-link{
		color:#fff;
	}
</style>
<nav class="navbar navbar-expands-lg text-white bg-dark">
		<a href="#" class="navbar-brand text-white">Tour&Travel</a>
		<div class="login">
			<span style="position: absolute;
				right:100px;
			"><?php
			session_start();
			error_reporting(0);

			if(isset($_SESSION['user_name'])){		
			echo " Welcome ".$_SESSION['user_name'];}
				?>
		</span>
		</div>
	<button class="navbar-toggler bg-warning" type="button" data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span></button>
	

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto ">
			<li class="nav-item active">
				<a href="index.php#section-1"  onclick="javascript:window.open('index.php#section-1','_self')" class="nav-link">Home</a>
			</li>
			<li class="nav-item">
				<a href="index.php#section-2"  onclick="javascript:window.open('index.php#section-2','_self')" class="nav-link">About us</a>
			</li>

			<li class="nav-item">
				<a  href="index.php#section-3"  onclick="javascript:window.open('index.php#section-3','_self')" class="nav-link">Gallery</a>
			</li>

			<li class="nav-item">
				<a href="index.php#section-4"  onclick="javascript:window.open('index.php#section-4','_self')" class="nav-link">Contact US</a>
			</li>

			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Log In</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a href="admin/login.php" class="dropdown-item">Admin</a>
				<a href="signin.php" class="dropdown-item">User</a>
			</div>
<?php 
			echo '<a href="logout.php" class="nav-link"><span class="fa fa-sign-out"></span>Logout</a></span>';

?>
		</li>
		</ul>
	</div>
</nav>