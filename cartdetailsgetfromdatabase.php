<?php 
$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$user = $_COOKIE['user'];


$con = mysqli_connect($host,$hostname,$password,$database);

$sql = "SELECT * FROM cart WHERE user='$user';";
$resultset = mysqli_query($con, $sql);

$i=1;

$str = "[";
while ($row = mysqli_fetch_assoc($resultset)) {
    $str.='{';//$str = $str . '{';
    $str.='"productid":"'.$row['id'].'",';
    $str.='"productname":"'.$row['name'].'",';
    $str.='"imagefile":"'.$row['image'].'",';
    $str.='"description":"'.$row['description'].'",';
    $str.='"price":"'.$row['price'].'",';
    $str.='"quantity":"'.$row['qut'].'"';
   
    if ($resultset->num_rows !=$i) {
        $str.='},';
    }else{
        $str.='}';

    }
    $i++;
}

$str.="]";


echo $str;


mysqli_close($con);


?>