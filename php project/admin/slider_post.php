<?php
require '../database/db.php';

$status = $_POST['status'];
$title = $_POST['title'];
$description = $_POST['description'];

$photo = $_FILES['photo'];
$after_explode = explode('.', $photo['name']);
$extention = end($after_explode);
$allowd = array('jpg', 'JPG', 'jpeg', 'JPEG', 'png', 'PNG');

if (in_array($extention, $allowd)) {
    if ($photo ['size'] <= 500000) {
        $query = "INSERT INTO slider (`status`, `title`, `description`) VALUES ('$status','$title','$description')";
        $result = mysqli_query($dbconnect, $query);
        $last_id = mysqli_insert_id($dbconnect);
        $file_name = $last_id . '.' . $extention;
        $new_location = 'image/slider/'. $file_name;
        move_uploaded_file($photo['tmp_name'], $new_location);
        $name_to_save_db = $file_name;
        $update = " UPDATE `slider` SET `photo`='$file_name' where id =$last_id";
        $photo_uploaded = mysqli_query($dbconnect, $update);
        if ($result) {
//            $_SESSION['success'] = "Your massage sent successfully";
            header('location:slider.php');
        } else {
            $_SESSION['error'] = "something wrong";
        }

    } else {
        echo "Your file to be larg";
    }
} else {
    echo "<span>Your file not allowed..</span>";
}


// $query = "INSERT INTO contact (`fname`, `email`, `mobile`, `massage`) VALUES ('$fname','$email','$mobile','$massage')";

// $result = mysqli_query($dbconnect,$query);


?>