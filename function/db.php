<?php
$server =   'localhost';
$user   =   'root';
$pass   =   '';
$db1    =   'web1';
$db2    =   'web2';

$conn1 = mysqli_connect($server, $user, $pass, $db1) or die(mysqli_error());
$conn2 = mysqli_connect($server, $user, $pass, $db2) or die(mysqli_error());

?>