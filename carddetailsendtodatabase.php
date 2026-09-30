<?php 
$productid=$_GET['productid'];

echo $productid;


$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host,$hostname,$password,$database);

$sqlselect = "SELECT * FROM product_detail_table WHERE product_id='$productid';";

$resultset=mysqli_query($con,$sqlselect);

$row = mysqli_fetch_assoc($resultset);

$productname =$row['name'];
$imagefile =$row['image'];
$description =$row['description'];
$price =$row['price'];
$name = $_COOKIE['user'];







$sql = "INSERT INTO cart(name,image,description,price,user,qut) VALUES ('$productname','$imagefile','$description','$price','$name','1');";

mysqli_query($con,$sql);


mysqli_close($con);



?>