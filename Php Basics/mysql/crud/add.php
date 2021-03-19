<?php
include('db.php');
if(!isset($_SESSION['IS_LOGIN'])){
	header('location:login.php');
	die();
}
if(isset($_POST['submit'])){
	$name=mysqli_real_escape_string($con,$_POST['name']);
	$city=mysqli_real_escape_string($con,$_POST['city']);
	mysqli_query($con,"insert into student(name,city) values('$name','$city')");
	header('location:index.php');
	die();
}
?>
<br/><a href="logout.php">Logout</a><br/>
<form method="post">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="textbox" name="name"/></td>
		</tr>
		<tr>
			<td>City</td>
			<td><input type="textbox" name="city"/></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit"/></td>
		</tr>
	</table>
</form>