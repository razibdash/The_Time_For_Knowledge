<?php
date_default_timezone_set("Asia/Dhaka");

// setcookie("userName","EmranAlam",time()+60);

$host = "localhost";
$dbUser = "root";
$dbPwd = "";
$dbName = "newsbd";


$connect = mysqli_connect($host,$dbUser,$dbPwd,$dbName);

?>