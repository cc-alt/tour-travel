<?php
session_start();
if(!isset($_SESSION['user_name'])){
	header('location:signin.php');
}
else{
$id=$_GET['id'];
$total=0;
include "include/connection.php";
$data=mysqli_query($con,"select * from package where Id='$id'");
$row=mysqli_fetch_array($data);
	$id=$row['Id'];

    $img=$row['Image'];
    $place=$row['Place'];
    $noa=$row['Number of adults'];
    $noc=$row['Number Of children'];
    $nop=$noa+$noc;
    $sa=$row['Stay_amount'];
    $fa=$row['Food_amount'];
    $bus=$row['Bus_amount'];
    $train=$row['Train_amount'];
    $flight=$row['Airline_amount'];
    $desc=$row['Description'];
    if(isset($_POST['booking'])){
        $user=$_SESSION['email'];
        $tm=$_POST['Travel'];
        $date=$_POST['Date'];

        if($tm=="Bus"){
            $t=$bus;
            $total=$sa+$fa+$t;
        }
        if($tm=="Train"){
            $t=$train;
            $total=$sa+$fa+$t;
        }
        if($tm=="Flight"){
            $t=$flight;
            $total=$sa+$fa+$t;
        }
        $sql="INSERT INTO `booking`(`User Id`, `Place`, `Mode Of Travelling`, `Persons`, `Total Cost`, `Stay Cost`, `Food Cost`, `Travelling Cost`, `Travelling Date`, `status`) VALUES ('$user','$place','$tm','$nop','$total','$sa','$fa','$t','$date','No')";
        $result=mysqli_query($con,$sql);

        if($result){
            header("location:payment.php");
        }

    }
?>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 <div class="container-fluid">
 	<div class="row">
 		<div class="col-md-20 mx-5">
 		<form method="post">
 			<center>
 			<table class="table table-bordered mt-4">
 				<thead>
 					<th colspan="2">Place Details</th>
 				</thead>
 				<tbody>
 				<tr>
 					<td rowspan="10"><img src="<?php echo $img;?>" class="img-responsive" width="400px" height="400px"></td>
 				</tr>
 				<tr>
 					<td><span style="font-weight: bold;">ID:</span><?php echo $id;?></td>
 					
 				</tr>
 				<tr>
 					<td><span style="font-weight: bold;">Name:</span> <?php echo $place;?></td>
 					
 				</tr>
 				<tr>
 					<td><span style="font-weight: bold;">Description:</span><?php echo $desc;?></td>
 					
 				</tr>
 				<tr>
 					<td><span style="font-weight: bold;">Person:</span><?php echo"Number of Adult".$noa." Number of Children".$noc; ?></td>
 					
 				</tr>
 				<tr>
 					<td><span style="font-weight: bold;">Stay Cost:</span><?php echo " Rs.".$sa;?></td>
 					
 				</tr>

 				<tr>
 					<td><span style="font-weight: bold;">Food Cost:</span><?php echo " Rs.".$fa;?></td>
 				</tr>

 				<tr>
 					<td>
 						<select name="Travel" class="form-control">
 							<option>Travelling Mode</option>
 							<option value="Bus">Bus</option>
 							<option value="Train">Train</option>
 							<option value="Flight">Flight</option>
 						</select>					
 					</td>
 				</span>
 					
 				</tr>
 				<tr>
 					<td><input type="date" name="Date" class="form-control"></td>
 				</tr>
 			</tbody>
 			<tfoot><tr><td colspan="2"><center><input type="submit" name="booking" class="btn btn-success" value="Booking"></center></td></tr></tfoot>
 			</table>
 </div>
 <?php }?>