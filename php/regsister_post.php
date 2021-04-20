<?php
session_start();
    require 'db.php';
    $username= $_POST['username'];
    $email= $_POST['email'];
    $pass= $_POST['pass'];
    $mobile= $_POST['mobile'];

    $query ="INSERT INTO users(`username`, `email`, `password`, `mobile`) VALUES ('$username','$email','$pass','$mobile')";

    $result = mysqli_query($dbconnect,$query);

    if($result){
      echo "data insert successfully";
    }else{
       echo "so sorry error";
    }
?>