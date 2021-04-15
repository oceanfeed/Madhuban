<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'restro');
$mail = $_POST['email'];
$pass = $_POST['password'];

$s = "select * from usertable where email ='$mail'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1){
    echo "username already taken";
}
else{
    $reg = "insert into usertable(email,password) values ('$mail','$pass')";
    mysqli_query($con,$reg);
    header('location:index.php');
}
?>