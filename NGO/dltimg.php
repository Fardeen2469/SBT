<?php
include 'connect.php';
$dlt_id = $_GET['id'];
$sql = "DELETE FROM `galary` WHERE `g_id` = '$dlt_id';";
$result =mysqli_query($link,$sql) or die("quary unsuccessful") ;
header("location:gal.php");

?>