<?php 

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'restro');
$mail = $_POST['email'];

$s = "select * from usertable where email ='$mail' ";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if ($num == 1){

$to = "$mail";
$subject = "Recovary Mail";
$message = "you can reset your password to go to this link given below. 
reset_password.html";
 $from = "sagarsharma6970@gmail.com";
 $headers = "from:$from";
 if(mail($to,$subject,$message,$headers)){
    echo "you will get the recovery mail soon...Check your Email";
 }else{
     echo "something went wrong";
 }

}
else{   
   echo "No account found with this Email-Id. Please Enter right Email-Id.";
}

?>