<!DOCTYPE html>
<html>
<head>
	<title>Tour & Travel</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</head>
<style>
  .carousal-item img{
    width: 100%;
  }
  
</style>
<body id="section-1">
<!-- Header-->
<?php include 'include/top.php';?>
<!--slider--->
<?php include 'include/slider.php';?>;

<!--Abouts us-->
<div id="section-2">
<?php include 'aboutus.php';?>
</div>
<!--Gallary--->
<div id="section-3">
<?php include 'gallary.php';?>
</div>

<?php include 'include/connection.php';?>
 <!--Feedback-->
<?php include'feedback.php';?>
<div id="section-4">
 <!-- Contact us -->
 <?php include 'contact.php';?>
</div>
 <?php include 'include/bottom.php';?>
</body>
</html>