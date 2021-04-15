<?php
if(isset($_POST['submit'])){
session_start();
include "config.php";

$mail = $_POST['email'];
$contact = $_POST['mob'];
$query = $_POST['query'];

$s = "select * from cancel_order where email ='$mail'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num == 1){
    echo "already requested";
}
else{
    $reg = "INSERT INTO cancel_order(email,contact,query) VALUES ('$mail','$contact','$query')";
    if(mysqli_query($conn,$reg)){
        echo "your request has been submitted. you get email soon.";
    }else{
        echo " something went wrong call customer care.";
        
    }
    
}
}
?>