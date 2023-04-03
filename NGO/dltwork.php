<?php
include 'connect.php';
$dlt_ida = $_GET['ida'];
$dlt_idw = $_GET['idw'];

if ($dlt_idw != '') {
    $sql = "DELETE FROM `work` WHERE `w_id` = '$dlt_idw';";
    $result = mysqli_query($link, $sql) or die("quary unsuccessful");
}

if ($dlt_ida != '') {
    $sql = "DELETE FROM `area` WHERE `a_id` = '$dlt_ida';";
    $result = mysqli_query($link, $sql) or die("quary unsuccessful");
}
header("location:loc.php");

?>