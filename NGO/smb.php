<?php
include 'connect.php';

$id = 1 ;
$num = $_POST['s_number'];
$mail = $_POST['s_email'];
$twt = $_POST['s_twiter'];
$fac = $_POST['s_face'];
$ld = $_POST['s_li'];
$inst = $_POST['s_insta'];
$sql = "UPDATE `social` SET `s_number`='$num',`s_email`='$mail',`s_twiter`='$twt',`s_fb`='$fac',`s_ld`='$ld',`s_insta`='$inst' WHERE $id";
echo $sql;
$result =mysqli_query($link,$sql) or die("quary unsuccessful") ;
header("location:sm.php?err=1");

?>