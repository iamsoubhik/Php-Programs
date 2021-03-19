<?php
$con=mysqli_connect("localhost","root","","complete_php");
//$sql="insert into student(name,city) values('Vishal','Delhi')";
//$sql="update student set name='Amit' where id=1";
//$sql="delete from student where id=1";
$sql="select * from student";
$res=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($res)){
	echo '<pre>';
	print_r($row);
}
?>