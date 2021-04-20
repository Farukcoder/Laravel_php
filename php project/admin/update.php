<?php
require '../database/db.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$massage = $_POST['massage'];

if ($_FILES['photo']['name'] != "") {
  $select_photo = "SELECT photo FROM contact WHERE id = $id";
  $result1 = mysqli_query($dbconnect, $select_photo);
  $after_assoc = mysqli_fetch_assoc($result1);
  $delete_photo_from_location = "image/" . $after_assoc['photo'];
  unlink($delete_photo_from_location);

  $photo = $_FILES['photo'];
  // print_r($photo);
  // exit();
  $after_explode = explode('.', $photo['name']);
  $extention = end($after_explode);
  // print_r($extention);
  // exit();
  $allowd = array('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG');
  if (in_array($extention, $allowd)) {
    if ($photo['size'] <= 500000) {
      $file_name = $id . '.' . $extention;
      $new_location = 'image/' . $file_name;
      move_uploaded_file($photo['tmp_name'], $new_location);
      $name_to_save_db = $file_name;
      $update = "UPDATE contact SET photo='$file_name' where id =$id";
      $photo_uploaded = mysqli_query($dbconnect, $update);
      if ($photo_uploaded) {
        $_SESSION['success'] = "Your massage sent successfully";
        header('location:massage_list.php');
      } else {
        $_SESSION['error'] = "something wrong";
      }
    } else {
      echo "Your file to be larg";
    }
  } else {
    echo "<span>Your file not allowed..</span>";
  }
} else {

  $query = "UPDATE contact SET fname='$fname',email='$email',mobile='$mobile',massage='$massage' WHERE id=$id";

  $result = mysqli_query($dbconnect, $query);

  if ($result) {
    $_SESSION['success'] = "Your massage update successfully";
    header('location:massage_list.php');
  } else {
    $_SESSION['success'] = "something wrong..!!!";
  }
}
