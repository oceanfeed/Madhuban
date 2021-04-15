<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'restro');
$mail = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from usertable where email ='$mail' && password = '$pass' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1){
    header('location:html/home.html');
}
else{   
    header('location:index.php');
}
?>