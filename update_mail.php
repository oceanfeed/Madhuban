<?php 

$mail=$_GET['id'];
    
$to = "$mail";
$subject = "Password Updated Successfully";
$message = " hi $mail your password has been updated successfully.
 just go and enjoy your day with family and loved ones. 
 http://travller.in";
 $from = "sagarsharma6970@gmail.com";
 $header = "from:$from";
 if(mail($to,$subject,$message,$header)){
        header("location:index.php");
        echo "password succesfully updated";
 }else{
     echo "email didnot sent";
 }
?>