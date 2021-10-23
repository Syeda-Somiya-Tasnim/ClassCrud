<?php
 $serverName='localhost';
 $userName='root';
 $password='';
 $databasetName='crudclass';
 $conn=mysqli_connect($serverName, $userName, $password,$databasetName);
var_dump($conn);
?>