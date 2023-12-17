<?php
session_start();
require 'db.php';

$user_type = $_POST['login_type'];
$loginid = $_POST['userid'];
$pass = $_POST['password'];


if($user_type == 'ADMIN'){
    $select_id = "SELECT COUNT(*) as id_exist FROM admin_info WHERE login_id='$loginid'";
    $result = mysqli_query($db_connect,$select_id);
    $after_assoc = mysqli_fetch_assoc($result);


    if($after_assoc['id_exist'] == 1){
        $select_id2 = "SELECT * FROM admin_info WHERE login_id='$loginid'";
        $result2 = mysqli_query($db_connect,$select_id2);
        $after_assoc2 = mysqli_fetch_assoc($result2);
        if(password_verify($pass, $after_assoc2['password'])){
            $_SESSION['id'] = $after_assoc2;
            $_SESSION['type'] ="ADMIN";
            $_SESSION['filter']='blank';
            header('location:../home.php');
        }
        else{
            
            $_SESSION['login_fail'] = 'invalid ID & Password';
            $_SESSION['type'] = 'ADMIN';
            header('location:../login.php');
            
        }
    }
    else{
        
        $_SESSION['exist'] = 'login id not found';
        $_SESSION['type'] = 'ADMIN';
        echo $_SESSION['type'];
       
        header('location:../login.php');
    }
}
elseif($user_type == 'STUDENT'){
    $select_id = "SELECT COUNT(*) as id_exist FROM student_info WHERE login_id='$loginid'";
    $result = mysqli_query($db_connect,$select_id);
    $after_assoc = mysqli_fetch_assoc($result);


    if($after_assoc['id_exist'] == 1){
        $select_id2 = "SELECT * FROM student_info WHERE login_id='$loginid'";
        $result2 = mysqli_query($db_connect,$select_id2);
        $after_assoc2 = mysqli_fetch_assoc($result2);
        if(password_verify($pass, $after_assoc2['password'])){
            $_SESSION['id'] = $after_assoc2;
            $_SESSION['type'] ="STUDENT";
            header('location:../home.php');
        }
        else{
            
            $_SESSION['login_fail'] = 'invalid ID & Password';
            $_SESSION['type'] = 'STUDENT';
            header('location:../login.php');
            
        }
    }
    else{
        
        $_SESSION['exist'] = 'login id not found';
        $_SESSION['type'] = 'STUDENT';
        echo $_SESSION['type'];
       
        header('location:../login.php');
    }
}



?>