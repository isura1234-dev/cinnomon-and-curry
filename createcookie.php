<?php
$username = $_GET['username'];

setcookie("user",$username,time()+(3600));
header("location:index.html");


?>