<?php
$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host, $hostname, $password, $database);


$sql = "SELECT * FROM cart;";
$resultset = mysqli_query($con, $sql);
//var_dump($resultset);


$count = 1;
while ($row = mysqli_fetch_assoc($resultset)) {
    $id = $row['id'];
    $productname = $row['name'];
    $imagefile = $row['image'];
    $description = $row['description'];
    $price = $row['price'];
    $user = $row['user'];

    

    //var_dump($row['image']);
    //echo($imagefile);



    // header("content-type:image/jpg");

    //echo "<img src='./uploads/".$imagefile."' class='images'>";
    echo "$id $productname $imagefile $description $price  $user <br>";
}

?>


