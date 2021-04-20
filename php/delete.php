<?php
require 'db.php';
$user_id = $_GET['id'];

$selece_photo = "SELECT photo FROM contact WHERE id = $user_id";
$delete_photo = mysqli_query($dbconnect,$selece_photo);
$after_assoc = mysqli_fetch_assoc($delete_photo);
$delete_photo_from_location = "image/".$after_assoc['photo'];
unlink($delete_photo_from_location);
$query = "DELETE FROM contact WHERE id = $user_id";

$result =  mysqli_query($dbconnect,$query);
header('location:massage_list.php');


?>