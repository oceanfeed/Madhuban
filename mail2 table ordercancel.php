<?php 
$email_id = $_GET['id'];
$to = "$email_id";
$subject = "Booking canceled";
$message = "your Table booking cancelation request has been confirmed. 
if u want to book again visit on the link given below.
 http://travller.in";
 $from = "sagarsharma6970@gmail.com";
 $header = "from:$from";
 if(mail($to,$subject,$message,$header)){
    echo "email sent successfully";
 }else{
     echo "something went wrong";
 }

?>