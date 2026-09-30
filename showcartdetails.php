

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.2.3-/css/bootstrap.min.css">
</head>
<body onload="productloader()">
    <!-- main div -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-8">
                <div class="row" id="cartdetailsshowarea">
                    
                    


                </div>
            </div>
            <div class="col-4 " >
                <div class="row mt-3 me-3" id="placeordershowarea">

                <div class="card " >
                        <div class="card-header mt-3">Summery</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="card-text mt-4 col-7">sub total </div>
                                <div class="card-text col-4 mt-4" id="subtotalcardtext"></div>
                            </div>
                            <div class="row">
                                <div class="card-text mt-2 col-7">item count </div>
                                <div class="card-text col-4 mt-2" id="itemcountcardtext"></div>
                            </div>
                            <div class="row">
                                <div class="card-text mt-2 col-7">delivary cost </div>
                                <div class="card-text col-4 mt-2" id=delivarycostcardtext></div>
                            </div>
                            <div class="row">
                                <div class="card-text mt-2 col-7">total cost </div>
                                <div class="card-text col-4 mt-2" id="totalcostcardtext"></div>

                            </div>

                           
                            
                           
                            
                            <div class="row text-center "><button type="button" class="btn btn-success mt-4 " >Place order</button>
                                
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- main div -->




    <script src="./bootstrap-5.2.3-/js/bootstrap.bundle.min.js"></script>
    <script src="./showcartdetails.js"></script>
</body>
</html>