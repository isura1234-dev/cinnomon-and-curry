<?php
$host = "localhost";
$hostname = "root";
$password = "1234";
$database = "cinnomon_and_curry_db";

$con = mysqli_connect($host, $hostname, $password, $database);


$sql = "SELECT * FROM product_detail_table;";
$resultset = mysqli_query($con, $sql);
//var_dump($resultset);
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
    <!-- container start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-end mt-4 mb-4">
                <button type="button" class="btn btn-primary" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasform">Add a new product</button>
            </div>

            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-bordered table-striped text-dark" style="width:100%">
                        <thead class="bg-dark text-light">
                            <tr>
                                <th>product no</th>

                                <th>product name</th>
                                <th>image</th>
                                <th>description</th>
                                <th>price</th>
                                <th>promotion</th>
                                <th>category type</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($resultset)) {
                                $id = $row['product_id'];
                                $productname = $row['name'];
                                $imagefile = $row['image'];
                                $description = $row['description'];
                                $price = $row['price'];
                                $promotion = $row['promotion'];
                                $category_type = $row['category_type'];

                                //var_dump($row['image']);
                                //echo($imagefile);



                                // header("content-type:image/jpg");

                                //echo "<img src='./uploads/".$imagefile."' class='images'>";
                                echo "<tr>",
                                "<td>" . $count . "</td>",
                                "<td>" . $productname . "</td>",
                                "<td>" . "<img src='./uploads/" . $imagefile . "' class='images'>" . "</td>",
                                "<td>" . $description . "</td>",
                                "<td>" . $price . "</td>",
                                "<td>" . $promotion . "</td>",
                                "<td>" . $category_type . "</td>",
                                "<td> <a href='editform.php?productid=$id' class='btn btn-primary' >edit</a> 
                                <a href='deleterow.php?productid=$id" . "'" . " class='btn btn-danger'>delete</a></td>",
                                "</tr>";
                                $count = $count + 1;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>

            <div class="offcanvas offcanvas-end w-50" id="offcanvasform">
                <div class="offcanvas-header">
                    <h3>Edit Employee</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">


                    <form action="adminpannelproceeser.php" method="post" enctype="multipart/form-data">
                        <div class="col-12 m-2">
                            <label for="" class="form-label">Product name :</label>
                            <input type="text" name="txtproductname" id="" class="form-control" required>
                        </div>

                        <div class="col-12 m-2">
                            <label for="" class="form-label">Image :</label>
                            <input type="file" name="image" id="" class="form-control" required>
                        </div>

                        <div class="col-12 m-2">
                            <label for="" class="form-label">Description :</label>
                            <textarea name="txtdescription" id="" class="form-control" required></textarea>
                        </div>

                        <div class="col-12 m-2">
                            <label for="" class="form-label">Price :</label>
                            <input type="text" name="txtprice" id="" class="form-control" required onkeyup="pricevalidator(this)" value="RS.">
                        </div>

                        <div class="col-12 m-2">
                            <label for="" class="form-label">Promotion :</label>
                            <input type="checkbox" name="checkpromotion" id="" value="true">
                        </div>
                        <div class="col-12 m-2">
                            <label for="" class="form-label">Category type :</label>
                            <select name="selectcategorynames" id="" class="form-control" required>
                                <option value="" selected disabled>Please select a category type</option>
                                <option value="sri lankan">sri lankan</option>
                                <option value="indian">indian</option>
                                <option value="chinees">chinees</option>
                                <option value="italiyan">italiyan</option>
                            </select>
                        </div>
                        <div class="col-12 m-4">
                            <button type="submit" class="btn btn-success" id="addbutton">ADD product</button>
                        </div>
                    </form>

                </div>
            </div>









            







        </div>
    </div>


    <!-- container end -->



    <script src="../bootstrap-5.2.3-/js/bootstrap.bundle.min.js"></script>
    <script src="./adminpannelvalidator.js"></script>
</body>

</html>