<?php
$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";


  

if (isset($_POST['checkpromotion'])) {
    $promotion = $_POST['checkpromotion'];
} else {
    $promotion = "false";
}

$productname = $_POST['txtproductname'];
$imagefile = $_FILES['image'];
$description = $_POST['txtdescription'];
$price = $_POST['txtprice'];
$categoryname = $_POST['selectcategorynames'];


$con = mysqli_connect($host,$hostname,$password,$database);

//$imagefile = mysqli_real_escape_string($con,$imagefile);

$imagefile=$imagefile['name'] ;

$sql = "INSERT INTO product_detail_table (name,image,description,price,promotion,category_type) VALUES ('$productname','$imagefile','$description','$price','$promotion','$categoryname');";

mysqli_query($con,$sql);

mysqli_close($con);
header("location:adminpannel.php");

?>