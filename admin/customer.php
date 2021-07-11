<?php
define('TITLE','Customer');
define('PAGE','customer');
include ('include/top.php');
?>
<style type="text/css">
	
	.table{
		width:100%;
		display: block;
		overflow: all;
		overflow-x:hidden;
		height:600px;
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
<div class="col-sm-9 col-md-10">
			<!--Start Dashboard 2nd Column-->

<div class="row mx-5">
			<!--row seoond-->

		<h3>Customer Details</h3>
		<div><input id="myInput" type="text" placeholder="Search.." class="Search">
			</div>
			<?php
					  include 'include/dbconnection.php';
					  $sql='select * from customer';
					  $display=mysqli_query($con,$sql);
					  
?>

				<table  class='table '>
					<thead class='bg-dark text-light'>
						<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Contact</th>
						<th>Image</th>
						<th>Delete
						</th>
						<th>Edit</th>
					</tr>
					</thead>
					
					<?php while($res=mysqli_fetch_assoc($display)){
					  	$id=$res['ID'];
					  	$name=$res['name'];
					  	$email=$res['email'];
					  	$contact=$res['contact'];
					  	$image=$res['Image'];
					  	?>
				 <tbody id="myTable">
				 	<tr>
					<td><?php echo $name;?></td>
					<td><?php echo $email;?></td>
					<td><?php echo $contact;?></td>
					<td><img src="image/<?php echo $image; ?>" height="150px" width="150px"></td>
					<td><?php echo"<a href='delete_customer.php?id=$id' class='btn btn-danger'>Delete</a>";?></td>
					
				</a></td>
				<td>
			<?php echo"<a href='update_customer.php?id=$id' class='btn btn-info'>Edit</a>";?></td>
			</tr>

			</tbody>
		<?php }?>
</table>

			</div>
	<?php include'include/foot.php';?>
</div>
</body>
</html>