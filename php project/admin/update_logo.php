<?php
    require_once '../database/db.php';

    $id = $_POST['id'];

    $status = $_POST['status'];

    if ($status==1){
        $query = "UPDATE logo SET status='0'";
        $result = mysqli_query($dbconnect, $query);

        $query = "UPDATE logo SET status='$status' WHERE id=$id";
        $result = mysqli_query($dbconnect, $query);
        header("location:logo.php");
    }else{
        $query = "UPDATE logo SET status='$status' WHERE id=$id";
        $result = mysqli_query($dbconnect, $query);
    }


?>