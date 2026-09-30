<?php 
var_dump($_GET);
$productid = $_GET['productid'];
$quantity = $_GET['updatedquantity'];


$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host,$hostname,$password,$database);

$sql = "UPDATE cart SET qut='$quantity' WHERE id='$productid';";

mysqli_query($con, $sql);

mysqli_close($con);

?>