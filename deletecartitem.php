<?php
$id=$_GET['productid'];

$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host,$hostname,$password,$database);

$sql = "DELETE FROM cart WHERE id='$id';";

mysqli_query($con, $sql);

mysqli_close($con);


?>