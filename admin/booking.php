<?php 

define('TITLE','Booking');
define('PAGE','booking');
include 'include/top.php';
include '../include/connection.php'
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<style>
	
	.table{
		width:100%;
		display: block;
		overflow: all;
		overflow-x:hidden;
		height:450px;
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
		width:20%;
	}
 	.Search{
 		position: fixed;
 		right:150px;
 		width:300px;
 		margin:10px;

 	
 	}
</style>
<div class="col-sm-9 col-md-10">
			<!--Start Dashboard 2nd Column-->
			<div class="row mx-5">
			<!--table-->

			<div><input id="myInput" type="text" placeholder="Search.." class="Search"></div>
				<h3>Booking Details</h3>
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
					$sql="SELECT *  FROM `booking` WHERE `status`='Yes'";
					$result=mysqli_query($con,$sql);
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
				
					<tbody id="myTable">
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

	</div>	
</div>
</body>
</html>