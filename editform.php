<?php
$id = $_GET['productid'];


$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host, $hostname, $password, $database);


$sql = "SELECT * FROM product_detail_table WHERE product_id=$id;";

$resultset = mysqli_query($con, $sql);

$row = mysqli_fetch_assoc($resultset);

$productname = $row['name'];
$imagefile = $row['image'];
$description = $row['description'];
$price = $row['price'];
$promotion = $row['promotion'];
$category_type = $row['category_type'];

 //echo $imagefile;

 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap-5.2.3-/css/bootstrap.min.css">
    <style>
        .images {
            width: 150px;
            height: 100px;
        }
    </style>
</head>

<body>


    <div>
        <form <?php echo"action='adminpanneleditproceeser.php?productid=$id'" ?> method="post" enctype="multipart/form-data">
            <div class="col-12 m-2">
                <label for="" class="form-label">Product name :</label>
                <input type="text" name="txtproductname" id="" class="form-control" required value=<?php echo "'$productname'"?>>

            </div>

            <div class="col-12 m-2">
                <label for="" class="form-label">Image :</label>
                <input type="file" name="image" id="" class="form-control" value="./uploads/c (3).jpg">
                <label for="" class="form-label">Old image</label>

                <img src="./uploads/<?php echo $imagefile ?>" alt="" class="images">
                
            </div>

            <div class="col-12 m-2">
                <label for="" class="form-label">Description :</label>
                <textarea name="txtdescription" id="" class="form-control" required><?php echo "$description"?></textarea>
            </div>

            <div class="col-12 m-2">
                <label for="" class="form-label">Price :</label>
                <input type="text" name="txtprice" id="" class="form-control" required onkeyup="pricevalidatoredit(this)" <?php echo "value=$price"?>>
            </div>

            <div class="col-12 m-2">
                <label for="" class="form-label">Promotion :</label>
                <input type="checkbox" name="checkpromotion" id=""  <?php 
                if ($promotion == "true") {
                    echo "checked=checked";
                }
                ?>>
            </div>
            <div class="col-12 m-2">
                <label for="" class="form-label">Category type :</label>
                <select name="selectcategorynames" id="" class="form-control" required>
                    <option value="" >Please select a category type</option>
                    <option value="sri lankan" <?php if ($category_type=="sri lankan") {
                        echo "selected=selected";
                    }?>>sri lankan</option>
                    <option value="indian" <?php if ($category_type=="indian") {
                        echo "selected=selected";
                    }?>>indian</option>
                    <option value="chinees" <?php if ($category_type=="chinees") {
                        echo "selected=selected";
                    }?>>chinees</option>
                    <option value="italiyan" <?php if ($category_type=="italiyan") {
                        echo "selected=selected";
                    }?>>italiyan</option>
                </select>
            </div>
            <div class="col-12 m-4">
                <button type="submit" class="btn btn-success" id="addbuttonedit">EDIT product</button>
            </div>
        </form>
    </div>

    <script src="./adminpannelvalidator.js"></script>


</body>


