<?php
session_start();
include "include/connection.php";
$Username=$_SESSION['email'];
$sql="SELECT * FROM `booking` WHERE `User Id`='$Username'";
	$data=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($data);
    $place=$row['Place'];
    $sa=$row['Stay Cost'];
    $fa=$row['Food Cost'];
    $travel=$row['Travelling Cost'];
    $total=$row['Total Cost'];
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
 <script type="text/javascript"> 
            $(document).ready(function() { 
            	$(".pay").hide();
                $('input[type="radio"]').click(function() {
                	
                    $(".pay").show(); 
                }); 
            }); 
</script>
<body>
<div  class="container mt-3">
	<div class="row">
		<div class="col-md-12">
	<center>
	<table class="table table-bordered">
	<thead class="bg-dark text-white">
		<th>Place</th>
		<th>Stay Cost</th>
		<th>Food Cost</th>
		<th>Travelling Cost</th>
		<th>Total Cost</th>
	</thead>
	
	<tbody>
		<tr><td><?php echo $place; ?></td>
			<td><?php echo $sa; ?></td>
			<td><?php echo $fa; ?></td>
			<td><?php echo $travel;?></td>
			<td><?php echo $total;?> </td>
		</tr>

	</tbody>
	<div></div>
</div>

</table>

<?php 
$msg="";
if (isset($_POST['payment'])) {
	$cardno=$_POST['cn'];
	$cvv=$_POST['cvv'];
	$exp=$_POST['exp'];
	$card=$_POST['Card'];
	$insert="INSERT INTO `payment`(`Username`, `cardno`,`card`, `cvv`, `expiry`) VALUES ('$Username','$cardno','$card','$cvv','$exp')";

	$data=mysqli_query($con,$insert);
		if($data){
		$update="UPDATE `booking` SET `status`='Yes'  WHERE `User Id`='$Username'";
		$res=mysqli_query($con,$update);
		echo"<script>alert('Payment Successfully');</script>";
		header("location:reciept.php");

	}
	else{
		echo "<script>alert('Please Fill Correct infomation');</script>";
	}

}
?>
</center>
</div>
<div class="container w-50">
<H5>Payment</H5>
<script>
$(document).ready(function(){
    $(function() {
   $("input[name='pay']").click(function() {
     if ($("#cc").is(":checked")) {
       $(".pay").show();
     } else{
       $(".pay").hide();
     }
     if ($("#dc").is(":checked")) {
       $(".pay").show();
     } else{
       $(".pay").hide();
     }
   });
 });

</script>
<form method="post" class="form">
	<br>
	<input type="radio" name="Card" value="Credit" id="cc"><label for="cc">Credit Card</label><br>
	<input type="radio" name="Card" value="Debit" id="dc"> <label for="dc">Debit Card</label>
	<div class="pay py-2 mt-2">
		<h5>Card Details</h5>
		<div class="form-group">
		<label>Card No.</label>
		<input type="text" name="cn" class="form-control">
		<div><?php echo $msg;?></div>
	</div>
		<div class="form-group">
		<label>CVV No.</label>
		<input type="number" name="cvv" class="form-control">
		<div><?php echo $msg;?></div>
	</div>
		<div class="form-group">
		<label>Expiration MM/YYYY</label>
		<input type="text" name="exp" class="form-control">
	</div>
	<div class="form-group">
		<input type="submit" name="payment" value="Pay" class="btn btn-success">
	</div>
		
	</div>
</form>
<p style="font-weight: bold;font-size: 30px;">Total <?php echo $total;?></p>
</div>