<?php
include 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = ($_POST['password']);
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$course = $_POST['course'];
$language = implode(",", $_POST['language']);

$image = $_FILES['img']['name'];

$new_image = rand(1111,9988).'_'.time().'_'.$image;
$upload_path = 'upload/'.$new_image;
$source_path = $_FILES['img']['tmp_name'];

if(move_uploaded_file($source_path, $upload_path)){

	$user_insert = mysqli_query($conn,"INSERT INTO new_registration 
		VALUES('','$name','$email','$password','$gender','$dob','$address',
		'$course','$language','$upload_path')") or die(mysqli_error($conn));

	if($user_insert){
		echo 'New Records Succesfully Saved !!';
		header('location:user.php');
	}
	
	else{
		echo 'Records Not Saved';

	}
}


?>




















<!-- 
    // include 'connect.php';

    // $name=$_POST['name'];
    // $email=$_POST['mail'];
    // $password=$_POST['password'];
    // $gender=$_POST['gender'];
    // $dob=$_POST['dob'];
    // $address=$_POST['address'];
    // $course=$_POST['course'];
    // $language=implode(",",$_POST['language']);
    // $image=$_FILES['img']['names];

    // $new_image =  rand(1111,9999).'_'.time().'_'.$image;
    // $upload_path='upload/'.$new_image;
    // $source_path=$_FILES['img']['temp_name'];

    // if(move_uploaded_file($source_path,$upload_path)){
    //     $user_insert=mysqli_query($conn,"INSERT INTO new_registration VALUES('',''$name','$email','$password','$gender',
    //     '$dob','$address','$course','$language','$course','$language','$image')") or die (mysqli_error($conn));

    //     if ($user_insert){
    //         echo "New Record Successfully Added";
    //     }
    //     else{
    //         echo "Record not Found";
    //     }
    // }
//  -->