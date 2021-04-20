<?php
session_start();
if (!isset($_SESSION['loginaccess'])) {
    header('location:login.php');
}
?>