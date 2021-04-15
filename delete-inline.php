<?php

$contact = $_GET['id'];

include 'config.php';
$sql = " DELETE FROM booking WHERE contact = $contact ";
$res = mysqli_query($conn,$sql) or die ("query unsuccesfull");
header("location:tableorder.php");
mysqli_close($conn);
?>