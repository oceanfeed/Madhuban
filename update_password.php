<?php 

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'restro');
$mail = $_POST['email'];
$pass = $_POST['password'];
$cpass = $_POST['cpassword'];


if($pass==$cpass){
 
    $reg="UPDATE usertable SET password ='$pass' WHERE  email ='$mail' ";
    mysqli_query($con,$reg) or die ("password not updated");
     header("location:update_mail.php?id=$mail");
     echo "password succesfully updated";
}

else {
    echo "your have entered different value in password and confirm password field.<br>
    please try again.?? ";
}
?>