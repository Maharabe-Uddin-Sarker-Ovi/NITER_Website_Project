<?php
require 'db.php';
session_start();
$search = $_POST['search_value'];


$filter = "SELECT * FROM student_info WHERE department='$search' OR blood='$search' OR batch='$search' OR hometown='$search'";
$result = mysqli_query($db_connect,$filter);

$_SESSION['filter']  =  $result->fetch_all();


header('location:../home.php');




?>