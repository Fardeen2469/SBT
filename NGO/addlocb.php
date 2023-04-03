<?php
include 'connect.php';

$enm = $_POST['work'];
$edt = $_POST['area'];

if ($enm != '') {
    $sql = "INSERT INTO `work`(`work`) VALUES ('$enm');";
    $result = mysqli_query($link, $sql) or die("quary unsuccessful");
}

if ($edt != '') {
    $sql = "INSERT INTO `area`(`area`) VALUES ('$edt');";
    $result = mysqli_query($link, $sql) or die("quary unsuccessful");
}
header("location:loc.php?err=1");

?>