<?php 
include 'connection.php';
$uid = $_REQUEST['ep'];

$sql = mysqli_query($conn,"SELECT * FROM new_registration WHERE id='$uid'");

$sql_fetch = mysqli_fetch_assoc($sql);

?>


<html>
<head>
	<title>Edit User Profile</title>
</head>
<body>
	<center>
 
<div align="left"><a href="user.php">All User</a></div>
    <h1 style="color: red">Welcome to Ejob India</h1>
    <form action="edit_profile_action.php" method="post" enctype="multipart/form-data">
    <table border="1">
    <tr>
            <td colspan="2" align="center"><b>User Registration:</b></td>
        </tr>
        <tr>
            <td><b>Name:</b></td>
            <td><input type="text" name="name" value="<?php echo $sql_fetch['name'] ?>">
            	<input type="text" name="uid" value="<?php echo $uid ?>" hidden>
            </td>
        </tr>
        <tr>
            <td><b>Email:</b></td>
            <td><input type="email" name="mail" required value="<?php echo $sql_fetch['email'] ?>">
            </td>
        </tr>
       
        <tr>
            <td><b>Gender:</b></td>
            <td><input type="radio" name="gender" value="Male" <?php echo ($sql_fetch['gender']=='Male')? 'checked=checked':'' ?> >Male

            <input type="radio" name="gender" value="Female" <?php echo ($sql_fetch['gender']=='Female')? 'checked=checked':'' ?> >Female
           	</td>
        </tr>
        <tr>
            <td><b>Date of Birth:</b></td>
            <td><input type="date" name="dob" id="dob" value="<?php echo $sql_fetch['dob'] ?>"></td>
        </tr>
        <tr>
            <td><b>Address:</b></td>
            <td><textarea cols="30" rows="2" name="address" value="<?php echo $sql_fetch['address'] ?>"></textarea></td>
        </tr>
 
        <tr>
            <td><b>course</b></td>
            <td><select name="course">
                <option>--select--</option>
                <option value="btech">btech</option>
                <option value="mtech">mtech</option>
                <option value="bca">bca</option>
                <option value="mca">mca</option>
            </select></td>
        </tr>
 
        <tr>
            <td><b>Language:</b></td>
            <td><input type="checkbox" name="language[]" value="hindi" >Hindi
            <input type="checkbox" name="language[]" value="english"  >English
            <input type="checkbox" name="language[]" value="bengali"  >Bengali</td>
        </tr>
        <tr>
            <td><b>Upload Image</b></td>
            <td><input type="file" name="img" required value="<?php echo "<img src='".$sql_fetch['image']."' height='100' width='100' " ?> "></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <input type="submit" name="sub" value="Submit">
                <input type="reset" name="reset" value="Reset">
            </td>
        </tr>
    </table>
    </form>
</center>
</body>
</html>