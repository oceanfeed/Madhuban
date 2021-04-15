<?php

$contact = $_GET['id'];

include 'config.php';
$sql = " DELETE FROM cancel_order WHERE contact = $contact ";
$res = mysqli_query($conn,$sql) or die ("query unsuccesfull");
header("location:cancelorder.php");
mysqli_close($conn);
?>