<?php
include 'connect.php';

if(isset($_POST['done'])){
    $vname = $_POST['name'];
    $vdeg = $_POST['deg'];
    $img = $_FILES['image'];
    print_r($_FILES['image']);
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    move_uploaded_file($img_loc,'uplodimg/'.$img_name);
    $img_des = "uplodimg/".$img_name;
    $qry = "INSERT INTO `addvol`(`v_name`, `v_deg`, `v_img`) VALUES ('$vname','$vdeg','$img_des');";
    echo $qry;
    $result =mysqli_query($link,$qry) or die("quary unsuccessful") ;
header("location:vol.php?err=1");

}
?>