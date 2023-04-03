<?php
include 'connect.php';

$edt_id = $_POST['e_id'];
$vname = $_POST['name'];
$vdeg = $_POST['deg'];
$img = $_FILES['image'];
print_r($_FILES['image']);
$img_loc = $_FILES['image']['tmp_name'];
$img_name = $_FILES['image']['name'];
// $img_n = $_FILES['tmp_name'];
move_uploaded_file($img_loc, 'uplodimg/' . $img_name);
$img_des = "uplodimg/" . $img_name;

if ($img_name == "") {
    $sql = "SELECT * FROM addvol WHERE v_id={$edt_id}";
    echo $sql;
    $result = mysqli_query($link, $sql);
    $row = mysqli_fetch_assoc($result);
    echo $row['v_img'];
    $img_des = $row['v_img'];
}
echo $img_name;
$qry = "UPDATE `addvol` SET `v_name`='$vname',`v_deg`='$vdeg',`v_img`='$img_des' WHERE v_id = $edt_id;";
echo $qry;
$result = mysqli_query($link, $qry) or die("quary unsuccessful");
header("location:vol.php");

?>