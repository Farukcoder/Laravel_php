<?php
    session_start();
    // print_r($_POST);
    // exit();
    require '../database/db.php';
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $mobile= $_POST['mobile'];
    $role= $_POST['role'];
    $photo= $_FILES['photo'];
    $after_explode = explode('.',$photo['name']);
    $extention = end($after_explode);
    $allowd = array('jpg','JPG','jpeg','JPEG','png','PNG');

    if(in_array($extention,$allowd)){
        if($photo ['size'] <= 500000){
          $query = "INSERT INTO users(`username`, `email`, `password`, `mobile`,`role`) VALUES ('$username','$email','$password','$mobile','$role')";
          // echo "<pre>";
          // print_r($query);
          // exit();
          $result = mysqli_query($dbconnect,$query);
          $last_id = mysqli_insert_id($dbconnect);
          $file_name = $last_id.'.'.$extention;
          $new_location = 'image/'.$file_name;
          move_uploaded_file($photo['tmp_name'],$new_location);
          $name_to_save_db = $file_name;
          $update = "UPDATE users SET photo='$file_name' where id =$last_id";
          $photo_uploaded = mysqli_query($dbconnect,$update);
          if($result){
            header('location:regsister.php');
            $_SESSION['success']="Your massage sent successfully";
          }else{
              $_SESSION['error']="something wrong";
          }

        }else{
          echo "Your file to be larg";
        }
    }else{
      echo "<span>Your file not allowed..</span>";
    }

    // $query ="INSERT INTO users(`username`, `email`, `password`, `mobile`) VALUES ('$username','$email','$password','$mobile')";

    // $result = mysqli_query($dbconnect,$query);

    // if($result){
    //   echo "data insert successfully";
    // }else{
    //    echo "so sorry error";
    // }
?>