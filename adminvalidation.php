<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'restro');
$name = $_POST['user'];
$pass = $_POST['password'];

$s = "select * from admintable where username ='$name' && password = '$pass' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1){
    header('location:tableorder.php');
}
else{   
    header('location:adminlogin.php');
}
?>