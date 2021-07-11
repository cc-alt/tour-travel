<!DOCTYPE html>
<?php define('TITLE','Feedback');
define('PAGE','feedback');
include 'include/top.php';
?>

<style>
	.table{
		display: block;
		overflow: all;
		overflow-x:hidden;
		height:400px;
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
		width: 20%;
	}
 tbody{


	}
</style>
<div class="col-sm-9 col-md-10">
<div class="row mx-5">
		<h3 class="my-3 ">Customer Feedbacks Table</h3>
			<?php
					 include 'include/dbconnection.php';
					  $sql='select * FROM feedback';
					  $display=mysqli_query($con,$sql);
					  
?>
					<table  class='table' id='example'>
					<thead>
						<tr><th>S.No</th>
						<th>Name</th>
						<th>Email</th>
						<th>Feedback</th>
						<th>Date</th>
					
						</tr>
					</thead>
					<?php
					while($res=mysqli_fetch_assoc($display)){
					  	$t1=$res['ID'];
					  	$t2=$res['Name'];
					  	$t3=$res['Email'];
					  	$t4=$res['Feedback'];
					  	$t5=$res['Date'];
					  	
			?>
				<tbody><tr>
				<td><?php echo $t1;?></td>
				<td><?php echo $t2;?></td>
				<td><?php echo $t3;?></td>
				<td><?php echo $t4;?></td>
				<td><?php echo $t5;?></td>
				</tr>
					</tbody>
<?php }?>
</table>
</div>
</div>

</body>
</html>