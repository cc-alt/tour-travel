<?php
define('TITLE','Add Package');
define('PAGE', 'package');
include 'include/top.php';
include '../include/connection.php'; 
if (isset($_POST['submit'])) {
	$place=$_POST['place'];
	$noa=$_POST['noa'];
	$noc=$_POST['noc'];
	$desc=$_POST['desc'];
	$sa=$_POST['sa'];
	$fa=$_POST['fa'];
	$bus=$_POST['bus'];
	$train=$_POST['train'];
	$airline=$_POST['airline'];
	$nod=$_POST['nod'];
	$non=$_POST['non'];
	$files=$_FILES['file'];
	$filename=$files['name'];
	$fileerror=$files['error'];
	$filetmp=$files['tmp_name'];
	$fileext=explode('.',$filename);
	$filecheck=strtolower(end($fileext));
	$fileextstored=array('png','jpg','jpeg');
	if(in_array($filecheck, $fileextstored)){
		$destinationfile='image/'.$filename;
		move_uploaded_file($filename,$destinationfile);

		$sql="INSERT INTO `package`(`Place`, `Number of adults`, `Number Of children`, `Description`, `Stay_amount`, `Food_amount`, `Bus_amount`, `Train_amount`, `Airline_amount`, `Number of days`, `Number of nights`, `Image`) VALUES ('$place','$noa','$noc','$desc','$sa','$fa','$bus','$train','$airline','$nod','$non','$destinationfile')";
		$result=mysqli_query($con,$sql);
		if($result){
			echo "<script>alert('Package has created');</script>";
			header('location:package.php');
		}

}
	
}
 ?>
 <div class="col-sm-9 col-md-10">
<h2 class="text-light my-3 text-center bg-success w-50 mx-auto py-2">Add Tour Packages</h2>
<form method="post" class="container w-50 bg-light my-4 py-2"  enctype="multipart/form-data">
	<label>Add Place</label><input class="form-control"type="text" name="place" autocomplete="off">
	<label>Number Of Adults</label>
	<input type="text" name="noa" class="form-control">
	<label>Number Of Children</label>
	<input type="text" name="noc" class="form-control">
	<label>Description</label>
	<textarea  name="desc" class="form-control"></textarea>
	<label>Stay Amount</label>
	<input type="text" name="sa" class="form-control">
	
	<label>Food Amount</label>
	<input type="text" name="fa" class="form-control">
	
	<label>Bus Amount</label>
	<input type="text" name="bus" class="form-control">
	
	<label>Train Amount</label>
	<input type="text" name="train" class="form-control">
	<label>Airline Amount</label>
	<input type="text" name="airline" class="form-control">
	<label>Number of days</label>
	<select name="nod" class="form-control">
		<option>Select</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>	
	</select>
	<label>Number of nights</label>
	<select name="non" class="form-control">
		<option>Select</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>	
	</select>
	<label>Add Image</label><input class="form-control" type="file" name="file">
	<input class=" form-control btn btn-primary my-2 col-2 " type="submit" name="submit" value="Submit">
	<input class=" form-control btn btn-primary my-2 col-2 " id='reset' type="submit" name="reset" value="Reset" >
	<?php 
	if(isset($_POST['reset'])){
		echo "<script>document.getelementbyid['reset'].reset()";
	}
	?>
</form>
</div>
</body>
</html>