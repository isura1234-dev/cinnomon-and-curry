




<?php

$username = $_GET['txtusername'];
$password = $_GET['txtpassword'];




$host = "localhost";
$hostname = "root";
$dbpassword = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host, $hostname, $dbpassword, $database);



$sql = "SELECT username,password FROM custermer_registation";

$resultset = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($resultset)) {





    // echo $row['username'],"<br>";
    if ($row['username'] == $username && $row['password'] == $password) {
        header("location:createcookie.php?username=$username");
        echo "hi";
        return "hi";
    }
}



  header("location:errorpage.html");

// var_dump($resultset);

?>