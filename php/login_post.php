<?php
session_start();

    require 'db.php';

    $email = $_POST['email'];
    $password= $_POST['pass'];

    $query = "SELECT count(*) faruk FROM users WHERE email = '$email' AND  password = '$password' ";

    $result = mysqli_query($dbconnect,$query);

    $after_assoc = mysqli_fetch_assoc($result);

    if($afrer_assoc['faruk']==1){
        $_SESSION['loginaccess']='good';

        setcookie('faruk','talha');
        
        header('location:index.php');
    }else{
        echo "invalid email and password";
    }
?>