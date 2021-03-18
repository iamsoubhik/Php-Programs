<?php
include 'connection.php';
$uid = $_POST['uid'];
$name = $_POST['name'];
$email = $_POST['mail'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$course = $_POST['course'];
$language = implode(",", $_POST['language']);

$image = $_FILES['img']['name'];

$new_image = rand(1111,9999).'_'.time().'_'.$image;
$upload_path = 'upload/'.$new_image;
$source_path = $_FILES['img']['tmp_name'];

if(move_uploaded_file($source_path, $upload_path)){

	$user_update = mysqli_query($conn,"UPDATE new_registration 
		SET name='$name',email='$email',gender='$gender',dob='$dob',address='$address', course='$course',language='$language',image='$upload_path' WHERE id = '$uid'") or die(mysqli_error($conn));

	if($user_update){
		echo '<script language="javascript">';
		echo 'alert("User Profile Updated")';
		echo '</script>';
		header('location:user.php');
	}

	else{
		echo 'Record Not Updated';
		header('location:edit_profile.php');
	}	

}


?>