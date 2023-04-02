<?php
include 'connect.php';

$enm = $_POST['e_titl'];
$edt = $_POST['e_detils'];
$date = $_POST['date'];
$tim = $_POST   ['time'];
$loctin = $_POST['location'];
echo $enm;
$sql = "INSERT INTO `addevent`(`e_name`, `e_details`, `e_date`, `e_time`, `location`) VALUES ('$enm' , '$edt' , '$date' , '$tim' , '$loctin');";
echo $sql;
$result =mysqli_query($link,$sql) or die("quary unsuccessful") ;
header("location:event.php?err=1");

?>