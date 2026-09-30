
<?php
$id=$_GET['productid'];


$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";


var_dump($_POST);



if (isset($_POST['checkpromotion'])) {
    $promotion = $_POST['checkpromotion'];

    if ($promotion == "on") {
        $promotion = "true";
    }
}else {
    $promotion = "false";
}




$productname = $_POST['txtproductname'];
$imagefile = $_FILES['image'];
$description = $_POST['txtdescription'];
$price = $_POST['txtprice'];
$categoryname = $_POST['selectcategorynames'];


$imagefile=$imagefile['name'] ;

var_dump($imagefile);

if (!($imagefile == null)) {
    $sql =  "UPDATE product_detail_table SET name='$productname',image='$imagefile',description='$description',price='$price',promotion='$promotion',category_type='$categoryname' WHERE product_id=$id;";
    
}else {
    $sql =  "UPDATE product_detail_table SET name='$productname',description='$description',price='$price',promotion='$promotion',category_type='$categoryname' WHERE product_id=$id;";
}


echo $sql;

$con = mysqli_connect($host,$hostname,$password,$database);

//$imagefile = mysqli_real_escape_string($con,$imagefile);





mysqli_query($con,$sql);

mysqli_close($con);
header("location:adminpannel.php");

?>
