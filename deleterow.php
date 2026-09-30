<?php
$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host,$hostname,$password,$database);



$id=$_GET['productid'];

$sql = "DELETE FROM product_detail_table WHERE product_id=$id;";


mysqli_query($con,$sql);

mysqli_close($con);
header("location:adminpannel.php");


?>