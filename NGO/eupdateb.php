<?php
include 'connect.php';

$edt_id = $_POST['e_id'];
$enm = $_POST['e_titl'];
$edt = $_POST['e_detils'];
$date = $_POST['date'];
$tim = $_POST   ['time'];
$loctin = $_POST['location'];
$sql = "UPDATE `addevent` SET `e_name`='$enm',`e_details`='$edt',`e_date`='$date',`e_time`='$tim',`location`='$loctin' WHERE `e_id`='$edt_id';";
$result =mysqli_query($link,$sql) or die("quary unsuccessful") ;
header("location:event.php");

?>