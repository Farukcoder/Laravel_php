<?php
session_start();
require '../database/db.php';

    $fname= $_POST['fname'];
    $email= $_POST['email'];
    $mobile= $_POST['mobile'];
    $massage= $_POST['massage'];

    $photo= $_FILES['photo'];
    // print_r($photo);
    // exit();
    $after_explode = explode('.',$photo['name']);
    $extention = end($after_explode);
    // print_r($extention);
    // exit();
    $allowd = array('jpg','JPG','jpeg','JPEG','png','PNG');

    if(in_array($extention,$allowd)){
        if($photo ['size'] <= 500000){
          $query = "INSERT INTO contact (`fname`, `email`, `mobile`, `massage`) VALUES ('$fname','$email','$mobile','$massage')";
          $result = mysqli_query($dbconnect,$query);
          $last_id = mysqli_insert_id($dbconnect);
          $file_name = $last_id.'.'.$extention;
          $new_location = 'image/'.$file_name;
          move_uploaded_file($photo['tmp_name'],$new_location);
          $name_to_save_db = $file_name;
          $update = "UPDATE contact SET photo='$file_name' where id =$last_id";
          $photo_uploaded = mysqli_query($dbconnect,$update);
          if($result){
            $_SESSION['success']="Your massage sent successfully";
            header('location:index.php');
          }else{
              $_SESSION['error']="something wrong";
          }

        }else{
          echo "Your file to be larg";
        }
    }else{
      echo "<span>Your file not allowed..</span>";
    }
    

    // $query = "INSERT INTO contact (`fname`, `email`, `mobile`, `massage`) VALUES ('$fname','$email','$mobile','$massage')";

    // $result = mysqli_query($dbconnect,$query);

    
?>