<?php

if ($_COOKIE) {
    $username = $_COOKIE['user'];
}else {
    $username="asadasaswd";
}


$host = "localhost";
$hostname = "root";
$dbpassword = "1234";
$database = "cinnomon_and_curry_db";


$con = mysqli_connect($host, $hostname, $dbpassword, $database);



$sql = "DELETE FROM cart WHERE user='$username'";

$resultset = mysqli_query($con, $sql);



mysqli_close($con);
?>