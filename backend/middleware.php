<?php
require 'db.php';

session_start();
$type = $_POST['user'];


if($type == "ADMIN")
{
    $name= $_POST['fullname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $repass= $_POST['rpass'];
    $admin_id = 'admin'.'_'.rand(10,999);

    if($repass == $pass){
        $after_hash = password_hash($pass,PASSWORD_DEFAULT);
        $insert = "INSERT INTO admin_info(login_id,full_name,email,password) VALUES('$admin_id','$name','$email','$after_hash')";
        $insert_result = mysqli_query($db_connect,$insert);


        $_SESSION['success'] = " registration successful";
        $_SESSION['id'] = $admin_id;
        $_SESSION['type'] = $type;
        header("location:../confirmation.php");
    }
    else{
        $_SESSION['error'] = "password does not match";
        header("location:../admin register.php");
    }
}
elseif($type== 'STUDENT')
{
    $name= $_POST['fullname'];
    $batch= $_POST['batch'];
    $class_id= $_POST['id'];
    $cllg= $_POST['cllg_name'];
    $link= $_POST['link'];
    $bld= $_POST['blood'];
    $dept= $_POST['dept'];
    $phn= $_POST['phone'];
    $home= $_POST['hometown'];
    $pass= $_POST['pass'];
    $repass= $_POST['rpass'];
    $student_id = 'stdnt'.'_'.rand(10,999);

    if($repass == $pass){
        $after_hash = password_hash($pass,PASSWORD_DEFAULT);
        $insert = "INSERT INTO student_info(login_id,full_name,batch,class_id,department,phone,blood,hometown,college_name,social_link,password) VALUES('$student_id','$name','$batch','$class_id','$dept','$phn','$bld','$home','$cllg','$link','$after_hash')";
        $insert_result = mysqli_query($db_connect,$insert);


        $_SESSION['success'] = " registration successful";
        $_SESSION['id'] = $student_id;
        $_SESSION['type'] = $type;
        header("location:../confirmation.php");
    }
    else{
        $_SESSION['error'] = "password does not match";
        header("location:../student register.php");
    }
}


?>