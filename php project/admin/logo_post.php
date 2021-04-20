<?php
require '../database/db.php';

$status = $_POST['status'];
$photo= $_FILES['logo'];
    // print_r($photo);
    // exit();
    $after_explode = explode('.',$photo['name']);
    $extention = end($after_explode);
    // print_r($extention);
    // exit();
    $allowd = array('jpg','JPG','jpeg','JPEG','png','PNG');

    if(in_array($extention,$allowd)){
        if($photo ['size'] <= 500000){
            if($status==1){
                $update_status= "UPDATE logo SET status=0";
                $update_query = mysqli_query($dbconnect,$update_status);
            }else{
                $query = "INSERT INTO logo (`status`) VALUES ('$status')";
          $result = mysqli_query($dbconnect,$query);
          $last_id = mysqli_insert_id($dbconnect);
          $file_name = $last_id.'.'.$extention;
          $new_location = 'image/logo/'.$file_name;
          move_uploaded_file($photo['tmp_name'],$new_location);
          $name_to_save_db = $file_name;
          $update = "UPDATE  logo SET logo ='$file_name' WHERE id='$last_id'";
          $photo_uploaded = mysqli_query($dbconnect,$update);
            header('location:logo.php');
            }
          $query = "INSERT INTO logo (`status`) VALUES ('$status')";
          $result = mysqli_query($dbconnect,$query);
          $last_id = mysqli_insert_id($dbconnect);
          $file_name = $last_id.'.'.$extention;
          $new_location = 'image/logo/'.$file_name;
          move_uploaded_file($photo['tmp_name'],$new_location);
          $name_to_save_db = $file_name;
          $update = "UPDATE  logo SET logo ='$file_name' WHERE id='$last_id'";
          $photo_uploaded = mysqli_query($dbconnect,$update);
            header('location:logo.php');
    
        }else{
          echo "Your file to be larg";
        }
    }else{
      echo "Your file not allowed..";
    }

?>