<?php
	session_start();
	include 'include/connection.php';
	$user=$_SESSION['email'];
	$name=$_SESSION['user_name'];
	$sql="SELECT * FROM `booking` WHERE `User Id`='$user'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	$place=$row['Place'];

?>
<style type="text/css">
	span{
		font-weight: bold;
		font-size: 20px;

	}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<div class="container my-5">  

	<table class="table" border="1px">
		<thead class="bg-dark text-center text-light">
			<th>Receipt</th>
		</thead>
		<tbody>
				<tr ><td><span>User Id:</span><?php echo $user;?></td>
				</tr>
				<tr><td><span>Name:</span><?php echo $name;?></td></tr>
				<tr><td><span>Place:</span><?php echo $place;?></td>
				<tr><td><span>Booking Date:</span><?php echo $row['Travelling Date'];?></td></tr>
				<tr><td><span>Description:</span><?php
				 $sql="SELECT  `Description`,`Image` FROM `package`  WHERE `Place`='$place'";
				 $r=mysqli_fetch_array(mysqli_query($con,$sql));
				 echo $r['Description'];
				 ?></td></tr>
				<tr><td><span>Total Cost:</span><?php echo $row['Total Cost']?></td>	
			</tr>

		</tbody>
		<tfoot><tr><td><a href="javascript:window.print()" class="btn btn-success">Print</a></td></tr></tfoot>
	</table>
	<div><a href="index.php">Return to homepage</a></div>
</div>