<?php
if(!isset($_COOKIE['faruk'])){
    header('location:logout.php');

}else{
    setcookie('faruk','talha',time()+20);
}
?>