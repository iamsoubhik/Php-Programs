<?php
include('db.php');
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:login.php');
	die();
}
$id=mysqli_real_escape_string($con,$_GET['id']);
if($id==''){
	header('location:index.php');
	die();
}
mysqli_query($con,"delete from student where id='$id'");
header('location:index.php');
die();
?>