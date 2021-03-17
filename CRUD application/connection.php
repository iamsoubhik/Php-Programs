<?php
    $conn= mysqli_connect('localhost','root','','registration') OR die (mysqli_error());

    if($conn){
        echo "<br>";
    }else{
        echo "Error is found to connect";
    }
?>