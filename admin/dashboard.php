<?php
define('TITLE','Dashboard');
define('PAGE','dashboard');
include ('include/top.php');
include 'include/dbconnection.php';
?>
<style>
	
	.table{
		display: block;
		overflow: all;
		margin: 0 auto;
		height:350px;
		text-align: center;
		padding:auto;
		border-bottom: 1px solid black;
		box-shadow: 2px 2px 2px 2px gray;
		z-index: 3;
	}
	.table thead th{
		position: sticky;
		top: 0;
		color: white;
		background: #000;
		width:10%;
	}

 	
</style>
<div class="col-sm-9 col-md-10">
			<!--Start Dashboard 2nd Column-->
			<div class="row text-center mx-5">
				<div class="col-sm-4 mt-5">
					<div class="card text-white bg-danger mb-3">
						<div class="card-header">Customer</div>
						<div class="card-body">
						<h4 class="card-title"><?php

	
					$sql1="select ID from customer";
					$row=mysqli_num_rows(mysqli_query($con,$sql1));
					echo $row;?></h4>
						<a href="customer.php" class="btn text-white">View</a>
					</div>
					</div>
				</div>
				<div class="col-sm-4 mt-5">
					<div class="card text-white bg-info mb-3">
						<div class="card-header">Package</div>
						<div class="card-body">
						<h4 class="card-title">
							<?php
					$sql2="select Id from package";
					$row1=mysqli_num_rows(mysqli_query($con,$sql2));
					echo $row1;?>
						</h4>
						<a href="package.php" class="btn text-white">View</a>
					</div>
					</div>
				</div>
				<div class="col-sm-4 mt-5">
					<div class="card text-white bg-success mb-3">
						<div class="card-header">Booking</div>
						<div class="card-body">
						<h4 class="card-title"><?php

	
					$sql3="select Id from booking";
					$ro3=mysqli_num_rows(mysqli_query($con,$sql3));
					echo $ro3;?></h4>
						<a href="booking.php" class="btn text-white">View</a>
					</div>
					</div>
				</div>
			</div>
			<h3>List Of Cancel Booking</h3>
			<table class='table'>
					<thead><tr>
					<th>Place</th>
					<th>Mode Of Traveling</th>
					<th>Travelling Date</th>
					<th>Persons</th>
					<th>Stay Cost</th>
					<th>Food Cost</th>
					<th>Travelling Cost</th>
					<th>Total Cost</th>
					<th>Paid</th>
					<th>User Id</th>
					</tr>
					</thead>
			<?php
					$sql4="SELECT *  FROM `booking` WHERE `status`='No'";
					$result=mysqli_query($con,$sql4);
					while($row=mysqli_fetch_array($result)){
						$t1=$row['Place'];
						$t2=$row['Mode Of Travelling'];
						$t3=$row['Travelling Date'];
						$t4=$row['Persons'];
						$t5=$row['Stay Cost'];
						$t6=$row['Food Cost'];
						$t7=$row['Travelling Cost'];
						$t8=$row['Total Cost'];
						$t9=$row['status'];
						$t10=$row['User Id'];


				?>
				
					<tbody>
						<tr>
							<td><?php echo $t1;?></td>
							<td><?php echo $t2;?></td>
							<td><?php echo $t3;?></td>
							<td><?php echo $t4;?></td>
							<td><?php echo $t5;?></td>

							<td><?php echo $t6;?></td>
							<td><?php echo $t7;?></td>

							<td><?php echo $t8;?></td>
							<td><?php echo $t9;?></td>
							<td><?php echo $t10;?></td>
						</tr>
					</tbody>
			
					<?php }?>
							
							
					</table>
			
</div>
<?php include 'include/foot.php';?>
</body>
</html>