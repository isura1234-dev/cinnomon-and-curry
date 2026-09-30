<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-/css/bootstrap.min.css">
    <link rel="stylesheet" href="./sri_lankan_dishes.css">
</head>
<body onload="productloader()">
    <!-- <h1>hi you are in sri lanken dishes</h1> -->
    <?php
        require_once("navigation_bar.html");
        ?>
    <div class="container-fluid">
        
        <div class="row" id="productloader">
            
        </div>
    </div>


    <script src="./fontawesome-free-6.7.2/js/all.min.js"></script>
    <script src="./bootstrap-5.2.3-/js/bootstrap.bundle.min.js"></script>
    <script src="./srilankan.js"></script>
</body>
</html>