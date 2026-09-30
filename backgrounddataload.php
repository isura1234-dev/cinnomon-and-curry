<?php 
$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";


$con = mysqli_connect($host,$hostname,$password,$database);

$sql = "SELECT * FROM product_detail_table;";
$resultset = mysqli_query($con, $sql);

$i=1;

$str = "[";
while ($row = mysqli_fetch_assoc($resultset)) {
    $str.='{';
    $str.='"productname":"'.$row['name'].'",';
    $str.='"imagefile":"'.$row['image'].'",';
    $str.='"description":"'.$row['description'].'",';
    $str.='"price":"'.$row['price'].'",';
    $str.='"promotion":"'.$row['promotion'].'",';
    $str.='"categorytype":"'.$row['category_type'].'"';
   
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