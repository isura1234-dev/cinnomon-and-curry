
<?php

$username = $_GET['txtusername'];
$passwordreg = $_GET['txtpassword'];
$address = $_GET['txtaddress'];
$postalcode = $_GET['txtpostalcode'];
$mobile = $_GET['txtmobile'];




$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host,$hostname,$password,$database);


$sql = "INSERT INTO custermer_registation (username,password,address,postalcode,mobile)VALUES('$username','$passwordreg','$address','$postalcode','$mobile')";

$result = mysqli_query($con,$sql);

mysqli_close($con);


if ($result) {
    header("location:createcookie.php?username=$username");

}

// header("location:index.html");
?>



