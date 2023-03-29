<?php
include 'connect.php';
$dlt_id = $_GET['id'];
$sql = "DELETE FROM `addevent` WHERE `e_id` = '$dlt_id';";
$result =mysqli_query($link,$sql) or die("quary unsuccessful") ;
header("location:event.php");

?>