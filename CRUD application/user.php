<?php
    include 'connection.php';
    $sql=mysqli_query($conn, "SELECT * FROM new_registration");
?>

<div align="center"><a href="registration_form.php">New User</a></div>
<center>
<h1 style="color:red">Welcome</h1>
<table border="4">
<tr>
<th>S.I No</th>
<th>User Id</th>
<th>Name</th>
<th>Gender</th>
<th>Date of Birth</th>
<th>Course</th>
<th>Langauge</th>
<th>Address</th>
<th>Profile Image</th>
<th>Action</th>
</tr>

<?php
$sl=0;
while($sql_fetch=mysqli_fetch_assoc($sql)) { ?>
<tr>
<td><?php echo $sl+1; $sl++ ?></td>
<td><?php echo $sql_fetch['id'] ?></td>
<td><?php echo $sql_fetch['name'] ?></td>
<td><?php echo $sql_fetch['gender'] ?></td>
<td><?php echo $sql_fetch['dob'] ?></td>
<td><?php echo $sql_fetch['address'] ?></td>
<td><?php echo $sql_fetch['course'] ?></td>
<td><?php echo $sql_fetch['language'] ?></td>
<td><center><?php echo "<img src='".$sql_fetch['image']."' height='100' width='100'" ?></center></td>
<td><a href="edit_profile.php?ep=<?php echo $sql_fetch['id']?>">Edit</a>
<a href="delete_user.php?del=<?php echo $sql_fetch['id']?>">delete</a></td>
</tr>
<?php }?>
</table>
</center>