<?php
    session_start();

    require '../database/db.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password= $_POST['password'];

    $query = "SELECT count(*) as faruk, username,role,email,photo FROM users WHERE username ='$username' AND  password = '$password'";
    // echo $query;
    // exit();
    $result = mysqli_query($dbconnect,$query);

    $after_assoc = mysqli_fetch_assoc($result);
    

    if($after_assoc['faruk'] == 1){
        $_SESSION['loginaccess']='good';
        $_SESSION['name']= $after_assoc['username'];
        $_SESSION['email']= $after_assoc['email'];
        $_SESSION['photo']= $after_assoc['photo'];
        $_SESSION['role']= $after_assoc['role'];
        $_SESSION['success']="Successfully login";
        // setcookie('faruk','talha');
        
        header('location:index.php');
    }else{
        header('location:login.php');
        $_SESSION['error']="opps username and password not match";
    }
?>