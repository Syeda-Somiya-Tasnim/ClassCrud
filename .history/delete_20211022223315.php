<?php

include 'conn.php';
extract($_GET);
$query="DELETE FROM user WHERE id='$id";
mysqli_query($conn,$query);
header('location:display.php');
?>