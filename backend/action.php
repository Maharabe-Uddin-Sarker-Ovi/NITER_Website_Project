<?php
require 'db.php';
$delete_id =  $_POST['delete_id'];
$edit_id = $_POST['edit'];

$dept = $_POST['dept'];
$phn = $_POST['phone'];
$bld = $_POST['blood'];
$home = $_POST['hometown'];
$cllg = $_POST['cllg_name'];
$link = $_POST['link'];




if($edit_id){
    $updt = "UPDATE student_info SET department='$dept',phone='$phn',blood='$bld',hometown='$home',college_name='$cllg',social_link='$link' WHERE id='$edit_id'";
    $result = mysqli_query($db_connect,$updt);
    header('location:../home.php');
}
else{
    $deleterec = "DELETE FROM student_info WHERE id='$delete_id'";
    $result = mysqli_query($db_connect,$deleterec);
    header('location:../home.php');
}




?>